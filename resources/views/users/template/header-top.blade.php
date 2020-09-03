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
                        <li class="active"><a data-scroll="" href="{{route('index')}}">الصفحة الرئيسية</a>
                        </li>

                        <li><a data-scroll href="{{route('courses.index')}}">الفعاليات</a>
                            <!-- dropdwon start -->

                            <!-- dropdown end -->
                        </li>

                        <li><a data-scroll href="{{route('articles.index')}}">المقالات</a>
                        </li>
                        <li><a data-scroll href="#"> اتصل بنا</a></li>
                        @auth
                            <li><a data-scroll href="#">{{\Illuminate\Support\Facades\Auth::user()->name}}</a>
                                <!-- dropdwon start -->
                                <ul class="dropdown list-unstyled">
                                    <li><a href="#">Edit Account</a></li>
                                    <li><a href="#">Courses History</a></li>
                                    <li><a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">Logout</a></li>
                                </ul>
                                <!-- dropdown end -->
                            </li>
                        @endauth
                        @guest
                            <li><a data-scroll href="{{route('login')}}"> تسجيل/دخول </a></li>
                        @endguest
                    </ul>
                </div><!-- /.navbar-collapse -->
            </div><!-- /.container -->
        </nav>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
            @csrf
        </form>
        @yield('photo')
    </div>
</header>
<!--  End header section-->
