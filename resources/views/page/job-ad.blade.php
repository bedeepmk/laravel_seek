@extends('layouts/client/master')
@section('title', 'job-ad')
@section('content')
	<body class="employer body-grey">
		<article id="job-page">
			<section class="section-employer-prtrait">
				<div class="layout-100">
					<div class="my-page-employer-img"></div>
					<div class="employer-account-info">
						<p class="text-001">norahyoon@gmail.com</p>
						<p class="text-002">-</p>
						<p class="text-002">-</p>
					</div>
                    <a href="" class="button-create-job">create job</a>
				</div>
			</section>
			<section class="section-selector">
                <ul>
                    <li class="selected">Job AD</li>
                    <li>Applied candidates</li>
                    <li>My suggestions</li>
                </ul>
            </section>
			<section class="section-board layout-100">
                <ul class="container-0">
                    <li class="ad-open-page selected">Open</li>
                    <li class="ad-expired-page">Expired</li>
                    <li class="ad-draft-page">Draft</li>
                </ul>
                <div class="board-open">
                    <p class="text-0">0 Open Jobs</p>
                    <div class="table">
                        <ul class="row header">
                            <li>Job</li>
                            <li>Candidates</li>
                            <li>Performance</li>
                            <li>Talent Search</li>
                            <li>Days Remaining</li>
                            <li></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="bump-up-btn">Bump up</button><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="bump-up-btn">Bump up</button><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <!-- <div class="row nothing">You have no open jobs</div> -->
                    </div>
                </div>
                <div class="board-expired displayNone">
                    <p class="text-0">0 Open Jobs</p>
                    <div class="table">
                        <ul class="row header">
                            <li>Job</li>
                            <li>Candidates</li>
                            <li>Performance</li>
                            <li>Talent Search</li>
                            <li>Days Remaining</li>
                            <li></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="re-upload-btn">Reupload</button><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="re-upload-btn">Reupload</button><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <!-- <div class="row nothing">You have no open jobs</div> -->
                    </div>
                </div>
                <div class="board-draft displayNone">
                    <p class="text-0">0 Open Jobs</p>
                    <div class="table">
                        <ul class="row header">
                            <li>Job</li>
                            <li>Candidates</li>
                            <li>Performance</li>
                            <li>Talent Search</li>
                            <li>Days Remaining</li>
                            <li></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <ul class="row item">
                            <li><span class="col">Job</span>asdfasdfasdfasdfasdfasdf</li>
                            <li><span class="col">Candidates</span>asdfasdfadsfasd</li>
                            <li><span class="col">Performance</span>asdfasdfasdf</li>
                            <li><span class="col">Talent Search</span>asdfasdfas</li>
                            <li><span class="col">Days Remaining</span>asdfasdfasdf</li>
                            <li><span class="col"></span><button class="ad-delete-btn">Delete</button></li>
                        </ul>
                        <!-- <div class="row nothing">You have no open jobs</div> -->
                    </div>
                </div>
            </section>
        </article>
	</body>
@endsection('content')
@section('scripts_bottom')
    <script src="{{ asset('js/job-ad-page.js') }}"></script>
@endsection
