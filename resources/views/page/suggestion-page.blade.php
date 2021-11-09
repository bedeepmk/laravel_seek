@extends('layouts/client/employer')
@section('title', 'suggestion-page')
@section('content')
    <article>
        <section class="section-suggestion-page">
            <div class="suggestion-page-info-box">
                <img src="img/test_img.jpg">
                <div>
                    <p class="text-001">Jeff Sangyub Roh</p>
                    <p class="text-002">Mildura</p>
                    <p class="text-002">+82 10 8999 9384</p>
                    <p class="text-002">norahyoon@gmail.com</p>
                </div>
            </div>
            <div class="suggestion-ad-list-box">
                <p class="text-001">Select a job ad</p>
                <div class="ad-list-table">
                    <form action="" method="post">
                        <ul>
                            <li></li>
                            <li>Title</li>
                            <li>Work type</li>
                            <li>Job location</li>
                            <li></li>
                        </ul>
                        <ul>
                            <li>
                                <div class="checkbox-wrap">
                                    <input id="ad-list-01" name="ad-list-01" type="checkbox">
                                    <label for="ad-list-01"></label>
                                </div>
                            </li>
                            <li>Tanker</li>
                            <li>Casual</li>
                            <li>Mekuk</li>
                            <li>
                                <a class="ad-info-btn" href="">info.</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="checkbox-wrap">
                                    <input id="ad-list-02" name="ad-list-02" type="checkbox">
                                    <label for="ad-list-02"></label>
                                </div>
                            </li>
                            <li>Healer</li>
                            <li>Contract</li>
                            <li>Mildura</li>
                            <li>
                                <a class="ad-info-btn" href="">info.</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="checkbox-wrap">
                                    <input id="ad-list-03" name="ad-list-03" type="checkbox">
                                    <label for="ad-list-03"></label>
                                </div>
                            </li>
                            <li>Dealer</li>
                            <li>Contract</li>
                            <li>Seoul</li>
                            <li>
                                <a class="ad-info-btn" href="">info.</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="checkbox-wrap">
                                    <input id="ad-list-04" name="ad-list-04" type="checkbox">
                                    <label for="ad-list-04"></label>
                                </div>
                            </li>
                            <li>Tanker</li>
                            <li>Casual</li>
                            <li>Indo</li>
                            <li>
                                <a class="ad-info-btn" href="">info.</a>
                            </li>
                        </ul>
                        <ul>
                            <li>
                                <div class="checkbox-wrap">
                                    <input id="ad-list-05" name="ad-list-05" type="checkbox">
                                    <label for="ad-list-05"></label>
                                </div>
                            </li>
                            <li>Tanker</li>
                            <li>Contract</li>
                            <li>Vietnam</li>
                            <li>
                                <a class="ad-info-btn" href="">info.</a>
                            </li>
                        </ul>
                    </form>
                </div>
                <div class="send-suggestion-btn">Send a job offer</div>
            </div>
        </section>
    </article>
@endsection('content')