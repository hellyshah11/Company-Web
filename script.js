$('.owl-carousel').owlCarousel({
    loop:true,
    margin:20,
    items: 4,
    responsive:{
        500:{
            items:1
        },
        800:{
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