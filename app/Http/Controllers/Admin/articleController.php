<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\articleCreate;
use App\Models\Articles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class articleController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(session()->get('super')) {
            $articles = Articles::orderBy('id' , 'DESC')->paginate(15);
        } else {
            $articles = Articles::orderBy('id' , 'DESC')->where('admins_id' , Auth::id())->paginate(15);
        }
        return view('admins.articles.index' , compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admins.articles.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(articleCreate $request)
    {
        $article = Articles::create([
           'section_id' => $request->input('section'),
            'admins_id' => Auth::id(),
            'title'     => $request->input('title'),
            'slug'      => \Illuminate\Support\Str::slug($request->input('title')),
            'hero-photo'=> $request->file('image') ? $this->storeImage($request->file('image') , 'admin/images/articles') : NULL,
            'content'   => $request->input('details'),
        ]);
        return redirect()->to(route('article.index'))->with(['msg' => 'Successfully Added Articles']);
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
        $article = Articles::find($id);
        return view('admins.articles.edit' , compact('article'));
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
        $article = Articles::find($id);
        $article->update([
            'section_id' => $request->input('section'),
            'title'      => $request->input('title'),
            'hero-photo' => $request->file('image') ? $this->storeImage($request->file('image') , 'admin/images/articles') : $article['hero-photo'],
            'content'    => $request->input('details'),
        ]);
        return redirect()->to(route('article.index'))->with(['msg' => 'Successfully Added Articles']);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Articles::find($id)->delete();
        return redirect()->back()->with(['msg' => "Successfully Deleted Articles"]);
    }
}
