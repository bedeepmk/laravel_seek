// please add var


// step-01
function addPersonalDetails() {
	document.querySelector('.step-01').classList.add('displayNone');
	document.querySelector('.step-01-1').classList.remove('displayNone');
}
// post event add
function postDetails() {
	alert('detail change success!');
	document.querySelector('.step-01-1').classList.add('displayNone');
	document.querySelector('.step-01').classList.remove('displayNone');	
}

function closeDetails() {
	document.querySelector('.step-01-1').classList.add('displayNone');
	document.querySelector('.step-01').classList.remove('displayNone');	
}

// step-02 left-info
function addSummery() {
	document.querySelector('.info-summery').classList.add('displayNone');
	document.querySelector('.add-summery').classList.remove('displayNone');
}
function closeSummery() {
	document.querySelector('.info-summery').classList.remove('displayNone');
	document.querySelector('.add-summery').classList.add('displayNone');
}
function postSummery() {
	alert('summery change success!');
	document.querySelector('.info-summery').classList.remove('displayNone');
	document.querySelector('.add-summery').classList.add('displayNone');	
}

function addHistory() {
	document.querySelector('.info-history').classList.add('displayNone');
	document.querySelector('.add-role').classList.remove('displayNone');
}
function closeHistory() {
	document.querySelector('.info-history').classList.remove('displayNone');
	document.querySelector('.add-role').classList.add('displayNone');
}
function postHistory() {
	alert('history change success!');
	document.querySelector('.info-history').classList.remove('displayNone');
	document.querySelector('.add-role').classList.add('displayNone');	
}

function addSkills() {
	document.querySelector('.info-skills').classList.add('displayNone');
	document.querySelector('.add-skills').classList.remove('displayNone');
}
function closeSkills() {
	document.querySelector('.info-skills').classList.remove('displayNone');
	document.querySelector('.add-skills').classList.add('displayNone');
}
function postSkills() {
	alert('skill change success!');
	document.querySelector('.info-skills').classList.remove('displayNone');
	document.querySelector('.add-skills').classList.add('displayNone');	
}

function addResume() {
	document.querySelector('.info-resume').classList.add('displayNone');
	document.querySelector('.add-resume').classList.remove('displayNone');
}
function closeResume() {
	document.querySelector('.info-resume').classList.remove('displayNone');
	document.querySelector('.add-resume').classList.add('displayNone');
}
function postResume() {
	alert('resume change success!');
	document.querySelector('.info-resume').classList.remove('displayNone');
	document.querySelector('.add-resume').classList.add('displayNone');	
}
// step-02 middle-info
function addWork() {
	document.querySelector('.info-work').classList.add('displayNone');
	document.querySelector('.add-work').classList.remove('displayNone');
}
function closeWork() {
	document.querySelector('.info-work').classList.remove('displayNone');
	document.querySelector('.add-work').classList.add('displayNone');
}
function postWork() {
	alert('work change success!');
	document.querySelector('.info-work').classList.remove('displayNone');
	document.querySelector('.add-work').classList.add('displayNone');	
}

function addEducation() {
	document.querySelector('.info-education').classList.add('displayNone');
	document.querySelector('.add-education').classList.remove('displayNone');
}
function closeEducation() {
	document.querySelector('.info-education').classList.remove('displayNone');
	document.querySelector('.add-education').classList.add('displayNone');
}
function postEducation() {
	alert('education change success!');
	document.querySelector('.info-education').classList.remove('displayNone');
	document.querySelector('.add-education').classList.add('displayNone');	
}

function addLanguages() {
	document.querySelector('.info-languages').classList.add('displayNone');
	document.querySelector('.add-languages').classList.remove('displayNone');
}
function closeLanguages() {
	document.querySelector('.info-languages').classList.remove('displayNone');
	document.querySelector('.add-languages').classList.add('displayNone');
}
function postLanguages() {
	alert('languages change success!');
	document.querySelector('.info-languages').classList.remove('displayNone');
	document.querySelector('.add-languages').classList.add('displayNone');	
}

function addLicence() {
	document.querySelector('.info-licence').classList.add('displayNone');
	document.querySelector('.add-licence').classList.remove('displayNone');
}
function closeLicence() {
	document.querySelector('.info-licence').classList.remove('displayNone');
	document.querySelector('.add-licence').classList.add('displayNone');
}
function postLicence() {
	alert('licence change success!');
	document.querySelector('.info-licence').classList.remove('displayNone');
	document.querySelector('.add-licence').classList.add('displayNone');	
}
// step-02 right-info
function addPreference() {
	document.querySelector('.preferences').classList.add('displayNone');
	document.querySelector('.add-preference').classList.remove('displayNone');
}
function closePreference() {
	document.querySelector('.preferences').classList.remove('displayNone');
	document.querySelector('.add-preference').classList.add('displayNone');
}
function postPreference() {
	alert('preferences change success!');
	document.querySelector('.preferences').classList.remove('displayNone');
	document.querySelector('.add-preference').classList.add('displayNone');	
}

function addGender() {
	document.querySelector('.info-gender').classList.add('displayNone');
	document.querySelector('.add-gender').classList.remove('displayNone');
}
function closeGender() {
	document.querySelector('.info-gender').classList.remove('displayNone');
	document.querySelector('.add-gender').classList.add('displayNone');
}
function postGender() {
	alert('gender change success!');
	document.querySelector('.info-gender').classList.remove('displayNone');
	document.querySelector('.add-gender').classList.add('displayNone');	
}

// step-03
function addVideoResume() {
	document.querySelector('.video-resume').classList.add('displayNone');
	document.querySelector('.add-video-resume').classList.remove('displayNone');
}
function closeVideoResume() {
	document.querySelector('.video-resume').classList.remove('displayNone');
	document.querySelector('.add-video-resume').classList.add('displayNone');
}
function postVideoResume() {
	alert('video-resume change success!');
	document.querySelector('.video-resume').classList.remove('displayNone');
	document.querySelector('.add-video-resume').classList.add('displayNone');	
}
var height = $('.seeker-info-right').outerHeight(true)
var height2 = ''
var change = 0

$(function () {
	if ($('html').outerWidth(true) <= '768') {
		$('.cl1').on('click', function() {
			$('.cl1').toggleClass('clicked')
			$('.seeker-info-right .profile-1 .profile-1-left .text-002').slideToggle('fast')
			height2 = $('.seeker-info-right').outerHeight(true)
			console.log('height = ', height)
			console.log('height2 = ', height2)
			if (height != height2){
				marginTop(height2)
			}
		})

		$('.cl2').on('click', function() {
			$('.cl2').toggleClass('clicked')
			$('.limited-text-box').slideToggle('fast')
			height2 = $('.seeker-info-right').outerHeight(true)
			console.log('height = ', height)
			console.log('height2 = ', height2)
			if (height != height2){
				marginTop(height2)
			}
		})

	}
})

function marginTop(height) {
	if (height == 228) {
		$('.seeker-info-left').css({marginTop: '240px'})
	} else if (height >= 261 & height < 300) {
		$('.seeker-info-left').css({marginTop: '280px'})
	} else if (height >= 342) {
		$('.seeker-info-left').css({marginTop: '360px'})
	} else {
		$('.seeker-info-left').css({marginTop: '160px'})
	}
}
// function setHeight(right, left) {
// 	var objSet = document.getElementsByClassName(right);
// 	var objHeight = document.getElementsByClassName(left).offsetHeight;
// 	$(objSet).css({marginTop: objHeight})
// }
// 기본 : 160
// 227 첫번째 하나 -> 240
// 261 두번째 하나 -> 280
// 342 두개 다 -> 360