$(document).ready(function() {

setTimeout(function() {
    $('#noty-holder').fadeOut('fast');
 }, 10000); 

    $("#setupModal .btn").on("click", function () {
        $("#setupModal").modal("hide");
        $("#registerModal").modal("show");
      });

    $(".custom-tab-block ul li a").click(function() {
    var href = $(this).attr( 'href' );
    $('html, body').animate({
        scrollTop: $(href).offset().top - 100
    }, 1000);
    });

    if ($('.custom-slider').length > 0) {
        $('.custom-slider').slick({
            dots: false,
            arrow: true,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [{
                    breakpoint: 1024,
                    settings: {
                        slidesToShow: 3,
                        slidesToScroll: 3,
                        infinite: true,
                        dots: true
                    }
                },
                {
                    breakpoint: 600,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                },
                {
                    breakpoint: 480,
                    settings: {
                        slidesToShow: 2,
                        slidesToScroll: 2
                    }
                }
                // You can unslick at a given breakpoint now by adding:
                // settings: "unslick"
                // instead of a settings object
            ]
        });
    }

    if ($(window).width() < 960) {
        if ($(".last-winner-slider").length > 0) {
          $(".last-winner-slider").slick({
            dots: false,
            arrow: true,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ],
          });
        }
      }
      if ($(window).width() < 960) {
        if ($(".custom-tab-block").length > 0) {
          $(".custom-tab-block ul").slick({
            dots: false,
            arrow: false,
            infinite: true,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            centerMode: false,
            variableWidth: true,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 2,
                  slidesToScroll: 1,
                },
              },
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ],
          });
        }
      }
    
      if ($(window).width() < 960) {
        if ($(".job-opportunities-slider").length > 0) {
          $(".job-opportunities-slider").slick({
            dots: false,
            arrow: true,
            infinite: false,
            speed: 300,
            slidesToShow: 5,
            slidesToScroll: 1,
            autoplay: true,
            autoplaySpeed: 2000,
            responsive: [
              {
                breakpoint: 1024,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 600,
                settings: {
                  slidesToShow: 3,
                  slidesToScroll: 3,
                },
              },
              {
                breakpoint: 480,
                settings: {
                  slidesToShow: 1,
                  slidesToScroll: 1,
                },
              },
              // You can unslick at a given breakpoint now by adding:
              // settings: "unslick"
              // instead of a settings object
            ],
          });
        }
      }


    $('.check-login').click(function() {
      var checkuid=$('#checkuser').attr('idx');
      if(checkuid==''){
          $("#checkUserLogin").modal("show");
      }
    });

    $('.toggle-menu').click(function() {
        $(".side-menu").toggleClass("show")
    });

    $('.close-side').click(function() {
        $(".side-menu").toggleClass("show")
    });

    $('.deposit').click(function() {
        $(".deposit-menu").toggleClass("show")
    });

    $('.deposit-menu .close-side').click(function() {
        $(".deposit-menu").toggleClass("show")
    });

    $('.withdraw').click(function() {
        $(".withdraw-menu").toggleClass("show")
    });

    $('.withdraw-menu .close-side').click(function() {
        $(".withdraw-menu").toggleClass("show")
    });

    $(".mobile-navbar .dropdown-toggle").click(function () {
      $(".mobile-navbar .dropdown-menu").toggleClass("show");
    });
  
    $(".mobile-navbar .dropdown-logo-block .close").click(function () {
      $(".mobile-navbar .dropdown-menu").toggleClass("show");
    });
  
    $(".navbar-toggler").click(function () {
      $(".navbar-collapse").toggleClass("show");
    });
  
    $(".navbar-collapse .dropdown-logo-block .close").click(function () {
      $(".navbar-collapse").toggleClass("show");
    });

    $(".sidebar-block .drop-down .selected a").click(function () {
      $(".drop-down .options ul").toggle();
    });
  
    //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
    $(".sidebar-block .drop-down .options ul li a").click(function () {
      var text = $(this).html();
      $(".drop-down .selected a span").html(text);
      $(".drop-down .options ul").hide();
    });
  
    //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
    $(document).bind("click", function (e) {
      var $clicked = $(e.target);
      if (!$clicked.parents().hasClass("drop-down"))
        $(".drop-down .options ul").hide();
    });

    $(".drop-down .selected a").click(function () {
      $(".drop-down .options ul").toggle();
    });
  
    //SELECT OPTIONS AND HIDE OPTION AFTER SELECTION
    $(".drop-down .options ul li a").click(function () {

      var text = $(this).html();
      $(".drop-down .selected a span").html(text);
      $(".drop-down .options ul").hide();
    });
  
    //HIDE OPTIONS IF CLICKED ANYWHERE ELSE ON PAGE
    $(document).bind("click", function (e) {
      var $clicked = $(e.target);
      if (!$clicked.parents().hasClass("drop-down"))
        $(".drop-down .options ul").hide();
    });

 //TOGGLING NESTED ul
  $(".drop-down .selected a").click(function () {
    $(".drop-down .options ul").toggle();
  });
 

});








