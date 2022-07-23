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

                  <div class="circle dark inline" menu-link="0">
                    <i class="icon ion-navicon"></i>
                  </div>

                  <div class="list-menu">
                    <i class="icon ion-close-round close-iframe"></i>
                    <div class="intro-inner">
                      <ul id="nav-menu">
                        <li><a href="index.html">Home</a></li>
                        <li><a href="about.html">About</a></li>
                        <li><a href="blog.html">Blog</a></li>
                        <li><a href="contact.html">Contact</a></li>
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








<!-- Javascript  ================================================== -->
<script src="{{asset('public/theme/js/jquery.js')}}"></script>
<script src="{{asset('public/theme/js/bootstrap.min.js')}}"></script>
<script src="{{asset('public/theme/js/isotope.js')}}"></script>
<script src="{{asset('public/theme/js/imagesloaded.min.js')}}"></script>
<script src="{{asset('public/theme/js/wow.min.js')}}"></script>
<script src="{{asset('public/theme/js/custom.js')}}"></script>

</body>
</html>