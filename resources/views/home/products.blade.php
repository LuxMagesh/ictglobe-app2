<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<!-- section title -->
					<div class="col-md-12">
						<div class="section-title">
							<h3 class="title">New Products</h3>
							<!-- <div class="section-nav">
								<ul class="section-tab-nav tab-nav">
									<li class="active"><a data-toggle="tab" href="#tab1">Laptops</a></li>
									<li><a data-toggle="tab" href="#tab1">Smartphones</a></li>
									<li><a data-toggle="tab" href="#tab1">Cameras</a></li>
									<li><a data-toggle="tab" href="#tab1">Accessories</a></li>
								</ul>
							</div> -->
						</div>
					</div>
					<!-- /section title -->

					<!-- Products tab & slick -->
					<div class="col-md-12" style="margin-bottom:40px">
						<div class="row">

						
							<div class="products-tabs">
								<!-- tab -->
								<div id="tab1" class="tab-pane active">
									<div class="products-slick" data-nav="#slick-nav-1">
										<!-- product -->
										@foreach($products as $productss)
										<div class="product">
											<div class="product-img">
											<img src="/product/{{$productss->image}}">
												<div class="product-label">
													<span class="sale">R {{$productss->discount_price}}</span>
													<span class="new">DISCOUNT</span>
												</div>
											</div>
											<div class="product-body">
												<p class="product-category">Category</p>
												<h3 class="product-name">Name :<a href="#">{{$productss->title}}</a></h3>
												<h4 class="product-price">Price : R {{$productss->price}}</h4>
												<div class="product-btns">
													<!-- <button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
													<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button> -->
													<a href="{{url('product_details', $productss->id)}}" class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp"></span></a>
													
												</div>
												<form action="{{url('add_cart',$productss->id)}}" method="POST">
												@csrf
												<div class="product-rating">
												<h4><input style="content-align:center;text-align:center;margin-top:14px;border:#8D99AE"type="number" class="add-to-cart-btn" name="quantity" value="1" min="1" style="margin-left:40px!important;"></h4>
												</div>
												
											</div>
									
												<div class="add-to-cart">
													<button type="submit" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
												</div>
											</form>
										</div>
										@endforeach
										<!-- /product -->
										
									</div>
									<div id="slick-nav-1" class="products-slick-nav"></div>
								</div>
								<!-- /tab -->
							</div>
							
						</div>
					</div>
					<!-- Products tab & slick -->
				</div>
				
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>