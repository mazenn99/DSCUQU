@extends('admins.template.master')
@section('title' , 'Type Courses')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Admins</h3>
                        <a href="{{route('type-courses.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus" aria-hidden="true"></i>
                            Add new Type</a>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($types as $type)
                                    <tr>
                                        <td>{{$type->id}}</td>
                                        <td>{{$type->name}}</td>
                                        <td>
                                            <a href="{{route('type-courses.edit' , $type->id)}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>
@endsection









