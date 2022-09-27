



$(window).on('scroll ready', function () {
    if ($(this).scrollTop() > 0) {
      $('#scroll_btn ').fadeIn();
      $('header').css({'padding' : '2px 0', 'box-shadow' : '0 0 5px #000'})
    } else {
      $('#scroll_btn ').fadeOut();
      $('header').css({'padding' : '10px 0', 'box-shadow' : 'none'})
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



// Модалка в шапке
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