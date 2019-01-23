<!DOCTYPE html>
<html lang="fa">

<head>


	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="description" content="Responsive Personal One Page Portfolio">
	<meta name="keywords" content="Responsive, Personal, One Page Portfolio, Freelancers, Template">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!-- site title -->
	<title>توریتو</title>

	<!-- Bootstrap css -->
	<link rel="stylesheet" href="css/bootstrap.min.css">

	<!-- Animated css -->
	<link rel="stylesheet" href="/css/animate.css">

	<!-- Font Awesome css -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Owl Carousel css -->
	<link rel="stylesheet" href="css/owl.theme.css">
	<link rel="stylesheet" href="css/owl.carousel.css">

	<!-- Magnific Popup css -->
	<link rel="stylesheet" href="css/magnific-popup.css">

	<!-- Main css -->
	<link rel="stylesheet" href="css/style.css">


</head>

<body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


	<!-- =========================
     PRE LOADER
============================== -->

	<div class="preloader">
		<div class="sk-spinner sk-spinner-pulse"></div>
	</div>



	<!-- =========================
     NAVIGATION LINKS
============================== -->

	<div class="navbar navbar-fixed-top custom-navbar" role="navigation">
		<div class="container">

			<!-- navbar header -->
			<div class="navbar-header">
				<button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
					<span class="icon icon-bar"></span>
				</button>
        <ul class="nav navbar-nav navbar-left">
        <li><a href="/login" class="smoothScroll">Login</a></li>
        <li><a href="/register" class="smoothScroll">Register</a></li>
      </ul>
				<a href="/" class="navbar-brand">توریتو</a>


			</div>




			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#intro" class="smoothScroll">خانه</a></li>

					<li><a href="/category" class="smoothScroll">دسته بندی ها</a></li>
					<li><a href="/seeoffers" class="smoothScroll">پیشنهادات</a></li>
					<li><a href="/seeplace" class="smoothScroll">دیدن شهرها و مکان ها</a></li>
					<li><a href="/seeOther" class="smoothScroll">دیدن قیمت تاکسی،مترو،اتوبوس،متفرقه </a></li>
					<li><a href="#contact" class="smoothScroll">تماس با ما</a></li>

				</ul>
			</div>

			<!-- <div class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-left">
					<li><a href="#intro" class="smoothScroll">خانه</a></li>
					<li><a href="/login" class="smoothScroll">دسته بندی ها</a></li>
					<li><a href="/login" class="smoothScroll">پیشنهادات</a></li>
					<li><a href="/login" class="smoothScroll">دیدن شهرها و مکان ها</a></li>

					<li><a href="#contact" class="smoothScroll">تماس با ما</a></li>

				</ul>
			</div> -->



		</div>
	</div>



	<!-- =========================
    INTRO SECTION
============================== -->

	<section id="intro" class="parallax-section">
		<div class="gradient-overlay"></div>
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<h1 class="wow fadeIn" data-wow-delay="1.6s">گردشگری آسان با توریتو</h1>
					<h4 class="wow fadeInUp" data-wow-delay="2s">سفری راحت را با ما تجربه کنید</h4>
					<a href="#detail" class="btn btn-lg btn-default smoothScroll wow fadeInUp hidden-xs" data-wow-delay="2.3s">بیشتر بخوانید</a>
					<a href="#team" class="btn btn-lg btn-danger smoothScroll wow fadeInUp" data-wow-delay="2.3s">تبلیغات </a>
				</div>

			</div>
		</div>
		</div>
	</section>



	<!-- =========================
    DETAIL SECTION
============================== -->

<section id="detail" class="parallax-section">
	<div class="container">
		<div class="row">

			@foreach($cat as $datacat)

			<div class="wow fadeInUp col-md-4 col-sm-6" data-wow-delay="0.6s">
				<div class="detail-thumb">
					<i class="fa fa-bell-o"></i>
					<h3>{{$datacat->name}}</h3>
					<hr>
					<a href="/category/{{$datacat->cat_id}}">مشاهده </a>
				</div>
			</div>

			@endforeach


		</div>
		<a href="/category" class="more"> بیشتر</a>

	</div>
</section>


	<!-- =========================
    TEAM SECTION
============================== -->

	<section id="team" class="parallax-section">
		<div class="container">
			<div class="row">

				<div class=" wow bounceIn col-md-12 col-sm-12">
					<div class="section-title">
						<h2>تبلیغات</h2>
					</div>
				</div>

				<div id="owl-team" class="owl-carousel">
					@foreach($adv as $ad)

					<div class="item wow fadeInUp col-md-4 col-sm-4" data-wow-delay="0.9s">
						<div class="team-thumb">
							<img src="images/{{$ad->pic}}" class="img-responsive" alt="Team">
							<div class="team-overlay">
								<div class="team-item">

								</div>
							</div>
						</div>
						<h3>{{$ad->name}}</h3>
						<h6>{{$ad->description}}</h6>
					</div>
					@endforeach

				</div>

			</div>
		</div>
	</section>




	<!-- =========================
    CONTACT SECTION
============================== -->
<section id="contact" class="parallax-section">
	<div class="container">
		<div class="row">

			<div class="wow bounceIn col-md-12 col-sm-12">
				<div class="section-title text-center">
					<h2>با ما تماس بگیرید</h2>
					<p>در انتظار همکاری با شما!</p>
				</div>
			</div>

			<div class="wow fadeInUp col-md-6 col-sm-7" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="section-title">
						<h3>یک پیام برای مابفرستید</h3>
					</div>
					<form action="http://themes.khaitawng.com/Branded/contact.php" method="post">
						<input type="text" class="form-control" placeholder="نام" required>
						<input type="email" class="form-control" placeholder="ایمیل" required>
						<textarea class="form-control" placeholder="پیام" rows="5" required></textarea>
						<div class="col-md-6 col-sm-10">
							<input type="submit" class="form-control" value="ارسال">
						</div>
					</form>
				</div>
			</div>

			<div class="wow fadeInUp col-md-offset-1 col-md-4 col-sm-5" data-wow-delay="0.9s">
				<div class="contact_detail">
					<div class="addr">
						<h3>بازدید از دفتر</h3>
						<p>شیراز ملاصدرا</p>
					</div>
					<div class="ph">
						<h3>تماس با ما</h3>
						<p>00123456</p>
					</div>
					<div class="email">
						<h3>ایمیل بفرستید</h3>
						<p>a@gmail.com</p>
					</div>
				</div>
			</div>

		</div>
	</div>
</section>



	<!-- =========================
    FOOTER SECTION
============================== -->


	<footer>
		<div class="container">
			<div class="row">

				<div class="col-md-12 col-sm-12">
					<p class="wow fadeInUp" data-wow-delay="0.6s">با تشکر</p>

					<ul class="social-icon">
						<li>
							<a href="#" class="fa fa-facebook wow fadeInUp" data-wow-delay="1s"></a>
						</li>
						<li>
							<a href="#" class="fa fa-twitter wow fadeInUp" data-wow-delay="1.3s"></a>
						</li>
						<li>
							<a href="#" class="fa fa-dribbble wow fadeInUp" data-wow-delay="1.6s"></a>
						</li>
						<li>
							<a href="#" class="fa fa-behance wow fadeInUp" data-wow-delay="1.9s"></a>
						</li>
						<li>
							<a href="#" class="fa fa-google-plus wow fadeInUp" data-wow-delay="2s"></a>
						</li>
					</ul>

				</div>

			</div>
		</div>
	</footer>


	<!-- Back top -->
	<a href="#back-top" class="go-top"><i class="fa fa-angle-up"></i></a>





	<!-- =========================
     SCRIPTS
============================== -->

	<script src="js/jquery.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/jquery.magnific-popup.min.js"></script>
	<script src="js/jquery.parallax.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/smoothscroll.js"></script>
	<script src="js/wow.min.js"></script>
	<script src="js/custom.js"></script>

</body>

</html>
