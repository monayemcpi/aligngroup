$(document).ready(function(){


// body class
var url      = window.location.href; 
var origin   = window.location.origin+'/';

var orgnialName = url.replace(origin,'')

console.log(orgnialName)
// var pagename = $.trim(url.replace(origin,'')) ;
// var pagenameF= 'page '+pagename ;
// var body     = $('body').addClass(pagenameF) ;

// if(url == origin){
//     body.removeClass('page')
//     body.addClass('home')
// }

// Slider Main
var slider = $('.slider');
slider.revolution({
    delay: 9000,
    startwidth: 1488,
    startheight: 500,
    autoHeight: "off",
    fullScreenAlignForce: "off",
    fullWidth: "off",
    forceFullWidth: "off",
    fullScreen: "off",
    fullScreenOffsetContainer: "#sliderMain"
});




// GALERY

var galleryItem = $('.gallery-item');
var galleryModal = $('#galleryModal');
var galleryImgHover = $('.gallery-image-hover');
galleryItem.click(function(event) {
event.preventDefault();
var imgSrc = $(this).find('img').attr('src');
galleryImgHover.attr('src', imgSrc);
galleryModal.modal({

}, 'show');

})

// Project slider


$('#projectSlider').owlCarousel({
    nav:true,
    rtl :true,
    margin:15,
    responsive:{
        0:{
            items:1
        },
        600:{
            items:3
        },
        1000:{
            items:3
        }
    }
})


// Menu 

$('.sub-menu').parent().append('<div class="dropdown-btn"></div>');

$('.dropdown-btn').click(function() {

    $(this).prev('ul').slideToggle(500);
})






})