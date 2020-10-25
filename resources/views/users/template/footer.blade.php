<!-- Footer Area section -->
<footer>
	<div  class="container " id="contact" dir="rtl" >
		<div class="row">
			<div  class=" col-sm-12 footer-content-box ">
				<div class="col-sm-6"  style="margin-top:4%;" >

                <p> نادي الطلبة المطورين بجامعة أم القرى بدعم رسمي من قوقل نهدف إلى نشر المعرفة التقنية في المجتمع الجامعي </p>

                    <div class="footer-icon">
                        <ul class="list-unstyled" style="display:inline-block">
                            <li class="footer-icon-li"><span><a id="icon" target="_blank" href="https://twitter.com/DSCUQU"><i class="fa fa-twitter twitter fa-2x"></i></a></span></li>
                            <li class="footer-icon-li"><span><a id="icon" target="_blank" href="https://www.youtube.com/channel/UCihwwL2n2OZ10oxvajU9duw"><i class="fa fa-youtube youtube twitter fa-2x"></i></a></span></li>
                        </ul>
                    </div>

				</div>


				<div class="col-sm-3" dir="rtl" style="margin-left: 10%;">
					<h3 align="center" >تواصل معنا</h3>



					<form action="{{route('send-contact-us-message')}}" method="POST">
					    @csrf
						<fieldset class="form-group">
                            <input type="email" class="form-control rounded-0" name="email"  placeholder="الإيميل"> </fieldset>
                            @error('email')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                       <div class="form-group">
                     <textarea class="form-control rounded-0" rows="3" name="message"  placeholder="الرسالة"></textarea>
                            @error('message')
                                <small class="form-text text-danger">{{$message}}</small>
                            @enderror
                       </div>
                          <div class="form-group">
							<div class="submit-btn">
								<div class="submit-btn">
									<button type="submit" class="text-center">إرسال</button>
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
					<div class="col-md-12 col-sm-12 footer-no-padding text-center" style="">
					 <p>Copyright © <br> تمت برمجة الموقع بواسطة قادة نادي الطلبة المطورين
					 <br>
					 <a href="https://www.twitter.com/aaysha15" target="_blank">@aysha</a>
					 &&
					 <a href="https://www.twitter.com/mazenn99" target="_blank">@mazen</a>
                        <!--Made with ❤️ by <a href="https://www.twitter.com/mazenn99">@mazenn99</a>  also with ❤️ by-->
                        <!--<a href="https://twitter.com/aaysha15">@aaysha15.</a>-->
                        <!--To our lovely Community ❤️-->
                    </p>
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
