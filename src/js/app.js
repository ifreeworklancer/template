import jquery from 'jquery';
import Flickity from 'flickity';
import ScrollReveal from 'scrollreveal'
import 'flickity/dist/flickity.css';

window.jQuery = window.$ = jquery;



(function () {

    /**
     * Burger-menu
     */
    $('.burger-menu').click(function () {
        var menu = $('.menu');
        $(this).toggleClass('active');
        if (menu.is(':visible')) {
            menu.slideUp();
        } else {
            menu.slideDown().css('display' , 'flex');
        }
    });


    /**
     * Form-label
     */

    $('.form-control').on('focus', function () {
        $(this).parent().addClass('in-focus');
    });

    $('.form-control').on('blur', function () {
        if ($(this).val() !== "") {
            $(this).parent().addClass('in-focus');
        } else {
            $(this).parent().removeClass('in-focus');
        }
    });


    /**
     * Tabs
     */
    $('.programm-tabs-prev-item').eq(0).addClass('active');
    $('.programm-tabs-content-item').eq(0).addClass('active');
    $('.programm-tabs-content-item-body').eq(0).slideDown();
    $('.programm-tabs-content').on('click', '.programm-tabs-content-item-title', function() {
        const index = $(this).parents('.programm-tabs-content-item').data('index');

        $('.programm-tabs-content-item').removeClass('active');
        $('.programm-tabs-content-item-body').slideUp();
        $(this).parents('.programm-tabs-content-item').toggleClass('active');
        $(this).siblings('.programm-tabs-content-item-body').slideToggle();
        $('.programm-tabs-prev-item').removeClass('active');
        $('.programm-tabs-prev-item').eq(index).addClass('active');
        console.log()
    })


    /**
     * Sliders reviews
     */


    // if ($('.reviews-slider')) {

    //     var elem1 = document.querySelector('.reviews-slider');
    //     if (elem1) {


    //         var flkty1 = new Flickity(elem1, {
    //             prevNextButtons: false,
    //             cellAlign: 'center',
    //             contain: false,
    //             draggable: true,
    //             wrapAround: true,
    //             initialIndex: 1
    //         });

    //         var prevArrowReviews = document.querySelector('.slider-nav-arrow-item--prev-reivews');

    //         prevArrowReviews.addEventListener('click', function () {
    //             flkty1.previous(true, false);
    //         });

    //         var nextArrowReviews = document.querySelector('.slider-nav-arrow-item--prev-next');

    //         nextArrowReviews.addEventListener('click', function () {
    //             flkty1.next(true, false);
    //         });

    //     }
    // }

})(jQuery)