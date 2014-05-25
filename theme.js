$( document ).ready(function() {
  $(document).foundation().foundation('dropdown');
  	
	var drop = new Drop({
	  target: document.querySelector('#medium-menu'),
	  content: document.querySelector('#medium-menu-items'),
	  position: 'bottom',
	  openOn: 'click'
	});
});