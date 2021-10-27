let map;

const DELAY = 1000;

let isAnimatingNow = false;
let isMenuCategoryOpened = false;
let isMenuMarketOpened = false;
let isMenuMypageOpened = false;
let isMobileMainMenuOpened = false;
let isMobileMainSearchOpened = false;
let isSubSearchMenuOpened = false;
let isMobileSectionMapOpened = false;
let isMenuMapCategoryOpened = false;
let isMenuMapOpened = false;

let numberSubSearchMenuIndex = null;

function initMap() {
  map = new google.maps.Map(document.getElementById("map"), {
    center: { lat: -34.497, lng: 150.744 },
    zoom: 13,
    mapTypeControl: false,
  });
}
$(document).ready(function () {
  $(window).on('resize', () => {
    if(isSubSearchMenuOpened) {
      if($(window).width() > 480) {
        $('nav .container-3').css({height:'110px'});
      }else {
        $('nav .container-3').css({height:'250px'});
      }
    }else {
      $('nav .container-3').css({height:'50px'});
    }
  })
  $(window).on('scroll', () => {
    if($(window).scrollTop() < 125) {
      $('nav.isPC').css({'position': 'absolute', top: 'auto'})
    }else {
      $('nav.isPC').css({'position': 'fixed', top: '-125px'})
    }
  })
  $(window).on('click', (e) => {
    if(!$(e.target).hasClass('button-category')
    && !$(e.target).parents().hasClass('button-category')
    && !$(e.target).hasClass('layer-menu-category')
    && !$(e.target).parents().hasClass('layer-menu-category')
    && !$(e.target).hasClass('isMarket')
    && !$(e.target).parents().hasClass('isMarket')
    && !$(e.target).hasClass('layer-menu-market')
    && !$(e.target).parents().hasClass('layer-menu-market')
    && !$(e.target).hasClass('isMypage')
    && !$(e.target).parents().hasClass('isMypage')
    && !$(e.target).hasClass('layer-menu-mypage')
    && !$(e.target).parents().hasClass('layer-menu-mypage')) {
      setAllCloser();
    }
  })
  $('nav.isPC .container-2 .button-category').on('click', () => {
    setAllCloser();
    if(!isAnimatingNow) {
      isAnimatingNow = true;
      if(isMenuCategoryOpened) {
        $('nav.isPC .layer-menu-category').stop().animate({
          opacity:0, marginTop:'-50px'}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuCategoryOpened = false;
            $('nav.isPC .layer-menu-category').css({'display':'none'});
          })
      }else {
        $('nav.isPC .layer-menu-category').css({'display':'block'}).stop().animate({
          opacity:1, marginTop:0}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuCategoryOpened = true;
          })
      }
    }
  });
  $('nav.isPC .container-1 li.isMarket').on('click', () => {
    setAllCloser();
    if(!isAnimatingNow) {
      isAnimatingNow = true;
      if(isMenuMarketOpened) {
        $('nav .layer-menu-market').stop().animate({
          opacity:0, marginTop:'-20px'}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuMarketOpened = false;
            $('nav .layer-menu-market').css({'display':'none'});
          })
      }else {
        $('nav .layer-menu-market').css({'display':'block'}).stop().animate({
          opacity:1, marginTop:0}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuMarketOpened = true;
          })
      }
    }
  });
  $('nav.isPC .container-0 .text-0 a.isMypage').on('click', () => {
    setAllCloser();
    if(!isAnimatingNow) {
      isAnimatingNow = true;
      if(isMenuMypageOpened) {
        $('nav .container-0 .layer-menu-mypage').stop().animate({
          opacity:0, marginTop:'-20px'}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuMypageOpened = false;
            $('nav .container-0 .layer-menu-mypage').css({'display':'none'});
          })
      }else {
        $('nav .container-0 .layer-menu-mypage').css({'display':'block'}).stop().animate({
          opacity:1, marginTop:0}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isMenuMypageOpened = true;
          })
      }
    }
  });
  $('nav.isMobile .button-mobile-menu').on('click', clickMobileMenu)
  $('nav.isMobile .button-mobile-search').on('click', clickMobileSearch);
  $('nav .layer-menu-category label').on('click', clickMenuCategoryPrarent);
  $('.image-back-drop').on('click', clickCloseMoblieMenuAndSearch);
  $('nav .container-8 li').on('click', clickSubMenuItem);
  
  $('body.isMobileMap .section-map .container-0 .area-top').on('click', clickSectionMap);
  $('body.isMobileMap .section-map .container-map').on('click', clickSectionMap);
  $('nav.isMobileMap .button-mobile-search').on('click', clickMobileMapSearch);
  $('nav.isMobileMap .button-mobile-menu').on('click', clickMobileMapMenu);
})
// $(() => {
  
// });

clickMobileMenu = () => {
  if(!isAnimatingNow) {
    isAnimatingNow = true;
    $('nav.isMobile .container-0').removeClass('isOpened');
    if(isMobileMainMenuOpened) {
      $('nav .container-5').stop().animate({
        opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isMobileMainMenuOpened = false;
          $('nav .container-5').css({'display':'none'})
          $('nav').css({height:'auto'});
        })
      $('.image-back-drop').stop().animate({
        opacity:0}, DELAY/2, "easeOutExpo", () => {
          $('.image-back-drop').css({'display':'none'});
        })
    }else {
      $('nav').css({height:'100%'});
      $('nav .container-5').css({'display':'block'}).stop().animate({
        opacity:1, top:0}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isMobileMainMenuOpened = true;
        })
      $('.image-back-drop').css({'display':'block'}).stop().animate({
        opacity:1}, DELAY/2, "easeOutExpo");
      if(isMobileMainSearchOpened) {
        $('nav .container-0 h1').removeClass('isOpened');
        $('nav .button-mobile-search .icon').removeClass('isOpened');
        $('nav .button-mobile-menu .bar').removeClass('isOpened');
        $('nav .container-6').stop().animate({
          opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
            isMobileMainSearchOpened = false;
            $('nav .container-6').css({'display':'none'})
        })
      }
    }
  }
}

clickMobileSearch = () => {
  if(!isAnimatingNow) {
    isAnimatingNow = true;
    if(isMobileMainSearchOpened) {
      $('nav.isMobile .container-0').removeClass('isOpened');
      $('nav .container-0 h1').removeClass('isOpened');
      $('nav .button-mobile-search .icon').removeClass('isOpened');
      $('nav .button-mobile-menu .bar').removeClass('isOpened');
      $('nav .container-6').stop().animate({
        opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isMobileMainSearchOpened = false;
          $('nav .container-6').css({'display':'none'})
          $('nav').css({height:'auto'});
        })
      $('.image-back-drop').stop().animate({
        opacity:0}, DELAY/2, "easeOutExpo", () => {
          $('.image-back-drop').css({'display':'none'});
        })
    }else {
      $('nav.isMobile .container-0').addClass('isOpened');
      $('nav').css({height:'100%'});
      $('nav .container-0 h1').addClass('isOpened');
      $('nav .button-mobile-search .icon').addClass('isOpened');
      $('nav .button-mobile-menu .bar').addClass('isOpened');
      $('nav .container-6').css({'display':'block'}).stop().animate({
        opacity:1, top:0}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isMobileMainSearchOpened = true;
        })
      $('.image-back-drop').css({'display':'block'}).stop().animate({
        opacity:1}, DELAY/2, "easeOutExpo");
      if(isMobileMainMenuOpened) {
        $('nav .container-5').stop().animate({
          opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
            isMobileMainMenuOpened = false;
            $('nav .container-5').css({'display':'none'})
            $('nav').css({height:'auto'});
        })
      }
    }
  }
}

clickMenuCategoryPrarent = (e) => {
  if($(e.currentTarget).parent().parent().hasClass('depth-0')) {
    if($(e.currentTarget).parent().parent().find('.depth-1.parent').css('display') == 'block') {
      $(e.currentTarget).parent().parent().find('.depth-1.parent').css({display:'none'});
    }else {
      $(e.currentTarget).parent().parent().find('.depth-1.parent').css({display:'block'});
    }
  }else if($(e.currentTarget).parent().parent().hasClass('depth-1')) {
    if($(e.currentTarget).parent().parent().find('.depth-2.parent').css('display') == 'block') {
      $(e.currentTarget).parent().parent().find('.depth-2.parent').css({display:'none'});
    }else {
      $(e.currentTarget).parent().parent().find('.depth-2.parent').css({display:'block'});
    }
  }
}

clickCloseMoblieMenuAndSearch = (e) => {
if(!isAnimatingNow) {
  isAnimatingNow = true;
  if(isMobileMainSearchOpened) {
      $('nav .container-0 h1').removeClass('isOpened');
      $('nav .button-mobile-search .icon').removeClass('isOpened');
      $('nav .button-mobile-menu .bar').removeClass('isOpened');
      $('nav .container-6').stop().animate({
        opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isMobileMainSearchOpened = false;
          $('nav .container-6').css({'display':'none'})
          $('nav').css({height:'auto'});
        })
      $('.image-back-drop').stop().animate({
        opacity:0}, DELAY/2, "easeOutExpo", () => {
          $('.image-back-drop').css({'display':'none'});
        })
    }
  }
  
  if(isMobileMainMenuOpened) {
    $('nav .container-5').stop().animate({
      opacity:0, top:'-200px'}, DELAY/2, "easeOutExpo", () => {
        isAnimatingNow = false;
        isMobileMainMenuOpened = false;
        $('nav .container-5').css({'display':'none'})
        $('nav').css({height:'auto'});
      })
    $('.image-back-drop').stop().animate({
      opacity:0}, DELAY/2, "easeOutExpo", () => {
        $('.image-back-drop').css({'display':'none'});
      })
  }

  if($(e.currentTarget).hasClass('global')) {
    if(isMenuMapCategoryOpened) {
      closingMenuMapCategory(); 
    }
    if(isMenuMapOpened) {
      closingMenuMap();
    }
    $('.image-back-drop.global').stop().animate({
      opacity:0}, DELAY/2, "easeInOutExpo", () => {
        $('.image-back-drop.global').css({'display':'none'})
      });
  }
}

clickSubMenuItem = (e) => {
  let tempWidth;
  if($(window).width() > 480) {
    tempWidth = 110;
  }else {
    tempWidth = 250;
  }
  if($('nav .container-8 li').index(e.currentTarget) == numberSubSearchMenuIndex) {
    $('nav .container-8 li').removeClass('selected');
    if(!isAnimatingNow) {
      isAnimatingNow = true;
      $('nav .container-3').stop().animate({
        height:'50px'}, DELAY/2, "easeOutExpo", () => {
          isAnimatingNow = false;
          isSubSearchMenuOpened = false;
          numberSubSearchMenuIndex = null;
        })
      $('nav .container-9').stop().css({display:'block'}).animate({
        opacity:0, top:0}, DELAY/2, "easeOutExpo");
    }
  } else {
    if(isSubSearchMenuOpened) {
      $('nav .container-8 li').removeClass('selected');
      $(e.currentTarget).addClass('selected');
      numberSubSearchMenuIndex = $('nav .container-8 li').index(e.currentTarget);
    } else {
      if(!isAnimatingNow) {
        isAnimatingNow = true;
        $('nav .container-3').stop().animate({
          height:tempWidth+'px'}, DELAY/2, "easeOutExpo", () => {
            isAnimatingNow = false;
            isSubSearchMenuOpened = true;
            $('nav .container-8 li').removeClass('selected');
            $(e.currentTarget).addClass('selected');
            numberSubSearchMenuIndex = $('nav .container-8 li').index(e.currentTarget);
          })
        $('nav .container-9').stop().css({display:'block'}).animate({
          opacity:1, top:'50px'}, DELAY/2, "easeOutExpo")
      }
    }
  }
}

setAllCloser = () => {
  if(isMenuCategoryOpened) {
    $('nav.isPC .layer-menu-category').stop().animate({
      opacity:0, marginTop:'-50px'}, DELAY/2, "easeOutExpo", () => {
        isMenuCategoryOpened = false;
        $('nav.isPC .layer-menu-category').css({'display':'none'});
      })
  }
  if(isMenuMarketOpened) {
    $('nav .layer-menu-market').stop().animate({
      opacity:0, marginTop:'-20px'}, DELAY/2, "easeOutExpo", () => {
        isMenuMarketOpened = false;
        $('nav .layer-menu-market').css({'display':'none'});
      })
  }
  if(isMenuMypageOpened) {
    $('nav .container-0 .layer-menu-mypage').stop().animate({
      opacity:0, marginTop:'-20px'}, DELAY/2, "easeOutExpo", () => {
        isMenuMypageOpened = false;
        $('nav .container-0 .layer-menu-mypage').css({'display':'none'});
      })
  }
}

clickSectionMap = (e) => {
  if($(e.currentTarget).hasClass('container-map')) {
    closingCectionMap();
  }else {
    if(!isAnimatingNow) {
      isAnimatingNow = true;
      if(isMobileSectionMapOpened) {
        $('body.isMobileMap .section-map .container-0').stop().animate({
          height:'200px'}, DELAY/2, "easeOutExpo", () => {
            isMobileSectionMapOpened = false;
            isAnimatingNow = false;
          })
      }else {
        $('body.isMobileMap .section-map .container-0').stop().animate({
          height: $(window).height() - 200 + 'px'}, DELAY/2, "easeOutExpo", () => {
            isMobileSectionMapOpened = true;
            isAnimatingNow = false;
          })
      }
    }
  }
}

closingCectionMap = () => {
  if(!isAnimatingNow) {
    isAnimatingNow = true;
    if(isMobileSectionMapOpened) {
      $('body.isMobileMap .section-map .container-0').stop().animate({
        height:'200px'}, DELAY/2, "easeOutExpo", () => {
          isMobileSectionMapOpened = false;
          isAnimatingNow = false;
        })
    }else {
      isAnimatingNow = false;
    }
  }
}

clickMobileMapSearch = () => {
  if(!isAnimatingNow) {
    isAnimatingNow = true;
    if(isMenuMapCategoryOpened) {
      closingMenuMapCategory();
      $('.image-back-drop.global').stop().animate({
        opacity:0}, DELAY/2, "easeInOutExpo", () => {
          $('.image-back-drop.global').css({'display':'none'})
        });
    }else {
      openingMenuMapCategory();
      $('.image-back-drop.global').css({'display':'block'}).stop().animate({
        opacity:1}, DELAY/2, "easeInOutExpo");
      if(isMenuMapOpened) {
        closingMenuMap();
      }
    }
  }
}

closingMenuMapCategory = () => {
  $('nav.isMobileMap .container-6').stop().animate({
    opacity:0, top:'-500px'}, DELAY/2, "easeInOutExpo", () => {
      isMenuMapCategoryOpened = false;
      isAnimatingNow = false;
      $('nav.isMobileMap .container-6').css({'display':'none'});
  })
  $('nav.isMobileMap .image-map-back.isAnimating').stop().animate({
    height:'60px'}, DELAY/2, "easeInOutExpo");
}

openingMenuMapCategory = () => {
  $('nav.isMobileMap .container-6').css({'display':'block'}).stop().animate({
    opacity:1, top:'40px'}, DELAY/2, "easeInOutExpo", () => {
      isMenuMapCategoryOpened = true;
      isAnimatingNow = false;
  })
  $('nav.isMobileMap .image-map-back.isAnimating').stop().animate({
    height:'600px'}, DELAY/2, "easeInOutExpo");
}

clickMobileMapMenu = () => {
  if(!isAnimatingNow) {
    isAnimatingNow = true;
    if(isMenuMapOpened) {
      closingMenuMap();
      $('.image-back-drop.global').stop().animate({
        opacity:0}, DELAY/2, "easeInOutExpo", () => {
          $('.image-back-drop.global').css({'display':'none'})
        });
    }else {
      openingMenuMap();
      $('.image-back-drop.global').css({'display':'block'}).stop().animate({
        opacity:1}, DELAY/2, "easeInOutExpo");
      if(isMenuMapCategoryOpened) {
        closingMenuMapCategory();
      }
    }
  }
}

closingMenuMap = () => {
  $('nav.isMobileMap .container-5').stop().animate({
    opacity:0, top:'-500px'}, DELAY/2, "easeInOutExpo", () => {
      isMenuMapOpened = false;
      isAnimatingNow = false;
      $('nav.isMobileMap .container-5').css({'display':'none'});
  })
  $('nav.isMobileMap .image-map-back.isAnimating-2').stop().animate({
    height:'60px'}, DELAY/2, "easeInOutExpo");
}

openingMenuMap = () => {
  $('nav.isMobileMap .container-5').css({'display':'block'}).stop().animate({
    opacity:1, top:'40px'}, DELAY/2, "easeInOutExpo", () => {
      isMenuMapOpened = true;
      isAnimatingNow = false;
  })
  $('nav.isMobileMap .image-map-back.isAnimating-2').stop().animate({
    height:'600px'}, DELAY/2, "easeInOutExpo");
}