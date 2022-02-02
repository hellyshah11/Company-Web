$('.owl-carousel').owlCarousel({
    loop:true,
    margin:10,
    responsive:{
        500:{
            items:1
        },
        800:{
            items:2,
            margin: 10
        },
        1000:{
            items:3
        }
    }
})
var owl = $('.owl-carousel');
owl.owlCarousel();
$('.r-btn').click(function() {
    owl.trigger('next.owl.carousel');
})
$('.l-btn').click(function() {
    owl.trigger('prev.owl.carousel', [300]);
})