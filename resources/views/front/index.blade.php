@extends('layouts.front')
@section('hot')

	<!--Hot Products-->
	<div class="container-fluid ">
		<div class="row">
			<div class="col-lg-9 offset-lg-3 col-ld-12">
				<div class="row">
					<!--Breaking box-->
					<div class="col-md-2 col-lg-2">
						<div class="p-2 bg-primary bg-custom text-white text-center breaking-caret"><span class="font-weight-bold">Hot Products</span></div>
					</div>
					<!--end breaking box-->
					<!--Breaking content-->
					<div class="col-md-10 col-lg-10 pl-md-4 py-2">
						<div class="breaking-box">
							<div id="carouselbreaking" class="carousel slide" data-ride="carousel">
								<!--breaking news-->
								<div class="carousel-inner">

									<!--post-->
									<div class="carousel-item active">
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>

										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>

										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
									</div>
									<!--post-->



									<!--post-->
									<div class="carousel-item ">
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>

										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>

										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
										<article class="single_product single_product-custom">
											<figure>
												<figcaption class="product_content product_content-custom">
													<h3 class="product_name"><a href="#">Product Name Here</a></h3>
												</figcaption>
											</figure>
										</article>
									</div>
								</div>
								<!--end breaking news-->

								<!--navigation slider-->
								<div class="navigation-box p-2 d-none d-sm-block">
									<!--nav left-->
									<a class="carousel-control-prev carousel-control-prev-custom " href="#carouselbreaking" role="button" data-slide="prev">
										<i class="fa fa-angle-left" aria-hidden="true"></i>
										<span class="sr-only">Previous</span>
									</a>
									<!--nav right-->
									<a class="carousel-control-next carousel-control-next-custom " href="#carouselbreaking" role="button" data-slide="next">
										<i class="fa fa-angle-right" aria-hidden="true"></i>
										<span class="sr-only">Next</span>
									</a>
								</div>
								<!--end navigation slider-->
							</div>
						</div>
					</div>
					<!--end breaking content-->
				</div>
			</div>
		</div>
	</div>
	<!--Hot Products-->

@endsection
@section('content')


	<!--slider area start-->
	@if($ps->slider == 1)
	<section class="slider_section slider_section_four mb-10 mtc-5">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-9 offset-lg-3 col-ld-12">
					<div class="slider_area owl-carousel">

						@if(count($sliders))
							@foreach($sliders as $data)
							<div class="single_slider d-flex align-items-center" data-bgimg="{{asset('assets/images/sliders/'.$data->photo)}}">
							<div class="slider_content slider_c_four">
								<h1>{{$data->title_text}}</h1>
							</div>
							</div>
							@endforeach
						@endif



					</div>
				</div>
			</div>
		</div>
	</section>
	@endif
	<!--slider area end-->

	<!-- All product area start-->
	<div class="product_area mb-30">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="product_tab_btn3">
						<ul class="nav" role="tablist">
							<li>
								<a class="active" data-toggle="tab" href="#Bestseller" role="tab" aria-controls="Bestseller" aria-selected="true">
									Hot Offers
								</a>
							</li>
							<li>
								<a data-toggle="tab" href="#Products3" role="tab" aria-controls="Products3" aria-selected="false">
									New Goods
								</a>
							</li>

						</ul>
					</div>
				</div>
			</div>
			<div class="tab-content">
				<div class="tab-pane fade show active" id="Bestseller" role="tabpanel">
					<div class="product_carousel product_column5 owl-carousel">
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/2.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/3.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/4.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/5.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/6.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/7.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>
					</div>
				</div>
				<div class="tab-pane fade" id="Products3" role="tabpanel">
					<div class="product_carousel product_column5 owl-carousel">

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/4.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/5.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/6.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>
						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/7.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/2.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/3.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/4.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>

						<article class="single_product">
							<figure>
								<div class="product_thumb">
									<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/5.jpg')}}" alt=""></a>
									<div class="action_links">
										<ul>

											<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
										</ul>
									</div>
									<div class="add_to_cart">
										<a href="cart.html" title="add to cart">Add to cart</a>
									</div>
								</div>
								<figcaption class="product_content">
									<div class="price_box">
										<span class="old_price">550 Tk.</span>
										<span class="current_price">500 Tk.</span>
									</div>
									<h3 class="product_name"><a href="#">Product Title Name</a></h3>
								</figcaption>
							</figure>
						</article>



					</div>
				</div>

			</div>
		</div>
	</div>
	<!--  All product area end-->




	<!--product Daily Needs start-->
	<section class="product_area mb-46">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						<h2>Daily Needs</h2>
					</div>
				</div>
			</div>
			<div class="product_carousel product_column5 owl-carousel">
				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>


				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/2.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/3.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/4.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/5.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/6.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>
				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/7.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>
			</div>
		</div>
	</section>
	<!--product Daily Needs end-->




	<!--product Toiletries  start-->
	<section class="product_area mb-46">
		<div class="container-fluid">
			<div class="row">
				<div class="col-12">
					<div class="section_title">
						<h2>Toiletries </h2>
					</div>
				</div>
			</div>
			<div class="product_carousel product_column5 owl-carousel">
				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>


				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/2.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/3.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/4.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/5.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>

				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/6.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>
				<article class="single_product">
					<figure>
						<div class="product_thumb">
							<a class="primary_img" href="#"><img src="{{asset('assets/front/emxn/assets/img/product/7.jpg')}}" alt=""></a>
							<div class="action_links">
								<ul>

									<li class="quick_button"><a href="#" title="quick view"> <span class="ion-ios-search-strong"></span></a></li>
								</ul>
							</div>
							<div class="add_to_cart">
								<a href="cart.html" title="add to cart">Add to cart</a>
							</div>
						</div>
						<figcaption class="product_content">
							<div class="price_box">
								<span class="old_price">550 Tk.</span>
								<span class="current_price">500 Tk.</span>
							</div>
							<h3 class="product_name"><a href="#">Product Title Name</a></h3>
						</figcaption>
					</figure>
				</article>
			</div>
		</div>
	</section>
	<!--product Toiletries  end-->


@endsection

@section('scripts')
	<script>
		$(window).on('load',function() {

			setTimeout(function(){

				$('#extraData').load('{{route('front.extraIndex')}}');

			}, 500);
		});

	</script>
@endsection