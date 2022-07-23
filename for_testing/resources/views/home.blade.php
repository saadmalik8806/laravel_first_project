<!DOCTYPE html>
<html lang="en">
<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=Edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="keywords" content="">
	<meta name="description" content="">

	<!-- Site title ================================================== -->
	<title>First Project</title>

	<!-- Bootstrap CSS ================================================== -->
	<link rel="stylesheet" href="{{asset('public/theme/css/bootstrap.min.css')}}">

	<!-- Animate CSS ================================================== -->
	<link rel="stylesheet" href="{{asset('public/theme/css/animate.min.css')}}">

	<!-- Font Icons CSS ================================================== -->
	<link rel="stylesheet" href="{{asset('public/theme/css/font-awesome.min.css')}}">
	<link rel="stylesheet" href="{{asset('public/theme/css/ionicons.min.css')}}">

	<!-- Main CSS ================================================== -->
	<link rel="stylesheet" href="{{asset('public/theme/css/style.css')}}">

	<!-- Google web font ================================================== -->	
  <link href='https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700,300' rel='stylesheet' type='text/css'>
	<style>
        .header-one{
            background: url("{{asset('public/images/header-bg.jpg')}}") no-repeat;
        }
    </style>
</head>
<body>


<!-- Preloader section ================================================== -->
<div class="preloader">

	<div class="sk-spinner sk-spinner-pulse"></div>

</div>


<!-- Navigation section ================================================== -->
<div class="nav-container">
   <nav class="nav-inner transparent">

      <div class="navbar">
         <div class="container">
            <div class="row">

              <div class="brand">
                <a href="index.html">Pure Mix</a>
              </div>

              <div class="navicon">
                <div class="menu-container">

                  <div class="circle dark inline">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="{{asset('resources/views/home.blade.php')}}">Home</a></li>
                        <li><a href="{{asset('resources/views/about.blade.php')}}">About</a></li>
                        <li><a href="{{asset('resources/views/blog.blade.php')}}">Blog</a></li>
                        <li><a href="{{asset('resources/views/contact.blade.php')}}">Contact</a></li>
                      </ul>
                    </div>
                  </div>

                </div>
              </div>

            </div>
         </div>
      </div>

   </nav>
</div>


<!-- Header section ================================================== -->
<section id="header" class="header-one">
	<div class="container">
		<div class="row">

			<div class="col-md-offset-3 col-md-6 col-sm-offset-2 col-sm-8">
          <div class="header-thumb">
              <h1 class="wow fadeIn" data-wow-delay="1.6s">Lorem ipsum dolor</h1>
              <h3 class="wow fadeInUp" data-wow-delay="1.9s">Six HTML pages included</h3>
          </div>
			</div>

		</div>
	</div>		
</section>


<!-- Portfolio section ================================================== -->
<section id="portfolio">
   <div class="container">
      <div class="row">

         <div class="col-md-12 col-sm-12">
            
               <!-- iso section -->
               <div class="iso-section wow fadeInUp" data-wow-delay="2.6s">

                  <ul class="filter-wrapper clearfix">
                           <li><a href="#" data-filter="*" class="selected opc-main-bg">All</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".graphic">Graphic</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".template">Web template</a></li>
                           <li><a href="#" class="opc-main-bg" data-filter=".photoshop">Photoshop</a></li>
                        <li><a href="#" class="opc-main-bg" data-filter=".branding">Branding</a></li>
                        </ul>

                        <!-- iso box section -->
                        <div class="iso-box-section wow fadeInUp" data-wow-delay="1s">
                           <div class="iso-box-wrapper col4-iso-box">

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img1.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project One</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img2.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Two</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box template graphic col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img3.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Three</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic template col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img4.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Four</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box photoshop branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img5.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Five</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                              <div class="iso-box graphic branding col-md-4 col-sm-6">
                                 <div class="portfolio-thumb">
                                    <img src="{{asset('public/images/portfolio-img6.jpg')}}" class="img-responsive" alt="Portfolio">
                                       <div class="portfolio-overlay">
                                          <div class="portfolio-item">
                                                <a href="single-project.html"><i class="fa fa-link"></i></a>
                                                <h2>Project Six</h2>
                                             </div>
                                       </div>
                                 </div>
                              </div>

                            </div>
                        </div>

               </div>

         </div>

      </div>
   </div>
</section>

<!-- Footer section ================================================== -->
<footer>
	<div class="container">
		<div class="row">

			<div class="col-md-12 col-sm-12">
				<p class="wow fadeInUp"  data-wow-delay="0.3s">Copyright © 2016 Your Company Name - Designed by Tooplate</p>
				<ul class="social-icon wow fadeInUp"  data-wow-delay="0.6s">
					<li><a href="#" class="fa fa-facebook"></a></li>
					<li><a href="#" class="fa fa-twitter"></a></li>
					<li><a href="#" class="fa fa-dribbble"></a></li>
					<li><a href="#" class="fa fa-behance"></a></li>
					<li><a href="#" class="fa fa-google-plus"></a></li>
				</ul>
			</div>
			
		</div>
	</div>
</footer>


<!-- Javascript  ================================================== -->
<script src="{{asset('public/theme/js/jquery.js')}}"></script>
<script src="{{asset('public/theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/theme/js/isotope.js')}}"></script>
<script src="{{asset('public/theme/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('public/theme/js/wow.min.js')}}"></script>
<script src="{{asset('public/theme/js/custom.js')}}"></script>

</body>
</html>