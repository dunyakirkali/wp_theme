$(document).ready(function() {
	"use strict";

	var drop = new Drop({
	  target: document.querySelector('#medium-menu'),
	  content: document.querySelector('#medium-menu-items'),
	  position: 'bottom left',
	  openOn: 'click',
		classes: 'medium-3',
		remove: true
	});

	$('#mobile-top').on('click', function (event) {
		window.scroll(0, 1);
		$('body').scrollTop(0);
		event.preventDefault();
	});

	$('#top').on('click', function (event) {
	  $('#second').scrollTop(0);
		event.preventDefault();
	});

});