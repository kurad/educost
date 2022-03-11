<?php

namespace App\Http\Livewire\Admin\Settings;

use Illuminate\Support\Facades\Validator;
use Livewire\Component;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;

class SubjectLivewire extends Component
{
    public $state = [];
    public function addNewSubject()
    {
        $this->dispatchBrowserEvent('show-form');
    }

    public function createSubject(){
        $validatedData = Validator::make($this->state,[
            'level_id' => 'required ',
            'subject_name' => 'required',
        ])->validate();

        Subject::create($validatedData);

        session()->flash('message','Subject Added successfully');
        $this->dispatchBrowserEvent('hide-form');
        return redirect()->back();
    }
    public function render()
    {
        $levels = Level::all();
        $subjects = Subject::join('levels','levels.id','=','subjects.level_id')->get();
        return view('livewire.admin.settings.subject-livewire', compact('subjects','levels'))->extends('layouts.app');
    }
}
