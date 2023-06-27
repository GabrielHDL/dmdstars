<?php

namespace App\Http\Livewire;

use Livewire\Component;

class ContactBadge extends Component
{   
    public $updateStatus;

    public $contact;

    public $partner;

    protected $listeners = 'updateStatus';
    public function mount() {
        $contact = $this->contact;

        if ($contact->isActive == true && $contact->confirm == 'confirmed' ) {
            $this->partner = 'Partner';
        } elseif ($contact->isActive == false) {
            $this->partner = 'Pending';
        } elseif ($contact->isActive == true && $contact->confirm == 'rejected') {
            $this->partner = 'Rejected';
        } elseif ($contact->isActive == true && $contact->confirm == 'notyet') {
            $this->partner = 'Prospect';
        }
        
    }

    public function updateStatus() {
        $contact = $this->contact;

        if ($contact->isActive == true && $contact->confirm == 'confirmed' ) {
            $this->partner = 'Partner';
        } elseif ($contact->isActive == false) {
            $this->partner = 'Pending';
        } elseif ($contact->isActive == true && $contact->confirm == 'rejected') {
            $this->partner = 'Rejected';
        } elseif ($contact->isActive == true && $contact->confirm == 'notyet') {
            $this->partner = 'Prospect';
        }
    }

    public function render()
    {    
        return view('livewire.contact-badge');
    }
}
