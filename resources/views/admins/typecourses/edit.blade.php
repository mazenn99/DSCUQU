@extends('admins.template.master')
@section('title' , 'Add new Type Courses')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="card pb-5">
                    <div class="card-header">
                        <strong>Add new </strong> Type Course
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('type-courses.update' , $typeCourse->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name" class=" form-control-label">Type Courses</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" name="name" placeholder="Please Enter Type Name"
                                           class="form-control" value="{{$typeCourse->name}}">
                                    @error('name')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <button class="btn btn-block py-2 btn-outline-primary">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
