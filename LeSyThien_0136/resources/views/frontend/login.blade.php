<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" href="{{ asset('./public/bootstrap/css/bootstrap.min.css') }}">
	<link rel="stylesheet" href="{{ asset('./public/fontawesome/css/all.min.css') }}">
	<link rel="stylesheet" href="{{ asset('./public/css/style3.css') }}">


	<!--
    - google font link
  -->
	<link rel="preconnect" href="https://fonts.googleapis.com">
	<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
	<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>
<a href="{{route('home.index')}}">
		<button class="action-btn" style=" position: absolute;top: 10px; right: 10px; padding: 10px; z-index: 1000;">
			<ion-icon name="log-out-outline"></ion-icon>
		</button>
</a>
<body>

	<div class="section">
		<div class="container">
			<div class="row full-height justify-content-center">
				<div class="col-12 text-center align-self-center py-5">
					<div class="section pb-5 pt-5 pt-sm-2 text-center">
						<h6 class="mb-0 pb-3"><span>Log In </span><span>Sign Up</span></h6>
						<input class="checkbox" type="checkbox" id="reg-log" name="reg-log" />
						<label for="reg-log"></label>
						<div class="card-3d-wrap mx-auto">
							<div class="card-3d-wrapper">
								<div class="card-front">
									<div class="center-wrap">
										<div class="section text-center">
											<div style="display: flex; justify-content: center;">
												<h4 class="mb-4 pb-3">Log In</h4>

											</div>
											<form action="{{ route("website.dologin") }}" method="post">
												@csrf
												<div class="form-group">
													<span> <i class="fa fa-user" style="position: absolute;left: 15px; top: 50%; transform: translateY(-50%);"></i>

														<input type="text" name="username" class="form-style" placeholder="Your Email" id="username" autocomplete="off">
														<i class="input-icon uil uil-at"></i>
													</span>
												</div>

												<div class="form-group mt-2">
													<span style="position: relative;">
														<input type="password" name="password" class="form-style" placeholder="Your Password" id="login-password" autocomplete="off">
														<i style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%);" class="fa fa-key"></i>
														<i style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%);" class="fa fa-eye toggle-password" toggle="#login-password"></i>
													</span>
												</div>

												<button type="submit" class="btn mt-4">Submit</button>
											</form>
											<p class="mb-0 mt-4 text-center"><a href="#0" class="link">Forgot your
													password?</a></p>
										</div>
									</div>
								</div>
								<div class="card-back">
									<div class="center-wrap">
										<div class="section ">
											<h4 class="mb-4 pb-3">Sign Up</h4>
											<form action="{{ route("website.signup") }}" method="post">
												@csrf
												<div class="form-group">
													<span> <i class="fa fa-user" style="position: absolute;left: 15px; top: 50%; transform: translateY(-50%);"></i>

														<input value="{{ old('name') }}" type="text" name="name" class="form-style" placeholder="Nhập tên của bạn" id="logname" autocomplete="off">
													</span>
												</div>
												<div class="form-group mt-2">
													<span> <i class="fa fa-user" style="position: absolute;left: 15px; top: 50%; transform: translateY(-50%);"></i>

														<input value="{{ old('username') }}" type="text" name="username" class="form-style" placeholder="Nhập đăng nhập bạn" id="logname" autocomplete="off">
												</div>
												</span>
												<div class="form-group mt-2">
													<span> <i class="fa fa-at" style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%);"></i>
														<input value="{{old('email')}}" type="email" name="email" class="form-style" placeholder="nhập email của bạn" autocomplete="off">
													</span>
												</div>

												<div class="form-group mt-2">
													<span style="position: relative;">
														<input type="password" name="password" class="form-style" placeholder="Nhập mật khẩu đăng nhập" id="signup-password" autocomplete="off">
														<i style="position: absolute; left: 15px; top: 50%; transform: translateY(-50%);" class="fa fa-key"></i>
														<i style="position: absolute; right: 15px; top: 50%; transform: translateY(-50%);" class="fa fa-eye toggle-password" toggle="#signup-password"></i>
													</span>
												</div>

												<div class="text-center">
													<button type="submit" class="btn mt-4">Submit</button>
												</div>
											</form>

										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
	<script type="module" src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.esm.js"></script>
	<script nomodule src="https://unpkg.com/ionicons@5.5.2/dist/ionicons/ionicons.js"></script>
	<script src="{{ asset('public/jquery/jquery-3.7.0.min.js') }}"></script>
	<script src="{{ asset('public/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

	<script src="{{ asset('public/assets/script.js') }}"></script>
	@push('scripts')
	<script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>
	@if(Session::has('success'))<script>
		toastr.success("{!! Session::get('success') !!}");
	</script>
	@endif
	@if(Session::has('warning'))<script>
		toastr.warning("{!! Session::get('warning') !!}");
	</script>
	@endif
	@endpush
	<script>
		$(document).ready(function() {
			$('.toggle-password').click(function() {
				$(this).toggleClass('fa-eye fa-eye-slash');
				var input = $($(this).attr('toggle'));
				if (input.attr('type') === 'password') {
					input.attr('type', 'text');
				} else {
					input.attr('type', 'password');
				}
			});
		});
	</script>
</body>

</html>