

setTimeout(function(){
  document.querySelector('.load__wrapper').style.display = 'none'
}, 2000)


var tabs = document.querySelectorAll('.service-left li')
var tabs_item = document.querySelectorAll('.service-right__item')
for(i=0;i<tabs.length;i++) {
  tabs[i].addEventListener('click', function(){
    var key_index
    for(i=0;i<tabs.length;i++) {
      if(tabs[i] != this) 
        tabs[i].classList.remove('active')
      else 
        key_index = i
    }
    for(i=0;i<tabs_item.length;i++) {
      if(tabs_item[i] == tabs_item[key_index])
        tabs_item[i].classList.add('active')
      else 
        tabs_item[i].classList.remove('active')
    }
    this.classList.add('active')
  })
}

$("body").on('click', '[href*="#"]', function(e){
  var fixed_offset = 100;
  $('html,body').stop().animate({ scrollTop: $(this.hash).offset().top - fixed_offset }, 1000);
  e.preventDefault();
});

var swiper_text = document.querySelectorAll('.swiper-slide__text')
var swiper = new Swiper('.swiper-container-firstscreen', {
  speed: 2400,
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  effect: 'fade',
  fadeEffect: {
    crossFade: true
  },
  autoplay: {
    delay: 7000,
  },    
});


swiper.on('slideChange', function () {
    var index_currentSlide = swiper.activeIndex,
    currentSlide = swiper.slides[index_currentSlide]
    $('.swiper-slide').children('.swiper-slide__text').removeClass('animate__animated animate__fadeInUpBig')
    $(currentSlide).children('.swiper-slide__text').addClass('animate__animated animate__fadeInUpBig')
});
$('.swiper-slide-active').children('.swiper-slide__text').addClass('animate__animated animate__fadeInUpBig')



var swiper2 = new Swiper('.swiper-container-reviews', {
  speed: 2400,
  // slidesPerView: 3,
  loop: true,
  autoplay: {
    delay: 5000,
  },
  pagination: {
    el: '.swiper-pagination',
    clickable: true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },      
});



$(window).on('scroll ready', function () {
    if ($(this).scrollTop() > 0) {
      $('#scroll_btn ').fadeIn();
      $('header').css({'padding' : '2px 0', 'background-color' : '#000', 'box-shadow' : '0 0 5px #000'})
    } else {
      $('#scroll_btn ').fadeOut();
      $('header').css({'padding' : '10px 0', 'background-color' : 'transparent', 'box-shadow' : 'none'})
    }
});



$('#scroll_btn ').click(function () {
    $('body,html').animate({
      scrollTop: 0
    }, 1100);
    return false;
});




$('.burger').click(function() {
  $('.menu').css('left', '0')
})
$('.menu-close').click(function() {
  $('.menu').css('left', '-300px')
})




$('.swiper-slide__btn').click(function(){
  $('#modal-callback').removeClass('off')
})
$('.modal-open-btn').click(function(){
  $('#modal-callback').removeClass('off')
})
$('.modal').click(function (e) {
  if (!$(e.target).closest('.modal-content').length) {
      $(this).addClass('off');
  }
});
$('.modal').find('.modal-close').click(function () {
  $('.modal').addClass('off');
});


jQuery(function($){
  $(".mask").mask("+7 (999) 999-9999");
});


$('#w0').on('submit', function(){
  $('.modal').addClass('off');
  var data = $(this).serialize();
  $.ajax({
      url: 'http://yii.shop2',
      type: 'POST',
      data: data,
      success: function(res){
          $('.success-form').css('display', 'block').fadeOut(5000)
          $('#w0 input').val('')
      },
      error: function(){
          alert('Error!');
      }
  });
  return false;
});

$('.btn-modal-header').click(function(){
  $('#mails-button_name').val('Из шапки')
})
$('.btn-modal-slide1').click(function(){
  $('#mails-button_name').val('Слайд 1')
})
$('.btn-modal-slide2').click(function(){
  $('#mails-button_name').val('Слайд 2')
})
$('.btn-modal-slide3').click(function(){
  $('#mails-button_name').val('Слайд 3')
})
