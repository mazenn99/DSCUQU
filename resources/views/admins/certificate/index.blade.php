@extends('admins.template.master')
@section('title' , 'Courses')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Latest Certificate</h3>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Course</th>
                                    <th>Name</th>
                                    <th>status</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($certificates as $certificate)
                                    <tr>
                                        <td>{{$certificate->id}}</td>
                                        <td>{{$certificate->courses->title}}</td>
                                        <td>{{$certificate->users->name}}</td>
                                        <td>
                                            <form action="{{route('certificate.destroy' , $certificate->id)}}" method="POST">
                                            @csrf
                                            @method('DELETE')
                                                <button onclick="return confirm('Are You sure')" class="btn btn-outline-danger btn-sm">Delete</button>
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
