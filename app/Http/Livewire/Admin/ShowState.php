<?php

namespace App\Http\Livewire\Admin;

use App\Models\City;
use App\Models\State;
use Livewire\Component;

class ShowState extends Component
{
    protected $listeners = ['delete'];

    public $state, $cities, $city;

    public $createForm = [
        'name' => '',
        'cost' => null
    ];

    public $editForm = [
        'open' => false,
        'name' => '',
        'cost' => null
    ];

    protected $validationAttributes = [
        'createForm.name' => 'name',
        'createForm.cost' => 'cost'
    ];

    public function mount(State $state) {
        $this->state = $state;

        $this->getCities();
    }

    public function getCities() {
        $this->cities = City::where('state_id', $this->state->id)->get();
    }

    public function save() {

        $this->validate([
            'createForm.name' => 'required',
            'createForm.cost' => 'required|numeric|min:1|max:500'
        ]);

        
        $this->state->cities()->create($this->createForm);

        $this->reset('createForm');

        $this->getCities();

        $this->emit('saved');
    }

    public function edit(City $city) {
        $this->city = $city;

        $this->editForm['open'] = true;

        $this->editForm['name'] = $city->name;

        $this->editForm['cost'] = $city->cost;
    }

    public function update() {
        $this->city->name = $this->editForm['name'];

        $this->city->cost = $this->editForm['cost'];

        $this->city->save();

        $this->reset('editForm');

        $this->getCities();
    }

    public function delete(City $city) {
        $city->delete();
        $this->getCities();
    }

    public function render()
    {
        return view('livewire.admin.show-state')->layout('layouts.admin');
    }
}
