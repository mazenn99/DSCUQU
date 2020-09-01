<header id="header">
    <div class="header-body">
        <nav class="navbar edu-navbar">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                            data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a href="#" class="navbar-brand  data-scroll"><img src="{{asset('site')}}/images/dsc-logo.png" alt=""></a>
                </div>

                <div class="collapse navbar-collapse edu-nav  main-menu" id="bs-example-navbar-collapse-1">
                    <ul class="nav navbar-nav pull-right">
                        <li class="active"><a data-scroll="" href="index.html">الصفحة الرئيسية</a>
                        </li>

                        <li><a data-scroll href="event-list.html">الفعاليات</a>
                            <!-- dropdwon start -->

                            <!-- dropdown end -->
                        </li>

                        <li><a data-scroll href="blog.html">المقالات</a>
                        </li>
                        <li><a data-scroll href="contact.html"> اتصل بنا</a></li>
                        <li><a data-scroll href="{{route('login')}}"> تسجيل/دخول </a></li>
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        @yield('photo')
    </div>
</header>
<!--  End header section-->
