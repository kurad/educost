<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;
use App\Models\QA;
class AdminController extends Controller
{
    public function dashboard(){
        return view('admin.dashboard');
    }
    public function levels(){
        $levels = Level::all();
        return view('admin.levels',compact('levels'));
    }
    public function show_create_level(){
        return view('admin.create_level');
    }
    public function create_level(Request $request){

        $request->validate([
            'level_name'=>'required'
        ]);
        $newLevel = new Level();
        $newLevel->level_name = $request->level_name;
        $save = $newLevel->save();
        if($save){
            return redirect('/admin/levels')->with('success','Level added successfully');
        }
        else{
            return redirect()->back()->with('fail','Level not added');
        }
    }
//================= Subjects =================================================
    public function subjects(){
        $subjects = Subject::join('levels','levels.id','=','subjects.level_id')->get();
        return view('admin.subjects',compact('subjects'));
    }
    public function show_create_subject(){
        $levels = Level::all();
        return view('admin.create_subject',compact('levels'));
    }
    public function create_subject(Request $request){

        $request->validate([
            'subject_name'=>'required'
        ]);

        $newSub = new Subject();

        $newSub->level_id = $request->level_id;
        $newSub->subject_name = $request->subject_name;

        $save = $newSub->save();
        if($save){
            return redirect('/admin/subjects')->with('success','Subject added successfully');
        }
        else{
            return redirect()->back()->with('fail','Subject not added');
        }

    }

    //================= Units =================================================

    public function units(){
        $units = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->get(['levels.*','subjects.*','units.*']);
        return view('admin.units',compact('units'));
    }
    public function show_create_unit(){
        $subjects = Subject::all();
        return view('admin.create_unit',compact('subjects'));
    }
    public function create_unit(Request $request){

        $request->validate([
            'subject_id'=>'required',
            'unit_name'=>'required',
            'key_unit_competence'=>'required'
        ]);

        Unit::create($request->all());
        return redirect()->route('units')->with('success', 'Unit created successfully.');
    }


    //================= Lessons =================================================

    public function lessons(){
        $lessons = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);
        return view('admin.lessons',compact('lessons'));
    }
    public function show_create_lesson(){
        $units = Unit::all();
        return view('admin.create_lesson',compact('units'));
    }
    public function create_lesson(Request $request){

        $request->validate([
            'unit_id'=>'required',
            'lesson_title'=>'required',
            'objectives'=>'required',
            'teaching_resource'=>'required'
        ]);

        Lesson::create($request->all());
        return redirect()->route('lessons')->with('success', 'Lesson created successfully.');
    }

    
}
