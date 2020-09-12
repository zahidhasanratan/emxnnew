<!doctype html>
<html class="no-js" lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	@if(isset($page->meta_tag) && isset($page->meta_description))
		<meta name="keywords" content="{{ $page->meta_tag }}">
		<meta name="description" content="{{ $page->meta_description }}">
		<title>{{$gs->title}}</title>
	@elseif(isset($blog->meta_tag) && isset($blog->meta_description))
		<meta name="keywords" content="{{ $blog->meta_tag }}">
		<meta name="description" content="{{ $blog->meta_description }}">
		<title>{{$gs->title}}</title>
	@elseif(isset($productt))
		<meta name="keywords" content="{{ !empty($productt->meta_tag) ? implode(',', $productt->meta_tag ): '' }}">
		<meta name="description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}">
		<meta property="og:title" content="{{$productt->name}}" />
		<meta property="og:description" content="{{ $productt->meta_description != null ? $productt->meta_description : strip_tags($productt->description) }}" />
		<meta property="og:image" content="{{asset('assets/images/thumbnails/'.$productt->thumbnail)}}" />
		<meta name="author" content="GeniusOcean">
		<title>{{substr($productt->name, 0,11)."-"}}{{$gs->title}}</title>
	@else
		<meta name="keywords" content="{{ $seo->meta_keys }}">
		<meta name="author" content="GeniusOcean">
		<title>{{$gs->title}}</title>
	@endif
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Favicon -->
	<!-- <link rel="shortcut icon" type="image/x-icon" href="assets/img/favicon.ico"> -->

	<!-- CSS
    ========================= -->

	<!-- Plugins CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/emxn/assets/css/plugins.css')}}">

	<!-- Main Style CSS -->
	<link rel="stylesheet" href="{{asset('assets/front/emxn/assets/css/style.css')}}">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">


</head>

<body>

<!--header area start-->

<!--Offcanvas menu area start-->
<div class="off_canvars_overlay">

</div>
<div class="Offcanvas_menu">
	<div class="container-fluid">
		<div class="row">
			<div class="col-12">
				<div class="canvas_open">
					<a href="javascript:void(0)"><i class="ion-navicon"></i></a>
				</div>
				<div class="Offcanvas_menu_wrapper">
					<div class="canvas_close">
						<a href="javascript:void(0)"><i class="ion-android-close"></i></a>
					</div>

					<div class="search_container">
						<form action="#">
							<div class="hover_category">
								<select class="select_option" name="select" id="categori">
									<option selected value="1">Choose Your Location</option>
									<option value="2">Dhaka </option>
									<option value="3">Cittagong</option>
									<option value="4">Khula</option>
								</select>
							</div>
						</form>
					</div>
					<div class="top_right text-right">
						<ul>
							<li><a href="#"> Login/Signup </a></li>
							<li><a href="#"> Checkout </a></li>
						</ul>
					</div>
					<div class="search_container">
						<form action="#">
							<div class="hover_category">
								<select class="select_option" name="select" id="categori">
									<option selected value="1">All Categories</option>
									<option value="2">Hot Offers</option>
									<option value="3">Daily Foods</option>
									<option value="4">Food Products</option>
									<option value="5">Toiletried </option>
									<option value="6">Vitamin D</option>

								</select>
							</div>
							<div class="search_box">
								<input placeholder="Search product..." type="text">
								<button type="submit">Search</button>
							</div>
						</form>
					</div>

					<div class="middel_right_info">

						<div class="mini_cart_wrapper">
							<a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
							<span class="cart_quantity">2</span>
							<!--mini cart-->
							<div class="mini_cart">
								<div class="cart_item">
									<div class="cart_img">
										<a href="#"><img src="{{asset('assets/front/emxn/assets/img/s-product/product.jpg')}}" alt=""></a>
									</div>
									<div class="cart_info">
										<a href="#">Sit voluptatem rhoncus sem lectus</a>
										<p>Qty: 1 X <span> $60.00 </span></p>
									</div>
									<div class="cart_remove">
										<a href="#"><i class="ion-android-close"></i></a>
									</div>
								</div>
								<div class="cart_item">
									<div class="cart_img">
										<a href="#"><img src="{{asset('assets/front/emxn/assets/img/s-product/product2.jpg')}}" alt=""></a>
									</div>
									<div class="cart_info">
										<a href="#">Natus erro at congue massa commodo</a>
										<p>Qty: 1 X <span> $60.00 </span></p>
									</div>
									<div class="cart_remove">
										<a href="#"><i class="ion-android-close"></i></a>
									</div>
								</div>
								<div class="mini_cart_table">
									<div class="cart_total">
										<span>Sub total:</span>
										<span class="price">$138.00</span>
									</div>
									<div class="cart_total mt-10">
										<span>total:</span>
										<span class="price">$138.00</span>
									</div>
								</div>

								<div class="mini_cart_footer">
									<div class="cart_button">
										<a href="#">View cart</a>
									</div>
									<div class="cart_button">
										<a href="#">Checkout</a>
									</div>

								</div>

							</div>
							<!--mini cart end-->
						</div>
					</div>


					<div id="menu" class="text-left ">
						<ul class="offcanvas_main_menu">
							@if($gs->is_home == 1)
							<li class="menu-item-has-children active">
								<a href="{{asset('/')}}">Home</a>
							</li>
							@endif
							@if($gs->is_faq == 1)
									<li class="menu-item-has-children"><a href="{{ route('front.faq') }}">{{ $langg->lang19 }}</a></li>
							@endif
								@foreach(DB::table('pages')->where('header','=',1)->get() as $data)
									<li class="menu-item-has-children"><a href="{{ route('front.page',$data->slug) }}">{{ $data->title }}</a></li>
								@endforeach
								@if($gs->is_contact == 1)
									<li class="menu-item-has-children"><a href="{{ route('front.contact') }}">{{ $langg->lang20 }}</a></li>
								@endif
								<li class="menu-item-has-children">
									<a href="javascript:;" data-toggle="modal" data-target="#track-order-modal" class="track-btn">{{ $langg->lang16 }}</a>
								</li>

							<!-- <li class="menu-item-has-children">
                               <a href="#">blog</a>
                               <ul class="sub-menu">
                                   <li><a href="blog.html">blog</a></li>
                                   <li><a href="blog-details.html">blog details</a></li>
                                   <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                   <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                   <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                               </ul>

                           </li> -->
						</ul>
					</div>

					<div class="Offcanvas_footer">
						<span><a href="#"><i class="fa fa-envelope-o"></i> info@yourdomain.com</a></span>
						<ul>
							<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
							<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
							<li class="pinterest"><a href="#"><i class="fa fa-pinterest-p"></i></a></li>
							<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
							<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--Offcanvas menu area end-->
<header>


	<div class="main_header">




		<!--header middel start-->
		<div class="header_middle">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-6">
						<div class="logo">
							<a href="{{asset('/')}}"><img src="{{asset('assets/front/emxn/assets/img/logo/logo.png')}}" alt=""></a>
							<h3>EMXN SHOP</h3>
							<p>Modern Herbal Group Online Shop</p>
						</div>
					</div>
					<div class="col-lg-9 col-md-9">
						<div class="middel_right">
							<div class="chose-location">
								<div class="font-awesome">

									<select class="select_option select-custom" name="select">
										<option selected value="fa fa-map-marker"> Choose Your Location</option>
										<option value="2">Dhaka</option>
										<option value="3">Khulna</option>
									</select>

								</div>
							</div>

							<div class="search_container">
								<form action="#">
									<div class="hover_category">
										<select class="select_option" name="select" id="categori1">
											<option selected value="1">All Categories</option>
											<option value="2">Hot Offers</option>
											<option value="3">Daily Foods</option>
											<option value="4">Food Products</option>
											<option value="5">Toiletried </option>
											<option value="6">Vitamin D</option>
										</select>
									</div>
									<div class="search_box">
										<input placeholder="Search .." type="text">
										<button type="submit">Search</button>
									</div>
								</form>
							</div>


							<div class="login-sec">
								<a href="#"><h3><i class="fa fa-user-circle"></i> <span>Login/Signup</span></h3></a>
								<!-- <button class="btn"><i class="fa fa-user-circle"></i></button> -->
							</div>
							<div class="middel_right_info">

								<div class="mini_cart_wrapper">
									<a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>1100 Tk. <i class="fa fa-angle-down"></i></a>
									<span class="cart_quantity">2</span>
									<!--mini cart-->
									<div class="mini_cart">
										<div class="cart_item">
											<div class="cart_img">
												<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt=""></a>
											</div>
											<div class="cart_info">
												<a href="#">Product Name Here</a>
												<p>Qty: 1 X <span> 500 Tk. </span></p>
											</div>
											<div class="cart_remove">
												<a href="#"><i class="ion-android-close"></i></a>
											</div>
										</div>
										<div class="cart_item">
											<div class="cart_img">
												<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/2.jpg')}}" alt=""></a>
											</div>
											<div class="cart_info">
												<a href="#">Product Name Here</a>
												<p>Qty: 1 X <span> 600 Tk. </span></p>
											</div>
											<div class="cart_remove">
												<a href="#"><i class="ion-android-close"></i></a>
											</div>
										</div>
										<div class="mini_cart_table">
											<div class="cart_total">
												<span>Sub total:</span>
												<span class="price">1100 Tk.</span>
											</div>
											<div class="cart_total mt-10">
												<span>total:</span>
												<span class="price">1100 Tk.</span>
											</div>
										</div>

										<div class="mini_cart_footer">
											<div class="cart_button">
												<a href="#">View cart</a>
											</div>
											<div class="cart_button">
												<a href="#">Checkout</a>
											</div>

										</div>

									</div>
									<!--mini cart end-->
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header middel end-->


		<!--header bottom satrt-->
		<div class="main_menu_area">
			<div class="container-fluid">
				<div class="row align-items-center">
					<div class="col-lg-3 col-md-12">
						<div class="categories_menu categories_four">
							<div class="categories_title">
								<h2 class="categori_toggle">ALL CATEGORIES</h2>
							</div>
							<div class="categories_menu_toggle">

								<!-- menu 3 -->
								<div id="jquery-accordion-menu" class="jquery-accordion-menu">

									<ul>



										@php
											$i=1;
										@endphp
										@foreach($categories as $category)

										<li><a href="{{ route('front.category',$category->slug) }}">{{ $category->name }} </a>
											@if(count($category->subs) > 0)

												@php
													$ck = 0;
                                                    foreach($category->subs as $subcat) {
                                                        if(count($subcat->childs) > 0) {
                                                            $ck = 1;
                                                            break;
                                                        }
                                                    }
												@endphp
											<ul class="submenu">

												@foreach($category->subs as $subcat)
												<li><a href="{{ route('front.subcat',['slug1' => $subcat->category->slug, 'slug2' => $subcat->slug]) }}">{{$subcat->name}} </a>
													@if(count($subcat->childs) > 0)
													<ul class="submenu">
														@foreach($subcat->childs as $childcat)
															<li><a href="{{ route('front.childcat',['slug1' => $childcat->subcategory->category->slug, 'slug2' => $childcat->subcategory->slug, 'slug3' => $childcat->slug]) }}">{{$childcat->name}}</a></li>
														@endforeach
													</ul>
													@endif
												</li>
												@endforeach
											</ul>
											@endif
										</li>

											@php
												$i++;
											@endphp

											@if($i == 10)
												<li>
													<a href="{{ route('front.categories') }}">{{ $langg->lang15 }} </a>
												</li>
												@break
											@endif


										@endforeach

									</ul>

									<!-- <div class="jquery-accordion-menu-footer">Footer </div> -->
								</div>
								<!-- menu 3 -->

							</div>
						</div>
					</div>
					<div class="col-lg-9 col-md-12">
						<div class="main_menu menu_position">
							<nav>
								<ul>


									@if($gs->is_home == 1)
										<li><a href="{{ route('front.index') }}">{{ $langg->lang17 }}</a></li>
									@endif
									<li><a href="{{ route('front.blog') }}">{{ $langg->lang18 }}</a></li>
									@if($gs->is_faq == 1)
										<li><a href="{{ route('front.faq') }}">{{ $langg->lang19 }}</a></li>
									@endif
									@foreach(DB::table('pages')->where('header','=',1)->get() as $data)
										<li><a href="{{ route('front.page',$data->slug) }}">{{ $data->title }}</a></li>
									@endforeach
									@if($gs->is_contact == 1)
										<li><a href="{{ route('front.contact') }}">{{ $langg->lang20 }}</a></li>
									@endif
									<li>
										<a href="javascript:;" data-toggle="modal" data-target="#track-order-modal" class="track-btn">{{ $langg->lang16 }}</a>
									</li>



									<!--  <li><a href="#">pages <i class="fa fa-angle-down"></i></a>
                                         <ul class="sub_menu pages">
                                             <li><a href="about.html">About Us</a></li>
                                             <li><a href="services.html">services</a></li>
                                             <li><a href="privacy-policy.html">privacy policy</a></li>
                                             <li><a href="faq.html">Frequently Questions</a></li>
                                             <li><a href="contact.html">contact</a></li>
                                             <li><a href="login.html">login</a></li>
                                             <li><a href="404.html">Error 404</a></li>
                                             <li><a href="compare.html">Compare</a></li>
                                         </ul>
                                     </li> -->


								</ul>
							</nav>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--header bottom end-->
	</div>
</header>
<!--header area end-->



<!--sticky header area start-->
<div class="sticky_header_area sticky-header">
	<div class="container-fluid">
		<div class="row align-items-center">
			<div class="col-lg-3">
				<div class="logo">
					<a href="{{asset('/')}}"><img src="{{asset('assets/front/emxn/assets/img/logo/logo.png')}}" alt=""></a>
					<h3>EMXN SHOP</h3>
					<p>Modern Herbal Group Online Shop</p>
				</div>
			</div>
			<div class="col-lg-9">
				<div class="sticky_header_right menu_position">
					<div class="main_menu">
						<nav>
							<ul>

								@if($gs->is_home == 1)
									<li><a href="{{ route('front.index') }}">{{ $langg->lang17 }}</a></li>
								@endif
								<li><a href="{{ route('front.blog') }}">{{ $langg->lang18 }}</a></li>
								@if($gs->is_faq == 1)
									<li><a href="{{ route('front.faq') }}">{{ $langg->lang19 }}</a></li>
								@endif
								@foreach(DB::table('pages')->where('header','=',1)->get() as $data)
									<li><a href="{{ route('front.page',$data->slug) }}">{{ $data->title }}</a></li>
								@endforeach
								@if($gs->is_contact == 1)
									<li><a href="{{ route('front.contact') }}">{{ $langg->lang20 }}</a></li>
								@endif
								<li>
									<a href="javascript:;" data-toggle="modal" data-target="#track-order-modal" class="track-btn">{{ $langg->lang16 }}</a>
								</li>




								<!--  <li><a href="blog.html">blog<i class="fa fa-angle-down"></i></a>
                                     <ul class="sub_menu pages">
                                         <li><a href="blog-details.html">blog details</a></li>
                                         <li><a href="blog-fullwidth.html">blog fullwidth</a></li>
                                         <li><a href="blog-sidebar.html">blog left sidebar</a></li>
                                         <li><a href="blog-no-sidebar.html">blog no sidebar</a></li>
                                     </ul>
                                 </li> -->



							</ul>
						</nav>
					</div>



					<div class="middel_right_info">

						<div class="mini_cart_wrapper">
							<a href="javascript:void(0)"><i class="fa fa-shopping-bag" aria-hidden="true"></i>$147.00 <i class="fa fa-angle-down"></i></a>
							<span class="cart_quantity">2</span>
							<!--mini cart-->
							<div class="mini_cart">
								<div class="cart_item">
									<div class="cart_img">
										<a href="#"><img src="{{asset('assets/front/emxn/assets/img/s-product/product.jpg')}}" alt=""></a>
									</div>
									<div class="cart_info">
										<a href="#">Sit voluptatem rhoncus sem lectus</a>
										<p>Qty: 1 X <span> $60.00 </span></p>
									</div>
									<div class="cart_remove">
										<a href="#"><i class="ion-android-close"></i></a>
									</div>
								</div>
								<div class="cart_item">
									<div class="cart_img">
										<a href="#"><img src=" {{asset('assets/front/emxn/assets/img/s-product/product2.jpg')}}" alt=""></a>
									</div>
									<div class="cart_info">
										<a href="#">Natus erro at congue massa commodo</a>
										<p>Qty: 1 X <span> $60.00 </span></p>
									</div>
									<div class="cart_remove">
										<a href="#"><i class="ion-android-close"></i></a>
									</div>
								</div>
								<div class="mini_cart_table">
									<div class="cart_total">
										<span>Sub total:</span>
										<span class="price">$138.00</span>
									</div>
									<div class="cart_total mt-10">
										<span>total:</span>
										<span class="price">$138.00</span>
									</div>
								</div>

								<div class="mini_cart_footer">
									<div class="cart_button">
										<a href="#">View cart</a>
									</div>
									<div class="cart_button">
										<a href="#">Checkout</a>
									</div>

								</div>

							</div>
							<!--mini cart end-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!--sticky header area end-->

@yield('hot')

@yield('content')





<!--footer area start-->
<footer class="footer_widgets">
	<div class="footer_top">
		<div class="container-fluid">
			<div class="row">
				<div class="col-lg-6 col-md-6">
					<div class="widgets_container contact_us">
						<div class="footer_logo">
							<a href="#"><img src="{{asset('assets/front/emxn/assets/img/logo/logo.png')}}" alt=""></a>
						</div>
						<div class="footer_contact">
							<h3>Contact Us</h3>

							<p><span>Address</span> 2/1 Shahid Tajuddin Ahmed Sarani, Raine Razzak Plaza,<br>
								3'rd & 4'th Floor, Moghbazar, Dhaka - 1217.
							</p>
							<p><span>Mobile: </span><a href="tel:01678 075340">01678 075340</a>  </p>
							<p><span>Mail: </span><a href="info@modernherbalbd.com">info@modernherbalbd.com</a>  </p>

						</div>
					</div>
				</div>
				<div class="col-lg-3 col-md-6 col-sm-6">
					<div class="widgets_container widget_menu">
						<h3>{{ $langg->lang21 }}</h3>
						<div class="footer_menu">
							<ul>
								<li><a href="{{ route('front.index') }}">{{ $langg->lang22 }}</a></li>
								@foreach(DB::table('pages')->where('footer','=',1)->get() as $data)
									<li>
										<a href="{{ route('front.page',$data->slug) }}">
											{{ $data->title }}
										</a>
									</li>
								@endforeach

								<li>
									<a href="{{ route('front.contact') }}">
										{{ $langg->lang23 }}
									</a>
								</li>
							</ul>
						</div>
					</div>
				</div>

				<div class="col-lg-3 col-md-6">
					<div class="widgets_container newsletter">
						<h3>Follow Us</h3>

						<div class="footer_logo">
							<h5>Our App</h5>
							<a href="#"><img src="{{asset('assets/front/emxn/assets/img/playstore.png')}}" alt=""></a>
						</div>
						<div class="footer_social_link">
							<ul>
									@if(App\Models\Socialsetting::find(1)->f_status == 1)
										<li><a class="facebook" href="{{ App\Models\Socialsetting::find(1)->facebook }}" target="_blank" title="Facebook"><i class="fa fa-facebook"></i></a></li>
									@endif
									@if(App\Models\Socialsetting::find(1)->g_status == 1)
										<li><a class="facebook" href="{{ App\Models\Socialsetting::find(1)->gplus }}" target="_blank" title="Facebook"><i class="fa fa-google"></i></a></li>
									@endif
										@if(App\Models\Socialsetting::find(1)->t_status == 1)
											<li><a class="twitter" href="{{ App\Models\Socialsetting::find(1)->twitter }}" target="_blank" title="Twitter"><i class="fa fa-twitter"></i></a></li>
										@endif

										@if(App\Models\Socialsetting::find(1)->l_status == 1)
											<li><a class="linkedin" href="{{ App\Models\Socialsetting::find(1)->twitter }}" target="_blank" title="Linkedin"><i class="fa fa-linkedin"></i></a></li>
										@endif
										@if(App\Models\Socialsetting::find(1)->d_status == 1)
											<li><a class="linkedin" href="{{ App\Models\Socialsetting::find(1)->dribbble }}" target="_blank" title="Dribbble"><i class="fa fa-dribbble"></i></a></li>
										@endif



							</ul>
						</div>

					</div>
				</div>
			</div>
		</div>
	</div>
	<div class="footer_bottom">
		<div class="container-fluid">
			<div class="row align-items-center">
				<div class="col-lg-4 col-md-4">
					<div class="copyright_area">
						<p>Copyright &copy; 2020 Modern Herbal. All Right Reserved.</p>
					</div>
				</div>


				<div class="col-lg-4 col-md-4">
					<div class="footer_payment text-right">
						<a href="#"><img src="{{asset('assets/front/emxn/assets/img/icon/payment.png')}}" alt=""></a>
					</div>
				</div>

				<div class="col-lg-4 col-md-4 text-right">
					<div class="copyright_area">
						<p> <a href="https://esoft.com.bd/" target="_blank">Web eCommerce Company</a> e-Soft</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</footer>
<!--footer area end-->


<!-- modal add -->
<div class="modal fade" id="myModal" role="dialog">
	<div class="modal-dialog modal-dialog-custom modal-sm">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Title Name Here</h4>
			</div>
			<div class="modal-body">
				<img class="img-responsive" src="{{asset('assets/front/emxn/assets/img/product/1.jpg')}}" alt="">
			</div>

		</div>

	</div>
</div>
<!-- modal add -->





<!-- modal area start-->
<div class="modal fade" id="modal_box" tabindex="-1" role="dialog"  aria-hidden="true">
	<div class="modal-dialog modal-dialog-centered" role="document">
		<div class="modal-content">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close">
				<span aria-hidden="true">&times;</span>
			</button>
			<div class="modal_body">
				<div class="container">
					<div class="row">
						<div class="col-lg-5 col-md-5 col-sm-12">
							<div class="modal_tab">
								<div class="tab-content product-details-large">
									<div class="tab-pane fade show active" id="tab1" role="tabpanel" >
										<div class="modal_tab_img">
											<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/product1.jpg')}}" alt=""></a>
										</div>
									</div>
									<div class="tab-pane fade" id="tab2" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/product2.jpg')}}" alt=""></a>
										</div>
									</div>
									<div class="tab-pane fade" id="tab3" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/product3.jpg')}}" alt=""></a>
										</div>
									</div>
									<div class="tab-pane fade" id="tab4" role="tabpanel">
										<div class="modal_tab_img">
											<a href="#"><img src="{{asset('assets/front/emxn/assets/img/product/product5.jpg')}}" alt=""></a>
										</div>
									</div>
								</div>
								<div class="modal_tab_button">
									<ul class="nav product_navactive owl-carousel" role="tablist">
										<li >
											<a class="nav-link active" data-toggle="tab" href="#tab1" role="tab" aria-controls="tab1" aria-selected="false"><img src="{{asset('assets/front/emxn/assets/img/product/product1.jpg')}}" alt=""></a>
										</li>
										<li>
											<a class="nav-link" data-toggle="tab" href="#tab2" role="tab" aria-controls="tab2" aria-selected="false"><img src="{{asset('assets/front/emxn/assets/img/product/product2.jpg')}}" alt=""></a>
										</li>
										<li>
											<a class="nav-link button_three" data-toggle="tab" href="#tab3" role="tab" aria-controls="tab3" aria-selected="false"><img src="{{asset('assets/front/emxn/assets/img/product/product3.jpg')}}" alt=""></a>
										</li>
										<li>
											<a class="nav-link" data-toggle="tab" href="#tab4" role="tab" aria-controls="tab4" aria-selected="false"><img src="{{asset('assets/front/emxn/assets/img/product/product5.jpg')}}" alt=""></a>
										</li>

									</ul>
								</div>
							</div>
						</div>
						<div class="col-lg-7 col-md-7 col-sm-12">
							<div class="modal_right">
								<div class="modal_title mb-10">
									<h2>Handbag feugiat</h2>
								</div>
								<div class="modal_price mb-10">
									<span class="new_price">$64.99</span>
									<span class="old_price" >$78.99</span>
								</div>
								<div class="modal_description mb-15">
									<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Mollitia iste laborum ad impedit pariatur esse optio tempora sint ullam autem deleniti nam in quos qui nemo ipsum numquam, reiciendis maiores quidem aperiam, rerum vel recusandae </p>
								</div>
								<div class="variants_selects">
									<div class="variants_size">
										<h2>size</h2>
										<select class="select_option">
											<option selected value="1">s</option>
											<option value="1">m</option>
											<option value="1">l</option>
											<option value="1">xl</option>
											<option value="1">xxl</option>
										</select>
									</div>
									<div class="variants_color">
										<h2>color</h2>
										<select class="select_option">
											<option selected value="1">purple</option>
											<option value="1">violet</option>
											<option value="1">black</option>
											<option value="1">pink</option>
											<option value="1">orange</option>
										</select>
									</div>
									<div class="modal_add_to_cart">
										<form action="#">
											<input min="0" max="100" step="2" value="1" type="number">
											<button type="submit">add to cart</button>
										</form>
									</div>
								</div>
								<div class="modal_social">
									<h2>Share this product</h2>
									<ul>
										<li class="facebook"><a href="#"><i class="fa fa-facebook"></i></a></li>
										<li class="twitter"><a href="#"><i class="fa fa-twitter"></i></a></li>
										<li class="pinterest"><a href="#"><i class="fa fa-pinterest"></i></a></li>
										<li class="google-plus"><a href="#"><i class="fa fa-google-plus"></i></a></li>
										<li class="linkedin"><a href="#"><i class="fa fa-linkedin"></i></a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<!-- modal area end-->


<!-- JS
============================================ -->

<!-- Plugins JS -->
<script src="{{asset('assets/front/emxn/assets/js/plugins.js')}}"></script>

<!-- Main JS -->
<script src="{{asset('assets/front/emxn/assets/js/main.js')}}"></script>


<script>
	$(document).ready(function(){
		$("#myModal").modal();
	});
</script>


<!-- menu 3 -->
<script>
	$("#jquery-accordion-menu ul").on("mouseover", function () {
		//stuff to do on mouseover
	});

	$(document).ready(function(){ jQuery(document).ready(function(){jQuery("#jquery-accordion-menu").jqueryAccordionMenu(); jQuery(".colors a").click(function(){if($(this).attr("class") !="default"){$("#jquery-accordion-menu").removeClass(); $("#jquery-accordion-menu").addClass("jquery-accordion-menu").addClass($(this).attr("class"));}else{$("#jquery-accordion-menu").removeClass(); $("#jquery-accordion-menu").addClass("jquery-accordion-menu");}});}); });

	eval(function(p,a,c,k,e,d){e=function(c){return c};if(!''.replace(/^/,String)){while(c--){d[c]=k[c]||c}k=[function(e){return d[e]}];e=function(){return'\\w+'};c=1};while(c--){if(k[c]){p=p.replace(new RegExp('\\b'+e(c)+'\\b','g'),k[c])}}return p}('94(61(54,52,50,53,51,55){51=61(50){64(50<52?\'\':51(95(50/52)))+((50=50%52)>35?68.98(50+29):50.97(36))};73(!\'\'.70(/^/,68)){71(50--){55[51(50)]=53[50]||51(50)}53=[61(51){64 55[51]}];51=61(){64\'\\\\59+\'};50=1};71(50--){73(53[50]){54=54.70(109 96(\'\\\\56\'+51(50)+\'\\\\56\',\'57\'),53[50])}}64 54}(\'86(31(54,52,50,53,51,55){51=31(50){32(50<52?\\\'\\\':51(91(50/52)))+((50=50%52)>35?34.39(50+29):50.84(36))};38(!\\\'\\\'.37(/^/,34)){33(50--){55[51(50)]=53[50]||51(50)}53=[31(51){32 55[51]}];51=31(){32\\\'\\\\\\\\59+\\\'};50=1};33(50--){38(53[50]){54=54.37(125 83(\\\'\\\\\\\\56\\\'+51(50)+\\\'\\\\\\\\56\\\',\\\'57\\\'),53[50])}}32 54}(\\\'219(63(54,52,50,53,51,55){51=63(50){60(50<52?\\\\\\\'\\\\\\\':51(220(50/52)))+((50=50%52)>218?99.217(50+29):50.22(21))};74(!\\\\\\\'\\\\\\\'.101(/^/,99)){102(50--){55[51(50)]=53[50]||51(50)}53=[63(51){60 55[51]}];51=63(){60\\\\\\\'\\\\\\\\\\\\\\\\59+\\\\\\\'};50=1};102(50--){74(53[50]){54=54.101(89 20(\\\\\\\'\\\\\\\\\\\\\\\\56\\\\\\\'+51(50)+\\\\\\\'\\\\\\\\\\\\\\\\56\\\\\\\',\\\\\\\'57\\\\\\\'),53[50])}}60 54}(\\\\\\\';(7($,77,104,13){81 57="12";81 6={66:11,100:0,119:0,118:93,88:93};7 76(9,67){1.9=9;1.221=$.103({},6,67);1.10=6;1.14=57;1.87()};$.103(76.15,{87:7(){1.92();1.106();8(6.88){1.59()}},92:7(){$(1.9).5("225").58("19").113("112 111",7(51){51.18();51.16();8($(1).5(".3").54>0){8($(1).5(".3").80("17")=="223"){$(1).5(".3").116(6.100).213(6.66);$(1).5(".3").56("52").115("3-50-65");8(6.118){$(1).56().5(".3").120(6.66);$(1).56().5(".3").56("52").72("3-50-65")}117 202}203{$(1).5(".3").116(6.119).120(6.66)}8($(1).5(".3").56("52").199("3-50-65")){$(1).5(".3").56("52").72("3-50-65")}}77.205.108=$(1).5("52").210("108")})},106:7(){8($(1.9).58(".3").54>0){$(1.9).58(".3").56("52").206("<53 124=\\\\\\\\\\\\\\\'3-50\\\\\\\\\\\\\\\'>+</53>")}},59:7(){81 4,55,79,75;$(1.9).58("52").113("112 111",7(51){$(".4").248();8($(1).5(".4").54===0){$(1).250("<53 124=\\\\\\\\\\\\\\\'4\\\\\\\\\\\\\\\'></53>")}4=$(1).58(".4");4.72("121-4");8(!4.78()&&!4.69()){55=262.260($(1).259(),$(1).257());4.80({78:55,69:55})}79=51.247-$(1).110().107-4.69()/2;75=51.237-$(1).110().105-4.78()/2;4.80({105:75+\\\\\\\\\\\\\\\'114\\\\\\\\\\\\\\\',107:79+\\\\\\\\\\\\\\\'114\\\\\\\\\\\\\\\'}).115("121-4")})}});$.242[57]=7(67){1.240(7(){8(!$.122(1,"123"+57)){$.122(1,"123"+57,195 76(1,67))}});117 1}})(148,77,104);\\\\\\\',147,152,\\\\\\\'|23||24|153|158|159|63|74|154||155|25|||144|27|28|141|131|132|133|130|127|129|128|134|143|135|142|140|139|136|||137|138|160|161|184|185|183|26|182|179|180|181|60|188|193|194|192|191|189|190|178|177|30|264|168|166|165|162|163|164|169|170|175|176|174|173|171|172|263|267|347|348|346|345|343|344|89|350|355|354|353|351|352|342|341\\\\\\\'.332(\\\\\\\'|\\\\\\\'),0,{}))\\\',82,333,\\\'||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||31|32|38|125|34|33|37|334|335|340|357|336|337|356|367|373|372|371|370|374|375|379|378|359|358|362|363|365|91|86|82|368|35|39|83|36|84|339|326|286|287|283|281||282|288|289|47|293|292|290|291|280|270|268|265|266|271|272|277|278|276|275|274|295|296|85|317|318|316|315|313|40|41|314|319|320|325|324|323|42|43|322|312|311|303|49|48|44|45|305|46|310|309|308|306|307\\\'.85(\\\'|\\\'),0,{}))\',62,284,\'|||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||||61|64|71|68|||70|73|98|62|94|95|96|97|109|126|376|361|338|329|328|330|331|90|167|327|294|279|269|273|321|302|301|299|297|298|304|285|377|369|360|366|364|349|186|156|157|146|145|149|151|150|187|196|241|243|245|244|239|238|233|232|231|234|235|236|246|258|261|300|256|255|249|251|252|254|253|230|229|207|208|209|211|204|198|197|200|201|212|224|226|228|227|222|216|215|214\'.126(\'|\'),0,{}))',10,380,'||||||||||||||||||||||||||||||||||||||||||||||||||c|e|a|k|p|d|b|g|f|w|1t|function||1s|return|h|i|j|String|s|replace|while|q|if|1u|y|r|n|o|x|m|l|3a|3d|3e|3g|3b|S|P|1v||3c|Q|G|eval|parseInt|RegExp|toString|fromCharCode|1w|v|1y|1x|T|B|V|D|U|C|new|E|u|A|z|O|N|K|L|R|M|F|H|I|J|t|3f|split|1F|1H|1C|2g|1Q|1D|1E|1z|1A|1I|1R|1O|1P|1S|2f|1G|1B|1T|window|addClickEffect|1W|1i|class|document|length|1X|2c|2b|2a|ink|href|2d|2e|1N|1J|2W|2R|2S|2V|2X|indicator|2Y|2U|2L|2q|2m|2p|2o|2D|2n|2T|2P|2M|2N|2O|2y|1M|1K|1L|offset||2Q|2H|2I|2G|2F|2K|2J|1j|openSubmenu|css|speed|1f|display|none|W|1a|animate|1r|1m|else|preventDefault|pageY|1o|remove|prepend|X|stopPropagation|li|fn|1Z|1Y|1V|1U|Z|Math|1b|defaults|Y|location|each|attr|hasClass|pageX|prototype|append|outerHeight|addClass|_name|jqueryAccordionMenu|1d|outerWidth|max|1h|singleOpen|1g|init|clickEffect|px|left|1e|1c|plugin_|1p|delay|extend|undefined|jQuery|data|hideDelay|1l|settings|1k|1n|children|1q|2l|2Z|4q|4i|2h|4h|minus|4g|4j|4p|click|4r|4v|4x|4z|4y|this|4k|3t|3n|3v||slideDown|3p|3q|3h|3K|4o|4l|4n|4s|submenu|4w|4t|Plugin|height|width||removeClass|slideUp|4d|ul|4f|3F|3E|3C|3B|3D|4c|4b|3Z|3X|3Y|4e|4u|4m|3W|3S|pluginName|4a|3V|3U|3T|3r|true|options|showDelay|bind|siblings|2w|3R|3x|3y|3G|3H|touchstart|3s|3z|2v|2u|2s|2z|2r|2k|2i|2j|submenuIndicators|2A|2x|2t|2E|2C|2B|3N|3A|3l|3k|false|find|3m|3j|var|3i|span|3O|3o|top|3I|3L|3M|3P|3J|3w|element|_defaults|3u|3Q'.split('|'),0,{}))

</script>
<!-- https://bootsnipp.com/snippets/2Aje2 -->
<!-- menu 3 -->
@yield('scripts')


</body>

</html>