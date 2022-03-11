<?php

namespace App\Http\Livewire\Admin\Settings;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Level;

class Levels extends Component
{
    public $state = [];

    public function createLevel(){
        $validatedData = Validator::make($this->state,[
            'level_name' => 'required  |unique:levels'
        ])->validate();

        Level::create($validatedData);

        session()->flash('message','Level Added successfully');
        $this->dispatchBrowserEvent('hide-form');
        return redirect()->back();
    }
    public function addNewLevel()
    {
        
        $this->dispatchBrowserEvent('show-form');
    }
    public function render()
    {
        $levels = Level::all();
        return view('livewire.admin.settings.levels',compact('levels'))->extends('layouts.app');
    }
}
