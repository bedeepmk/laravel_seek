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

// function cateClick() {
//     document.querySelector('.filter-category-list').classList.toggle('displayNone');
// }

// $('.filter-category-box').on('click', function(e) {
//     var cate = e.currentTarget;
//     console.log('cate :', cate);
//     $('#filter-category').value = cate;
//     $(".filter-category-list").hide();
// })
// $('.filter-category-list').click(function(e) {
//     categoryCheck(e.currentTarget);
// })
// function categoryCheck(el) {
//     var el;
//     console.log(el);
// }