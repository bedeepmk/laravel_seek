@extends('layouts/client/guide')
@section('title', 'guide')
@section('content')
    <div class="guide">
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
                    <button class="Contact-btn" onClick="contactPage()">Contact us</button>
                </div>
            </section>
        </article>
    </div>
@endsection
@section('scripts_bottom')
    <script src="{{ asset('js/guide.js') }}"></script>
@endsection