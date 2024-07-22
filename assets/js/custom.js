jQuery( document ).ready( function($) {
    $('.slider').owlCarousel({
        loop:true,
        margin:10,
        nav:true,
        margin:40,
        items:3,

        responsive:{
            0:{
                items:1
            },
            600:{
                items:2
            },
            1000:{
                items:3
            }
        }

     
    })
});
