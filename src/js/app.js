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