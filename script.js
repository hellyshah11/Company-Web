$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,autoplay:true,
    autoplayTimeout:3000,
    autoplayHoverPause:true,
    items: 4,
    responsive:{
        0:{
            items: 1,
            singleItem: true,
            margin: 5
        },
        768:{
            items:2,
            margin: 5
        },
        1000:{
            items:3,
            margin:10
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


var txt = document.querySelector('.inner-text p');
txt.innerHTML = txt.innerText.split('').map(
    (char, i) => `<span style="transform:rotate(${i*45}deg)">${char}</span>`
).join("")