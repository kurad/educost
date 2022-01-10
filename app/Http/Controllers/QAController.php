<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Level;
use App\Models\Subject;
use App\Models\Unit;
use App\Models\Lesson;
use App\Models\QA;
class QAController extends Controller
{
    public function questions(){
        $all_question = QA::all();

        Level::join('subjects','levels.id','=','subjects.level_id')
                        ->join('units','units.subject_id','=','subjects.id')
                        ->join('lessons','lessons.unit_id','=','units.id')
                        ->join('q_a_s','q_a_s.lesson_id','=','lessons.id')
                        ->get(['levels.*','subjects.*','units.*','lessons.*','q_a_s.*']);
        return view('admin.questions',compact('all_question'));
    }

    public function show_create_question(){

        return view('admin.create_question');
    }
}
