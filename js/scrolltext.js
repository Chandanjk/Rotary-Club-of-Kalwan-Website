 AOS.init({
 	duration: 800,
 	easing: 'slide',
 	once: false
 });

jQuery(document).ready(function($) {

	"use strict";

	var typed = new Typed('.text', {
  		// Waits 1000ms after typing "First"
  		strings: ["With all our <strong class='primary'>Hearts</strong>,","We make you <strong class='secondary'>Better</strong>."],
  		typespeed: 0,
		loop: true
	});
	
});