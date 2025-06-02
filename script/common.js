// 상단 헤더 영역
// 화면 스크롤 시 고정
// 1. 자바스크립트
// const h = document.getElementById('header');

// window.addEventListener('scroll', function(){
//   let sPos = window.scrollY;
//   if(sPos>0){
//     h.classList.add('h_act');
//   } else {
//     h.classList.remove('h_act');
//   }
// });

// 2. 제이쿼리
$(function(){
  let sPos = $(window).scrollTop();

  $('header').mouseover(function(){
    $('header').addClass('h_act');
    $('header h1 img').attr('src','./images/logo-casper_black.png');
  });
  $('header').mouseout(function(){
    sPos = $(window).scrollTop();
    if(sPos>0){
      $('header').addClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper_black.png');
    } else {
      $('header').removeClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper-white.png');
    }
  });

  $(window).scroll(function(){
    sPos = $(window).scrollTop();
    if(sPos>0){
      $('header').addClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper_black.png');
    } else {
      $('header').removeClass('h_act');
      $('header h1 img').attr('src','./images/logo-casper-white.png');
    }
  });
});