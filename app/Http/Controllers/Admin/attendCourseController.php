<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\attendCourses;
use App\Models\Certificate;
use App\Models\Courses;
use App\User;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class attendCourseController extends Controller
{
    public function attendsCourse(Request $request) {
        $course = Courses::select('id')->find($request->input('courseID'));
        $att = attendCourses::where('courses_id' , $request->input('courseID'))->get();
        if($att->isEmpty()) {
            $hash = bin2hex(random_bytes(25));
            attendCourses::create([
                'courses_id' => $request->input('courseID'),
                'hash'       => $hash,
                'created_at' => NOW(),
            ]);
            return 200;
        } else {
            return 400;
        }
    }

    public function showTablesAttendCourses($hash) {
        $coursesAttend = attendCourses::where('hash' , $hash)->first();
        $coursePeople = Courses::find($coursesAttend->courses_id)->usersCourses()->select('id' , 'name' , 'email')->get();
        return view('admins.attend.attend' , compact('coursePeople'));
    }

    public function confirmAttend(Request $request) {
        $request->validate([
            'courseID' => 'required|integer',
            'userID'   => 'required|integer',
        ]);
        Certificate::create([
            'courses_id' => $request->input('courseID'),
            'users_id'   => $request->input('userID'),
            'created_at' => NOW(),
        ]);
        $user = User::select('email' , 'name')->find($request->input('userID'));
        Mail::to($user->email)->send(new \App\Mail\Certificate($user->name));
        return redirect()->back()->with(['msg' => 'Successfully Created Certificate']);
    }
}
