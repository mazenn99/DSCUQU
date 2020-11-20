<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Http\Requests\UpdateUserInformation;
use App\Models\Certificate;
use App\Models\Courses;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Intervention\Image\Facades\Image;
use ArUtil\I18N\Arabic;


class HomeController extends Controller
{
    private static $NAME_SIZE_CERTIFICATE = 50;
    private static $TITLE_SIZE_CERTIFICATE = 33;
    private static $DATE_SIZE_CERTIFICATE = 28;
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('users.index');
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
        //
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

    public function dashboard() {
        return view('users.dashboard');
    }

    public function editPage() {
        return view('users.edit');
    }

    public function updateUserInformation(Request $request) {
        $request->validate([
            'username' => 'required|string|max:50',
            'email'    => 'required|email|max:80|unique:users,email,' . Auth::id(),
            'sex'      => 'required|numeric|between:0,1',
            'password' => 'nullable|max:200'
        ]);
        $user = User::find(Auth::id());
        $user->update([
            'name'     => $request->input('username'),
            'email'    => $request->input('email'),
            'password' => $request->input('password') ? Hash::make($request->input('password')) : $user->password,
            'sex'      => $request->input('sex'),
        ]);
        return redirect()->back();
    }

    public function sendContactUsMessage(Request $request) {

        $request->validate([
            'email' => 'required|email|max:80',
            'message' => 'required|max:500'
        ]);
         Mail::raw($request->input('message'), function ($message) use ($request) {
                 $message->from($request->input('email'));
                 $message->sender($request->input('email'));
                 $message->to(config('app.info-mail'));
                 $message->subject('contact us message');
                 $message->priority(3);
             });
         return redirect()->back()->with(['success' => 'تم ارسال رسالتك بنجاح']);
    }


    /*
     * this to create and download certificate
     */

    public function certificate(Request $request) {
        if(!(Certificate::where(['courses_id' => $request->input('courseID') , 'users_id' => Auth::id()])->exists())) {
           return abort('404');  
        }
        $Arabic = new Arabic('Glyphs');
        $course = Courses::select('title' , 'course_date')->where('id' , $request->input('courseID'))->first();
        $img = Image::make('site/images/certificate/certificate_attend.jpg');
        $img->text($Arabic->utf8Glyphs(Auth::user()->name) , 550 , 330 , function($font) {
            $font->file('site/fonts/stc_Light.ttf');
            $font->size($this::$NAME_SIZE_CERTIFICATE);
            $font->align('center');
            $font->valign('top');
        });
        $img->text($Arabic->utf8Glyphs($course->title) , 550 , 480 , function($font) {
            $font->file('site/fonts/stc_Light.ttf');
            $font->size($this::$TITLE_SIZE_CERTIFICATE);
            $font->color('#00000');
            $font->align('center');
            $font->valign('top');
        });
        $img->text($course->course_date , 400 , 591 , function($font) {
            $font->file('site/fonts/stc_Light.ttf');
            $font->size($this::$DATE_SIZE_CERTIFICATE);
            $font->align('left');
            $font->valign('top');
        });
        return $img->response('jpg');

    }

}

