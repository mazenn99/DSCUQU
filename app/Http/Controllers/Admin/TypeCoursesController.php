<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\AddNewTypeCourse;
use App\Models\Type_courses;
use Illuminate\Http\Request;

class TypeCoursesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $types = Type_courses::orderBy('id', 'DESC')->get();
        return view('admins.typecourses.index', compact('types'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.typecourses.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(AddNewTypeCourse $request)
    {
        Type_courses::create($request->all());
        return redirect()->to(route('type-courses.index'))->with(['msg' => 'Added Sucessfully']);
    }


    /**
     * Display the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $typeCourse = Type_courses::find($id);
        return view('admins.typecourses.edit', compact('typeCourse'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param int $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $type = Type_courses::find($id);
        $type->update([
            'name' => $request->input('name')
        ]);
        return redirect()->to(route('type-courses.index'))->with(['msg' => 'Successfully Updated']);
    }
}

