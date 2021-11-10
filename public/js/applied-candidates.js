$(function () {
	$('.job-ad-list').on('click', function () {
		$(this).css({border:'1px solid #2ebd59', backgroundColor: '#fff', opacity: '1'});
		$('.job-ad-list').not(this).css({border:'none',backgroundColor:'gray', opacity:'.8'});
		if ($('.section-candidate').outerWidth(true) < '768') {
			$('.list-info-right').addClass('opened');
		}
	})
})