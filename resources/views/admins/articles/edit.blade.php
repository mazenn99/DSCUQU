@extends('admins.template.master')
@section('title' , 'Edit ' .$article->title)
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="card pb-5">
                    <div class="card-header">
                        <strong>Edit {{$article->title}} </strong> Articles
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('article.update' , $article->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="section" class=" form-control-label">Section</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="section" id="section" class="form-control">
                                        @foreach(\App\Models\Section::where('id' , $article->section_id)->get() as $section)
                                            <option value="{{$section->id}}">{{$section->name}}</option>
                                        @endforeach
                                    </select>
                                    @error('name')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="section" class=" form-control-label">Title</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="title" value="{{$article->title}}" name="title" placeholder="Please enter title"
                                           class="form-control">
                                    @error('title')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="image" class="form-control-label">Image</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="file" id="image" name="image" class="form-control-file">
                                </div>
                                @error('image')
                                <small class="text-danger form-text">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="details" class=" form-control-label">Details</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="details" id="details" rows="9"
                                              placeholder="please enter details of articles" class="form-control">{{$article->content}}</textarea>
                                    @error('details')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-block py-2 btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
