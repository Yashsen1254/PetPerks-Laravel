@extends('Frontend.layout.main')

@section('content')
<body>
<div class="page-wraper">
	<div class="page-content">
		<section class="px-3">
			<div class="row">
				<div class="col-xxl-6 col-xl-6 col-lg-6 start-side-content-2">
					<div class="dz-bnr-inr-entry">
						<h3>My Account</h3>
						<nav aria-label="breadcrumb text-align-start" class="breadcrumb-row">
							<ul class="breadcrumb">
								<li class="breadcrumb-item"><a href="index-2.html" class="text-black"> Home</a></li>
								<li class="breadcrumb-item color-black">Login</li>
							</ul>
						</nav>	
					</div>
					<div class="registration-media">
						<img src="{{url('Frontend/images/registration/pic3.png')}}" alt="/">
					</div>
				</div>
				<div class="col-xxl-6 col-xl-6 col-lg-6 end-side-content bg-light">
					<div class="login-area">
						<h4 class="text-secondary text-center">Welcome Back</h4>
						<p class="text-center m-b25">welcome please login to your account</p>
						<form action="{{url('/login/store')}}" method="POST">
							@csrf
							<div class="m-b30">
								<label class="label-title">Email Address</label>
								<input class="form-control" placeholder="Email Address" type="email" id="Email" name="Email">
							</div>
							<div class="m-b15">
								<div class="secure-input">
									<label class="label-title">Password</label>
									<input class="form-control dz-password" placeholder="Password" type="password" id="Password" name="Password">
									<div class="show-pass">
										<i class="eye-open fa-regular fa-eye"></i>
									</div>
								</div>	
							</div>
							<div class="text-center">
								<button type="submit" class="btn btn-secondary btnhover text-uppercase me-2">Login</button>
								<a href="./login" class="btn btn-secondary btnhover text-uppercase me-2">Sign In</a>
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