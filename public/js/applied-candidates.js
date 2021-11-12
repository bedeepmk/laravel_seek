$(function () {
	$('.job-ad-list').on('click', function () {
		$(this).css({border:'1px solid #2ebd59', backgroundColor: '#fff', opacity: '1'});
		$('.job-ad-list').not(this).css({border:'none',backgroundColor:'gray', opacity:'.8'});
		if ($('.section-candidate').outerWidth(true) < '1030') {
			$('.list-info-right').show('slide', {direction: 'right'}, 300);
			window.location.hash = "#open";
			$('html').on('click', function (e) {
				if (e.target.className == 'list-info-right') {
					$('.list-info-right').hide('slide', {direction: 'right'}, 300);
					window.location.hash = "";
					return false;
				}
			});
		}
		
		window.onhashchange = function() {
			if (location.hash != "#open") {
				$('.list-info-right').hide('slide', {direction: 'right'}, 300);
				window.location.hash = "";
			}
		}
	})
})