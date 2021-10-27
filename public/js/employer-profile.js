// pc
function addCompanyName() {
	document.querySelector('.add-company-name').classList.add('displayNone');
	document.querySelector('.insert-company-name').classList.remove('displayNone');
}
function cancelCompanyName() {
	document.querySelector('.add-company-name').classList.remove('displayNone');
	document.querySelector('.insert-company-name').classList.add('displayNone');
}

function addCompanyEmail() {
	document.querySelector('.add-company-email').classList.add('displayNone');
	document.querySelector('.insert-company-email').classList.remove('displayNone');
}
function cancelCompanyEmail() {
	document.querySelector('.add-company-email').classList.remove('displayNone');
	document.querySelector('.insert-company-email').classList.add('displayNone');
}

function addBusinessNumber() {
	document.querySelector('.add-business-number').classList.add('displayNone');
	document.querySelector('.insert-business-number').classList.remove('displayNone');
}
function cancelBusinessNumber() {
	document.querySelector('.add-business-number').classList.remove('displayNone');
	document.querySelector('.insert-business-number').classList.add('displayNone');
}

function addContactNumber() {
	document.querySelector('.add-contact-number').classList.add('displayNone');
	document.querySelector('.insert-contact-number').classList.remove('displayNone');
}
function cancelContactNumber() {
	document.querySelector('.add-contact-number').classList.remove('displayNone');
	document.querySelector('.insert-contact-number').classList.add('displayNone');
}

function addLocation() {
	document.querySelector('.add-location').classList.add('displayNone');
	document.querySelector('.insert-location').classList.remove('displayNone');
}
function cancelLocation() {
	document.querySelector('.add-location').classList.remove('displayNone');
	document.querySelector('.insert-location').classList.add('displayNone');
}

function addLogo() {
	document.querySelector('.add-logo').classList.add('displayNone');
	document.querySelector('.insert-logo').classList.remove('displayNone');
}
function cancelLogo() {
	document.querySelector('.add-logo').classList.remove('displayNone');
	document.querySelector('.insert-logo').classList.add('displayNone');
}

function addSummary() {
	document.querySelector('.add-company-summary').classList.add('displayNone');
	document.querySelector('.insert-company-summary').classList.remove('displayNone');
}
function cancelSummary() {
	document.querySelector('.add-company-summary').classList.remove('displayNone');
	document.querySelector('.insert-company-summary').classList.add('displayNone');
}

// mobile
function addCompanyNameMobile() {
	document.querySelector('.mobile-add-company-name').classList.add('displayNone');
	document.querySelector('.mobile-insert-company-name').classList.remove('displayNone');
}
function cancelCompanyNameMobile() {
	document.querySelector('.mobile-add-company-name').classList.remove('displayNone');
	document.querySelector('.mobile-insert-company-name').classList.add('displayNone');
}

function addCompanyEmailMobile() {
	document.querySelector('.mobile-add-company-email').classList.add('displayNone');
	document.querySelector('.mobile-insert-company-email').classList.remove('displayNone');
}
function cancelCompanyEmailMobile() {
	document.querySelector('.mobile-add-company-email').classList.remove('displayNone');
	document.querySelector('.mobile-insert-company-email').classList.add('displayNone');
}

function addBusinessNumberMobile() {
	document.querySelector('.mobile-add-business-number').classList.add('displayNone');
	document.querySelector('.mobile-insert-business-number').classList.remove('displayNone');
}
function cancelBusinessNumberMobile() {
	document.querySelector('.mobile-add-business-number').classList.remove('displayNone');
	document.querySelector('.mobile-insert-business-number').classList.add('displayNone');
}

function addContactNumberMobile() {
	document.querySelector('.mobile-add-contact-number').classList.add('displayNone');
	document.querySelector('.mobile-insert-contact-number').classList.remove('displayNone');
}
function cancelContactNumberMobile() {
	document.querySelector('.mobile-add-contact-number').classList.remove('displayNone');
	document.querySelector('.mobile-insert-contact-number').classList.add('displayNone');
}

function addLocationMobile() {
	document.querySelector('.mobile-add-location').classList.add('displayNone');
	document.querySelector('.mobile-insert-location').classList.remove('displayNone');
}
function cancelLocationMobile() {
	document.querySelector('.mobile-add-location').classList.remove('displayNone');
	document.querySelector('.mobile-insert-location').classList.add('displayNone');
}

function addLogoMobile() {
	document.querySelector('.mobile-add-logo').classList.add('displayNone');
	document.querySelector('.mobile-insert-logo').classList.remove('displayNone');
}
function cancelLogoMobile() {
	document.querySelector('.mobile-add-logo').classList.remove('displayNone');
	document.querySelector('.mobile-insert-logo').classList.add('displayNone');
}

function addSummaryMobile() {
	document.querySelector('.mobile-add-company-summary').classList.add('displayNone');
	document.querySelector('.mobile-insert-company-summary').classList.remove('displayNone');
}
function cancelSummaryMobile() {
	document.querySelector('.mobile-add-company-summary').classList.remove('displayNone');
	document.querySelector('.mobile-insert-company-summary').classList.add('displayNone');
}

function openCompanyName() {
	document.querySelector('.m-company-name-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-company-name-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-company-name-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-company-name-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-company-name-text').style.backgroundColor = 'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-company-name-text').style.borderBottom = 'none';
	}
}

function openCompanyEmail() {
	document.querySelector('.m-company-email-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-company-email-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-company-email-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-company-email-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-company-email-text').style.backgroundColor = 'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-company-email-text').style.borderBottom = 'none';
	}
}

function openBusinessNumber() {
	document.querySelector('.m-business-number-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-business-number-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-business-number-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-business-number-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-business-number-text').style.backgroundColor =
			'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-business-number-text').style.borderBottom = 'none';
	}
}

function openContactNumber() {
	document.querySelector('.m-contact-number-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-contact-number-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-contact-number-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-contact-number-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-contact-number-text').style.backgroundColor =
			'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-contact-number-text').style.borderBottom = 'none';
	}
}

function openLocation() {
	document.querySelector('.m-location-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-location-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-location-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-location-text').style.borderBottom = '2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-location-text').style.backgroundColor = 'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-location-text').style.borderBottom = 'none';
	}
}

function openCompanyLogo() {
	document.querySelector('.m-company-logo-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-company-logo-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-company-logo-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-company-logo-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-company-logo-text').style.backgroundColor = 'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-company-logo-text').style.borderBottom = 'none';
	}
}

function openCompanySummary() {
	document.querySelector('.m-company-summary-wrap').classList.toggle('displayNone');
	if (document.querySelector('.m-company-summary-wrap').classList.contains('displayNone')) {
		document.querySelector('.m-company-summary-text').style.backgroundColor = '#FFF';
		document.querySelector('.m-company-summary-text').style.borderBottom =
			'2px solid rgba(0, 0, 0, 0.05)';
	} else {
		document.querySelector('.m-company-summary-text').style.backgroundColor =
			'rgba(98, 0, 238, 0.1)';
		document.querySelector('.m-company-summary-text').style.borderBottom = 'none';
	}
}