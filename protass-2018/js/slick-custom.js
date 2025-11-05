/**
 * Custom Styles for Slick
 *
 * @package protass
 * @author Postali
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
  "use strict";

// Slick
  $('.publications-slider').slick({
    dots: false,
    arrows: true,
    infinite: true,
    speed: 1900,
    slidesToShow: 1,
    autoplay: true,
    slidesToScroll: 1,
    buttons: false,
    responsive: [
      {
        breakpoint: 600,
        settings: {
          slidesToShow: 1,
          slidesToScroll: 1,
          dots: true,
          arrows: false
        }
      }
      // You can unslick at a given breakpoint now by adding:
      // settings: "unslick"
      // instead of a settings object
    ]
  });

});