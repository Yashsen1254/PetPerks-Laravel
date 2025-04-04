@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<div class="page-content bg-light">
		<!--banner-->
		<div class="dz-bnr-inr style-1" style="background-image:url(images/background/bg-shape.jpg);">
			<div class="container">
				<div class="dz-bnr-inr-entry">
					<h1>Shop Style 1</h1>
					<nav aria-label="breadcrumb" class="breadcrumb-row">
						<ul class="breadcrumb">
							<li class="breadcrumb-item"><a href="index-2.html"> Home</a></li>
							<li class="breadcrumb-item">Shop Standard</li>
						</ul>
					</nav>
				</div>
			</div>
		</div>
		
		<section class="content-inner-1 z-index-unset">
			<div class="container">
				<div class="row m-auto gx-xl-4 mb-xl-0 mb-md-0 mb-3">
					@foreach($products as $product)
					<div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 m-b30">
						<div class="shop-card">
							<div class="dz-media">
								<img src="{{url('uploads/products/'.$product->Image)}}" alt="image">
								<div class="shop-meta">
									<a href="{{url('/singleproduct/'.$product->Id)}}" class="meta-icon dz-wishicon">
										<svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
											<path d="M21 9.25001H18.401L14.624 3.58401C14.394 3.23901 13.927 3.14501 13.584 3.37601C13.239 3.60601 13.146 4.07101 13.376 4.41601L16.599 9.25001H7.401L10.624 4.41601C10.854 4.07101 10.761 3.60601 10.416 3.37601C10.071 3.14601 9.606 3.23901 9.376 3.58401L5.599 9.25001H3C2.586 9.25001 2.25 9.58601 2.25 10C2.25 10.414 2.586 10.75 3 10.75H3.385L4.943 18.539C5.199 19.82 6.333 20.75 7.64 20.75H16.361C17.668 20.75 18.801 19.82 19.058 18.539L20.616 10.75H21.001C21.415 10.75 21.751 10.414 21.751 10C21.751 9.58601 21.414 9.25001 21 9.25001ZM17.586 18.245C17.469 18.827 16.954 19.25 16.36 19.25H7.64C7.046 19.25 6.531 18.827 6.414 18.245L4.915 10.75H19.085L17.586 18.245Z" fill="black"/>
											<path d="M14.75 14V16C14.75 16.414 14.414 16.75 14 16.75C13.586 16.75 13.25 16.414 13.25 16V14C13.25 13.586 13.586 13.25 14 13.25C14.414 13.25 14.75 13.586 14.75 14ZM10 13.25C9.586 13.25 9.25 13.586 9.25 14V16C9.25 16.414 9.586 16.75 10 16.75C10.414 16.75 10.75 16.414 10.75 16V14C10.75 13.586 10.414 13.25 10 13.25Z" fill="black"/>
										</svg>
									</a>
								</div>
							</div>
							<div class="product-content">
								<h6 class="title"><a href="shop-list.html">{{$product->Name}}</a></h6>
								<div class="d-flex justify-content-between align-items-center">
									<div class="d-flex align-items-center">
										<h5 class="mb-0">{{$product->Price}}</h5>
									</div>	
								</div>
							</div>	
						</div>
					</div>
					@endforeach
				</div>
			</div>
		</section>
	</div>
</div>
</body>

</html>
@endsection