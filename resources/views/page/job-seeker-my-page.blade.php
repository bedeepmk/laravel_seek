@extends('layouts/client/job-seeker-my-page')
@section('title', 'job-seeker-my-page')
@section('content')
	<article class="my-page-job-seeker">
		<section class="section-seeker-prtrait">
			<div class="mobile-profile-banner">
				Profile
			</div>
			<div class="layout-100">
				<img class="my-page-seeker-img">
				<div class="seeker-account-info">
					<p class="text-001">norahyoon@gmail.com</p>
					<p class="text-002">-</p>
					<p class="text-002">-</p>
				</div>
				<a href="/apply-history" class="seeker-account-history">Apply history</a>
			</div>
		</section>
		<section class="section-profile-img-modal displayNone">
			<div class="profile-modal-info">
				<div class="text-001">title</div>
				<div class="modal-close-btn"><b></b><b></b><b></b><b></b></div>
				<form method="post" action="" id="employer-profile-img">
					<img src="img/default.png" id="img-preview">
					<div class="btn-select-box">
						<label class="browse-btn" for="profile-img">Browse</label>
						<input class="img-input" type="file" id="profile-img" accept=".jpg, .png, .gif, .bmp, .jpeg">
						<div class="delete-btn img-delete-btn">Delete</div>
						<div class="save-btn img-save-btn">Save</div>
					</div>
				</form>
			</div>
		</section>
		<section class="seeker-wrap">
			<div class="seeker-info-left">
				<div class="step-box">
					<div>step 1</div>
					<div><span class="star-img-w"></span>star is aquirment for each step</div>
				</div>
				<div class="step-01">
					<div>
						<p class="text-001">Name(first/Last name)<span class="star-img-p"></span></p>
						<p class="text-002">Add your name.</p>
					</div>
					<div>
						<p class="text-001">Phone number<span class="star-img-p"></span></p>
						<p class="text-002">Add your phone number.</p>
					</div>
					<div>
						<p class="text-001">Lives in<span class="star-img-p"></span></p>
						<p class="text-002">Add your location.</p>
					</div>
					<div>
						<p class="text-001">Email<span class="star-img-p"></span></p>
						<p class="text-002">Add your e-mail.</p>
					</div>
					<div><a class="add-personal-details" onClick="addPersonalDetails()">Add personal details</a></div>
				</div>
				<div class="step-01-1 displayNone">
					<form method="POST" name="personal-data" action="" accept-charset="utf-8">
						<p class="edit-personal-title">Edit personal details</p>
						<div>
							<p class="text-001">First name<span class="star-img-p"></span></p>
							<input type="text" name="first-name">
						</div>
						<div>
							<p class="text-001">Last name<span class="star-img-p"></span></p>
							<input type="text" name="last-name">
						</div>
						<div>
							<p class="text-001">Phone number<span class="star-img-p"></span></p>
							<ul class="phone-box">
								<li>
									<span class="icon stylesheet gray-arrow"></span>
									<select class="number-select" name="country-code">
										<option>Austraila (+61)</option>
										<option>Austraila (+61)</option>
										<option>Austraila (+61)</option>
										<option>Austraila (+61)</option>
										<option>Austraila (+61)</option>
										<option>Austraila (+61)</option>
									</select>
								</li>
								<li>
									<span class="country-code-data">+61 </span>
									<input class="number-input" name="tel" type="tel" placeholder="Enter phone number">
								</li>
							</ul>
						</div>
						<div class="lives-box">
							<p class="text-001">Lives in<span class="star-img-p"></span></p>
							<span class="icon stylesheet gray-arrow"></span>
							<select class="location-select" name="location">
								<option>Sydney</option>
								<option>a</option>
								<option>s</option>
								<option>b</option>
								<option>f</option>
							</select>
						</div>
						<div>
							<p class="text-001">Email<span class="star-img-p"></span></p>
							<input type="email" name="email">
						</div>
						<div>
							<a class="save-btn" type="submit" onClick="postDetails()">Save</a>
							<a class="cancel-btn" onClick="closeDetails()">Cancel</a>
						</div>
					</form>
				</div>
				<div class="step-box">
					<div>step 2</div>
					<div><span class="star-img-w"></span>star is aquirment for each step</div>
				</div>
				<div class="step-02">
					<div class="left-info">
						<div class="left-info-box info-summery">
							<p class="text-001">Personal Summary<span class="star-img-p"></span></p>
							<ul class="item-list-box">
								<li>
									<p class="text-002">
										Add a personal summary to your profile as a way to introduce who you are.
									</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addSummery()">Add Summary</a>
						</div>
						<div class="left-info-box add-summery displayNone">
							<p class="text-001">Add Personal Summary<span class="star-img-p"></span></p>
							<form method="post" name="post-summery" action="" accept-charset="utf-8">
								<textarea id="summery" name="summery"></textarea>
								<div class="save-btn" type="submit" onClick="postSummery()">Save</div>
								<a class="cancel-btn" onClick="closeSummery()">Cancel</a>
							</form>
						</div>
						<div class="left-info-box info-history">
							<p class="text-001">Career history</p>
							<ul class="item-list-box">
								<li>
									<p class="text-002">Add your career history</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addHistory()">Add role</a>
						</div>
						<div class="left-info-box add-role displayNone">
							<p class="text-001">Add role</p>
							<form method="POST" name="post-role" action="" accept-charset="utf-8">
								<p class="text-003">Job title</p>
								<input type="text" name="job-title" class="job-title">
								<p class="text-003">Company name</p>
								<input type="text" name="company" class="company-name">
								<div class="role-info-box">
									<p class="text-003">Started</p>
									<span class="icon stylesheet gray-arrow"></span>
									<input type="text" class="start-month" placeholder="Month">
									<span class="icon stylesheet gray-arrow"></span>
									<input type="text" class="start-year" placeholder="Year">
									<br><br>
									<p class="text-003">Ended</p>
									<span class="icon stylesheet gray-arrow"></span>
									<input type="text" class="end-month" placeholder="Month">
									<span class="icon stylesheet gray-arrow"></span>
									<input type="text" class="end-year" placeholder="Year">
									<div class="checkbox-wrap">
										<input id="still-in-role" name="still-in-role" type="checkbox"><label for="still-in-role">Still in role</label>
									</div>
								</div>
								<p class="text-003">Description<span class="text-gray">(recommended)</span></p>
								<textarea class="role-description"></textarea>
								<div class="save-btn" type="submit" onClick="postHistory()">Save</div>
								<a class="cancel-btn" onClick="closeHistory()">Cancel</a>
							</form>
						</div>
						<div class="left-info-box info-skills">
							<p class="text-001">Skills</p>
							<ul class="item-list-box">
								<!-- <li>
									<p class="text-002">Let employers know how valuable you can be to them.</p>
								</li> -->
								<li>
									<p class="text-002">Truck Driver</p>
									<div class="item-delete-btn">delete</div>
								</li>
							</ul>
							<a class="add-btn" onClick="addSkills()">Add skills</a>
						</div>
						<div class="left-info-box add-skills displayNone">
							<p class="text-001">Add Skills</p>
							<p class="text-004">Help employers find you by showcasing all of your skills.</p>
							<form method="POST" name="post-skills" action="" accept-charset="utf-8">
								<p class="text-003">Add new skill</p>
								<div class="add-skill-box">
									<input type="text" placeholder="e.g. Team bilding">
									<span class="add-skill-btn">Add</span>
								</div>
								<p class="text-gray">Click add or press enter</p>
								<p class="text-003">Added skills</p>
								<p class="text-gray">No skills have been added</p>
								<div class="save-btn" type="submit" onClick="postSkills()">Save</div>
								<a class="cancel-btn" onClick="closeSkills()">Cancel</a>
							</form>
						</div>
						<div class="left-info-box info-resume">
							<p class="text-001">Resume</p>
							<ul>
								<li>
									<p class="text-002">
										Upload a resume for easy applying and access no matter where you are.
									</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addResume()">Add Resume</a>
						</div>
						<div class="left-info-box add-resume displayNone">
							<p class="text-001">Resume</p>
							<p class="text-002">Add up to 10 resumes. Accepted file type: Microsoft Word(.doc or .docx), Adobe PDF(.pdf) or text file(.txt or .rtf). 2MB file size limit.</p>
							<p>
								<form method="POST" id="post-resume" name="post-resume" action="" enctype="multipart/form-data">
									<div id="drop-zone" class="drop-zone">
										<p>img area</p>
										<p id="fileDragDesc">To add a resume, drag and drop here or simply browse for a file.</p>
										<label class="browse-btn" for="resume">Browse</label>
										<input type="file" id="resume" multiple="multiple" accept=".doc, .docx, .pdf, .txt, .rtf">
										<table id="fileListTable" width="100%" border="0px">
											<tbody id="fileTableTbody">
							
											</tbody>
										</table>
									</div>
									<div class="save-btn" type="submit" onClick="postResume()">Save</div>
									<a class="cancel-btn" onClick="closeResume()">Cancel</a>
								</form>
							</p>
						</div>
					</div>
					<div class="middle-info">
						<div class="middle-info-box info-work">
							<p class="text-001">Right to work<span class="star-img-p"></span></p>
							<ul>
								<li>
									<p class="text-002">Add your visa information.</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addWork()">Add visa</a>
						</div>
						<div class="middle-info-box add-work displayNone">
							<p class="text-001">Add Right to work<span class="star-img-p"></span></p>
							<p>
							<form method="post" name="post-work" action="" accept-charset="utf-8">
								<p class="text-003">Visa Type</p>
								<span class="icon stylesheet gray-arrow"></span>
								<select class="visa-type">
									<option value="">test1</option>
									<option value="">test2</option>
									<option value="">test3</option>
									<option value="">test4</option>
								</select>
								<p class="text-003">Expiration Date</p>
								<div class="expiration-date">
									<input class="check-date" name="date" placeholder="DD">
									<span class="icon stylesheet gray-arrow"></span>
									<input class="check-month" name="month" placeholder="MM">
									<span class="icon stylesheet gray-arrow"></span>
									<input class="check-year" name="year" placeholder="YYYY">
									<span class="calendar-btn">calendar img</span>
								</div>	
								<div class="save-btn" type="submit" onClick="postWork()">Save</div>
								<a class="cancel-btn" onClick="closeWork()">Cancel</a>
							</form>
							</p>
						</div>
						<div class="middle-info-box info-education">
							<p class="text-001">Education</p>
							<ul>
								<li>
									<p class="text-002">Tell employers about your education.</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addEducation()">Add education</a>
						</div>
						<div class="middle-info-box add-education displayNone">
							<p class="text-001">Add Education</p>
							<p>
								<form method="POST" name="post-education" action="" accept-charset="utf-8">
									<p class="text-003">Institution</p>
									<input type="text" name="institution" class="institution">
									<p class="text-003">Course or qualification</p>
									<input type="text" name="qualification" class="qualification">
									<div class="education-info-box">
										<div class="checkbox-wrap">
											<input id="qualification-complete" name="qualification-complete" type="checkbox"><label for="qualification-complete">Qualification complete</label>
										</div>
										<div class="blank-box"></div>
										<p class="text-003">Expected finish (optional)</p>
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="option-month" placeholder="Month">
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="option-year" placeholder="Year">
										<div class="checkbox-wrap">
											<input id="education-still-in-role" name="education-still-in-role" type="checkbox"><label for="education-still-in-role">Still in role</label>
										</div>
									</div>
									<p class="text-003">Course highlights<span class="text-gray">(optional)</span></p>
									<textarea class="course-highlight"></textarea>
									<div class="save-btn" type="submit" onClick="postEducation()">Save</div>
									<a class="cancel-btn" onClick="closeEducation()">Cancel</a>
								</form>
							</p>
						</div>
						<div class="middle-info-box info-languages">
							<p class="text-001">Languages</p>
							<ul>
								<li>
									<p class="text-002">Add languages to appeal to more companies and employers.</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addLanguages()">Add language</a>
						</div>
						<div class="middle-info-box add-languages displayNone">
							<p class="text-001">Add Languages</p>
							<p>
								<form method="POST" name="post-language" action="" accept-charset="utf-8">
									<p class="text-003">Language</p>
									<input type="text">
									<div class="save-btn" type="submit" onClick="postLanguages()">Save</div>
									<a class="cancel-btn" onClick="closeLanguages()">Cancel</a>
								</form>
							</p>
						</div>
						<div class="middle-info-box info-licence">
							<p class="text-001">Licences</p>
							<ul>
								<li>
									<p class="text-002">
										Showcase your professional credentials. Add your relevant licences, certificates,
										memberships and accreditations here.
									</p>
								</li>
							</ul>
							<a class="add-btn" onClick="addLicence()">Add licences</a>
						</div>
						<div class="middle-info-box add-licence displayNone">
							<p class="text-001">Licences</p>
							<p class="text-004">Showcase your licences, certificates, memberships and accreditations.</p>
							<p>
								<form method="POST" name="post-licence" action="" accept-charset="utf-8">
									<p class="text-003">Licence name</p>
									<input type="text" id="licence-name" name="licence-name" placeholder="e.g. Drivers Licence">
									<p class="text-003">Issuing organisation<span class="text-gray">(optional)</span></p>
									<input type="text" id="organisation" name="organisation">
									<div class="licence-info-box">
										<p class="text-003">Issue date<span class="text-gray">(optional)</span></p>
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="issue-month" placeholder="Month">
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="issue-year" placeholder="Year">
										<br><br>
										<p class="text-003 text-005">Expiry date<span class="text-gray">(recommended)</span></p>
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="recommend-month" placeholder="Month">
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" class="recommend-year" placeholder="Year">
										<div class="checkbox-wrap">
											<input id="expiry-still-in-role" name="expiry-still-in-role" type="checkbox"><label for="expiry-still-in-role">No expiry</label>
										</div>
									</div>
									<p class="text-003 text-005">Description<span class="text-gray">(recommended)</span></p>
									<textarea class="licence-description"></textarea>
									<div class="save-btn" type="submit" onClick="postLicence()">Save</div>
									<a class="cancel-btn" onClick="closeLicence()">Cancel</a>
								</form>
							</p>
						</div>
					</div>
					<div class="right-info">
						<div class="preferences">
							<div class="preferences-title">About your next role</div>
							<div class="preferences-info">
								<p>Availability</p>
								<p>Not specified</p>
								<p>Preferred work types</p>
								<p>Not specified</p>
								<p>Preferred loaction</p>
								<p>All Melbourne</p>
								<p>Salary expectation</p>
								<p>Not specified</p>
								<p>Classification of interest</p>
								<p>Design & Industrial Design</p>
								<p>Approachability</p>
								<p>Show</p>
							</div>
							<div><a class="preferences-btn" onClick="addPreference()">Add or edit preferences</a></div>
						</div>
						<div class="add-preference displayNone">
							<p class="text-001">About your next role</p>
							<form method="POST" name="add-next-role" action="" accept-charset="utf-8">
								<div class="availability-wrap">
									<p class="text-002">Availability</p>
									<div class="availability-box">
										<span class="icon stylesheet gray-arrow"></span>
										<input class="availability" type="text" placeholder="Select availability">
									</div>
									<p class="text-002">Preferred work types</p>
									<div class="preference-box">
										<div class="checkbox-wrap">
											<input id="full-time" name="full-time" type="checkbox"><label for="full-time">Full time</label>
										</div>
										<div class="checkbox-wrap">
											<input id="part-time" name="part-time" type="checkbox"><label for="part-time">Part time</label>
										</div>
										<div class="checkbox-wrap">
											<input id="contract" name="contract" type="checkbox"><label for="contract">Contract</label>
										</div>
										<div class="checkbox-wrap">
											<input id="casual" name="casual" type="checkbox"><label for="casual">Casual</label>
										</div>
									</div>
									<div class="location-text-box">
										<p class="text-002">Preferred location</p>
										<p class="text-002">All Melbourne<span class="star-img-p"></span></p>
									</div>
									<div class="location-select-box">
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" readonly="readonly" placeholder="Select location">
										<span class="icon stylesheet gray-arrow"></span>
										<input type="text" readonly="readonly" placeholder="Select sub-location">
									</div>
								</div>
								<div class="salary-expectation">
									<p class="text-002">Salary expectation</p>
									<p class="text-003">Your expected base salary will help you to be found by relevant employers.</p>
									<p class="text-002">Australia</p>
									<div class="expectation-box">
										<span class="icon stylesheet gray-arrow"></span>
										<span class="icon stylesheet gray-arrow"></span>
										<span class="aud-amount">AUD</span>											
										<input class="aud" id="aud" type="text" readonly="readonly" placeholder="Enter amount">
										<input class="annual" id="annual"type="text" readonly="readonly" placeholder="Annual">
									</div>
									<p class="text-005">Preferred classification</p>
									<div class="classification-box">
										<p class="text-004">Classification</p>
										<span class="icon stylesheet gray-arrow"></span>
										<input class="classification" id="classification" type="text" placeholder="Select Classification">
										<p class="text-004">Sub-classification</p>
										<span class="icon stylesheet gray-arrow"></span>
										<input class="sub-classification" id="sub-classification" type="text" placeholder="Select sub-classification">
									</div>
									<div class="save-btn" type="submit" onClick="postPreference()">Save</div>
									<a class="cancel-btn" onClick="closePreference()">Cancel</a>
								</div>
							</form>
						</div>
					</div>
				</div>
				<div class="step-box">
					<div>step 3</div>
					<div><span class="star-img-w"></span>star is aquirment for each step</div>
				</div>
				<div class="step-03">
					<div class="video-resume">
						<div class="video-resume-info">
							<p class="text-001">Video Resume<span class="star-img-p"></span></p>
							<p class="text-003">Add your video resume</p>
							<p><a class="add-btn" onClick="addVideoResume()">Add Resume</a></p>
						</div>
						<div class="video-resume-wrap">
							<div class="video-resume-box"></div>
							<div class="video-resume-box"></div>
							<div class="video-resume-box"></div>
							<div class="video-resume-box"></div>
							<div class="video-resume-box"></div>
						</div>
					</div>
					<div class="add-video-resume displayNone">
						<div class="add-video-resume-info">
							<form method="POST" name="post-video-resume" action="" accept-charset="utf-8">
								<p class="text-001">Add Video Resume<span class="star-img-p"></span></p>
								<label class="browse-btn" for="add-resume">Browse</label>
								<input type="file" id="add-resume" multiple>
								<a class="cancel-btn" onClick="closeVideoResume()">Cancel</a>
							</form>
						</div>
						<div class="modify-video-resume-box">
							<video class="preview-video" preload="metadata"></video>
							<div class="modify-resume-info-box">
								<p class="video-resume-title">strawberry picker</p>
								<p class="delete-resume-btn">delete</p>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="seeker-info-right">
				<div class="profile-1">
					<div class="profile-1-left">
						<div class="text-001">Profile visibility</div>
						<p class="text-002">Your profile visibility setting controls if employers can approach you with job opportunities.</p>
					</div>
					<div class="profile-1-right">
						<div class="text-wrap">
							<div class="text-001">Limited</div>
							<div class="text-select">Select<span class="icon stylesheet"></span></div>
						</div>
						<p class="text-003">For all settings, your Profile including any verified credentials will be sent to the employer with your applications.</p>
						<p><a class="text-004">Learn more about visibility</a></p>
					</div>
				</div>
				<div class="profile-2">
					<div class="strength-box">
						<div class="text-001">Profile Strength</div>
						<div class="text-center">
							<span class="star stylesheet"></span>
							<ul id="progress">
								<li><span class="square type1"></span></li>
								<li>
									<span class="square type2"></span>
									<span class="square type1"></span>
								</li>
								<li><span class="square type2"></span></li>
							</ul>
							<p></p>
						</div>
					</div>
					<div class="text-002">abcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyzabcdefghijklmnopqrstuvwxyz</div>
				</div>
			</div>
		</section>
	</article>
@endsection('content')
@section('scripts_bottom')
	<script src="{{ asset('js/job-seeker-my-page.js') }}"></script>
	<script src="{{ asset('js/drag-and-drop.js') }}"></script>
	<script src="{{ asset('js/modal.js') }}"></script>
@endsection