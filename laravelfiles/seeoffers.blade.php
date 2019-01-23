 <!DOCTYPE html>
 <html lang="fa">

 <head>

 	<meta charset="UTF-8">
 	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
 	<meta name="description" content="Responsive Personal One Page Portfolio">
 	<meta name="keywords" content="Responsive, Personal, One Page Portfolio, Freelancers, Template">
 	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

 	<!-- site title -->
 	<title>torito</title>

<style media="screen">

</style>
  <link rel="stylesheet" href="w3.css">

 	<!-- Bootstrap css -->
 	<link rel="stylesheet" href="/css/bootstrap.min.css">

 	<!-- Animated css -->
 	<link rel="stylesheet" href="/css/animate.css">

 	<!-- Font Awesome css -->
 	<link rel="stylesheet" href="/css/font-awesome.min.css">

 	<!-- Owl Carousel css -->
 	<link rel="stylesheet" href="/css/owl.theme.css">
 	<link rel="stylesheet" href="/css/owl.carousel.css">

 	<!-- Magnific Popup css -->
 	<link rel="stylesheet" href="/css/magnific-popup.css">


 	<!-- Main css -->
 	<link rel="stylesheet" href="/css/style.css">

  <style>
   .cardContainer{
     display : grid;
     grid-template-columns : 1fr 1fr 1fr 1fr 1fr;
   }
   .singleCard{
     min-width : 200px;
     margin : 200px;
   }


  </style>


 </head>

 <body data-spy="scroll" data-offset="50" data-target=".navbar-collapse">


 	<!-- =========================
      PRE LOADER
 ============================== -->


 <div class="w3-container">
   <div class="cardContainer">
   <div class="w3-card-4 singleCard">

        @foreach($offers as $off)
          <p>{{$off->offer_id}}</p>
          @foreach($city as $cit)
            @foreach($item as $it)
                @if($cit->city_id===$off->city_id)
                  @if($it->item_id===$off->item_id)
                <img src="/images/{{$it->pic}}" class="img-responsive" alt="items">
                  شهر:
                    {{$cit->name}}
                    <br>
                    نام :
                    <b>{{$it->name}}<b>
                  @endif
                @endif
            @endforeach
          @endforeach

        @endforeach


   </div>

   </div>

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
 				<a href="index.html" class="navbar-brand">توریتو</a>
 			</div>

       <div class="collapse navbar-collapse">
 				<ul class="nav navbar-nav navbar-left">
 					<li><a href="/" class="smoothScroll">خانه</a></li>

 					<li><a href="/category" class="smoothScroll">دسته بندی ها</a></li>
 					<li><a href="/seeoffers" class="smoothScroll">پیشنهادات</a></li>
 					<li><a href="/seeplace" class="smoothScroll">دیدن شهرها و مکان ها</a></li>
					<li><a href="/seeOther" class="smoothScroll">دیدن قیمت تاکسی،مترو،اتوبوس،متفرقه </a></li>
 					<li><a href="#contact" class="smoothScroll">تماس با ما</a></li>

 				</ul>
 			</div>


 		</div>
 	</div>


 	<!-- =========================
     FOOTER SECTION
 ============================== -->

 	<footer>
 		<div class="container">
 			<div class="row">

 				<div class="col-md-12 col-sm-12">
 					<p class="wow fadeInUp" data-wow-delay="0.6s">تشکر از همراهیتان</p>
 									<div class="wow fadeInUp col-md-offset-1 col-md-4 col-sm-5" data-wow-delay="0.9s">
 					<div class="contact_detail">
 						<div class="addr">
 							<h3>آدرس دفتر</h3>
 							<p>شیراز خیابان ملاصدرا</p>
 						</div>
 						<div class="ph">
 							<h3>تماس با ما</h3>
 							<p>00123456</p>
 						</div>
 						<div class="email">
 							<h3>ایمیل</h3>
 							<p>a@gmail.com</p>
 						</div>
 					</div>
 				</div>

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
