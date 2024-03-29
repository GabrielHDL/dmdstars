<?php

namespace App\Console;

use App\Mail\TimeOutOrderMailable;
use App\Models\Order;
use App\Models\User;
use Illuminate\Console\Scheduling\Schedule;
use Illuminate\Foundation\Console\Kernel as ConsoleKernel;
use Illuminate\Support\Facades\Mail;

class Kernel extends ConsoleKernel
{
    /**
     * Define the application's command schedule.
     */
    protected function schedule(Schedule $schedule): void
    {
        $schedule->call(function () {

            $hour = now()->subMinute(10);

            $orders = Order::where('status', 1)->whereTime('created_at', '<=', $hour)->get();

            foreach ($orders as $order) {

                $items = json_decode($order->content);

                foreach ($items as $item) {
                    increase($item);
                }

                $order->status = 5;

                $order->save();

                $user = User::find($order->user_id);
                Mail::to($user->email)->send(new TimeOutOrderMailable($order));
            }

        })->everyMinute();
    }

    /**
     * Register the commands for the application.
     */
    protected function commands(): void
    {
        $this->load(__DIR__.'/Commands');

        require base_path('routes/console.php');
    }
}
