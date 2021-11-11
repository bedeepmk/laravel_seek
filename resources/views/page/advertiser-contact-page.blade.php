@extends('layouts/client/contact')
@section('title', 'contact')
@section('content')
	<div class="contact">
		<article id="contact-us-page">
			<section>
				<div class="contact-center">
					<form class="contact-box" type="post">
						<div class="text-001">Contact us</div>
						<div class="text-002">AD type</div>
						<div class="contact-box-ad">
							<input type="text" name="category" id="category" placeholder="category" data-valid-required="true"
							readOnly="readonly" class="category-input">
							<span class="icon stylesheet"></span>
							<div class="ad-select-list displayNone">
								<ul>
									<li class="check-ad" onClick="onChange('Map')">Map AD</li>
									<li class="check-ad" onClick="onChange('Market')">Market AD</li>
									<li class="check-ad" onClick="onChange('Banner')">Banner AD</li>
								</ul>
							</div>
						</div>
						<div class="contact-box-email">
							<p class="text-002">Email address</p>
							<p class="text-003">Please check your email address is correct. It will use it to contact you.</p>
						</div>
						<input type="email" name="email">
						<div class="text-002">Contact number</div>
						<input type="text" name="contact">
						<div class="text-002">Company name</div>
						<input type="text" name="company">
						<button type="submit" class="submit-btn">Submit</button>
					</form>
				</div>
				<div class="contact-center-mobile">
					<form class="contact-box" type="post">
						<div class="text-001">Contact Us</div>
						<div class="contact-box-ad">
							<input type="text" name="category" id="category" placeholder="AD type" data-valid-required="true"
							readOnly="readonly" class="mobile-category-input">
							<span class="icon stylesheet"></span>
							<div class="mobile-ad-select-list displayNone">
								<ul>
									<li class="check-ad" onClick="onChange('Map')">Map AD</li>
									<li class="check-ad" onClick="onChange('Market')">Market AD</li>
									<li class="check-ad" onClick="onChange('Banner')">Banner AD</li>
								</ul>
							</div>
						</div>
						<input type="email" name="email" placeholder="Email address">
						<div class="contact-box-email">
							<p class="text-003">Please check your email address is correct. It will use it to contact you.</p>
						</div>
						<input type="number" name="contact-number" placeholder="Contact number">
						<input type="text" name="company-name" placeholder="Company name">
						<button type="submit" class="submit-btn">Send</button>
					</form>
				</div>
			</section>
		</article>
	</div>
@endsection('content')
@section('scripts_bottom')
	<script src="{{ asset('js/contact.js') }}"></script>
@endsection