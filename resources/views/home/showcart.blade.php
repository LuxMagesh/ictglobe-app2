<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

		<title>Staxo - Ecommerce Store</title>

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
        <style>
            .center
            {
                margin:auto;
                width:100%;
                text-align:left;
				align-content: center;
                padding: 30px;
            }

			table,th,td
			{
				border: 1px solid grey;
			}
            .th_deg
            {
                font-size: 20px;
                padding:5px;
                background: grey;
            }

			.img_deg
            {
                height:70px;
            }

			.rbn
            {
                margin: 10px;
            }
			.rbnf
            {
                height:70px;
            }
			.rbnn
            {
                margin: 10px;
				text-align:center;
            }
        </style>
		<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
		<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

    </head>
	<body>
		<!-- HEADER -->
            @include('home.header')
		<!-- /HEADER -->
					@if(session()->has('message'))
                        <div class="">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button
                            {{session()->get('message')}}
                    </div>
                    @endif
			<div class="section">
			<div class="container">
			<div class="col-md-12">
				<div class="row">
				<div class="col-md-6">
				<h3 class="product-name">Shopping Cart</h3>
                <table>
                    <tr>
                        <th class="th_deg">Name</th>
                        <th class="th_deg">Quantity</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
						<!-- <th class="th_deg">Deposit</th> -->
                        <th class="th_deg">Action</th>
                    </tr>
					<?php 
					
					$totalprice=0; 
					$depositprice=0;
					$count=0;
					$outstanding=0;
					
					?>
					@foreach($cart as $cart)
                    <tr>
                        <td><h5 class="rbn product-name">{{$cart->product_title}}</h3></td>
                        <td><h5 class="rbnn product-name">{{$cart->quantity}}</h3></td>
						<td><h5 class="rbn product-price">R {{$cart->price}}</h3></td>
                        <td><img class="rbn img_deg" src="/product/{{$cart->image}}"></td>
						<!-- <td><input class="rbn" type="number" name="depositprice" value="{{ $depositprice }}"></td> -->
                        <td><a class="rbn btn btn-danger" onclick="return confirm('Are You Sure, You want to Delete the Product')" href="{{url('/remove_cart', $cart->id)}}">Remove Product</a></td>
                    </tr>
					<?php 
					
					$totalprice=$totalprice + $cart->price;
					// $depositprice= '<input type = "text" value = '.$depositprice.'>';
					$depositprice= $totalprice/2;
					$outstanding= $totalprice-$depositprice;
					$count+=1;
					
					?>
					@endforeach
		

                </table>
				<div>
					<td><h5 style="margin-top:10px" class="product-name">Total Price : {{$totalprice}}</h3></td>
				</div>
				<div>
					<!-- <h3 class="product-name">Proceed Order :</h3></td> -->
					<!-- <a class="rbn btn btn-danger" href="{{url('cash_order')}}">Cash On Delivery</a> -->
					<!-- <a class="rbn btn btn-danger" href="{{url('stripe_deposit', $depositprice)}}">Make a Deposit</a> -->
					<!-- <button class="rbn btn btn-danger" href="{{url('stripe', $depositprice)}}">Make a Deposit</button> -->
					<a class="rbn btn btn-primary" href="{{url('stripe', $totalprice)}}">Pay Using Card</a>
					<a class="rbn btn btn-danger" onclick="myFunction()">Make a Deposit</a>
				</div>
				</div>
					<div style="display:none" class="col-md-6" id="myDIV">
					<h3 class="product-name">Make a Deposit</h3>
					<div class="card" style="width: 58rem;">
						<!-- <img class="card-img-top" src="..." alt="Card image cap"> -->
						<div class="card-body">
							<!-- <h5 class="card-title">Deposit Amount</h5> -->
							<p class="card-text">You will be making a deposit amount of <strong>R <?php echo $depositprice ?></strong>.</p>
							<p class="card-text">Make a deposit of half the Total Price of your entire shopping cart total. We accept a minimum of 50% of the Total Price of the innitial shopping cart Total</p>
							<!-- <p class="card-text">Make a deposit of half the Total Price of your entire shopping cart total. We accept a minimum of 50% the Total Price of the innitial shopping cart Total</p> -->
							<p class="card-text">Your Total Price of your entire shopping cart is <strong>Total Price : R<?php echo $totalprice ?></strong>.</p>
							<p class="card-text">Your remaining balance after making an innitial deposit will be <strong>R <?php echo $outstanding ?></strong>.</p>
							<!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
						</div><br><br>
						<div>
						<!-- <a class="rbn btn btn-danger" type="submit">Confirm Deposit Amount</a> -->
						<a id="myDIVV" class="rbn btn btn-success" href="{{url('stripe_deposit', $depositprice)}}">Pay Deposit</a>
					</div>
					</div>
					<div>	
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
		<script>
				function myFunction(val) {
				val;
				}
		</script>
		<script>
				function myFunction() {
				var x = document.getElementById("myDIV");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}

				}
		</script>
		<script>
				function myFunctionn() {
				var x = document.getElementById("myDIVV");
				if (x.style.display === "none") {
					x.style.display = "block";
				} else {
					x.style.display = "none";
				}
				}
		</script>
		<script src="home/js/jquery.min.js"></script>
		<script src="home/js/bootstrap.min.js"></script>
		<script src="home/js/slick.min.js"></script>
		<script src="home/js/nouislider.min.js"></script>
		<script src="home/js/jquery.zoom.min.js"></script>
		<script src="home/js/main.js"></script>

	</body>
</html>
