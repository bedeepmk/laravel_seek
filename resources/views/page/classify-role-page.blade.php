<!DOCTYPE html>
<html lang="en">
	<head>
		<title>seekcruit</title>
		<meta http-equiv="Content-Type" content="text/html" charset="utf-8" />
		<meta
			name="viewport"
			content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0"
		/>
		<meta name="title" content="seekcruit" />
		<meta name="format-detection" content="telephone=no" />
        <script type="text/javascript" src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
        <script type="text/javascript" src="js/jquery-ui.min.js"></script>
		<link rel="stylesheet" type="text/css" href="css/common.css" />
		<link rel="stylesheet" type="text/css" href="css/shim.css" />
        <script src="js/drag-and-drop.js"></script>
        <script src="js/modal.js"></script>
	</head>
	<body class="employer-create-job">
		<nav class="employer-create-job-nav">
            <div class="container-0">
                <a href="/"><h1 class="stylesheet">seekcruit</h1></a>
                <p class="text-1">Employer</p>
                <p class="text-0">
					<a class="isMypage" href="/login">nora yoon<span></span>
					<a class="isSignOut" href="/employer">Sign out</a>
				</p>
            </div>
            <ul class="container-1 layout-100">
                <li><a href="">Home</a></li>
                <li><a href="">Recruit</a></li>
                <li class="selected"><a href="">Job AD</a></li>
                <li><a href="">Seekcruit Guide</a></li>
                <li><a href="">Products</a></li>
            </ul>
        </nav>
		<article id="create-job-page">
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
            <section class="create-job-wrap">
                <div class="text-001">Classify your role</div>
                <form method="POST" action="" name="classify-role">
                    <div class="classify-role-box-wrap">
                        <div class="classify-role-box">
                            <p class="text-002">Role information</p>
                            <p class="text-003">Job title</p>
                            <input type="text" name="job-title" class="job-title">
                            <p class="text-003">Job Location<span class="text-004">(Suburb or town)</span></p>
                            <input type="text" name="job-location" class="job-location">
                            <p class="text-003">Work type</p>
                            <div class="work-type-check-box">
                                <p>
                                    <input type="radio" id="full-time" name="radio-group-1" checked>
                                    <label for="full-time">Full-time</label>
                                </p>
                                <p>
                                    <input type="radio" id="part-time" name="radio-group-1">
                                    <label for="part-time">Part-time</label>
                                </p>
                                <p>
                                    <input type="radio" id="contract" name="radio-group-1">
                                    <label for="contract">Contract</label>
                                </p>
                                <p>
                                    <input type="radio" id="casual" name="radio-group-1">
                                    <label for="casual">Casual</label>
                                </p>
                            </div>
                            <p class="text-003">Job category</p>
                            <select>
                                <option>All Categories</option>
                                <option>All Categories</option>
                                <option>All Categories</option>
                                <option>All Categories</option>
                                <option>All Categories</option>
                            </select>
                        </div>
                        <div class="classify-role-box">
                            <p class="text-002">Pay details</p>
                            <p class="text-003">Pay type</p>
                            <div class="pay-type-check-box">
                                <p>
                                    <input type="radio" id="annual-salary" name="radio-group-2" checked>
                                    <label for="annual-salary">Annual-salary</label>
                                </p>
                                <p>
                                    <input type="radio" id="hourly-rate" name="radio-group-2">
                                    <label for="hourly-rate">Hourly-rate</label>
                                </p>
                                <p>
                                    <input type="radio" id="annual-commission" name="radio-group-2">
                                    <label for="annual-commission">Annual and commission</label>
                                </p>
                            </div>
                            <p class="text-003">Pay range ($AUD)</p>
                            <div class="pay-range-box">
                                <p>
                                    <input type="text" id="pay-minimum" placeholder="Minimum">
                                </p>
                                <p>to</p>
                                <p>
                                    <input type="text" id="pay-maximum" placeholder="Maximum">
                                </p>
                            </div>
                            <div class="switch-btn-box">
                                <label class="switch-button">
                                    <input type="checkbox" id="hide-salary-switch">
                                    <span class="onOff-switch"></span>
                                </label>
                                <span class="switch-label">Hide salary on your ad</span>
                            </div>
                            <p class="text-003">Pay shown on your ad<span class="text-004">(optional)</span></p>
                            <input type="text" id="pay-shown-optional">
                            <p class="text-004">E.g. $50,000 + annual bonus</p>
                        </div>
                    </div>
                    <div class="classify-role-box-wrap">
                        <div class="classify-role-box">
                            <p class="text-002">Job description</p>
                            <p class="text-003">Enter your job details or let us guide you through what to write</p>
                            <textarea id="job-description"></textarea>
                        </div>
                        <div class="classify-role-box">
                            <p class="text-002">Government Certification Number<span class="text-004">(optional)</span></p>
                            <div class="certification-check-box">
                                <p>
                                    <input type="radio" id="certification-yes" name="radio-group-3" checked>
                                    <label for="certification-yes">Yes</label>
                                </p>
                                <p>
                                    <input type="radio" id="certification-no" name="radio-group-3">
                                    <label for="certification-no">No</label>
                                </p>
                                <input type="text" id="certification-option">
                            </div>
                        </div>
                        <div class="classify-role-box">
                            <div class="candidate-search-results">
                                <p class="text-002">Candidate search results</p>
                                <p class="text-003">Job summary</p>
                                <p class="text-004">Write a punchy statement about your role to entice candidates to look at your ad</p>
                                <textarea></textarea>
                            </div>
                        </div>
                        <div class="video-modal-box">
                            <div class="classify-role-box">
                                <p class="text-002">Video<span class="text-004">(optional)</span></p>
                                <div id="drop-zone" class="drop-zone">
                                    <p id="fileDragDesc">To add a video, drag and drop here or simply browse for a file.</p>
                                    <label class="browse-btn" for="resume">Browse</label>
                                    <input type="file" id="resume" multiple="multiple" accept=".doc, .docx, .pdf, .txt, .rtf">
                                    <table id="fileListTable" width="100%" border="0px">
                                        <tbody id="fileTableTbody">
                                            
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                            <div class="classify-role-box">
                                <p class="text-002">Work category icon</p>
                                <button class="modal-open-btn">+</button>
                                <div class="icon-modal">
                                    <div class="icon-modal-content">
                                        <div class="icon-modal-title-box">
                                            <p>select</p>
                                            <div class="close-btn-box">
                                                <div class="modal-close-btn"><b></b><b></b><b></b><b></b></div>
                                            </div>
                                        </div>
                                        <div class="icon-modal-list">
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                            <div>
                                                <img src="img/test_img.jpg">
                                                <p>javascript</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
                <div class="create-job-btn-box">
                    <button type="submit" class="save-btn">Save</button>
                    <button class="draft-btn">Draft</button>
                    <button class="cancel-btn">Cancel</button>
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
	</body>
</html>
