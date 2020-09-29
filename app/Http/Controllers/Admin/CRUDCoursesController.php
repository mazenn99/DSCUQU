<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\CreateCourseRequest;
use App\Models\attendCourses;
use App\Models\Courses;
use App\UserCourses;
use http\Client\Curl\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use MongoDB\Driver\Session;
use Psy\Util\Str;

class CRUDCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('super')) {
            $courses = Courses::orderBy('id' , 'DESC')->get();
        } else {
            $courses = Courses::orderBy('id' , 'DESC')->where('admins_id' , Auth::id())->get();
        }
        return view('admins.courses.index' , compact('courses'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.courses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateCourseRequest $request)
    {
        Courses::create([
            'admins_id'      => Auth::id(),
            'speaker_id'     => $request->input('speaker') ,
            'details'        => $request->input('details') ,
            'title'          => $request->input('name') ,
            'sex'            => $request->input('sex') ,
            'slug'           => \Illuminate\Support\Str::slug($request->input('name')),
            'levels'         => $request->input('levels') ,
            'course_date'    => $request->input('date') ,
            'start_time'     => $request->input('start_time') ,
            'end_time'       => $request->input('end_time') ,
            'online'         => $request->input('type') ,
            'type_courses_id'=> $request->input('type_courses') ,
            'collage_id'     => $request->input('collage') ,
            'status'         => $request->input('published') ? 1 : 0 ,
            'certificate'    => $request->input('certificate') ? 1 : 0 ,
            'maximum_attend' => $request->input('attend'),
            'live_url'       => $request->input('live'),
        ]);
        return redirect()->to(route('courses.index'))->with(['msg' => 'Successfully Added Courses']);
    }



    public function storeImage($image , $path) {
        $imageExt = $image->getClientOriginalExtension();
        $fileName = bin2hex(random_bytes(10)) . time() . '.' . $imageExt;
        $image->move($path , $fileName);
        return $fileName;
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  Courses  $course
     * @return \Illuminate\Http\Response
     */
    public function edit(Courses $course)
    {
        return view('admins.courses.edit' , compact('course'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  Courses  $course
     * @return \Illuminate\Http\Response
     */
    public function update(CreateCourseRequest $request, Courses $course)
    {
        Courses::update([
            'speaker_id'     => $request->input('speaker') ,
            'details'        => $request->input('details') ,
            'title'          => $request->input('name') ,
            'sex'            => $request->input('sex') ,
            'levels'         => $request->input('levels'),
            'course_date'    => $request->input('date') ,
            'start_time'     => $request->input('start_time') ,
            'end_time'       => $request->input('end_time') ,
            'online'         => $request->input('type') ,
            'type_courses_id'=> $request->input('type_courses') ,
            'collage_id'     => $request->input('collage') ,
            'status'         => $request->input('published') ? 1 : 0 ,
            'certificate'    => $request->input('certificate') ? 1 : 0 ,
            'maximum_attend' => $request->input('attend'),
            'live_url'       => $request->input('live'),
            'picture'        => $request->file('image') ? $this->storeImage($request->file('image') , 'admin/images/courses') : $course->picture,
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Courses::find($id)->delete();
        return redirect()->back()->with(['msg' => 'Deleted Courses Successfully']);
    }


    /*
     * this function get all subscription of the course
     */

    public function showSubscriptionCourse($id) {
        $subscription = Courses::find($id)->usersCourses()->get();
        $attendsLink = attendCourses::where('courses_id' , $id)->first();
        if(!empty($attendsLink)) {
            return view('admins.courses.subscription' , compact('subscription' , 'id' , 'attendsLink'));
        } else {
            return view('admins.courses.subscription' , compact('subscription' , 'id'));
        }
    }

    /*
     * delete registered user in specific course
     */

    public function DeleteSpecificUser(Request $request) {
        $del = new Courses();
        $user = \App\User::find($request->input('user'));
        $user->usersCourses()->detach($request->input('course'));
        return redirect()->back()->with(['msg' => 'Successfully Deleted User']);
    }

}
