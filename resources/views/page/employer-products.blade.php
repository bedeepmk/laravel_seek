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
                    <p class="text-003">'??? ?????? ???????????? ????????????. Melbourne?????? ?????? ???????????? ????????? ????????? ??? ??????????????? ????????? ????????? ????????? ?????? ??? ??? ???????????? ????????????. ?????? ?????? ?????? ??????????????? seeker?????? ?????? ?????? ?????? ??????, ????????? ?????? ??????????????? ?????? resume??? ???????????? ???????????? ??? ??? ????????? ???????????????. ?????? ???????????? enterprise??? ????????? ???????????????. ??????????????? ????????????????????? ????????? ????????? ?????? ????????? ???????????? ??????????????????! ???????????? ?????????!!!'</p>
                    <p class="text-004">Jeff Sangyub Roh, Mildura</p>
                </div>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/product.js') }}"></script>
@endsection