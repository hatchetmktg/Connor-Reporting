//Owl Carousel js
$(document).ready(function () {
    $('.stats').owlCarousel({
        loop: true,
        margin: 10,
        nav: true,
        dots: false,
        navigation: false,
        pagination: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 3
            },
            1000: {
                items: 4
            }
        }
    })
    $('.hero-bg').owlCarousel({
        items: 1,
        loop: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplayHoverPause: false,
        animateOut: 'fadeOut',
        navigation: false,
        dots: false
    })
});


//On scroll change navbar background color
$(function () {
    $(document).scroll(function () {
        var $nav = $(".navbar");
        $nav.toggleClass('scrolled', $(this).scrollTop() > $nav.height());
    });
});


// $("#one").on("click", function () {
//     $("#description-text").empty();
//     $("#description-text").text(descriptions.one);
// });




$("#location").on("click", function() {
    $("#locations-menu").toggleClass("show");
} );


$("#service1").on("click", function () {
    $("#popup1").addClass("open");
    $("#popup2").removeClass("open");
    $("#popup5").removeClass("open");
    $("#popup6").removeClass("open");
});

$("#service2").on("click", function () {
    $("#popup2").addClass("open");
    $("#popup1").removeClass("open");
    $("#popup5").removeClass("open");
    $("#popup6").removeClass("open");
});

$("#service5").on("click", function () {
    $("#popup5").addClass("open");
    $("#popup2").removeClass("open");
    $("#popup1").removeClass("open");
    $("#popup6").removeClass("open");
});

$("#service6").on("click", function () {
    $("#popup6").addClass("open");
    $("#popup2").removeClass("open");
    $("#popup1").removeClass("open");
    $("#popup5").removeClass("open");
});

$("#service3").on("click", function () {
    $("#popup3").addClass("open");
    $("#popup4").removeClass("open");
    $("#popup7").removeClass("open");
    $("#popup8").removeClass("open");
});
$("#service4").on("click", function () {
    $("#popup4").addClass("open");
    $("#popup3").removeClass("open");
    $("#popup7").removeClass("open");
    $("#popup8").removeClass("open");
});

$("#service7").on("click", function () {
    $("#popup7").addClass("open");
    $("#popup3").removeClass("open");
    $("#popup4").removeClass("open");
    $("#popup8").removeClass("open");
});

$("#service8").on("click", function () {
    $("#popup8").addClass("open");
    $("#popup3").removeClass("open");
    $("#popup4").removeClass("open");
    $("#popup7").removeClass("open");
});

$(".close").on("click", function() {
    $("#popup1").removeClass("open");
    $("#popup2").removeClass("open");
    $("#popup3").removeClass("open");
    $("#popup4").removeClass("open");
    $("#popup5").removeClass("open");
    $("#popup6").removeClass("open");
    $("#popup7").removeClass("open");
    $("#popup8").removeClass("open");
})

// Timline Script


$("#search-icon").on("click", function() {

    $('#search').toggleClass("show");

})
