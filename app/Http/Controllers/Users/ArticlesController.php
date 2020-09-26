<?php

namespace App\Http\Controllers\Users;

use App\Http\Controllers\Controller;
use App\Models\Articles;
use App\Models\Comments;
use App\Models\Section;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use phpDocumentor\Reflection\Types\Nullable;
use PhpParser\Builder;

class ArticlesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $articles = Articles::orderBy('id' , 'DESC')->paginate(8);
        return view('users.articles' , compact('articles'));
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
     * @param  Articles  $slug
     * @return \Illuminate\Http\Response
     */
    public function show($slug)
    {
        $article =  Articles::where('slug' , $slug)->first();
        $article->increment('visitor');
        return view('users.post' , compact('article'));
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




    /*
     * this function will save new comment
     * from articles
     */

    public function saveComment(Request $request) {
        $id = NULL;
        if(Auth::user()) {
            $id = Auth::user()->id;
        }
        Comments::create([
            'users_id'   => $id,
            'article_id' => $request->input('article_id'),
            'content'    => $request->input('comment'),
            'created_at' => now(),
        ]);
        return 200;
    }
}
