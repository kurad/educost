<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;
class Selectlesson extends Component
{
    public $subjects;
    public $levels;
    public $units;
    public $selectedLevel = NULL;
    public $selectedSubject = NULL;
    //public $selectedLevel = NULL;
    public $unit_id,$lesson_title, $objectives, $teaching_resource, $lesson_id;
    public $isModalOpen = 0;
    public $updateMode = false;


    public function mount(){
        $this->levels = Level::all();
        $this->subjects = collect();
        $this->units = collect();
    }
    public function render()
    {
        //return view('livewire.selectlesson')->extends('layouts.app');

        $levels = Level::all();
        $lessons = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);

        return view('admin.courses.lessons', compact('lessons','levels'))->extends('layouts.app');
    }

    public function updatedSelectedLevel($level){
        if(!is_null($level)){
            $this->subjects = Subject::where('level_id',$level)->get();
        }
    }

    public function updatedSelectedSubject($subject){
        if(!is_null($subject)){
            $this->units = Unit::where('subject_id',$subject)->get();
        }
    }
    public function addNewLesson()
    {
        return view('admin.courses.create')->extends('layouts.app');
    }
    public function openModalPopover()
    {
        $this->isModalOpen = true;

    }
    public function closeModalPopover()
    {
        $this->isModalOpen = false;
        
    }
    public function resetCreateForm(){
        $this->lesson_title ='';
        $this->objectives ='';
        $this->resource = '';

    }
    public function store(){
        $this->validate([
            'lesson_title' => 'required',
            'objectives'    => 'required',
        ]);

        Lesson::Create([
            'unit_id' => $this->unit_id,
            'lesson_title' => $this->lesson_title,
            'objectives' => $this->objectives,
            'teaching_resource' => $this->teaching_resource,
        ]);

        return redirect()->back()->with('message','Lesson created successfully.');
        //session()->flash('message','Lesson created successfully.');
        $this->closeModalPopover();
        $this->resetCreateForm();

        $this->emit('userStore');
    }

    public function edit($id)
    {
        $this->updateMode = true;
        $lesson = Lesson::where('id',$id)->first();
        $this->lesson_id = $id;
        $this->unit_id = $lesson->unit_id;
        $this->lesson_title = $lesson->lesson_title;
        $this->objectives = $lesson->objectives;
        $this->teaching_resource = $lesson->teaching_resource;
    }
    public function update()
    {
        $this->validate([
            'lesson_title' => 'required',
            'objectives'    => 'required',
        ]);
        if($this->lesson_id){
            $lesson = Lesson::find($this->lesson_id);
            $lesson->update([
                'lesson_title'=>$this->lesson_title,
                'objectives'=>$this->objectives,
                'teaching_resource'=>$this->teaching_resource,
            ]);

            return redirect()->back()->with('message','Lesson updated successfully.');
        }
    }
    public function view_lesson($id){

        $lessons = Lesson::where('id',$id)->first();

        return view('admin.courses.view_lesson', compact('lessons'))->extends('layouts.app');
    }
}
