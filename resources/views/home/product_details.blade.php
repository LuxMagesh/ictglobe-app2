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

		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
        <style>

            .pmn
            {
                font-size: 10px;
                padding:5px;
                background: white;
            }

			.hn
			{
				margin: 10px;
			}

        </style>
    </head>
	<body>
		<!-- HEADER -->
            @include('home.header')
		<!-- /HEADER -->
		<div class="section">

		<div class="container">
	
		<div class="pmn col-md-12">
		<div class="row">
				<div class="col-sm-12"><h3 class="product-name"><p style="color:red"></p> {{$products->title}}</h3></div>
			</div>
			<div class="row">
				<div class="col-md-6">
				<div class="product">
						<div class="product-img" style="margin:auto; width:50%; padding:30px">
							<img src="/product/{{$products->image}}">
								<!-- <div class="product-label">
										<span class="sale">-30%</span>
										<span class="new">NEW</span>
								</div> -->
						</div>
				</div>

				</div>
				<div class="col-md-6">
				<div class="product-body">
						<p class="product-category"></p>
						<!-- <h3 class="product-name"><p style="color:red"> Name :</p> {{$products->title}}</h3> -->
						<h3 class="product-price"><p style="color:red">Price :</p> R {{$products->price}}</h3>
                        <h3 class="product-category"><p style="color:red">Category :</p> {{$products->category}}</h3>
                        <h3 class="product-category"><p style="color:red">Details :</p> {{$products->description}}</h3>
                        <h3 lass="product-category"><p style="color:red">Available Quantity :</p> {{$products->quantity}}</h3>
					   <div class="pmn col-md-12">
				<div class="row">
				<div class="col-md-4">
				</div>
				<form action="{{url('add_cart',$products->id)}}" method="POST">
						@csrf
				<div class="col-md-4">
				<input type="number" style="height:24px; text-align:center" class="add-to-cart-btn" name="quantity" value="1" min="1" style="margin-left:40px!important;">
				</div>
				
				<div class="col-md-4">
					<div class="add-to-cart">
						<button type="submit" class="rbn btn btn-danger add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					</div>
				</div>
				</form>
				</div>	
				</div>
											</div>	
				</div>
						
			</div>
		</div>
		</div>
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
