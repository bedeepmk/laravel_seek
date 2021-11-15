$(function () {
	var page = $(location).attr('pathname').split('.')[0];
	var array = page.split('/');
	var currentPage = array[array.length - 1];

	// 등록 이미지 등록 미리보기
	function setImageFromFile(input, expression) {
		if (input.files && input.files[0]) {
			var reader = new FileReader();

			reader.onload = function (e) {
				$(expression).attr('src', e.target.result);
			};
			reader.readAsDataURL(input.files[0]);
		}
	}

	if (currentPage == 'classify-role') {
		$('.modal-open-btn').on('click', function () {
			$('.icon-modal').fadeIn(300);
			return false;
		});

		$('.modal-close-btn').on('click', function () {
			$('.icon-modal').fadeOut(300);
			return false;
		});

		$('html').click(function (e) {
			if ($(e.target).hasClass('icon-modal')) {
				$('.icon-modal').fadeOut(300);
				return false;
			}
		});
	} else if (currentPage == 'video-interview') {
		$('.interview-preview-btn').on('click', function () {
			$('.section-interview-popup').fadeIn(300);
			return false;
		});

		$('.modal-close-btn').on('click', function () {
			$('.section-interview-popup').fadeOut(300);
			return false;
		});

		$('html').click(function (e) {
			if ($(e.target).hasClass('section-interview-popup')) {
				$('.section-interview-popup').fadeOut(300);
				return false;
			}
		});
	} else if (currentPage == 'employer-profile') {
		$('.my-page-employer-img').on('click', function () {
			$('.section-profile-img-modal').show(100);
		});

		$('.modal-close-btn').on('click', function () {
			$('.section-profile-img-modal').fadeOut(300);
		});

		$('html').click(function (e) {
			if ($(e.target).hasClass('section-profile-img-modal')) {
				$('.section-profile-img-modal').fadeOut(300);
			}
		});

		$('.img-input').on('change', function () {
			setImageFromFile(this, '#img-preview');
		});

		$('.img-delete-btn').on('click', function (e) {
			var delConfirm = confirm('Are you sure?');

			if (delConfirm) {
				$('#img-preview').attr('src', 'img/default.png');
			}
		});

		$('.img-save-btn').on('click', function () {
			var $src = $('#img-preview').attr('src');
			$('.my-page-employer-img').attr('src', $src);
			alert('profile img change');
			$('.section-profile-img-modal').fadeOut(300);
		});
	} else if (currentPage == 'job-seeker-my-page') {
		$('.my-page-seeker-img').on('click', function () {
			$('.section-profile-img-modal').show(100);
		});

		$('.modal-close-btn').on('click', function () {
			$('.section-profile-img-modal').fadeOut(300);
		});

		$('html').click(function (e) {
			if ($(e.target).hasClass('section-profile-img-modal')) {
				$('.section-profile-img-modal').fadeOut(300);
			}
		});

		$('.img-input').on('change', function () {
			setImageFromFile(this, '#img-preview');
		});

		$('.img-delete-btn').on('click', function (e) {
			var delConfirm = confirm('Are you sure?');

			if (delConfirm) {
				$('#img-preview').attr('src', 'img/default.png');
			}
		});

		$('.img-save-btn').on('click', function () {
			var $src = $('#img-preview').attr('src');
			$('.my-page-seeker-img').attr('src', $src);
			alert('profile img change');
			$('.section-profile-img-modal').fadeOut(300);
		});
	} else if (currentPage == 'employer-my-account') {
		$('.billing-history-btn').on('click', function () {
			$('.section-invoice-history-modal').fadeIn(300);
			return false;
		});

		$('.modal-close-btn').on('click', function () {
			$('.section-invoice-history-modal').fadeOut(300);
			return false;
		});

		$('html').on('click', function (e) {
			if ($(e.target).hasClass('section-invoice-history-modal')) {
				$('.section-invoice-history-modal').fadeOut(300);
				return false;
			}
		});
	}
});
