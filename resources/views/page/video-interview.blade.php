@extends('layouts/client/employer')
@section('title', 'video-interview')
@section('content')
    <article>
        <section class="section-video-interview-page">
            <div class="interview-info-left">
                <div class="interview-info-box">
                    <img src="img/test_img.jpg">
                    <div>
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <p class="text-002">Mildura</p>
                        <p class="text-002">+82 10 8999 9384</p>
                        <p class="text-002">norahyoon@gmail.com</p>
                    </div>
                </div>
                <div class="interview-select-box">
                    <div class="interview-select-box-01">
                        <p class="text-002">Select a day for video interview</p>
                        <input type="text" placeholder="Day">
                        <span></span>
                        <input type="text" placeholder="Month">
                        <span></span>
                        <input type="text" placeholder="Year">
                        <span></span>
                    </div>
                    <div class="interview-select-box-02">
                        <p class="text-002">Address for interview url</p>
                        <input type="text" placeholder="http://norahbaboda.interview/057465123256833435">
                        <button>copy</button>
                    </div>
                    <div class="interview-select-box-03">
                        <p class="text-002">Address for time</p>
                        <input type="text" placeholder="Hour">
                        <span></span>
                        <input type="text" placeholder="Min">
                        <span></span>
                    </div>
                </div>
                <div class="interview-btn-wrap">
                    <button class="interview-preview-btn">Preview</button>
                    <button class="interview-send-btn">Send message</button>
                </div>
            </div>
        </section>
        <section class="section-interview-popup displayNone">
            <div class="interview-info-right">
                <div class="close-btn-box">
                    <div class="modal-close-btn"><b></b><b></b><b></b><b></b></div>
                </div>
                <div class="interview-info-box">
                    <img src="img/test_img.jpg">
                    <div>
                        <p class="text-001">Jeff Sangyub Roh</p>
                        <p class="text-002">Mildura</p>
                        <p class="text-002">+82 10 8999 9384</p>
                        <p class="text-002">norahyoon@gmail.com</p>
                    </div>
                </div>
                <div class="interview-schedule-box">
                    <p class="text-003">Interview schedule</p>
                    <p class="text-004">Date : 11/10/2021</p>
                    <p class="text-004">Time : 18:30(gst+)</p>
                    <p class="text-004">URL for interview :</p>
                    <p class="text-005">http://norahbaboda.interview/057465123256833435</p>
                </div>
                <button class="interview-send-btn">Send message</button>
            </div>
        </section>
    </article>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/modal.js') }}"></script>
@endsection
