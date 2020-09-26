<!-- login -->
<div id="mylogin" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">تسجيل دخول</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="{{route('login')}}" method="post">
                    @csrf
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn  btn-block btn-lg">دخول</button>
                    </div>
                    <p class="hint-text"><strong><a href="#">نسيت كلمة المرور؟</a></strong></p>
                </form>
            </div>
            <div class="modal-footer">  ليس لديك حساب؟ <a href="#mysingUp" data-dismiss="modal" data-toggle="modal">  سجل </a></div>
        </div>
    </div>
</div>
<!-- end -->
<!-- singUp -->
<div id="mysingUp" class="modal fade">
    <div class="modal-dialog modal-login">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title">تسجيل جديد</h4>
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
            </div>
            <div class="modal-body">
                <form action="/examples/actions/confirmation.php" method="post">
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-user"></i></span>
                            <input type="text" class="form-control" name="username" placeholder="الإسم" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-envelope"></i></span>
                            <input type="email" class="form-control" name="email" placeholder="البريد الالكتروني" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="كلمة المرور" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="input-group">
                            <span class="input-group-addon"><i class="fa fa-lock"></i></span>
                            <input type="password" class="form-control" name="password" placeholder="تأكيد كلمة المرور" required="required">
                        </div>
                    </div>
                    <div class="form-group">
                        <button type="submit" class="btn btn-block btn-lg">تسجيل</button>
                    </div>
                </form>
            </div>
            <div class="modal-footer"> لديك حساب مسبقاً<a href="#mylogin" data-dismiss="modal" data-toggle="modal"> سجل دخول </a></div>
        </div>
    </div>
</div>
<!-- end -->


<!-- Footer Area section -->
<footer>
    <div  class="container">
        <div class="row">
            <div  class=" col-sm-12 footer-content-box">
                <div class="col-sm-3" >

                    <p>We are Educatios, creat your passion and inspiration. And hope success will come for your dream. Please send email and get latest news.</p>
                    <ul class="list-unstyled footer-menu text-center">
                        <li><span><i class="fa fa-phone footer-icon"></i></span>0123-456-789</li>
                        <li><span><i class="fa fa-envelope footer-icon"></i></span>hello@education.com</li>
                        <li><span><i class="fa fa-map-marker footer-icon"></i></span>01 Central Park, NYC</li>
                    </ul>
                </div>

                <div class="col-sm-3" >
                    <h3 align="center" >Get in touch</h3>
                    <p>Enter your email and we'll send you more information.</p>

                    <form action="#">
                        <div class="form-group" >
                            <input placeholder="Your Email" type="email" required="" >
                            <div class="submit-btn">
                                <div class="submit-btn">
                                    <button type="submit" class="text-center">Subscribe</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <div class="footer-bottom-inner">
                <div class="row">
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        <p>&copy; Copyright 2019 EcologyTheme | All rights reserved</p>
                    </div>
                    <div class="col-md-6 col-sm-12 footer-no-padding">
                        <ul class="list-unstyled footer-menu text-right">
                            <li>Follow us:</li>

                            <li><a href=""><i class="fa fa-twitter twitter"></i></a></li>
                            <li><a href=""><i class="fa fa-youtube youtube"></i></a></li>
                            <li><a href=""><i class="fa fa-google google"></i></a></li>

                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!-- ./ End footer-bottom -->
</footer><!-- ./ End Footer Area section -->

<!-- ============================
JavaScript Files
============================= -->
<!-- jQuery -->
<script src="{{asset('site')}}/js/vendor/jquery-1.12.4.min.js"></script>
<!-- Bootstrap JS -->
<script src="{{asset('site')}}/js/assets/bootstrap.min.js"></script>
<!-- owl carousel -->
<script src="{{asset('site')}}/js/assets/owl.carousel.min.js"></script>
<!-- Revolution Slider -->
<script src="{{asset('site')}}/js/assets/revolution/jquery.themepunch.revolution.min.js"></script>
<script src="{{asset('site')}}/js/assets/revolution/jquery.themepunch.tools.min.js"></script>
<!-- Popup -->
<script src="{{asset('site')}}/js/assets/jquery.magnific-popup.min.js"></script>
<!-- Sticky JS -->
<script src="{{asset('site')}}/js/assets/jquery.sticky.js"></script>
<!-- Counter Up -->
<script src="{{asset('site')}}/js/assets/jquery.counterup.min.js"></script>
<script src="{{asset('site')}}/js/assets/waypoints.min.js"></script>
<!-- Slick Slider-->
<script src="{{asset('site')}}/js/assets/slick.min.js"></script>
<!-- Main Menu -->
<script src="{{asset('site')}}/js/assets/jquery.meanmenu.min.js"></script>

<!-- Revolution Extensions -->
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.actions.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.carousel.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.kenburn.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.migration.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.navigation.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.parallax.min.js"></script>
<script type="te   xt/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.slideanims.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/extensions/revolution.extension.video.min.js"></script>
<script type="text/javascript" src="{{asset('site')}}/js/assets/revolution/revolution.js"></script>
<!-- Custom JS -->
<script src="{{asset('site')}}/js/custom.js"></script>
@yield('script')
</body >
</html>
