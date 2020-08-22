$(window).scroll(function(){
    $('nav').toggleClass('scrolled', $(this).scrollTop()>20);
});

$(document).scroll(function() {
    $('nav a[href="#'+$('section:hover').attr('id')+'"]').addClass('active').siblings('nav a').removeClass('active');
});