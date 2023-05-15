<!DOCTYPE html>
<html lang="en">
	<head>
        <base href="/public">
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Staxo_Ecommerce_Store</title>

		<!-- Google font -->
		<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

		<!-- Bootstrap -->
		<link type="text/css" rel="stylesheet" href="home/css/bootstrap.min.css"/>

		<!-- Slick -->
		<link type="text/css" rel="stylesheet" href="home/css/slick.css"/>
		<link type="text/css" rel="stylesheet" href="home/css/slick-theme.css"/>

		<!-- nouislider -->
		<link type="text/css" rel="stylesheet" href="home/css/nouislider.min.css"/>

		<!-- Font Awesome Icon -->
		<link rel="stylesheet" href="home/css/font-awesome.min.css">

		<!-- Custom stlylesheet -->
		<link type="text/css" rel="stylesheet" href="home/css/style.css"/>


        <link href='https://fonts.googleapis.com/css?family=Lato:300,400|Montserrat:700' rel='stylesheet' type='text/css'>
	<style>
		@import url(//cdnjs.cloudflare.com/ajax/libs/normalize/3.0.1/normalize.min.css);
		@import url(//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css);
	</style>
	<link rel="stylesheet" href="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/default_thank_you.css">
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/jquery-1.9.1.min.js"></script>
	<script src="https://2-22-4-dot-lead-pages.appspot.com/static/lp918/min/html5shiv.js"></script>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
            @include('home.header2')
		<!-- /HEADER -->
		<h1 style="margin-top: 40px"class="site-header__title"  data-lead-id="site-header-title">THANK YOU!</h1>
		<div style="margin-bottom: 140px"class="main-content">
			<i class="fa fa-check main-content__checkmark" id="checkmark"></i>
			<p style="margin-bottom: 20px"class="main-content__body" data-lead-id="main-content-body">Thank a for making a purchase. It means a lot to us, just like you do! We really appreciate your support. We will keep you updated on your delivery.</p>
			<!-- <a class="rbn btn btn-danger" >Return Back to the Store</a> -->
			<a class="btn btn-success" style="color: white; padding: 10px" href="{{url('/')}}"><span>Home</span></a>
		</div>
    
		<!-- FOOTER -->
            @include('home.footer')
		<!-- /FOOTER -->

		<!-- jQuery Plugins -->
		<script src="home/js/jquery.min.js"></script>
		<script src="home/js/bootstrap.min.js"></script>
		<script src="home/js/slick.min.js"></script>
		<script src="home/js/nouislider.min.js"></script>
		<script src="home/js/jquery.zoom.min.js"></script>
		<script src="home/js/main.js"></script>

	</body>
</html>
