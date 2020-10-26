<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Mail\CourseConfirmation;
use App\Mail\CourseConfirmationLink;
use App\Mail\SendCourseLink;
use App\Models\Courses;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class CoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $courses = Courses::where('status' , 1)->paginate(5);
        return view('users.courses' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        return 'hi';
    }

    /**
     * Display the specified resource.
     *
     * @param  Courses $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $course = Courses::where('slug' , $slug)->first();
        if($course) {
            return view('users.CourseDetails' ,compact('course'));
        } else {
            return abort('404');
        }
    }

    public function registerAction(Request $request) {
        $course = Courses::select('id' , 'live_url' , 'title')->find($request->input('CourseID'));
        if(!($course->usersCourses()->where(['users_id' => Auth::id() , 'courses_id' => $course->id])->exists())) {
            $course->usersCourses()->attach(Auth::id());
            Mail::to(Auth::user()->email)->send(new CourseConfirmationLink(Auth::user()->name , $course->title , $course->live_url));
            return 200;
        }
        return 201;
    }


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
