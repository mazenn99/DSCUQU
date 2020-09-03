@extends('users.template.master')
@section('title' , 'المقالات')
@section('content')

    <body class="blog_1">
    <!-- Preloader -->
    <div id="preloader">
        <div id="status">&nbsp;</div>
    </div>
    @section('photo')
        <header id="header">
            <div class="header-body">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="intro-text ">
                                <h1>Blog Page</h1>
                                <p><span><a href="">Home <i class='fa fa-angle-right'></i></a></span><span
                                        class="b-active"> Blog Page</span></p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </header>
    @endsection


    <div class="blog-area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 bolg_side-left">

                    @foreach($articles as $article)
                        <div class="col-sm-12 single-item-box">
                            <div class="single-item">
                                {{--                                    <div class="img-box">--}}
                                {{--                                        <a href="#"><img src="images/blog/blog-01.jpg" alt=""--}}
                                {{--                                                         class="img-responsive"></a>--}}
                                {{--                                        <span><a href="#" class="overlay"></a></span>--}}
                                {{--                                        <div class="img-caption">--}}
                                {{--                                            <p class="date"><span>22</span><span>Aug</span></p>--}}
                                {{--                                        </div>--}}
                                {{--                                    </div>--}}
                                <div class="single-text-box">
                                    <h3><a href="{{route('articles.show' , $article->slug)}}">{{$article->title}}</a></h3>
                                    <ul class="list-unstyled">
                                        <li>
                                            <a href="#">{{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}}</a>
                                        </li>
                                        <li>
                                            <a href="#">{{\App\Models\Comments::where('article_id' , $article->id)->count()}}
                                                comments</a></li>
                                    </ul>
                                    <p>{{Illuminate\Support\Str::limit($article->content , 250)}}</p>
                                    <div class="blog-btn-box">
                                        <a href="{{route('articles.show' , $article->slug)}}">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach


                    <div class="row">
                        <div class="col-sm-12 text-center">
                            <nav aria-label="Page navigation">
                                <ul class="pagination">
                                    {{$articles->links()}}
                                </ul>
                            </nav>
                        </div>
                    </div>
                </div>

                <div class="col-sm-4 blog_side-right">
                    <div class="sidebar-content">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="categories-item">
                                    <h3>Categories</h3>
                                    <ul class="list-unstyled">
                                        @foreach(\App\Models\Section::orderBy('name')->get() as $section)
                                            <li><a href="#"><i
                                                        class="fa fa-angle-right"></i>{{$section->name}}{{-- <span>()</span> --}}
                                                </a></li>
                                        @endforeach
                                    </ul>
                                </div>
                            </div>
                        </div>

                        {{--                        <div class="col-sm-12 recent-post-01">--}}
                        {{--                            <h3>Recent Posts</h3>--}}
                        {{--                            <div class="row">--}}
                        {{--                                <div class="col-sm-12 recent-single">--}}
                        {{--                                    <div class="recent-content-item">--}}
                        {{--                                        <div class="img-box"><a href=""><img src="images/blog/recent-01.jpg" alt=""></a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="recent-text pull-right">--}}
                        {{--                                            <a href="#">There are many variaons of are many ...</a>--}}
                        {{--                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span>--}}
                        {{--                                            </p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- /.recent-single-item -->--}}

                        {{--                                <div class="col-sm-12 recent-single">--}}
                        {{--                                    <div class="recent-content-item">--}}
                        {{--                                        <div class="img-box"><a href=""><img src="images/blog/recent-01.jpg" alt=""></a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="recent-text pull-right">--}}
                        {{--                                            <a href="#">There are many variaons of are many ...</a>--}}
                        {{--                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>12</span>--}}
                        {{--                                            </p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- /.recent-single-item -->--}}

                        {{--                                <div class="col-sm-12 recent-single">--}}
                        {{--                                    <div class="recent-content-item">--}}
                        {{--                                        <div class="img-box"><a href=""><img src="images/blog/recent-01.jpg" alt=""></a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="recent-text pull-right">--}}
                        {{--                                            <a href="#">There are many variaons of are many ...</a>--}}
                        {{--                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>8</span>--}}
                        {{--                                            </p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- /.recent-single-item -->--}}

                        {{--                                <div class="col-sm-12 recent-single">--}}
                        {{--                                    <div class="recent-content-item">--}}
                        {{--                                        <div class="img-box"><a href=""><img src="images/blog/recent-01.jpg" alt=""></a>--}}
                        {{--                                        </div>--}}
                        {{--                                        <div class="recent-text pull-right">--}}
                        {{--                                            <a href="#">There are many variaons of are many ...</a>--}}
                        {{--                                            <p>22Aug, 2019 <span class="content"><i class="fa fa-comments"></i>15</span>--}}
                        {{--                                            </p>--}}
                        {{--                                        </div>--}}
                        {{--                                    </div>--}}
                        {{--                                </div><!-- /.recent-single-item -->--}}
                        {{--                            </div>--}}
                        {{--                        </div>--}}

                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>

@endsection
