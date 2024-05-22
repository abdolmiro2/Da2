/* MENU CONF*/
(function ($) {
    "use strict";

    
    $("#owl-demo").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 3,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 4]
    });
$("#owl-demo1").owlCarousel({

        autoPlay: 3000, //Set AutoPlay to 3 seconds
        dots: true,
        items: 4,
        itemsDesktop: [1199, 3],
        itemsDesktopSmall: [979, 4]
    });
 $("#owl").owlCarousel({
               navigation : true, 
      slideSpeed : 300,
      paginationSpeed : 400,
      singleItem: true,
            pagination: false,
        rewindSpeed: 500,
            dots: false
        , navText: ['&#xeb32;'
                , '&#xeb33;'
            ]
            , items: 1
    });
  $( ".owl-prev").html('<i class="fa fa-chevron-left"></i>');
 $( ".owl-next").html('<i class="fa fa-chevron-right"></i>');


    //Initiat WOW JS
    wow = new WOW({
        animateClass: 'animated',
        offset: 150
    });
    wow.init();
    //smoothScroll


    $('#myCarousel').carousel({
        interval: 4000
    });

    var clickEvent = false;
    $('#myCarousel').on('click', '.nav a', function () {
        clickEvent = true;
        $('.nav li').removeClass('active');
        $(this).parent().addClass('active');
    }).on('slid.bs.carousel', function (e) {
        if (!clickEvent) {
            var count = $('.nav').children().length - 1;
            var current = $('.nav li.active');
            current.removeClass('active').next().addClass('active');
            var id = parseInt(current.data('slide-to'));
            if (count == id) {
                $('.nav li').first().addClass('active');
            }
        }
        clickEvent = false;
    });

    $('#itemslider').carousel({
        interval: 3000
    });

    $('.carousel-showmanymoveone .item').each(function () {
        var itemToClone = $(this);

        for (var i = 1; i < 6; i++) {
            itemToClone = itemToClone.next();

            if (!itemToClone.length) {
                itemToClone = $(this).siblings(':first');
            }

            itemToClone.children(':first-child').clone()
                .addClass("cloneditem-" + (i))
                .appendTo($(this));
        }
    });
})(jQuery);