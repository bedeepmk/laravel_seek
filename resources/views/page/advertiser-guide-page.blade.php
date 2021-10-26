<!DOCTYPE html>
<html lang="en">
	<head>
		<title>seekcruit</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"
		/>
		<meta name="title" content="seekcruit" />
		<meta name="format-detection" content="telephone=no" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
        <link rel="stylesheet" type="text/css" href="css/shim.css" />
        <script src="js/guide.js"></script>
	</head>
	<body>
		<div class="guide">
			<nav class="guide-nav">
				<div class="nav-back">
					<a href="/"><h1 class="logo-white">seekcruit</h1></a>
					<p class="text-1">Advertiser</p>
					<button class="nav-Contact-btn" onClick="contactPage()">Contact Us</button>
				</div>
			</nav>
			<nav class="isMobile guide-mobile-nav">
				<div class="image-back-drop"></div>
				<ul class="container-5">
					<li class="selected"><a href="">Job Search</a></li>
					<li><a href="">Profile</a></li>
					<li><a href="">Seekcruit Guide</a></li>
					<li class="isMarket"><a>Market</a></li>
					<li><a href="">Community</a></li>
					<li class="underline"></li>
					<li class="outside"><a href="">Sign in or Register</a></li>
					<li class="outside"><a href="">Employer site</a></li>
					<li class="underline"></li>
					<li class="outside"><a href="">Advertiser page</a></li>
				</ul>
			</nav>
			<article id="guide-page">
				<section class="guide-form">
                    <div class="guide-ad">
                        <div class="ad-info" onClick="mapAdClick()">
                            <p class="ad-info-bar-green"></p>
                            <div class="ad-info-title">Map AD</div>
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div class="ad-info-content">지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.</div>
                        </div>
                        <div class="ad-info" onClick="marketAdClick()">
                            <p class="ad-info-bar-purple"></p>
                            <div class="ad-info-title">Market AD</div>
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div class="ad-info-content">마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.</div>
                        </div>
                        <div class="ad-info" onClick="bannerAdClick()">
                            <p class="ad-info-bar-dark"></p>
                            <div class="ad-info-title">Banner AD</div>
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div class="ad-info-content">배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.</div>
                        </div>
                    </div>
                    <div class="guide-ad-info">
                        <div class="arrow-up"></div>
						<div class="arrow-up2"></div>
                        <div class="map-ad-info">
                            <div>
                                <img src="img/test_img.jpg" class="ad-info-img">
                            </div>
                            <div>
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                            </div>
                        </div>
                        <div class="market-ad-info displayNone">
                            <div>
                                <img src="img/test_img.jpg" class="ad-info-img">
                            </div>
                            <div>
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                            </div>
                        </div>
                        <div class="banner-ad-info displayNone">
                            <div>
                                <img src="img/test_img.jpg" class="ad-info-img">
                            </div>
                            <div>
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="Contact-btn" onClick="contactPage()">Contact Us</button>
                    </div>
                </section>
				<section class="guide-form-mobile">
					<div class="guide-ad">
                        <div class="ad-info map-ad-info-title" onClick="mobileMapADClick()">
							Map AD
                        </div>
                        <div class="ad-info market-ad-info-title" onClick="mobileMarketADClick()">
                            Market AD
                        </div>
                        <div class="ad-info banner-ad-info-title" onClick="mobileBannerADClick()">
                            Banner AD
                        </div>
                    </div>
					<div class="ad-info-box">
						<div class="map-ad-info-box">
							<img src="img/test_img.jpg" class="ad-info-img">
							<div class="ad-info-content">지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.</div>
						</div>
						<div class="market-ad-info-box displayNone">
							<img src="img/test_img.jpg" class="ad-info-img">
                            <div class="ad-info-content">마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.</div>
						</div>
						<div class="banner-ad-info-box displayNone">
							<img src="img/test_img.jpg" class="ad-info-img">
                            <div class="ad-info-content">배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.</div>
						</div>
					</div>
                    <div class="guide-ad-info-mobile">
                        <div class="arrow-up3"></div>
						<div class="arrow-up4"></div>
                        <div class="map-ad-info-mobile">
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div>
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                                지도 광고를 이용하면 제휴업체의 위치와 혜택을 게재할 수 있으며 제휴업체의 위치와 혜택을 게재할 수 있고 또 제휴업체의 위치와 혜택을 게재할 수 있습니다.
                            </div>
                        </div>
                        <div class="market-ad-info-mobile displayNone">
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div>
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                                마켓 광고를 이용하면 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다. 또 원하는 광고와 글을 게재할 수 있으며 상단에 노출 시킬 수 있습니다.
                            </div>
                        </div>
                        <div class="banner-ad-info-mobile displayNone">
                            <img src="img/test_img.jpg" class="ad-info-img">
                            <div>
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                                배너 광고를 이용하면 원하는 게시물을 메인페이지나 혹은 잡서치의 원하는 위치에 노출시킬 수 있으며 보다 효율적인 배너광고의 효과를 볼 수 있습니다.
                            </div>
                        </div>
                    </div>
                    <div>
                        <button class="Contact-btn" onClick="contactPage()">Contact Us</button>
                    </div>
				</section>
			</article>
			<footer>
				<div class="container-0">
					<a href="" class="button-adv layout-100">
						<img src="img/image-adv-0.png" />
						<span>apple store</span>
						<span>google play</span>
					</a>
				</div>
				<div class="container-1 layout-100">
					<div class="icon-0 stylesheet"></div>
					<a href="5.html" class="guideBtn">Advertiser page</a>
					<ul class="united-list-parent">
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
						<li class="list-parent">
							<ul class="united-list-child">
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
								<li class="list-child"><a href="">sitemap guide</a></li>
							</ul>
						</li>
					</ul>
				</div>
			</footer>
		</div>
	</body>
</html>
