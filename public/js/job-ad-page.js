$(document).ready(function () {
	$('.ad-open-page').on('click', function () {
		$('.ad-open-page').addClass('selected');
		$('.ad-expired-page').removeClass('selected');
		$('.ad-draft-page').removeClass('selected');
		$('.board-open').removeClass('displayNone');
		$('.board-expired').addClass('displayNone');
		$('.board-draft').addClass('displayNone');
		return false;
	});

	$('.ad-expired-page').on('click', function () {
		$('.ad-open-page').removeClass('selected');
		$('.ad-expired-page').addClass('selected');
		$('.ad-draft-page').removeClass('selected');
		$('.board-open').addClass('displayNone');
		$('.board-expired').removeClass('displayNone');
		$('.board-draft').addClass('displayNone');
		return false;
	});

	$('.ad-draft-page').on('click', function () {
		$('.ad-open-page').removeClass('selected');
		$('.ad-expired-page').removeClass('selected');
		$('.ad-draft-page').addClass('selected');
		$('.board-open').addClass('displayNone');
		$('.board-expired').addClass('displayNone');
		$('.board-draft').removeClass('displayNone');
		return false;
	});
});
