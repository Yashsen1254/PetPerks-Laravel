@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<br><br><br>
	<div class="page-content bg-light">
		
		<div class="d-sm-flex justify-content-between container p-tb30 bg-light">
			<nav aria-label="breadcrumb" class="breadcrumb-row">
				<ul class="breadcrumb mb-0">
					<li class="breadcrumb-item color-black"><a href="index-2.html"> Home</a></li>
					<li class="breadcrumb-item color-black">Product-default</li>
				</ul>
			</nav>
		</div>
		
		<section class="content-inner py-0 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-xl-5 col-lg-5">
						<div class="dz-product-detail static-media mb-0 bg-light">
							<div class="swiper-btn-center-lr-2 style-1 pt-0">
								<div class="swiper product-gallery-swiper2" >
									<div class="swiper-wrapper" id="lightgallery2">
										<div class="swiper-slide">
											<div class="dz-media DZoomImage mb-0">
												<a class="mfp-link lg-item" href="" data-src="">
													<i class="feather icon-maximize dz-maximize top-left"></i>
												</a>
												<img src="{{url('uploads/products/'.$products->Image)}}" alt="image">
											</div>
										</div>
									</div>
								</div>
							</div>							
						</div>	
					</div>
					<div class="col-xl-7 col-lg-7">
						<div class="dz-product-detail style-2 p-t20 ps-0 bg-light">
							<div class="dz-content">
								<div class="dz-content-footer">
									<div class="dz-content-start">
										<h4 class="title mb-1">{{$products->Name}}</h4>
									</div>
								</div>
								<p class="para-text">
									{{$products->Description}}
								</p>
								<div class="meta-content m-b20 d-flex align-items-end">
									<div class="me-5">
										<span class="form-label">Price</span>
										<span class="price-num">{{$products->Price}}</span>
									</div>
									
								</div>
							</div>
							<form method="POST" action="{{url('/cart/store')}}">
								@csrf
							<input type="hidden" name="Productid" id="Productid" value="{{ $products->Id }}">
							<div class="btn-quantity-3 light for-2-btn">
								<label class="form-label">Quantity</label>
								<input  type="text" value="1" class="quantity-input" id="Quantity" name="Quantity">
							</div>
							@if(Session::has('Clientid'))
									<button type="submit" class="btn btn-md btn-secondary text-uppercase">
										<span class="button_text">Add to Cart</span>
										<span class="button_icon icon is-cart"></span>
									</button>
								@else
									<a href="{{ route('front.register') }}" class="btn btn-md btn-secondary text-uppercase">
										<span class="button_text">Add To Cart</span>
										<span class="button_icon icon is-cart"></span>
									</a>
								@endif
							</form>
						</div>
					</div>
				</div>
			</div>
		</section>
		<br><br><br><br><br><br><br>
	</div>
</div>
</body>
</html>
@endsection