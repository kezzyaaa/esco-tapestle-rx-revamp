// require('./bootstrap');
// window.axios = require('axios');
// window.Vue = require('vue');
// window.Event = new Vue();
// window.Fire = new Vue();

/**
 * The following block of code may be used to automatically register your
 * Vue components. It will recursively scan this directory for the Vue
 * components and automatically register them with their "basename".
 *
 * Eg. ./components/ExampleComponent.vue -> <example-component></example-component>
 */

// const files = require.context('./', true, /\.vue$/i);
// files.keys().map(key => Vue.component(key.split('/').pop().split('.')[0], files(key).default));

// Vue.component('product-list', require('./components/productList.vue').default);
// Vue.component('product-filter-dropdown', require('./components/productFilterDropdown.vue').default);
// Vue.component('newsletter-popup', require('./components/newsletterpopup.vue').default);




/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */





(function ($) {

    'use strict';

    var browserWindow = $(window);

    $(window).on('scroll', function () {
        var scroll = $(window).scrollTop();

        if (scroll < 150) {
        $("#sticky-header").removeClass("sticky");

        $("#nav-logo").addClass("nav-large-logo");
        $("#nav-logo").removeClass("nav-small-logo");
        } else {

        $("#nav-logo").addClass("nav-small-logo");
        $("#nav-logo").removeClass("nav-large-logo");
        }


        if (scroll < 300) {
        $("#sticky-header").removeClass("sticky");
        $("#navigation-logo").addClass("nav-brand-top");
        $("#navigation-logo").removeClass("nav-brand-bottom");

        // $("#navigation-logo").fadeOut(500);
        $('#floating-social-icons').removeClass("vis");
        } else {
        $("#sticky-header").addClass("sticky");

        $("#navigation-logo").removeClass("nav-brand-top");
        $("#navigation-logo").addClass("nav-brand-bottom");
        // $("#navigation-logo").fadeIn(500);
        $('#floating-social-icons').addClass("vis");

        }
    });



    // :: 1.0 Preloader Active Code
    browserWindow.on('load', function () {

        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });

        checkCookie();

        function cookieConsentpopup(){
            $("#cookieConsent").fadeIn(300);
        }

        $("body").click(function(e) {
            if (e.target.className == "overlay-img" || e.target.className == "landing-page-popup" ) {
                covidPopupClose();
            }
        });

        $('.close-popup').click(function() {
            covidPopupClose();
        });

        $("#float-popup").click(function(e) {
            $(".overlay-img").fadeIn();
            $(".landing-page-popup").fadeIn();
	    });

        $("#closeCookieConsent, .cookieConsentOK").click(function() {
            $("#cookieConsent").fadeOut(300);
            setCookie("cookie_consent", 'cookie_consent', 360);
        });

        function covidPopupClose() {
            $(".overlay-img").fadeOut();
            $(".landing-page-popup").fadeOut();
            $(".label-container").delay(700).fadeIn(300).delay(4000).fadeOut(300);
            var covidpopup=getCookie("covidpopup");
            // console.log('test');
            if (covidpopup == "") {
                setCookie("covidpopup", 'covidpopup', 1);
            }
        }

        function checkCookie() {
            var subscription=getCookie("subscription");
            var cookieConsent=getCookie("cookie_consent");
            var covidpopup=getCookie("covidpopup");

            // console.log('test');
            if (covidpopup != "") {
                // alert("Welcome again " + user);
              } else {
                // $(".overlay-img").fadeIn();
                // $(".landing-page-popup").fadeIn();
            }

            if (subscription != "") {
              // alert("Welcome again " + user);
            } else {
            setTimeout( function() {
                  subscriptionPopup();
                  // setCookie("username", 'user', 100000);
              },6000);

               // user = prompt("Please enter your name:","");
               // if (user != "" && user != null) {


               // }
            }


            if (cookieConsent != "") {
              // alert("Welcome again " + user);
            } else {
            setTimeout( function() {
                  cookieConsentpopup();
                  // setCookie("username", 'user', 100000);
              },2000);

               // user = prompt("Please enter your name:","");
               // if (user != "" && user != null) {


               // }
            }


          }


          function setCookie(cname,cvalue,exdays) {
            var d = new Date();
            d.setTime(d.getTime() + (exdays*24*60*60*1000));
            var expires = "expires=" + d.toGMTString();
            document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
          }

          function getCookie(cname) {
            var name = cname + "=";
            var decodedCookie = decodeURIComponent(document.cookie);
            var ca = decodedCookie.split(';');
            for(var i = 0; i < ca.length; i++) {
              var c = ca[i];
              while (c.charAt(0) == ' ') {
                c = c.substring(1);
              }
              if (c.indexOf(name) == 0) {
                return c.substring(name.length, c.length);
              }
            }
            return "";
          }

          $('#footer-newsletter-btn').on('click', function () {
            var email = $('#footer-newsletter-email').val();
            $('#subscribe_pemail').val(email);
            subscriptionPopup();

          });


          $("#newsletterpopup a.close").on('click', function(event) {
              popupClosedByUser()
            });

          $("#newsletterpopup a.popup-subscribe").on('click', function(event) {
              // email_subscribepopup()
          });



          function popupClosedByUser(){
              // get the mPopup
              popupClose();
              // setCookie("subscription", 'subscription', 7);

          }


          function popupClose(){
              // get the mPopup
              var mpopup = $('#newsletterpopup');
              setCookie("subscription", 'subscription', 7);
              // open the mPopup
              mpopup.css({"opacity":"0"});
              setTimeout( function() {
                  mpopup.css({"visibility":"hidden"});
              },500);
          }

          function subscriptionPopup(){
              // get the mPopup
              var mpopup = $('#newsletterpopup');

              // open the mPopup
              mpopup.css({"visibility":"visible", "opacity":"1"});

              // close the mPopup once close element is clicked
              // $(".close").on('click',function(){
              //     mpopup.hide();
              // });

              // close the mPopup when user clicks outside of the box
              // $(window).on('click', function(e) {
              //     if(e.target == mpopup[0]){
              //         // mpopup.hide();
              //                 // get the mPopup
              //         // open the mPopup
              //         mpopup.css({"opacity":"0"});
              //         setTimeout( function() {
              //             mpopup.css({"visibility":"hidden"});
              //         },500);
              //     }
              // });
          }






    });


    // :: 4.0 Search Active Code
    var searchwrapper = $('.search-wrapper');
    $('.search-btn').on('click', function () {
        searchwrapper.toggleClass('on');
        document.getElementById("search_query").focus();
    });
    $('.close-btn').on('click', function () {
        searchwrapper.removeClass('on');
    });


    // :: 5.0 Sliders Active Code
    if ($.fn.owlCarousel) {
        var eventsCalendarSlider = $('.events-calendar-slider');

        eventsCalendarSlider.owlCarousel({
          items: 1,
          nav: true,
          dots: false,
          loop: false,
          navText: ['<i class="events-calendar-arrow left-arrow" aria-hidden="true"></i>', '<i class="events-calendar-arrow right-arrow" aria-hidden="true"></i>'],
          autoplay: false,
          smartSpeed: 1000
        });

        var applicationsCarousel = $('#applicationsCarousel');

        applicationsCarousel.owlCarousel({
          items: 1,
          nav: true,
          dots: true,
          dotsData: true,
          loop: false,
          navText: ['<i class="applications-arrow-left" aria-hidden="true"></i><i class="applications-arrow-left2" aria-hidden="true"></i>', '<i class="applications-arrow-right" aria-hidden="true"></i><i class="applications-arrow-right2" aria-hidden="true"></i>'],
          autoplay: false,
          smartSpeed: 1000
        });


        var featureProductSlide = $('.feature-product-slider-owl');
        var standardConfigurableProductSlider = $('.standard-configurable-product-slider');
        var customTailoredProductSlider = $('.custom-tailored-product-slider');


        featureProductSlide.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 9000,
            smartSpeed: 1000
        });

        featureProductSlide.on('translate.owl.carousel', function () {
            var slideLayer = featureProductSlide.find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        featureProductSlide.on('translated.owl.carousel', function () {
            var slideLayer = featureProductSlide.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        standardConfigurableProductSlider.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 9000,
            smartSpeed: 1000
        });

        standardConfigurableProductSlider.on('translate.owl.carousel', function () {
            var slideLayer = standardConfigurableProductSlider.find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        standardConfigurableProductSlider.on('translated.owl.carousel', function () {
            var slideLayer = standardConfigurableProductSlider.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        customTailoredProductSlider.owlCarousel({
            items: 1,
            margin: 0,
            loop: true,
            nav: true,
            navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
            dots: true,
            autoplay: true,
            autoplayTimeout: 9000,
            smartSpeed: 1000
        });

        customTailoredProductSlider.on('translate.owl.carousel', function () {
            var slideLayer = customTailoredProductSlider.find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).removeClass('animated ' + anim_name).css('opacity', '0');
            });
        });

        customTailoredProductSlider.on('translated.owl.carousel', function () {
            var slideLayer = customTailoredProductSlider.find('.owl-item.active').find("[data-animation]");
            slideLayer.each(function () {
                var anim_name = $(this).data('animation');
                $(this).addClass('animated ' + anim_name).css('opacity', '1');
            });
        });

        $("[data-delay]").each(function () {
            var anim_del = $(this).data('delay');
            $(this).css('animation-delay', anim_del);
        });

        $("[data-duration]").each(function () {
            var anim_dur = $(this).data('duration');
            $(this).css('animation-duration', anim_dur);
        });

        // var dot = $('.hero-slides .owl-dot');
        // dot.each(function () {
        //     var index = $(this).index() + 1 + '.';
        //     if (index < 10) {
        //         $(this).html('0').append(index);
        //     } else {
        //         $(this).html(index);
        //     }
        // });

    }



  $(document).ready(function() {
    setTimeout( function() {
        $('#preloader').fadeOut('slow', function () {
            $(this).remove();
        });

        // setCookie("username", 'user', 100000);
    },3000);


    new WOW().init();
  // :: 3.0 Nav Active Code

    if ($.fn.classyNav) {
        $('#pharmaNav').classyNav();
    }

    var $slider = $(".slider"),
        $slideBGs = $(".slide__bg"),
        diff = 0,
        curSlide = 0,
        numOfSlides = $(".slide").length-1,
        animating = false,
        animTime = 1000,
        autoSlideTimeout,
        autoSlideDelay = 10000,
        $pagination = $(".slider-pagi");

    function createBullets() {
      for (var i = 0; i < numOfSlides+1; i++) {
        var $li = $("<li class='slider-pagi__elem' aria-hidden='true'></li>");
        $li.addClass("slider-pagi__elem-"+i).data("page", i);
        if (!i) $li.addClass("active");
        $pagination.append($li);
      }
    };

    createBullets();

    function manageControls() {
      $(".slider-control").removeClass("inactive");
      if (!curSlide) $(".slider-control.left").addClass("inactive");
      if (curSlide === numOfSlides) $(".slider-control.right").addClass("inactive");
    };

    function autoSlide() {
      autoSlideTimeout = setTimeout(function() {
        curSlide++;
        if (curSlide > numOfSlides) curSlide = 0;
        changeSlides();
      }, autoSlideDelay);
    };

    autoSlide();

    function changeSlides(instant) {
      if (!instant) {
        animating = true;
        manageControls();
        $slider.addClass("animating");
        $slider.css("top");
        $(".slide").removeClass("active");
        $(".slide-"+curSlide).addClass("active");
        setTimeout(function() {
          $slider.removeClass("animating");
          animating = false;
        }, animTime);
      }
      window.clearTimeout(autoSlideTimeout);
      $(".slider-pagi__elem").removeClass("active");
      $(".slider-pagi__elem-"+curSlide).addClass("active");
      $slider.css("transform", "translate3d("+ -curSlide*100 +"%,0,0)");
      $slideBGs.css("transform", "translate3d("+ curSlide*50 +"%,0,0)");
      diff = 0;
      autoSlide();
    }

    function navigateLeft() {
      if (animating) return;
      if (curSlide > 0) curSlide--;
      changeSlides();
    }

    function navigateRight() {
      if (animating) return;
      if (curSlide < numOfSlides) curSlide++;
      changeSlides();
    }

    $(document).on("mousedown touchstart", ".slider", function(e) {
      if (animating) return;
      window.clearTimeout(autoSlideTimeout);
      var startX = e.pageX || e.originalEvent.touches[0].pageX,
          winW = $(window).width();
      diff = 0;

      $(document).on("mousemove touchmove", function(e) {
        var x = e.pageX || e.originalEvent.touches[0].pageX;
        diff = (startX - x) / winW * 70;
        if ((!curSlide && diff < 0) || (curSlide === numOfSlides && diff > 0)) diff /= 2;
        $slider.css("transform", "translate3d("+ (-curSlide*100 - diff) +"%,0,0)");
        $slideBGs.css("transform", "translate3d("+ (curSlide*50 + diff/2) +"%,0,0)");
      });
    });

    $(document).on("mouseup touchend", function(e) {
      $(document).off("mousemove touchmove");
      if (animating) return;
      if (!diff) {
        changeSlides(true);
        return;
      }
      if (diff > -8 && diff < 8) {
        changeSlides();
        return;
      }
      if (diff <= -8) {
        navigateLeft();
      }
      if (diff >= 8) {
        navigateRight();
      }
    });

    $(document).on("click", ".slider-control", function() {
      if ($(this).hasClass("left")) {
        navigateLeft();
      } else {
        navigateRight();
      }
    });

    $(document).on("click", ".slider-pagi__elem", function() {
      curSlide = $(this).data("page");
      changeSlides();
    });

    $("#footerCarousel").owlCarousel({
        loop:true,
        margin:50,
        dots: false,
        responsive:{
            0:{
                items:1
            },
            600:{
                items:3
            },
            900:{
                items:4
            },
            1280:{
                items:5
            },
            1281:{
                items:6
            }
        }

    });


    $(".solutionRelatedprodCarousel").owlCarousel({
        loop:true,
        margin:30,
        nav: true,
        navText: ['<i class="fa fa-caret-left" aria-hidden="true"></i>', '<i class="fa fa-caret-right" aria-hidden="true"></i>'],
        responsive:{
            0:{
                items:2,
                margin:10,
            },
            600:{
                items:3,
                margin:10,
            },
            900:{
                items:3
            },
            1280:{
                items:3
            },
            1281:{
                items:3
            }
        }

    });

    var lazyloadImages;

    if ("IntersectionObserver" in window) {
      lazyloadImages = document.querySelectorAll(".lazy");
      var imageObserver = new IntersectionObserver(function(entries, observer) {
        entries.forEach(function(entry) {
          if (entry.isIntersecting) {
            var image = entry.target;
            image.src = image.dataset.src;
            image.classList.remove("lazy");
            imageObserver.unobserve(image);
          }
        });
      });

      lazyloadImages.forEach(function(image) {
        imageObserver.observe(image);
      });
    } else {
      var lazyloadThrottleTimeout;
      lazyloadImages = $(".lazy");

      function lazyload () {
        if(lazyloadThrottleTimeout) {
          clearTimeout(lazyloadThrottleTimeout);
        }

        lazyloadThrottleTimeout = setTimeout(function() {
            var scrollTop = $(window).scrollTop();
            lazyloadImages.each(function() {
                var el = $(this);
                if(el.offset().top - scrollTop < window.innerHeight) {
                  var url = el.attr("data-src");
                  el.attr("src", url);
                  el.removeClass("lazy");
                  lazyloadImages = $(".lazy");
                }
            });
            if(lazyloadImages.length == 0) {
              $(document).off("scroll");
              $(window).off("resize");
            }
        }, 20);
      }

      $(document).on("scroll", lazyload);
      $(window).on("resize", lazyload);
    }




    // homepage solution section
    $("#cf7_controls").on('mouseover', '.hoverable-solutions p', function() {
        $("#cf7 div").removeClass("opaque");

        // var newImage = $(this).index();
        var newImage = $(this).attr("data-solution-count");

        $("#cf7 div.solutions-content-index").eq(newImage).addClass("opaque");

        $("#cf7_controls p").removeClass("selected");
        $(this).addClass("selected");
    });

    $('#solution-carousel').owlCarousel({
        stagePadding: 220,
        center: true,
        loop:true,
        margin:0,
        nav:false,
        items:3,
        navText: ['&lsaquo;', '&rsaquo;'],
        lazyLoad: true,
        nav:true,
        responsive:{
            0:{
                items:1,
                stagePadding: 85
            },
            321:{
                items:1,
                stagePadding: 105
            },
            413:{
                items:1,
                stagePadding: 120
            },
            767:{
                items:1,
                stagePadding: 220
            },
            1023:{
                items:3,
                stagePadding: 185
            },

            1281:{
                items:3,
                stagePadding: 220
            }

        }
    });


    $("a.product_spec_link").on('click', function(event) {

      // Make sure this.hash has a value before overriding default behavior
      if ($(this).attr("data-link") !== "") {
        // Prevent default anchor click behavior
        event.preventDefault();

        // Store hash
        var hash = $(this).attr("data-link");

        // Using jQuery's animate() method to add smooth page scroll
        // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
        $('html, body').animate({
          scrollTop: $(hash).offset().top - 180
        }, 800, function(){

          // Add hash (#) to URL when done scrolling (default click behavior)

        });
      } // End if
    });
    // :: 7.0 ScrollUp Active Code
    if ($.fn.scrollUp) {
        browserWindow.scrollUp({
            scrollSpeed: 700,
            scrollText: '<i class="fa fa-angle-up"></i>'
        });
    }

    var countrylabel = $(".global-reference .countrylabel")

    $( ".pin" ).mousemove(function(e) {
      $(this).addClass("expand");
      var parentOffset = $(this).parent().offset();
      //or $(this).offset(); if you really just want the current element's offset
      var relX = e.pageX - parentOffset.left;
      var relY = e.pageY - parentOffset.top;
      countrylabel.addClass("visible");
      countrylabel.removeClass("invisible");
      countrylabel.css("left", relX+53+"px");
      countrylabel.css("top", relY-55+"px");
      countrylabel.html($(this).data("countryname"));
    });
    $( ".pin" ).mouseleave(function() {
      $(this).removeClass("expand");
      countrylabel.addClass("invisible");
      countrylabel.removeClass("visible");
    });


  });

  var counted = 0;
  $(window).scroll(function() {
    if( $('#numprojcounter').length )         // use this if you are using id to check
    {
        var oTop = $('#numprojcounter').offset().top - window.innerHeight;
        if (counted == 0 && $(window).scrollTop() > oTop) {
        $('.count').each(function() {
            var $this = $(this),
            countTo = $this.attr('data-count');
            $({
            countNum: $this.text()
            }).animate({
                countNum: countTo
            },

            {

                duration: 2000,
                easing: 'swing',
                step: function() {
                $this.text(Math.floor(this.countNum));
                },
                complete: function() {
                $this.text(this.countNum);
                //alert('finished');
                }

            });
        });
        counted = 1;
        }
    }

  });




})(jQuery);
