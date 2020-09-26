@extends('admins.template.master')
@section('title' , 'Users')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Admins</h3>
                        <a href="{{route('admins.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus" aria-hidden="true"></i>
                             Add new Admins</a>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Created AT</th>
                                    <th>Updated AT</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($admins as $admin)
                                    <tr>
                                    <td>{{$admin->id}}</td>
                                    <td>{{$admin->name}}</td>
                                    <td>{{$admin->email}}</td>
                                    <td>{{$admin->created_at}}</td>
                                    <td>{{$admin->updated_at}}</td>
                                        <td>
                                            <a href="{{route('admins.edit' , $admin->id)}}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <form action="{{route('admins.destroy' , $admin->id)}}" method="POST" class="d-inline-block">
                                                @csrf
                                                @method('DELETE')
                                                <button onclick="return confirm('Are You Sure !')" class="btn btn-outline-danger btn-sm">Delete</button>
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
