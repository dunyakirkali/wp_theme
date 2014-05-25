$( document ).ready(function() {
  $(document).foundation().foundation('dropdown');
  
  $("#menu-menu").data('dropdown-content', true);
  $("#menu-menu-2").data('dropdown-content', true);  
  
  $("#menu-menu").addClass('f-dropdown');
  $("#menu-menu-2").addClass('f-dropdown');    
});