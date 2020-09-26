@extends('users.template.master')
@section('title' , $article->title)
@section('content')
    <body class="post-1 home_version_03 home_version_02 home_version_04">
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
                                <h1>Blog Post</h1>
                                <p><span><a href="">Home <i class='fa fa-angle-right'></i></a></span> <span><a href=""> Blog <i
                                                class='fa fa-angle-right'></i></a></span><span class="b-active"> Blog Post</span>
                                </p>
                            </div>
                        </div>
                    </div><!-- /.row -->
                </div><!-- /.container -->
            </div>
        </header>
    @endsection
    <!--  End header section-->


    <div class="post_1_area">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 post_left-side">
                    <div class="row">
                        <div class="col-sm-12">
                            <div class="post-img-box">
                                <img src="https://via.placeholder.com/760x350" alt="" class="img-responsive">
                            </div>
                        </div>
                        <div class="col-sm-12">
                            <div class="description-content">
                                <div class="description-heading">
                                    <div class="time">
                                        <span>{{\Carbon\Carbon::parse($article->created_at)->diffForHumans()}}</span>
                                    </div>
                                    <h3>{{$article->title}}</h3>
                                </div>
                                <div class="description-text">
                                    <div class="row">
                                        <div class="col-sm-1">
                                            <div class="description-side-left">
                                                <div class="author-img">
                                                    <img src="images/post/post-author0-1.jpg" alt="" class="img-circle">
                                                    <div class="author-details">
                                                        <a href="#"
                                                           class="text-capitalize">By {{$article->admin->name}}</a>
                                                        <br> <br>
                                                        <i class="fa fa-share-square"></i> <a href="#">Share </a>
                                                    </div>
                                                </div>
                                                <ul class="list-unstyled">
                                                    <li><i class="fa fa-eye"></i>{{$article->visitor}}</li>
                                                    <li>
                                                        <i class="fa fa-comment-o"></i>{{\App\Models\Comments::where('article_id' , $article->id)->count()}}
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                        <div class="col-sm-11">
                                            <div class="description-text-right">
                                                <p>{{$article->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="col-md-12 comments">
                            <div class="row">
                                <h3>Comments</h3>
                                @foreach(\App\Models\Comments::where('article_id' , $article->id)->orderBy('id' , 'DESC')->get() as $comment)
                                    <div class="col-sm-12 comment-single-item">
                                        <div class="col-sm-1 img-box">
                                            <img src="{{asset('site/images/comment/comment-avatar.png')}}"
                                                 alt="profile-avatar" class="img-circle">
                                        </div>
                                        <div class="col-sm-11 comment-left-bar">
                                            <div class="comment-text">
                                                <ul class="list-unstyled comment-author-box">
                                                    <li><span class="name">
                                                        </span>{{$comment->checkUser()}}<span>
											{{\Carbon\Carbon::parse($comment->created_at)->diffForHumans()}}
											</span></li>
                                                </ul>
                                                <p>{{$comment->content}}</p>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>


                        <div class="col-sm-12">
                            <div class="leave-comment-box">
                                <div class="comment-respond">
                                    <div class="comment-reply-title">
                                        <h3>Leave a Reply</h3>
                                    </div>
                                    <div class="comment-form">
                                        <form method="POST" action="#">
                                            @csrf
                                            <div class="row">
                                                <div class="col-sm-12">
                                                    <div class="form-group">
                                                        <textarea id="dataComment" class="form-control" rows="8"
                                                                  placeholder="Type Your Comments"></textarea>
                                                    </div>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="full-width">
                                                        <button id="send" class="btn btn-success">Send Comment</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-12 post_slider">
                            <div class="row">
                                <h3>Last Posts</h3>
                                @foreach(\App\Models\Articles::orderBy('id' , 'DESC')->limit(3)->get() as $articlesRelated)
                                    <div class="col-md-4 col-sm-6 blog-single-item">
                                        <div class="blog-post">
                                            <figure>
                                                <div class="figure-img"><img src="https://via.placeholder.com/760x350"
                                                                             alt=""
                                                                             class="img-responsive"></div>
                                                <figcaption>
                                                    <div><a href="{{route('articles.show' , $articlesRelated->slug)}}"
                                                            class="read_more-btn">read more</a></div>
                                                </figcaption>
                                            </figure>
                                            <div class="courses-content-box">
                                                <div class="courses-content">
                                                    <h4>
                                                        <a href="{{route('articles.show' , $articlesRelated->slug)}}">{{$articlesRelated->title}}</a>
                                                    </h4>
                                                    <p><span>{{$articlesRelated->admin->name}}</span> |
                                                        <span>{{\Carbon\Carbon::parse($articlesRelated->created_at)->diffForHumans()}}</span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div><!-- Ends: .single courses -->
                                    </div><!-- Ends: . -->
                                @endforeach
                            </div>
                        </div><!--End .row-->
                    </div>
                </div>
            </div>
        </div>
    </div>
    </body>
@section('script')
    <script>
        // add comment
        $('#send').click(function(e) { // this is event when
           e.preventDefault();
           let data = $('#dataComment').val(); // here you get data from textarea
           $.ajax({
               url : "{{route('save-comment')}}", // this is link you send through it
               type : "POST",
               data : { // this is JSON data aysha send it to backend
                   '_token' : '{{csrf_token()}}',
                   'comment' : data ,
                   'article_id' : '{{$article->id}}'
               } , success : function (data) {
                   if(data == 200) {
                       // here you receive data from backend and you must check the number of status
                       // you received and show the result to button
                       console.log('success')
                   } else {
                       // here is if the data is failed of you receive any number different than 200
                       console.log('failed')
                   }
               }
           })
        });
    </script>
@endsection
@endsection
