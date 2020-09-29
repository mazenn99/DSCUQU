@extends('admins.template.master')
@section('title' , 'edit speaker ' . $speaker->name)
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="card pb-5">
                    <div class="card-header">
                        <strong>Create new </strong> Speakers
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('speakers.update' , $speaker->id)}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            @method('PUT')
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name" class=" form-control-label">Name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" value="{{$speaker->name}}" name="name" placeholder="Please enter name"
                                           class="form-control">
                                    @error('name')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="overview" class=" form-control-label">overview</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <textarea name="overview" id="overview" rows="9"
                                              placeholder="please enter overview" class="form-control">{{$speaker->overview}}</textarea>
                                    @error('overview')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="twitter" class=" form-control-label">twitter account</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="twitter" value="{{$speaker->twitter}}" name="twitter" placeholder="Please enter twitter account"
                                           class="form-control">
                                    @error('twitter')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="snap" class=" form-control-label">snap account</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="snap" value="{{$speaker->snap}}" name="snap" placeholder="Please enter snap account"
                                           class="form-control">
                                    @error('snap')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="snap" class=" form-control-label">Instagram account</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="instagram" value="{{$speaker->instagram}}" name="instagram" placeholder="Please enter instagram account"
                                           class="form-control">
                                    @error('instagram')
                                    <small class="text-danger form-text">{{$message}}</small>
                                    @enderror
                                </div>
                            </div>
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="facebook" class=" form-control-label">facebook account</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="url" id="facebook" value="{{$speaker->facebook}}" name="facebook" placeholder="Please enter facebook account"
                                           class="form-control">
                                    @error('facebook')
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
                            <button class="btn btn-block py-2 btn-outline-primary">Save</button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
    </div>
@endsection
