@extends('admins.template.master')
@section('title' , 'Courses subscription')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Admins</h3>
                        <a href="{{route('courses.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus"
                                                                                                      aria-hidden="true"></i>
                            Add new Course</a>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Registered At</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($subscription as $sub)
                                    <tr>
{{--                                        <td>{{$sub->name}}</td>--}}
                                        <td>{{$sub->user->name}}</td>
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
