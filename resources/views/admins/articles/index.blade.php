@extends('admins.template.master')
@section('title' , 'Articles')
@section('content')
    <div class="page-content--bgf7">
        <!-- DATA TABLE-->
        <section class="p-t-20">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                        <h3 class="title-5 m-b-35">All Admins</h3>
                        <a href="{{route('article.create')}}" class="btn btn-outline-primary mb-2"><i class="fa fa-plus"
                                                                                                      aria-hidden="true"></i>
                            Add new Articles</a>
                        @include('admins._partial.success')
                        <div class="table-responsive table--no-card m-b-30">
                            <table class="table table-borderless table-striped table-earning">
                                <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Section</th>
                                    <th>Visitor</th>
                                    {{--who added show super--}}
                                    {{-- <th>admin</th> --}}
                                    {{--who added show super--}}
                                    <th>title</th>
                                    <th>Created At</th>
                                    <th>Updated At</th>
                                    <th>Action</th>
                                </tr>
                                </thead>
                                <tbody>
                                @foreach($articles as $article)
                                    <tr>
                                        <td>{{$article->id}}</td>
                                        <td>{{$article->section->name}}</td>
                                        <td>{{$article->visitor}}</td>
                                        <td>{{$article->title}}</td>
                                        <td>{{$article->created_at}}</td>
                                        <td>{{$article->updated_at}}</td>
                                        <td>
                                            <a href="{{route('articles.show' , $article->slug)}}" class="btn btn-sm btn-outline-info" target="_blank">
                                                Preview
                                            </a>
                                            <a href="{{route('article.edit' , $article->id)}}"
                                               class="btn btn-sm btn-outline-primary">
                                                Edit
                                            </a>
                                            <form action="{{route('article.destroy' , $article->id)}}" method="POST"
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
                    {{$articles->links()}}
                </div>
            </div>
        </section>
        <!-- END DATA TABLE-->
    </div>
@endsection
