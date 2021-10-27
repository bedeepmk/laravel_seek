@extends('layouts/client/master')
@section('title', 'community')
@section('content')
    <article id="community-page">
        <section class="section-selector">
            <ul>
                <li class="selected">News</li>
                <li>Regal issue</li>
                <li>Free board</li>
            </ul>
        </section>
        <section class="section-board layout-100 section-community">
            <div class="community-filter-box">
                <input type="text" placeholder="Buy / Sell">
                <span class="stylesheet gray-arrow"></span>
                <input type="text" placeholder="All location">
                <span class="stylesheet gray-arrow"></span>
                <input type="text" placeholder="All title">
                <span class="stylesheet gray-arrow"></span>
                <input type="text" placeholder="keyword">
                <button></button>
            </div>
            <div class="table">
                <ul class="row header">
                    <li>Job</li>
                    <li>Candidates</li>
                    <li>Performance</li>
                    <li>Talent Search</li>
                    <li>Days Remaining</li>
                </ul>
                <ul class="row item">
                    <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                    <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                    <li><span class="col">Performance</span>asdfasdfasdf</li>
                    <li><span class="col">Talent Search</span>asdfasdfas</li>
                    <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                </ul>
                <ul class="row item">
                    <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                    <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                    <li><span class="col">Performance</span>asdfasdfasdf</li>
                    <li><span class="col">Talent Search</span>asdfasdfas</li>
                    <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                </ul>
                <!-- <div class="row nothing">You have no open jobs</div> -->
            </div>
            <div class="pagination">
                <ul>
                    <li><a href="" class="prev-btn"><<</a></li>
                    <li><a href="" class="pagination-num active">1</a></li>
                    <li><a href="" class="pagination-num">2</a></li>
                    <li><a href="" class="pagination-num">3</a></li>
                    <li><a href="" class="next-btn">>></a></li>
                </ul>
            </div>
        </section>
    </article>
@endsection('content')