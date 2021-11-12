@extends('layouts/client/employer')
@section('title', 'employer-products')
@section('content')
    <article>
        <section class="section-product-page-info">
            <div class="text-001">Get your job ad noticed by relevant candidates.</div>
            <div class="swiper-container">
                <div class="product-info-box-wrap">
                    <div class="product-info-box">
                        <p class="product-period">30 days</p>
                        <p class="product-class">Classic</p>
                        <p class="product-purchase">299$</p>
                        <p class="text-002">Video resume cannot be viewed</p>
                        <p class="text-002">3 active jobs</p>
                        <p class="text-002">text only job ad</p>
                        <p class="text-002">10 bump-up for job ad</p>
                        <button class="purchase-btn">Select and purchase</button>
                    </div>
                    <div class="product-info-box">
                        <p class="product-period">30 days</p>
                        <p class="product-class">Standard</p>
                        <p class="product-purchase">549$</p>
                        <p class="text-002">Video resume can be viewed</p>
                        <p class="text-002">5 active jobs</p>
                        <p class="text-002">50 resume views</p>
                        <p class="text-002">Company logo & photo job ad</p>
                        <p class="text-002">Highlighted listing</p>
                        <p class="text-002">30 bump-up for job ad</p>
                        <button class="purchase-btn">Select and purchase</button>
                    </div>
                    <div class="product-info-box">
                        <p class="product-period">30 days</p>
                        <p class="product-class">Premium</p>
                        <p class="product-purchase">1499$</p>
                        <p class="text-002">Video resume can be viewed</p>
                        <p class="text-002">10 active jobs</p>
                        <p class="text-002">100 resume views</p>
                        <p class="text-002">Company logo & photo job ad</p>
                        <p class="text-002">Highlighted listing</p>
                        <p class="text-002">100 bump-up for job ad</p>
                        <p class="text-002">Video introduce</p>
                        <p class="text-002">Priority listing on main page</p>
                        <p class="text-002">Mailing service for target candidates</p>
                        <button class="purchase-btn">Select and purchase</button>
                    </div>
                    <div class="product-info-box">
                        <p class="product-period">30 days</p>
                        <p class="product-class">Enterprise</p>
                        <p class="product-purchase">Contact</p>
                        <p class="text-002">Unlimited viewing of videos</p>
                        <p class="text-002">Unlimited active jobs</p>
                        <p class="text-002">Unlimited resume views</p>
                        <p class="text-002">Company logo & photo job ad</p>
                        <p class="text-002">Highlighted listing</p>
                        <p class="text-002">100 bump-up for job ad</p>
                        <p class="text-002">Video introduce</p>
                        <p class="text-002">Priority listing on main page</p>
                        <p class="text-002">Mailing service for target candidates</p>
                        <button class="purchase-btn">Select and purchase</button>
                    </div>
                </div>
            </div>
        </section>
        <section class="section-product-page-comment">
            <div class="product-comment-box">
                <img src="img/test_img.jpg">
                <div>
                    <p class="text-003">'아 정말 선택하길 잘했어요. Melbourne에서 사업 크게하는 노라가 추천해 준 사이트인데 사람을 구하고 있기도 했고 한 번 시험삼아 올려봤죠. 역시 호주 탑독 사이트답게 seeker들도 많이 연락 오게 되고, 해외에 있는 지원자들과 영상 resume와 확인하고 영상통화 할 수 있으니 좋더라고요. 다음 공고에는 enterprise를 신청할 생각이에요. 고용문제로 골칫거리였는데 무제한 이라니 돈이 얼마나 들어가도 상관없다구요! 텤마머니 씩크룻!!!'</p>
                    <p class="text-004">Jeff Sangyub Roh, Mildura</p>
                </div>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection