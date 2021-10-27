$(document).ready(function () {
	$('.job-ad-list').click(function () {
		$(this).css({border:'1px solid #6200ee', backgroundColor: '#fff', opacity: '1'});
		$('.job-ad-list').not(this).css({border:'none',backgroundColor:'gray', opacity:'.8'});
	})
})