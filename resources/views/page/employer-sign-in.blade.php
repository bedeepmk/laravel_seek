@extends('layouts/client/employer-sign')
@section('title', 'employer-sign')
@section('content')
	<article class="employer-login-page">
		<section class="jobSeeker">
			<div class="jobSeeker_login">
				<div class="signRegiBox">
					<button onClick="signClick()" class="jobSeeker_sign selected">Sign in</button>
					<button onClick="regiClick()" class="jobSeeker_register">Register</button>
				</div>
				<div class="signRegi_wrap">
					<form method="POST" name="sign" class="login_sign" action="">
						<div class="text-001">Sign in</div>
						<div class="text-002">Email address</div>
						<input type="email" />
						<div class="pw-wrap">
							<div class="text-002">Password</div>
							<div class="text-003"><a href="">Forgot password?</a></div>
						</div>
						<input type="password" />
						<div style="display: none"></div>
						<button type="submit" class="sign_btn">Sign in</button>
					</form>
					<form method="POST" name="resister" class="login_register displayNone" action="">
						<div class="text-001">Register</div>
						<div class="email-wrap">
							<p class="text-002">Email address</p><br>
							<p class="text-005">Please check your email address is correct. It will use it to contact you.</p>
						</div>
						<input type="email" />
						<p class="text-002">Password</p>
						<input type="password" class="isBottomText" />
						<p class="text-005">8 characters or more<br>
							By registering you agree to seekcruit’s <a href="">Privacy Statement</a></p>
						<button type="submit" class="sign_btn">Register</button>
					</form>
				</div>
			</div>
			<div class="jobSeeker_login_mobile">
				<form method="POST" name="sign" class="mobile-login_sign" action="">
					<div class="text-001">Sign in</div>
					<input type="email" placeholder="Email address">
					<input type="password" placeholder="Password">
					<button type="submit" class="sign_btn">Sign in</button>
					<div class="pw-wrap">
						<p class="text-002">Don't have an account? <a onclick="mobileRegiClick()">Register</a></p>
						<p class="text-003"><a href="">Forgot password?</a></p>
					</div>
				</form>
				<form method="POST" name="resister" class="mobile-login_register displayNone" action="">
					<div class="text-001">Register</div>
					<input type="email" placeholder="Email address">
					<p class="text-002">Please check your email address is correct. It will use it to contact you.</p>
					<input type="password" placeholder="Password">
					<div class="pw-wrap">
						<p class="text-002">
							8 characters or more<br>
							By registering you agree to seekcruit’s <a href="">Privacy Statement</a>
						</p>
					</div>
					<button type="submit" class="sign_btn" onclick="mobileSignClick()">Register</button>
				</form>
			</div>
		</section>
	</article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/login.js') }}"></script>
@endsection