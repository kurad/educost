<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

use DB;
class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $our_teachers = DB:: table("users")
                        ->where("role_id","=",1)
                        ->get();
        return view('Varsity.index');
        //dd($our_teachers);
    }

    public function logout(Request $request) {
        Session::flush();
        
        Auth::logout();

        return redirect('/');
      }
    public function profile(){
        return view('profile');
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
}
