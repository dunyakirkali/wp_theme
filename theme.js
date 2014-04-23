$( document ).ready(function() {
    
  var $menu = $('#menu-row');
  console.log($menu);
  var $dropdown = $menu.find('.dropdown');
  console.log($dropdown);
  console.log($dropdown.find('a'));
  new Drop({
    target: $dropdown.find('a')[0],
    content: $menu.find('.menu-menu-container').html(),
    position: 'bottom center',
    openOn: 'click',
    constrainToWindow: true,
    constrainToScrollParent: false,
   });
});