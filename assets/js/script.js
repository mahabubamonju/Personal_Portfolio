$(document).ready(function(){
    $('#menu').click(function(){
        $(this).toggleClass('fa-times');
        $('.navbar').toggleClass('nav-toggle');
    });
    $(window).on('scroll load',function(){
        $('#menu').removeClass('fa-times');
        $('.navbar').removeClass('nav-toggle');
    });
    $('.image').magnificPopup({
            type:'image'
    });
    $('#themetoggle').click(function(){
        $(this).toggleClass('fa-sun');
        $('body').toggleClass('dark-theme');
    });
/*
//with javascript
('.portfolio .button-container .btn').click(function(){
    let filter=$(this).attr('data-filter');
    if(filter=='all'){
        $('.portfolio .row .box').show('400');
    }else{
        $('.portfolio .row .box').not('.'+filter).hide('200');
        $('.portfolio .row .box').filter('.'+filter).show('400');
    }

})*/
//with jquery
var $grid = $('.items').isotope({
    // options
  });
  // filter items on button click
  $('.button-container').on( 'click', '.btn', function() {
    var filterValue = $(this).attr('data-filter');
    $grid.isotope({ filter: filterValue });
  });
});