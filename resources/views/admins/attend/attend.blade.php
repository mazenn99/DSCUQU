@extends('admins.template.master')
@section('title' , 'Course Attend')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Attends</h3>
{{--                                                <a href="{{route('comments.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus" aria-hidden="true"></i>--}}
{{--                                                    Add new Type</a>--}}
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>name</th>
                                    <th>email</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($coursePeople as $people)
                                    <tr>
                                        <td>{{$people->id}}</td>
                                        <td>{{$people->name}}</td>
                                        <td>{{$people->email}}</td>
                                        <td>
                                            @if(\App\Models\Certificate::where('users_id' , $people->id)->first())
                                                {!! 'Yes' !!}
                                            @endif
                                        </td>
                                        <td>
                                            @if(!(\App\Models\Certificate::where('users_id' , $people->id)->first()))
                                                <form action="{{route('confirm-attend')}}" method="POST"
                                                      class="d-inline-block">
                                                    @csrf
                                                    <input type="hidden" value="{{$people->pivot->courses_id}}"
                                                           name="courseID">
                                                    <input type="hidden" value="{{$people->pivot->users_id}}"
                                                           name="userID">
                                                    <button class="btn btn-sm btn-outline-info">
                                                        اصدار الشهادة
                                                    </button>
                                                </form>
                                            @endif
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









