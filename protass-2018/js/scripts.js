/**
 * Theme scripting
 *
 * @package Protass_2018
 * @author Postali
 */
/*global jQuery: true */
/*jslint white: true */
/*jshint browser: true, jquery: true */

jQuery( function ( $ ) {
  "use strict";

  $("#menu-icon").on("mousedown", function(event) {
    var body = $("html");
    $("#slide-nav").toggleClass("active");
    $("#menu-icon").toggleClass("active");

    if (body.hasClass("nav-open")) {
      body.removeClass("nav-open");
    } else {
      body.addClass("nav-open");
    } 

    event.preventDefault();
  });

$('li.menu-item-has-children > a').one('click', function(event) {
    event.preventDefault();
    $(this).next('.sub-menu').addClass('open');
});

//Text Highlighter Function
  highlight();

$(window).on("scroll", function(){
  highlight();
});

function highlight(){
  var scroll = $(window).scrollTop();
  var height = $(window).height();

  $(".highlight").each(function(){
    var pos = $(this).offset().top;
    if (scroll+height >= pos) {
      $(this).addClass("active");
    } 
  });
} 

/*show more / less interior sidebar menu */
$('#load-more').click(function() {
  $('#interior-body .menu li:hidden').slice(0).slideDown();
  $("#load-more").css("display", "none");
});

	// Contact form 7 /form-success/ forwarder
  	document.addEventListener( 'wpcf7mailsent', function( event ) {
    	location = '/form-success/';
	}, false );

	// Touch Device Detection
	var isTouchDevice = 'ontouchstart' in document.documentElement;
		if( isTouchDevice ) {
		$('body').removeClass('no-touch');
	};


	$()

      //keeps menu expanded so user can tab through sub-menu, then closes menu after user tabs away from last child
      $(document).ready(function() {
        var body = $("html");
        // open submenu when user tabs into it
        $('#menu-icon').on('focusin', function(e) {
          
          $(this).addClass('active');
          $('#slide-nav').addClass('active');

          if (body.hasClass("nav-open")) {
            body.removeClass("nav-open");
          } else {
            body.addClass("nav-open");
          } 
        })

        //close menu when user tabs away from last list item
        $('#menu-main-menu li:last-of-type').on('focusout', function(e) {
          $(this).removeClass('active');
          $('#slide-nav').removeClass('active');
          if (body.hasClass("nav-open")) {
            body.removeClass("nav-open");
          } else {
            body.addClass("nav-open");
          } 
        })

        //close menu when user backwards tabs away from first list item
        $('#menu-main-menu li:first-of-type').on('focusout', function(e) {
          $('#menu-main-menu li:first-of-type').on('keydown', function(e) {
            if( e.shiftKey && $(e.target).siblings().has('#slide-nav') ) {
              $('#menu-icon').removeClass('active');
              $('#slide-nav').removeClass('active');
              $('html').removeClass("nav-open");
            }
          })
        })

    });

    // $(document).ready(function() {
    //   if( $('#gform_fields_1').length ) {
    //       $('#field_1_1').before('<div class="form-container">');
    //       // $('#field_1_9').before('</div>< class="form-right">');
    //       $('#field_1_9').after('</div>');
    //   }
    // });
 
});
