<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\StoreAdminRequest;
use App\Models\Admins;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class CRUDAdminsController extends Controller
{
    public function __construct() {
        $this->middleware('isSuper');
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $admins = Admins::orderBy('id' , 'DESC')->where('is_super' , 0)->paginate(15);
        return view('admins.users.index' , compact('admins'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.users.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAdminRequest  $request
     *
     */
    public function store(StoreAdminRequest $request)
    {
        Admins::create([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => Hash::make($request->input('password')),
        ]);
        return redirect()->back()->with(['msg' => 'Successfully Added New Admin']);
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
    public function edit(Admins $admin)
    {
        return view('admins.users.edit' , compact('admin'));
    }

    /**
     * this update admin account
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request,  $id)
    {
        $request->validate([
            'name'  => 'required|string',
            'email' => 'required|email',
            'password' => 'confirmed'
        ]);
        $admin = Admins::findOrFail($id);
        $admin->update([
            'name'      => $request->input('name'),
            'email'     => $request->input('email'),
            'password'  => $request->input('password') ? $request->input('password') : $admin->password,
        ]);
        return redirect()->back()->with(['msg' => 'Successfully Updated ' . $admin->name . ' account']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Admins::find($id)->delete();
        return redirect()->back()->with(['msg' => 'Deleted Account Successfully']);
    }
}
