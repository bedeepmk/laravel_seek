function mapAdClick() {
	document.querySelector('.map-ad-info').classList.remove('displayNone');
	document.querySelector('.market-ad-info').classList.add('displayNone');
	document.querySelector('.banner-ad-info').classList.add('displayNone');
	if (document.querySelector('.map-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '0px';
		document.querySelector('.arrow-up2').style.left = '0px';
	} else if (document.querySelector('.map-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '0px';
		document.querySelector('.arrow-up2').style.left = '0px';
	}
}

function marketAdClick() {
	document.querySelector('.map-ad-info').classList.add('displayNone');
	document.querySelector('.market-ad-info').classList.remove('displayNone');
	document.querySelector('.banner-ad-info').classList.add('displayNone');
	if (document.querySelector('.market-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '325px';
		document.querySelector('.arrow-up2').style.left = '325px';
	} else if (document.querySelector('.market-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '260px';
		document.querySelector('.arrow-up2').style.left = '260px';
	}
}

function bannerAdClick() {
	document.querySelector('.map-ad-info').classList.add('displayNone');
	document.querySelector('.market-ad-info').classList.add('displayNone');
	document.querySelector('.banner-ad-info').classList.remove('displayNone');
	if (document.querySelector('.banner-ad-info').offsetWidth == '868') {
		document.querySelector('.arrow-up').style.left = '650px';
		document.querySelector('.arrow-up2').style.left = '650px';
	} else if (document.querySelector('.banner-ad-info').offsetWidth == '718') {
		document.querySelector('.arrow-up').style.left = '520px';
		document.querySelector('.arrow-up2').style.left = '520px';
	}
}

function mobileMapADClick() {
	document.querySelector('.map-ad-info-title').style.borderBottom = '4px solid #6200ee';
	document.querySelector('.map-ad-info-title').style.color = '#000';
	document.querySelector('.market-ad-info-title').style.border = 'none';
	document.querySelector('.market-ad-info-title').style.color = '#aaa';
	document.querySelector('.banner-ad-info-title').style.border = 'none';
	document.querySelector('.banner-ad-info-title').style.color = '#aaa';
	document.querySelector('.map-ad-info-box').classList.remove('displayNone');
	document.querySelector('.market-ad-info-box').classList.add('displayNone');
	document.querySelector('.banner-ad-info-box').classList.add('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.remove('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.add('displayNone');
}
function mobileMarketADClick() {
	document.querySelector('.map-ad-info-title').style.border = 'none';
	document.querySelector('.map-ad-info-title').style.color = '#aaa';
	document.querySelector('.market-ad-info-title').style.borderBottom = '4px solid #6200ee';
	document.querySelector('.market-ad-info-title').style.color = '#000';
	document.querySelector('.banner-ad-info-title').style.border = 'none';
	document.querySelector('.banner-ad-info-title').style.color = '#aaa';
	document.querySelector('.map-ad-info-box').classList.add('displayNone');
	document.querySelector('.market-ad-info-box').classList.remove('displayNone');
	document.querySelector('.banner-ad-info-box').classList.add('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.remove('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.add('displayNone');
}
function mobileBannerADClick() {
	document.querySelector('.map-ad-info-title').style.border = 'none';
	document.querySelector('.map-ad-info-title').style.color = '#aaa';
	document.querySelector('.market-ad-info-title').style.border = 'none';
	document.querySelector('.market-ad-info-title').style.color = '#aaa';
	document.querySelector('.banner-ad-info-title').style.borderBottom = '4px solid #6200ee';
	document.querySelector('.banner-ad-info-title').style.color = '#000';
	document.querySelector('.map-ad-info-box').classList.add('displayNone');
	document.querySelector('.market-ad-info-box').classList.add('displayNone');
	document.querySelector('.banner-ad-info-box').classList.remove('displayNone');
	document.querySelector('.map-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.market-ad-info-mobile').classList.add('displayNone');
	document.querySelector('.banner-ad-info-mobile').classList.remove('displayNone');
}

function contactPage() {
	window.location.href = '/contact';
}

$(document).ready(function () {
	if ($('.ad-info-box').outerWidth() == '540') {
		$('.map-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '0px' });
			$('.arrow-up4').css({ left: '0px' });
		});
		$('.market-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '180px' });
			$('.arrow-up4').css({ left: '180px' });
		});
		$('.banner-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '360px' });
			$('.arrow-up4').css({ left: '360px' });
		});
	} else if ($('.ad-info-box').outerWidth() == '420') {
		$('.map-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '-25px' });
			$('.arrow-up4').css({ left: '-25px' });
		});
		$('.market-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '120px' });
			$('.arrow-up4').css({ left: '120px' });
		});
		$('.banner-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '260px' });
			$('.arrow-up4').css({ left: '260px' });
		});
	} else if ($('.ad-info-box').outerWidth() == '360') {
		$('.map-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '-35px' });
			$('.arrow-up4').css({ left: '-35px' });
		});
		$('.market-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '85px' });
			$('.arrow-up4').css({ left: '85px' });
		});
		$('.banner-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '210px' });
			$('.arrow-up4').css({ left: '210px' });
		});
	} else if ($('.ad-info-box').outerWidth() == '300') {
		$('.map-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '-40px' });
			$('.arrow-up4').css({ left: '-40px' });
		});
		$('.market-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '55px' });
			$('.arrow-up4').css({ left: '55px' });
		});
		$('.banner-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '160px' });
			$('.arrow-up4').css({ left: '160px' });
		});
	} else if ($('.ad-info-box').outerWidth() == '280') {
		$('.map-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '-50px' });
			$('.arrow-up4').css({ left: '-50px' });
		});
		$('.market-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '50px' });
			$('.arrow-up4').css({ left: '50px' });
		});
		$('.banner-ad-info-title').on('click', function () {
			$('.arrow-up3').css({ left: '145px' });
			$('.arrow-up4').css({ left: '145px' });
		});
	}
});