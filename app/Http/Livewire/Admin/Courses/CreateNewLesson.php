<?php

namespace App\Http\Livewire\Admin\Courses;

use Livewire\Component;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;

class CreateNewLesson extends Component
{
    public $state=[];
    public $subjects;
    public $levels;
    public $units;
    public $selectedLevel = NULL;
    public $selectedSubject = NULL;
    public $unit_id;
    public $lesson_title;
    public $objectives;
    public $teaching_resource;
    

    public function mount(){
        $this->levels = Level::all();
        $this->subjects = collect();
        $this->units = collect();
    }
    public function render()
    {
        $levels = Level::all();
        $lessons = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);
        return view('livewire.admin.courses.create-new-lesson',compact('lessons','levels'))->extends('layouts.app');
    }

    public function updatedSelectedLevel($level){
        
        $this->subjects = Subject::where('level_id',$level)->get();
        $this->selectedSubject = NULL;
        
    }

    public function updatedSelectedSubject($subject){
        if(!is_null($subject)){
            $this->units = Unit::where('subject_id',$subject)->get();
        }
    }

    public function createLesson()
    {
        $validatedData = $this->validate([
            'unit_id' => 'required ',
            'lesson_title' => 'required',
            'objectives' => 'required',
            'teaching_resource' => 'required',
        ]);

        Lesson::create($validatedData);
        session()->flash('message','Lesson created successfully');
        return redirect()->to('/admin/lesson');

        //dd($this->state);
    }

    public function edit($id)
    {
        //$this->updateMode = true;
        $lesson = Lesson::where('id',$id)->first();
        $this->lesson_id = $id;
        $this->unit_id = $lesson->unit_id;
        $this->lesson_title = $lesson->lesson_title;
        $this->objectives = $lesson->objectives;
        $this->teaching_resource = $lesson->teaching_resource;
    }
}
