$( document ).ready(function() {  	
	var drop = new Drop({
	  target: document.querySelector('#medium-menu'),
	  content: document.querySelector('#medium-menu-items'),
	  position: 'bottom left',
	  openOn: 'click',
		classes: 'medium-3',
		remove: true
	});
});