var clickCheck = 0;

function filter() {    
    if (clickCheck == 0) {
        $('.filter-info-box').css('overflow-y', 'visible').css('height', 'auto')
        clickCheck = 1;
    } else if (clickCheck == 1) {
        $('.filter-info-box').css('overflow-y', 'hidden').css('height', '20px')
        clickCheck = 0;
    }
}

$(function () {
    if ($('.employer-candidate-search-page').outerWidth(true) <= '1280') {
        $('.text-001').on('click', function () {
            $('.filter-info-box').slideToggle(300);
        })
    }	
})