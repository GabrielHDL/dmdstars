<?php

namespace App\Http\Livewire;

use App\Mail\AnswerMailable;
use App\Mail\PartnerMailable;
use App\Models\Partner as ModelsPartner;
use Illuminate\Support\Facades\Mail;
use Livewire\Component;

class Partner extends Component
{

    public $name;

    public $email;

    public $phone;

    public $successMessage;

    public $errorMessage;

    protected $rules = [
        'name' => 'required',
        'email' => 'required|email',
        'phone' => 'required|numeric|min:10',
    ];

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function render()
    {
        return view('livewire.partner');
    }

    public function submitForm() {
        $this->validate();

        $partner['name'] = $this->name;
        $partner['email'] = $this->email;
        $partner['phone'] = $this->phone;

        $mail = new PartnerMailable($partner);

        $mail2 = new AnswerMailable($partner);

        $item = new ModelsPartner($partner);

        if (ModelsPartner::where('email', '=', $partner['email'])->exists()) {
            $this->errorMessage = 'Already support DMD Stars';
        } else {

            $item->save();
            
            $this->successMessage = 'Thank you for your interest, we will write to you soon.';

            Mail::to('r-alondra@hotmail.com')->send($mail);
        
            Mail::to($partner['email'])->send($mail2);

            $this->resetForm();
        }
    }

    private function resetForm() {
        $this->name = '';
        $this->email = '';
        $this->phone = '';
    }
}
