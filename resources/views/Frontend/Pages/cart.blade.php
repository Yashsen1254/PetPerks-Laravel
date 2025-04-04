@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
		
	<div class="page-content">
		<!--banner-->
		<div class="dz-bnr-inr" style="background-image:url({{url('Frontend/images/background/bg-shape.jpg')}});">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Cart</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html"> Home</a></li>
							<li class="breadcrumb-item">Cart</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>

		
		<!-- contact area -->
		<section class="content-inner shop-account bg-light">
			<!-- Product -->
			<div class="container">
				<div class="row">
					<div class="col-lg-8">
						<div class="table-responsive">
							<table class="table check-tbl">
								<thead>
									<tr>
										<th></th>
										<th>Product</th>
										<th>Price</th>
										<th>Quantity</th>
										<th>Total</th>
										<th>Remove</th>
									</tr>
								</thead>
								<tbody>
									@foreach($carts as $cart)
										@if($cart->Clientid == session('Clientid') && $cart->isdeleted != 1)
										<tr>
											<td class="product-item-img"><img src="{{asset('uploads/products/'.$cart->Image)}}" alt="/"></td>
											<td class="product-item-name">{{$cart->Name}}</td>
											<td class="product-item-price">{{$cart->Price}}</td>
											<td class="product-item-quantity">
												<input value="{{$cart->Quantity}}" disabled>
											</td>
											<td class="product-item-totle">{{$cart->Price * $cart->Quantity}}</td>
											<td class="product-item-close-2">
												<a class="button is-small is-grey" href="/cart/delete/{{$cart->Id}}">
													<span class="button_icon icon is-delete"></span>
												</a>
											</td>
										</tr>
										@endif
									@endforeach
								</tbody>
							</table>
						</div>
					</div>
					<div class="col-lg-4">
						<h6 class="title mb15 font-20">Cart Total</h6>
						<div class="cart-detail">
							<table>
								<tbody>
									<tr class="total">
										<td>
											<h6 class="mb-0">Total</h6>
										</td>
										<td class="price">
											{{ $carts->reject(function($cart) { return $cart->isdeleted == 1; })->sum(function($cart) { return $cart->Price * $cart->Quantity; }) }}
										</td>
									</tr>
								</tbody>
							</table>
							<a href="./checkout" class="btn btn-secondary w-100">PLACE ORDER</a>
						</div>
					</div>
				</div>
			</div>
			<!-- Product END -->
		</section>
		<!-- contact area End--> 
	
	</div>
</div>
</body>
</html>
@endsection