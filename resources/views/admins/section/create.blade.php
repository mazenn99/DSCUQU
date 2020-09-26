@extends('admins.template.master')
@section('title' , 'Add new Title')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="card pb-5">
                    <div class="card-header">
                        <strong>Create new </strong> Articles
                    </div>
                    <div class="card-body card-block">
                        <form action="{{route('section.store')}}" method="POST" enctype="multipart/form-data" class="form-horizontal">
                            @csrf
                            <div class="row form-group">
                                <div class="col col-md-3">
                                    <label for="name" class=" form-control-label">Section name</label>
                                </div>
                                <div class="col-12 col-md-9">
                                    <input type="text" id="name" value="{{old('name')}}" name="name" placeholder="Please enter section name"
                                           class="form-control">
                                    @error('name')
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
