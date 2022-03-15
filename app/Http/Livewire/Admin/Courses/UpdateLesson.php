<?php

namespace App\Http\Livewire\Admin\Courses;

use Livewire\Component;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;
class UpdateLesson extends Component
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
    public $lesson;

    
    public function render()
    {
        $levels = Level::all();
        $lessons = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);
        return view('livewire.admin.courses.update-lesson',compact('lessons'))->extends('layouts.app');
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

    public function edit($id)
    {      
        $lessons = Lesson::where('id','=',$id)->get();
        $this->lesson_id = $this->id;
        $this->unit_id = $this->lessons->unit_id;
        $this->lesson_title = $this->lessons->lesson_title;
        $this->objectives = $this->lessons->objectives;
        $this->teaching_resource = $this->lessons->teaching_resource;


    }

}
