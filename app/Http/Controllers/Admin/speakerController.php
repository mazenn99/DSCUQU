<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewSection;
use App\Http\Requests\addNewSpeaker;
use App\Models\Speakers;
use Illuminate\Http\Request;

class speakerController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $speakers = Speakers::orderBy('id' , 'DESC')->get();
        return view('admins.speaker.index' , compact('speakers'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.speaker.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(addNewSpeaker $request)
    {
        $speaker = Speakers::create([
            'name'      => $request->input('name'),
            'overview'  => $request->input('overview'),
            'twitter'   => $request->input('twitter'),
            'snap'      => $request->input('snap'),
            'instagram' => $request->input('instagram'),
            'facebook'  => $request->input('facebook'),
            'photo'     => $request->file('image') ? $this->storeImage($request->file('image') , 'admin/images/profile') : ''
        ]);
        return redirect()->to(route('speakers.index'))->with(['msg' => 'Successfully Added speaker']);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $speaker = Speakers::find($id);
        return view('admins.speaker.edit' , compact('speaker'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(addNewSpeaker $request, $id)
    {
        $speaker = Speakers::find($id);
        $speaker->update([
            'name'      => $request->input('name'),
            'overview'  => $request->input('overview'),
            'twitter'   => $request->input('twitter'),
            'snap'      => $request->input('snap'),
            'instagram' => $request->input('instagram'),
            'facebook'  => $request->input('facebook'),
            'photo'     => $request->file('image') ? $this->storeImage($request->file('image') , 'admin/images/profile') : $speaker->photo
        ]);
        return redirect()->to(route('speakers.index'))->with(['msg' => 'Updated ' . $speaker->name . ' Successfully']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        return abort('403');
    }
}
