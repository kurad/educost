<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;
use App\Models\QA;
use DB;
class VideoController extends Controller
{

     //================= Video Lessons =================================================
    
    public function index()
     {
     $levels = DB::table("levels")->pluck("level_name","id");
     return view('admin.create_lesson_video',compact('levels'));
     }

     public function videos()
     {
     $video_lessons = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);
        return view('admin.video_lessons',compact('video_lessons'));
     }
    public function getSubjects(Request $request){
        $subjects = DB::table("subjects")
                 ->where("level_id",$request->level_id)
                 ->pluck("subject_name","id");
        return response()->json($subjects);
    }
    public function getUnits(Request $request){
        $units = DB::table("units")
                 ->where("subject_id",$request->subject_id)
                 ->pluck("unit_name","id");
        return response()->json($units);
    }
    public function getLessons(Request $request){
        $lessons = DB::table("lessons")
                 ->where("unit_id",$request->unit_id)
                 ->pluck("lesson_title","id");
        return response()->json($lessons);
    }
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
    public function create_video(Request $request){

        $request->validate([
            'unit_id'=>'required',
            'lesson_title'=>'required',
            'objectives'=>'required',
            'video_link'=>'required'
        ]);

        Lesson::create($request->all());
        return redirect()->route('videos')->with('success', 'Lesson created successfully.');
    }

    public function view_video_lesson($id){
        $view_lesson = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->where('lessons.id','=',$id)
                        ->get(['levels.*','subjects.*','units.*','lessons.*']);
        return view('admin.view_video_lessons',compact('view_lesson'));

        //dd($view_lesson);
    }

    public function questions(){
        //$all_question = QA::all();

        $all_question = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->join('q_a_s','q_a_s.lesson_id','=','lessons.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*','q_a_s.*']);
        return view('admin.questions',compact('all_question'));
    }

    public function show_create_question(){
        $levels = DB::table("levels")->pluck("level_name","id");
        return view('admin.create_question',compact('levels'));
    }

    public function create_question(Request $request){

        $request->validate([
            'lesson_id'=>'required',
            'question'=>'required'            
        ]);

        QA::create($request->all());
        return redirect()->route('all_questions')->with('success', 'Question added successfully.');
    }

    public function view_question($id){
        $view_questions = Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->join('q_a_s','q_a_s.lesson_id','=','lessons.id')
                        ->where('q_a_s.id','=',$id)
                        ->get(['levels.*','subjects.*','units.*','lessons.*','q_a_s.*']);
        return view('admin.view_question',compact('view_questions'));

        //dd($view_lesson);
    }

    public function show_create_answer($id){
        //$levels = DB::table("levels")->pluck("level_name","id");
        $questions = QA::join('lessons','lessons.id','=','q_a_s.lesson_id')
                        ->where('q_a_s.id','=',$id)->get(['q_a_s.*','lessons.*']);
        return view('admin.create_answer',compact('questions'));
    }
    public function store_answer(Request $request){
        $request->validate([
            'answer'=>'required'            
        ]);
        QA::update($request->all());
        return redirect()->route('all_questions')->with('success', 'Answers added successfully.');
    }
}
