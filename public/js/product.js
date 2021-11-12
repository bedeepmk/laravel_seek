// var mySwiper = new Swiper('.swiper-container', {

// 	effect : 'coverflow', // 커버플로우 효과 사용
//     grabCursor: true,
//     centeredSlides: true,
//     slidePerView: 'auto',
// 	// 커버플로우 설정
// 	coverflowEffect : {
// 		slideShadows : true, // 슬라이더 그림자 : 3D 효과를 강조하기 위한 회전시 흐릿한 효과
// 		rotate : 50, // 슬라이더 회전 각 : 클수록 슬라이딩시 회전이 커짐
// 		stretch : 0, // 슬라이더간 거리(픽셀) : 클수록 슬라이더가 서로 많이 겹침
// 		depth : 100, // 깊이 효과값 : 클수록 멀리있는 느낌이 강해짐
// 		modifier : 1, // 효과 배수 : 위 숫자값들에 이 값을 곱하기 처리하여 효과를 강하게 처리함
// 	},

// 	loop : true, // 슬라이드 반복
// 	pagination : { // 페이징 설정
// 		el : '.swiper-pagination',
// 		clickable : true, // 페이징을 클릭하면 해당 영역으로 이동, 필요시 지정해 줘야 기능 작동
// 	},
// });

// if ($('.section-product-page-info').outerWidth(true) < '1024') {
//     $('.product-info-box-wrap').addClass('myswiper')
// }
// else {
//     $('.product-info-box-wrap').removeClass('myswiper')
// }

$(function () {
    let curPos = 0;
    let postion = 0;
    let start_x, end_x;
    const IMAGE_WIDTH = 280;
    const product = document.querySelector(".product-info-box-wrap") 
     
    product.addEventListener('touchstart', touch_start);
    product.addEventListener('touchend', touch_end);
     
    function prev(){
      if(curPos > 0){
        postion += IMAGE_WIDTH;
        product.style.transform = `translateX(${postion}px)`;
        curPos = curPos - 1;
      }
    }
    function next(){
      if(curPos < 3){
        postion -= IMAGE_WIDTH;
        product.style.transform = `translateX(${postion}px)`;
        curPos = curPos + 1;
      }
    }
     
    function touch_start(event) {
      start_x = event.touches[0].pageX
    }
     
    function touch_end(event) {
      end_x = event.changedTouches[0].pageX;
      if(start_x > end_x){
        next();
      }else{
        prev();
      }
    }
  })