@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<div class="page-content">
		<!--banner-->
		<div class="dz-bnr-inr" style="background-image:url({{url('Frontend/images/background/bg-shape.jpg')}});">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Checkout</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="/"> Home</a></li>
							<li class="breadcrumb-item">Checkout</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		<!-- inner page banner End-->
		<div class="content-inner-1 bg-light">
			<div class="container">
				<div class="row shop-checkout">
					<div class="col-xl-8">
						<h6 class="title m-b15">Billing details</h6>
						<div class="accordion dz-accordion accordion-sm" id="accordionFaq">
						</div>
						<form class="row" action="{{ url('/checkout/store') }}" method="POST">
							@csrf
							@foreach($carts->where('Clientid', session('Clientid')) as $cart)
								<input type="hidden" name="Cartid" value="{{ $cart->Id }}">
							@endforeach
							<input type="hidden" name="Totalquantity" value="{{ $cart->Quantity }}">
							<input type="hidden" name="Status" value="PENDING">
							<input type="hidden" name="Totalamount" value="{{ $products->sum('Price') * $carts->sum('Quantity') }}">
							<div class="col-md-6">
								<div class="form-group m-b25 m-t10">
									<label class="label-title">Name</label>
									<input class="form-control form-control-2" type="text" id="Name" name="Name" placeholder="Name">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25 m-t10">
									<label class="label-title">Mobile</label>
									<input class="form-control" type="number" id="Mobile" name="Mobile" placeholder="Mobile">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25 m-t10">
									<label class="label-title">Email</label>
									<input class="form-control form-control-2" type="email" id="Email" name="Email" placeholder="Email">
								</div>
							</div>
							<div class="col-md-6">
								<div class="form-group m-b25 m-t10">
									<label class="label-title">Address</label>
									<input class="form-control" type="text" id="Address" name="Address" placeholder="Address">
								</div>
							</div>
					</div>
					<div class="col-xl-4 side-bar">
						<h4 class="title m-b15">Your Order</h4>
						<div class="order-detail sticky-top">
							@foreach($products as $product)
							<div class="cart-item style-1">
								<div class="dz-content">
									<h6 class="title mb-0">{{$product->Name}}</h6>
									<span class="price">{{$product->Price}}</span>
								</div>
							</div>
							@endforeach
							<table>
								<tbody>
									<tr class="total">
										<td>Total</td>
										<td class="price">{{ $products->sum('Price') * $carts->sum('Quantity') }}
									</tr>
								</tbody>
							</table>
							<button class="btn btn-secondary w-100">PLACE ORDER</button>
						</div>
					</div>
				</form>
				</div>
			</div>
		</div>
	</div>
</div>
</body>
</html>
@endsection