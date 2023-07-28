<?php

namespace Database\Seeders;

use App\Models\Partner;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PartnerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Partner::create([
            'name' => 'Roque Vidrio',
            'email' => 'Roque Vidrio',
            'phone' => '3107136068',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Juan Chavez',
            'email' => 'Juan.chavez2557@gmail.com',
            'phone' => '3105294714',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Blanca Parra',
            'email' => 'blanca.parra3@icloud.com',
            'phone' => '5625686486',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Ski Riva Bradley',
            'email' => 'Rivabradley1@gmail.com',
            'phone' => '5627136999',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'paty',
            'email' => 'patytosangtz@live.com',
            'phone' => '3105024156',
            'isActive' => 1,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Denise Cazares',
            'email' => 'denise_caz@hotmail.com',
            'phone' => '3109104679',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Lucia',
            'email' => 'julian072492@gmail.com',
            'phone' => '3107108284',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Shannon Nasser',
            'email' => 'miamihello96@gmail.com',
            'phone' => '13139693577',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);

        Partner::create([
            'name' => 'Morgan Nagler',
            'email' => 'Morganmeyn@gmail.com',
            'phone' => '3104907002',
            'isActive' => 0,
            'confirm' => 'notyet'
        ]);
    }
}
