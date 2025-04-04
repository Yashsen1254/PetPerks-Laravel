@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<div class="page-content bg-white">
		<!--Swiper Banner Start -->
		<div class="main-banner style-1 bg-light"> 
			<div class="container">
				<div class="row">
					<div class="col-xl-7 col-lg-6 order-md-0 d-flex">
						<div class="main-banner-content">
							<div class="content-info">
								<h1 class="title wow pulse">We Give Preference To Your<span class="extra-elements-1 post12"><img src="{{url('Frontend/images/shop/min-3.png')}}" alt="image"></span>Pets</h1>
								<h5 class="sub-title wow fadeInUp m-b45 m-md-b25">No code need. Plus free shipping on <span><a href="#">$99+</a></span> order!</h5>
								<a href="shop-checkout.html" target="_blank" class="btn btn-secondary">Adopt A Pet  
									<svg width="24" height="25" viewBox="0 0 24 25" class="ms-2 pb-1 ms-2" fill="none" xmlns=	"http://www.w3.org/2000/svg">
										<path d="M15.0375 13.0662C14.217 12.2892 13.13 11.8562 12 11.8562C10.87 11.8562 9.78297 12.2892 8.9625 13.0662L5.29875 16.5312C3.19875 18.44 4.71375 22.0887 7.54875 21.9462C9.08625 21.905 10.335 21.1175 11.9962 21.1475C13.7175 21.1175 14.9962 21.8112 16.5412 21.9462C19.3275 22.01 20.7675 18.4025 18.6975 16.5312L15.0375 13.0662Z" fill="white"/>
										<path d="M21.345 7.97375C19.9125 7.6925 18.8175 9.28625 18.5325 10.6587C17.6775 14.9075 21.795 15.7175 22.7588 11.5962C23.1525 9.83 22.53 8.23625 21.345 7.97375Z" fill="white"/>
										<path d="M15.2737 10.2688C16.6987 10.2688 17.8575 8.64876 17.8575 6.66126C17.715 1.87626 12.8325 1.87626 12.6937 6.66126C12.6937 8.64876 13.8525 10.2688 15.2737 10.2688Z" fill="white"/>
										<path d="M5.4675 10.6587C5.18625 9.28625 4.0875 7.6925 2.655 7.97375C-8.34465e-07 8.645 1.125 14.3037 3.72 14.3187C5.19 14.27 5.86875 12.5637 5.4675 10.6587Z" fill="white"/>
										<path d="M8.72625 10.2688C10.1475 10.2688 11.3063 8.64876 11.3063 6.66126C11.1675 1.87626 6.285 1.87626 6.1425 6.66126C6.1425 8.64876 7.30125 10.2688 8.72625 10.2688Z" fill="white"/>
									</svg>
								</a>	
							</div>
							<div class="bnr-content-bx d-flex align-items-center wow fadeInRight">
								<img src="{{url('Frontend/images/shop/dog-01.png')}}" alt="/" class="rounded-2">
								<div class="ms-3">
									<h5 class="mb-1">Our Happy Pat Owner</h5>
									<div class="d-flex align-items-center mb-2">
										<svg width="18" height="17" viewBox="0 0 18 17" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
											<path d="M9 0L11.5392 5.50505L17.5595 6.21885L13.1086 10.335L14.2901 16.2812L9 13.32L3.70993 16.2812L4.89144 10.335L0.440492 6.21885L6.46077 5.50505L9 0Z" fill="#FFAB2B"/>
										</svg>
										<span class="mb-0 text-black me-1 ms-1">4.6 </span>
										<p class="mb-0"> (7.2k reviews)</p>
									</div>	
									<ul class="d-flex bnr-customer-bx align-items-center">
										<li class="ms-0"><a href="#"><img src="{{url('Frontend/images/shop/cli-1.png')}}" alt="/"></a></li>
										<li><a href="javascrit:void(0);"><img src="{{url('Frontend/images/shop/cli-2.png')}}" alt="/"></a></li>
										<li><a href="javascrit:void(0);"><img src="{{url('Frontend/images/shop/cli-3.png')}}" alt="/"></a></li>
										<li><a href="javascrit:void(0);"><img src="{{url('Frontend/images/shop/cli-4.png')}}" alt="/"></a></li>
										<li><a href="javascrit:void(0);" class="extra-icon-box">+6k</a></li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="col-xl-5 col-lg-6  order-md-0 order-1 wow fadeInUp align-self-end" data-wow-delay="0.1s">
						<div class="single-product-media">
							<img src="{{url('Frontend/images/shop/product4.png')}}" alt="/">
							<div class="shape-1">
								<div class="customer-image">
									<img src="{{url('Frontend/images/shop/dog-02.png')}}" alt="/">
								</div>	
								<h6>We Love Dog</h6>
							</div>
							<div class="shape-2">
								<img src="{{url('Frontend/images/shop/line-2.png')}}" alt="/">
								
								<div class="extra-elements-3 post10">
									<img src="{{url('Frontend/images/shop/frame-2.png')}}" alt="/">
								</div>
								
								<div class="extra-elements-2 post11">
									<img src="{{url('Frontend/images/shop/frame-3.png')}}" alt="/">
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="left-text-bar justify-space-betwwen">
				<ul>
					<li>
						<a target="_blank" href="https://www.instagram.com/indiancoder/">INSTAGRAM</a>
					</li>
					<li>
						<a target="_blank" href="https://www.facebook.com/indiancoder">FACEBOOK</a>
					</li>
					<li>
						<a target="_blank" href="https://twitter.com/indiancoders">TWITTER</a>
					</li>
				</ul>
				<a href="contact-us-1.html" target="_blank" class="service-btn btn-dark">LET'S TALK</a>
			</div>
		</div>			
		<!--Swiper Banner End-->
		<!--service section-->
		<section class="content-inner-1 bg-light">
			<div class="container">
				<div class="row">
					<div class="col-lg-4 col-md-12">
						<h2 class="mb-3 wow flipInX">Our Pet Care Services</h2>
						<ul class="service-list me-3 nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
							<li>
								<a href="javascript:void(0);" class="active" id="v-pills-service1-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service1" role="tab" aria-controls="v-pills-service1" aria-selected="true">Pet Grooming
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.73437 16.9505H30.9174L24.2481 10.467C23.7384 9.9719 24.4943 9.18384 25.0107 9.68303C25.0107 9.68299 32.6469 17.1064 32.6469 17.1064C32.8698 17.3093 32.852 17.6756 32.6469 17.8904C32.6469 17.8904 25.0107 25.317 25.0107 25.317C24.4968 25.8102 23.7366 25.0368 24.2481 24.533C24.2481 24.533 30.9199 18.0442 30.9199 18.0442H2.73437C2.03551 18.0376 1.99952 16.9638 2.73437 16.9505Z" fill="black"/>
								</svg>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="v-pills-service2-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service2" role="tab" aria-controls="v-pills-service2" aria-selected="false">Dog Boarding Kennels
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.73437 16.9505H30.9174L24.2481 10.467C23.7384 9.9719 24.4943 9.18384 25.0107 9.68303C25.0107 9.68299 32.6469 17.1064 32.6469 17.1064C32.8698 17.3093 32.852 17.6756 32.6469 17.8904C32.6469 17.8904 25.0107 25.317 25.0107 25.317C24.4968 25.8102 23.7366 25.0368 24.2481 24.533C24.2481 24.533 30.9199 18.0442 30.9199 18.0442H2.73437C2.03551 18.0376 1.99952 16.9638 2.73437 16.9505Z" fill="black"/>
								</svg>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="v-pills-service3-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service3" role="tab" aria-controls="v-pills-service3" aria-selected="false">Dog Training
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.73437 16.9505H30.9174L24.2481 10.467C23.7384 9.9719 24.4943 9.18384 25.0107 9.68303C25.0107 9.68299 32.6469 17.1064 32.6469 17.1064C32.8698 17.3093 32.852 17.6756 32.6469 17.8904C32.6469 17.8904 25.0107 25.317 25.0107 25.317C24.4968 25.8102 23.7366 25.0368 24.2481 24.533C24.2481 24.533 30.9199 18.0442 30.9199 18.0442H2.73437C2.03551 18.0376 1.99952 16.9638 2.73437 16.9505Z" fill="black"/>
								</svg>
								</a>
							</li>
							<li>
								<a href="javascript:void(0);" id="v-pills-service4-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service4" role="tab" aria-controls="v-pills-service4" aria-selected="false">Dog Emergency Services
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.73437 16.9505H30.9174L24.2481 10.467C23.7384 9.9719 24.4943 9.18384 25.0107 9.68303C25.0107 9.68299 32.6469 17.1064 32.6469 17.1064C32.8698 17.3093 32.852 17.6756 32.6469 17.8904C32.6469 17.8904 25.0107 25.317 25.0107 25.317C24.4968 25.8102 23.7366 25.0368 24.2481 24.533C24.2481 24.533 30.9199 18.0442 30.9199 18.0442H2.73437C2.03551 18.0376 1.99952 16.9638 2.73437 16.9505Z" fill="black"/>
								</svg>
								</a>
							</li>
							<li class="border-0 pb-0">
								<a href="javascript:void(0);" id="v-pills-service5-tab" data-bs-toggle="pill" data-bs-target="#v-pills-service5" role="tab" aria-controls="v-pills-service5" aria-selected="false">Walking and sitting
								<svg width="35" height="35" viewBox="0 0 35 35" fill="none" xmlns="http://www.w3.org/2000/svg">
									<path d="M2.73437 16.9505H30.9174L24.2481 10.467C23.7384 9.9719 24.4943 9.18384 25.0107 9.68303C25.0107 9.68299 32.6469 17.1064 32.6469 17.1064C32.8698 17.3093 32.852 17.6756 32.6469 17.8904C32.6469 17.8904 25.0107 25.317 25.0107 25.317C24.4968 25.8102 23.7366 25.0368 24.2481 24.533C24.2481 24.533 30.9199 18.0442 30.9199 18.0442H2.73437C2.03551 18.0376 1.99952 16.9638 2.73437 16.9505Z" fill="black"/>
								</svg>
								</a>
							</li>
						</ul>
					</div>
					
					<div class="col-lg-8 col-md-12 mt-xl-0 mt-5 tab-content" id="v-pills-tabContent">
						<div class="tab-pane fade show active" id="v-pills-service1" role="tabpanel" aria-labelledby="v-pills-service1-tab" tabindex="0">
							<div class="row">
								<div class="col-lg-6 col-md-6 mb-md-0 mb-4">
									<div class="service-content-box">
										<div class="d-flex align-items-center mb-2">
											<svg width="30" height="30" viewBox="0 0 30 30" fill="none" xmlns="http://www.w3.org/2000/svg">
												<g clip-path="url(#clip0_0_369)">
												<path d="M15.8082 21.1336L2.44376 1.87134L2.06611 3.95966C1.45499 7.34642 2.19817 10.7687 4.15946 13.5949L11.2495 23.814C10.7055 25.1461 10.8176 26.716 11.697 27.9836C13.0765 29.9714 15.8178 30.4729 17.8125 29.0891C19.8029 27.708 20.2991 24.9641 18.918 22.9726C18.1698 21.8951 17.0199 21.2737 15.8082 21.1336ZM16.81 27.6455C15.6177 28.4729 13.9691 28.1767 13.1408 26.9811C12.3125 25.7872 12.6102 24.1409 13.8034 23.3118C14.9991 22.4835 16.6452 22.7813 17.4744 23.9745C18.3025 25.1701 18.0048 26.8163 16.81 27.6455Z" fill="black"/>
												<path d="M15.5406 13.6654C17.5026 10.8389 18.246 7.41692 17.634 4.02992L17.2563 1.94183L10.9442 11.0399L14.1534 15.6647L15.5406 13.6654Z" fill="black"/>
												<path d="M5.59546 18.7486L3.89327 21.2018C2.52272 21.3597 1.48063 22.0386 0.782765 23.0431C-0.598995 25.0337 -0.103008 27.7776 1.88826 29.1595C3.87336 30.5381 6.62063 30.0471 8.00376 28.054C8.88335 26.7858 8.99482 25.2155 8.45054 23.8834L8.80416 23.3736L5.59546 18.7486ZM6.5602 27.0515C5.72936 28.2463 4.08141 28.5416 2.89008 27.7158C1.69509 26.8867 1.39823 25.2397 2.22655 24.0456C3.05602 22.8511 4.69619 22.5494 5.89576 23.3823C7.09052 24.2113 7.3883 25.8577 6.5602 27.0515Z" fill="black"/>
												<path d="M27.3633 0H19.4531V1.75781H24.7266V3.51562H19.4531V5.27344H24.7266V7.03125H19.4531V8.78906H24.7266V10.5469H19.4531V12.3047H24.7266V14.0625H19.4531V15.8203H24.7266V17.5781H19.4531V19.3359H24.7266V27.3633C24.7266 28.8171 25.9094 30 27.3633 30C28.8174 30 30 28.8171 30 27.3633V2.63672C30 1.18286 28.8174 0 27.3633 0Z" fill="black"/>
												</g>
												<defs>
												<clipPath id="clip0_0_369">
												<rect width="30" height="30" fill="white"/>
												</clipPath>
												</defs>
											</svg>
											<h5 class="ms-3 mb-0">Pet Grooming</h5>
										</div>	
										<p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
										<a href="shop-checkout.html" class="btn btn-secondary">Add Service  
											<svg width="24" height="25" viewBox="0 0 24 25" fill="none" xmlns=	"http://www.w3.org/2000/svg" class="ms-2">
												<path d="M15.0375 13.0662C14.217 12.2892 13.13 11.8562 12 11.8562C10.87 11.8562 9.78297 12.2892 8.9625 13.0662L5.29875 16.5312C3.19875 18.44 4.71375 22.0887 7.54875 21.9462C9.08625 21.905 10.335 21.1175 11.9962 21.1475C13.7175 21.1175 14.9962 21.8112 16.5412 21.9462C19.3275 22.01 20.7675 18.4025 18.6975 16.5312L15.0375 13.0662Z" fill="white"/>
												<path d="M21.345 7.97375C19.9125 7.6925 18.8175 9.28625 18.5325 10.6587C17.6775 14.9075 21.795 15.7175 22.7588 11.5962C23.1525 9.83 22.53 8.23625 21.345 7.97375Z" fill="white"/>
												<path d="M15.2737 10.2688C16.6987 10.2688 17.8575 8.64876 17.8575 6.66126C17.715 1.87626 12.8325 1.87626 12.6937 6.66126C12.6937 8.64876 13.8525 10.2688 15.2737 10.2688Z" fill="white"/>
												<path d="M5.4675 10.6587C5.18625 9.28625 4.0875 7.6925 2.655 7.97375C-8.34465e-07 8.645 1.125 14.3037 3.72 14.3187C5.19 14.27 5.86875 12.5637 5.4675 10.6587Z" fill="white"/>
												<path d="M8.72625 10.2688C10.1475 10.2688 11.3063 8.64876 11.3063 6.66126C11.1675 1.87626 6.285 1.87626 6.1425 6.66126C6.1425 8.64876 7.30125 10.2688 8.72625 10.2688Z" fill="white"/>
											</svg>
										</a>
									</div>
								</div>
								<div class="col-lg-6 col-md-6">
									<div class="row">
										<div class="col-lg-12 col-md-12 mt-md-0 mt-5">
											<div class="offer-card">
												<img src="{{url('Frontend/images/shop/ser-1.png')}}" alt="/">
												<div class="offer-content">
													<span class="title">50%<br>Sale</span>
													<img src="{{url('Frontend/images/shop/star.jpg')}}" class="rounded-0" alt="/">
												</div>
											</div>
										</div>
										<div class="col-lg-12 col-md-12">			
											<div class="dz-media video-bx1 mt-4">
												<img src="{{url('Frontend/images/shop/ser-2.png')}}" alt="/">
												<a href="https://www.youtube.com/watch?v=ymU8htqPUoc" class="popup-youtube">
													<div class=" video-btn">
														<svg width="26" height="34" viewBox="0 0 26 34" fill="none" xmlns="http://www.w3.org/2000/svg">
															<path d="M0.709318 2.07991C0.703817 0.454314 2.53706 -0.498418 3.86423 0.440304L24.3738 14.947C25.4952 15.7401 25.5017 17.4016 24.3866 18.2035L3.97574 32.8813C2.65517 33.8309 0.813587 32.8908 0.808083 31.2643L0.709318 2.07991Z" fill="black"/>
														</svg>
													</div>
													<span class="title">PLAY VIDEO</span>
												</a>	
											</div>
										</div>	
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</section>
		<!--service section end-->
		
		<!--Recommend Section Start-->
		<section class="content-inner-1 bg-light border-bottom">
			<div class="container">
				<div class="row align-items-end">
					<div class="col-md-9">
						<div class="section-head m-b20 wow fadeInUp">
							<h2 class="title max-w600 wow pulse">Reliable Healthy Food For Your Pet</h2>
						</div>	
						<div class="site-filters clearfix d-flex align-items-center wow fadeInUp" data-wow-delay="0.1s">
							
						</div>
					</div>	
					<div class="col-3">
						<a class="animation-btn style-1 m-b50" href="shop-standard.html">
							<svg width="56" height="56" viewBox="0 0 56 56" fill="none" xmlns="http://www.w3.org/2000/svg">
								<path d="M28 0L34.9296 21.0704L56 28L34.9296 34.9296L28 56L21.0704 34.9296L0 28L21.0704 21.0704L28 0Z" fill="black"/>
							</svg>
							<div class="text-row word-rotate-box c-black border-white">
								<span class="word-rotate"> ALL PRODUCTS . All PRODUCTS . </span>
							</div>
						</a>
					</div>						
				</div>
				<div class="clearfix">
					<ul id="masonry" class="row g-xl-4 g-3">
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp  DogsFood HamsterFood ParrotFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
									<img src="{{url('Frontend/images/shop/pr-1.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html" target="_blank">Dog Body Belt</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$80</h5>
											<del><p class="ms-2 mb-0">$89</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.5</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp  DogsFood HamsterFood ParrotFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-2.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html" target="_blank">Dog Cloths</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$80</h5>
											<del><p class="ms-2 mb-0">$89</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.5</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp DogsFood CatsFood HamsterFood RabbitsFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-3.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Pet Bed For Dog</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$90</h5>
											<del><p class="ms-2 mb-0">$79</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.9</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp DogsFood ParrotFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-4.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Dog Chew Toys</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$89</h5>
											<del><p class="ms-2 mb-0">$79</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.5</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp DogsFood RabbitsFoodHamsterFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-5.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Dog Chew Toys</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$90</h5>
											<del><p class="ms-2 mb-0">$79</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.2</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow DogsFood fadeInUp" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-6.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Dog Chew Toys</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$70</h5>
											<del><p class="ms-2 mb-0">$99</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.9</p>
										</div>
									</div>
								</div>	
							</div>
						</li>	
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp DogsFood RabbitsFood CatsFood HamsterFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-7.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Squeaky Ball Dog Toy</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$50</h5>
											<del><p class="ms-2 mb-0">$79</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.3</p>
										</div>
									</div>
								</div>	
							</div>
						</li>
						<li class="card-container col-sm-6 col-xl-3 col-lg-3 col-md-4 col-sm-6 Begs wow fadeInUp DogsFood RabbitsFood CatsFood HamsterFood" data-wow-delay="0.1s">
							<div class="shop-card">
								<div class="dz-media">
									<a href="./shop">
										<img src="{{url('Frontend/images/shop/pr-8.jpg')}}" alt="image">
									</a>
								</div>
								<div class="product-content">
									<span class="mb-1">Pet Item</span>
									<h6 class="title"><a href="shop-list.html">Dog Small Pillow</a></h6>
									<div class="d-flex justify-content-between align-items-center">
										<div class="d-flex align-items-center">
											<h5 class="mb-0">$60</h5>
											<del><p class="ms-2 mb-0">$99</p></del>
										</div>	
										<div class="d-flex align-items-center">
											<svg width="18" height="19" viewBox="0 0 14 14" fill="none" xmlns="http://www.w3.org/2000/svg" class="mb-1">
												<path d="M7.24805 0.734375L9.22301 5.01608L13.9054 5.57126L10.4436 8.77267L11.3625 13.3975L7.24805 11.0944L3.13355 13.3975L4.0525 8.77267L0.590651 5.57126L5.27309 5.01608L7.24805 0.734375Z" fill="#FF8A00"/>
											</svg>
											<p class="mb-0 ms-1 text-black">4.5</p>
										</div>
									</div>
								</div>	
							</div>
						</li>					
					</ul>					
				</div>	
			</div>	
			
		</section>
		<!--Recommend Section End-->
		
		<!--images section-->
		<div class="container-fluid bg-light content-inner">
			<div class="gallery-wrapper" id="lightgallery2">
				<div class="gallery-col">
					<div class="gallery-item m-b30">
						<div class="insta-post dz-media dz-img-effect overlay-layer post1">
							<a href="{{url('Frontend/images/gallery/gallery-01.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-01-01.jpg')}}" class="lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-01.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="gallery-item m-b30">
						<div class="insta-post dz-media dz-img-effect overlay-layer post2">
							<a href="{{url('Frontend/images/gallery/gallery-02.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-02-02.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-02.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="gallery-item">
						<div class="insta-post dz-media dz-img-effect overlay-layer post3">
							<a href="{{url('Frontend/images/gallery/gallery-03.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-03-03.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-03.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="gallery-item">
						<div class="insta-post dz-media dz-img-effect overlay-layer post4">
							<a href="{{url('Frontend/images/gallery/gallery-04.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-04-04.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-04.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
				</div>
				<div class="gallery-col-2">
					<div class="gallery-item">
						<div class="insta-post dz-media dz-img-effect overlay-layer post5">
							<a href="{{url('Frontend/images/gallery/gallery-05.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-05-05.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-05.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>	
				</div>
				<div class="gallery-col">
					<div class="gallery-item m-b30">
						<div class="insta-post dz-media dz-img-effect overlay-layer post6">
							<a href="{{url('Frontend/images/gallery/gallery-06.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-06-06.jpg')}}" class="dz-media lg-item">
							<img src="{{url('Frontend/images/gallery/gallery-06.jpg')}}" alt="/">
							<i class="meta-icon fa-solid fa-plus"></i>
						</a>
						</div>
					</div>
					<div class="gallery-item m-b30">
						<div class="insta-post dz-media dz-img-effect overlay-layer post7">
							<a href="{{url('Frontend/images/gallery/gallery-01.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-01-01.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-01.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="gallery-item">
						<div class="insta-post dz-media dz-img-effect overlay-layer post8">
							<a href="{{url('Frontend/images/gallery/gallery-07.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-07-07.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-07.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
					<div class="gallery-item">
						<div class="insta-post dz-media dz-img-effect overlay-layer post9">
							<a href="{{url('Frontend/images/gallery/gallery-08.jpg')}}" data-src="{{url('Frontend/images/gallery/gallery-08-08.jpg')}}" class="dz-media lg-item">
								<img src="{{url('Frontend/images/gallery/gallery-08.jpg')}}" alt="/">
								<i class="meta-icon fa-solid fa-plus"></i>
							</a>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--images section End-->
		
		<!-- About Start-->
		<section class="content-inner-2 bg-light sec-left-paw">
			<div class="testimonial-wrapper">
				<div class="container">
					<div class="row about-style1 align-items-center">
						<div class="col-lg-6 m-tb30 wow fadeInUp p-tb30" data-wow-delay="0.3s">
							<div class="p-r70 p-xl-r20">
								<div class="section-head">
									<h2 class="max-w500 wow rotateInDownLeft">What pet lovers say about us?</h2>
								</div>
								<div class="swiper swiper-five">
									<div class="swiper-wrapper">
										<div class="swiper-slide">
											<div class="about-content">
												<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
												<div class="about-bx-detail">
													<div class="about-bx-pic radius">
														<img src="{{url('Frontend/images/testimonial/testimonial4.jpg')}}" alt="">
													</div>
													<div>
														<h6 class="name">Kenneth Fong</h6> 
														<span class="position">Postgraduate Student</span> 
													</div>
												</div>
											</div>
										</div>
										<div class="swiper-slide">
											<div class="about-content">
												<p class="para-text">It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English.</p>
												<div class="about-bx-detail">
													<div class="about-bx-pic radius">
														<img src="{{url('Frontend/images/testimonial/testimonial5.jpg')}}" alt="">
													</div>
													<div>
														<h6 class="name">Joe Do</h6> 
														<span class="position">Undergraduate Student</span> 
													</div>
												</div>
											</div>
										</div>
									</div>
									<div class="pagination-align">
										<div class="about-button-prev btn-prev">
											<i class="flaticon flaticon-left-chevron"></i>
										</div>
										<div class="about-button-next btn-next">
											<i class="flaticon flaticon-chevron"></i>
										</div>
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-6 m-b30 align-self-end">
							<div class="position-relative">
								<div class="about-thumb wow fadeInUp" data-wow-delay="0.1s">
									<img src="{{url('Frontend/images/shop/about-01.png')}}" alt="">
									<svg width="128" height="128" viewBox="0 0 128 128" fill="none" xmlns="http://www.w3.org/2000/svg">
										<g clip-path="url(#clip0_0_427)">
										<path d="M73.5355 57.6145C69.2996 57.4983 65.1802 59.0098 62.0247 61.8381C58.8692 64.6663 56.9175 68.5963 56.5711 72.8196L55.0126 91.6656C53.9257 102.252 67.2888 108.649 74.8489 101.155C79.0391 97.192 80.5552 91.8675 85.2693 87.7933C90.0008 83.4014 95.3081 82.1381 99.9604 78.6482C107.901 71.8525 102.893 58.1744 92.4285 58.1299L73.5355 57.6145Z" fill="#FE8F90"/>
										<path d="M78.4031 27.6068C73.6989 30.4068 74.6301 37.598 77.2695 42.1441C85.5161 56.1486 99.0415 48.1049 91.4177 34.1842C88.0965 28.2664 82.3692 25.3739 78.4031 27.6068Z" fill="#FE8F90"/>
										<path d="M67.1933 49.2113C71.1726 45.6446 70.3537 38.2206 65.3792 32.6705C53.005 19.6651 39.3706 31.8854 50.9595 45.5948C55.934 51.1449 63.2245 52.7685 67.1933 49.2113Z" fill="#FE8F90"/>
										<path d="M40.7855 74.8444C36.5649 71.7156 29.5077 70.0151 26.2114 74.3859C20.4774 82.9055 37.7822 95.8918 45.0662 89.4387C49.0492 85.6233 46.674 79.1598 40.7855 74.8444Z" fill="#FE8F90"/>
										<path d="M48.9095 65.5991C52.8783 62.0418 52.0594 54.6178 47.0849 49.0677C34.7211 36.0529 21.0868 48.2733 32.6652 61.992C37.6397 67.5421 44.9302 69.1657 48.9095 65.5991Z" fill="#FE8F90"/>
										</g>
										<defs>
										<clipPath id="clip0_0_427">
										<rect width="90" height="90" fill="white" transform="translate(0.0913086 60.1606) rotate(-41.8697)"/>
										</clipPath>
										</defs>
									</svg>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>	
		</section>
		<!-- About End -->
	</div>
</div>
@endsection	
</html>