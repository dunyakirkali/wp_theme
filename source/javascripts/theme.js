$(document).ready(function() {
	"use strict";

	var drop = new Drop({
	  target: document.querySelector('#medium-menu'),
	  content: document.querySelector('#medium-menu-items'),
	  position: 'bottom left',
	  openOn: 'click',
		classes: 'show-for-medium',
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
	
	drop.on('open', function (event) {
		resize_drop();
		
	});
	
	window.onresize = function(event) {
	  resize_drop();
	};
	
	function resize_drop() {
		$('.drop-content').css('width', $('#medium-menu').width());
	}

});