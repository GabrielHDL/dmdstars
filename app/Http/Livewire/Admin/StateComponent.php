<?php

namespace App\Http\Livewire\Admin;

use App\Models\State;
use Livewire\Component;

class StateComponent extends Component
{
    public $states, $state;

    protected $listeners = ['delete'];

    public $createForm = [
        'name' => ''
    ];

    public $editForm = [
        'open' => false,
        'name' => ''
    ];

    protected $validationAttributes = [
        'createForm.name' => 'nombre'
    ];

    public function mount() {
        $this->getStates();
    }

    public function getStates() {
        $this->states = State::all();
    }

    public function save() {

        $this->validate([
            'createForm.name' => 'required'
        ]);

        State::create($this->createForm);

        $this->reset('createForm');

        $this->getStates();

        $this->emit('saved');
    }

    public function edit(State $state) {
        $this->state = $state;

        $this->editForm['open'] = true;

        $this->editForm['name'] = $state->name;
    }

    public function update() {
        $this->state->name = $this->editForm['name'];

        $this->state->save();

        $this->reset('editForm');

        $this->getStates();
    }

    public function delete(State $state) {
        $state->delete();
        $this->getStates();
    }

    public function render()
    {
        return view('livewire.admin.state-component')->layout('layouts.admin');
    }
}
