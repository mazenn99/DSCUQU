@extends('admins.template.master')
@section('title' , 'Add new Course')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="card">
                    <div class="card-header">
                        <strong>Add new </strong> Course
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('courses.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name" class=" form-control-label">Course name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" name="name" placeholder="Please Enter Course Name"
                                           class="form-control" value="{{old('name')}}">
                                    <small class="form-text text-muted">Example : introduction of python</small>
                                    @error('name')
                                        <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="text-input" class=" form-control-label">Speakers</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="speaker" id="select" class="form-control">
                                        <option value="0">Please Select Speaker</option>
                                        @foreach(\App\Models\Speakers::orderBy('id' , 'ASC')->get() as $speakers)
                                            <option value="{{$speakers->id}}">{{$speakers->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">if Speakers not here please added from there <a
                                            href="#" target="_blank">Add new speaker</a></small>
                                    @error('speaker')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="details" class=" form-control-label">Details</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="details" id="details" rows="9"
                                              placeholder="please enter details of course" class="form-control">{{old('details')}}</textarea>
                                    @error('details')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Sex</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="male" class="form-check-label ">
                                                <input type="radio" id="male" name="sex" value="1"
                                                       class="form-check-input">Male
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="female" class="form-check-label ">
                                                <input type="radio" id="female" name="sex" value="2"
                                                       class="form-check-input">Female
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="both" class="form-check-label ">
                                                <input type="radio" id="both" name="sex" value="3"
                                                       class="form-check-input">Both
                                            </label>
                                        </div>
                                        @error('sex')
                                        <small class="text-danger form-text">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Levels</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="Beginner" class="form-check-label ">
                                                <input type="radio" id="Beginner" name="levels" value="1"
                                                       class="form-check-input">Beginner
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="intermediate" class="form-check-label ">
                                                <input type="radio" id="intermediate" name="levels" value="2"
                                                       class="form-check-input">Intermediate
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="advanced" class="form-check-label ">
                                                <input type="radio" id="advanced" name="levels" value="3"
                                                       class="form-check-input">Advanced
                                            </label>
                                        </div>
                                        @error('levels')
                                        <small class="text-danger form-text">{{$message}}</small>
                                        @enderror
                                    </div>

                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="date" class=" form-control-label">Course Date</label>
                                </div>
                                <input type="date" id="date" name="date" class="form-control">
                                @error('date')
                                <small class="text-danger form-text">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="start_time" class=" form-control-label">Course start time</label>
                                </div>
                                <input type="time" id="start_time" name="start_time" class="form-control">
                                @error('start_time')
                                <small class="text-danger form-text">{{$message}}</small>
                                @enderror
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="end_time" class=" form-control-label">Course end time</label>
                                </div>
                                <input type="time" id="end_time" name="end_time" class="form-control">
                                @error('end_time')
                                <small class="text-danger form-text">{{$message}}</small>
                                @enderror
                            </div>
                            <hr>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Type Course</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="radio">
                                            <label for="online" class="form-check-label ">
                                                <input type="radio" id="online" name="type" value="1"
                                                       class="form-check-input">Online
                                            </label>
                                        </div>
                                        <div class="radio">
                                            <label for="offline" class="form-check-label ">
                                                <input type="radio" id="offline" name="type" value="0"
                                                       class="form-check-input">Offline
                                            </label>
                                        </div>
                                        @error('type')
                                        <small class="text-danger form-text">{{$message}}</small>
                                        @enderror
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="type_courses" class=" form-control-label">Type Courses</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="type_courses" id="type_courses" class="form-control">
                                        @foreach(\App\Models\Type_courses::orderBy('id' , 'ASC')->get() as $typeCourses)
                                            <option value="{{$typeCourses->id}}">{{$typeCourses->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">If you don't find type courses please added from there<a
                                            href="#" target="_blank">Add new Type Courses</a></small>
                                    @error('type_courses')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="collage" class="form-control-label">Collage</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <select name="collage" id="collage" class="form-control">
                                        @foreach(\App\Models\Collages::orderBy('id' , 'ASC')->get() as $collage)
                                            <option value="{{$collage->id}}">{{$collage->name}}</option>
                                        @endforeach
                                    </select>
                                    <small class="form-text text-muted">If you don't find collage please added from there<a
                                            href="#" target="_blank">Add new collage</a></small>
                                    @error('collage')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Status Publish or not</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="published" class="form-check-label ">
                                                <input type="checkbox" id="published" name="published" value="1" class="form-check-input">Published
                                            </label>
                                            @error('published')
                                            <small class="text-danger form-text">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label class=" form-control-label">Certificate</label>
                                </div>
                                <div class="col col-md-9">
                                    <div class="form-check">
                                        <div class="checkbox">
                                            <label for="certificate" class="form-check-label ">
                                                <input type="checkbox" id="certificate" name="certificate" value="1" class="form-check-input">Support
                                            </label>
                                            @error('certificate')
                                            <small class="text-danger form-text">{{$message}}</small>
                                            @enderror
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="attend" class=" form-control-label">Maximum Attend</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="number" value="{{old('attend')}}" id="attend" name="attend" placeholder="enter number of maximum attend"
                                           class="form-control">
                                    @error('attend')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="live+" class=" form-control-label">Live URL</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="live" value="{{old('live')}}" name="live" placeholder="Please enter link of course ZOOM , Hangout , OR Youtube OR any link"
                                           class="form-control">
                                    @error('live')
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
