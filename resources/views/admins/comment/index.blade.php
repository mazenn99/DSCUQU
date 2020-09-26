@extends('admins.template.master')
@section('title' , 'Comments')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Admins</h3>
                        <a href="{{route('comments.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus" aria-hidden="true"></i>
                            Add new Type</a>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>users</th>
                                    <th>article</th>
                                    <th>content</th>
                                    <th>added at</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($comments as $comment)
                                    <tr>
                                       <td>{{$comment->id}}</td>
                                       <td>{{$comment->users_id ? $comment->users->name : 'Anonymous'}}</td>
                                       <td>{{$comment->articles->name}}</td>
                                       <td>{{$comment->content}}</td>
                                       <td>{{$comment->created_at}}</td>
                                        <td>
                                            <form action="">

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









