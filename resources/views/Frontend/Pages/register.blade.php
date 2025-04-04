@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<div class="page-content bg-light">
		<section class="px-3">
				<div class="row align-center-center">
					<div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content-2">
						<div class="dz-bnr-inr-entry">
							<h3>My Account</h3>
							<nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
								<ul class="breadcrumb">
									<li class="breadcrumb-item"><a href="index-2.html" class="text-black"> Home</a></li>
									<li class="breadcrumb-item color-black">Registration</li>
								</ul>
							</nav>	
						</div>
						<div class="registration-media">
							<img src="{{url('Frontend/images/registration/pic1.png')}}" alt="/">
						</div>
					</div>
					<div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content">
						<div class="login-area">
							<h4 class="text-secondary text-center">Registration Now</h4>
							<p class="text-center m-b30">Welcome please registration to your account</p>
							<form action="{{url('/register/store')}}" method="POST">
								@csrf
								<div class="m-b25">
									<label class="label-title">Name</label>
									<input class="form-control" placeholder="Name" type="text" id="Name" name="Name">
								</div>
								<div class="m-b25">
									<label class="label-title">Username</label>
									<input class="form-control" placeholder="Username" type="text" id="Username" name="Username">
								</div>
								<div class="m-b25">
									<label class="label-title">Email Address</label>
									<input class="form-control" placeholder="Email Address" type="email" id="Email" name="Email">
								</div>
								<div class="m-b40">
									<div class="secure-input">
										<label class="label-title">Password</label>
										<input class="form-control dz-password" placeholder="Password" type="password" id="Password" name="Password">
									</div>
								</div>
								<div class="text-center">
									<button type="submit" class="btn btn-outline-secondary btnhover text-uppercase">Register</button>
									<a href="/login" class="btn btn-outline-secondary btnhover text-uppercase">Sign In</a>
								</div>
							</form>
						</div>
					</div>
				</div>
			
		</section>
	</div>
</div>
</body>
</html>
@endsection