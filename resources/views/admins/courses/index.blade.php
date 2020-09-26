@extends('admins.template.master')
@section('title' , 'Courses')
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
                                    <th>ID</th>
                                    {{-- Just For super admin --}}
                                    <th>Added By</th>
                                    {{-- Just For super admin --}}
                                    <th>All Register</th>
                                    <th>Title</th>
                                    <th>Sex</th>
                                    <th>course date</th>
                                    <th>start time | end time</th>
                                    <th>online</th>
                                    <th>type courses</th>
                                    <th>collage</th>
                                    <th>status</th>
                                    <th>maximum attend</th>
                                    <th>Added At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($courses as $course)
                                    <tr>
                                        <td>{{$course->id}}</td>
                                        <td>{{$course->admins->name}}</td>
                                        <td>{{$course->usersCourses()->where('courses_id' , $course->id)->count()}}</td>
                                        <td>
                                            <a href="{{route('subscription-course' , $course->id)}}" target="_blank">
                                                {{$course->title}}
                                            </a>
                                        </td>
                                        <td>{!! $course->getSex() !!}</td>
                                        <td>{!! $course->courseDate() !!}</td>
                                        <td>{{$course->start_time}} | {{$course->end_time}}</td>
                                        <td>{!! $course->getOnline() !!}</td>
                                        <td>{{$course->typeCourses->name}}</td>
                                        <td>{{$course->collage->name}}</td>
                                        <td>{!! $course->getStatus() !!}</td>
                                        <td>{{$course->maximum_attend}}</td>
                                        <td>{{$course->created_at}}</td>
                                        <td>
                                            <a href="{{route('courses.edit' , $course->id)}}"
                                               class="btn btn-sm btn-outline-primary">
                                                Edit
                                            </a>
                                            <form action="{{route('courses.destroy' , $course->id)}}" method="POST"
                                                  class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are You Sure')"
                                                        class="btn btn-sm btn-outline-danger">Delete
                                                </button>
                                            </form>
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
