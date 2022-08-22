$(document).ready(function() {
 
  $("#owl-demo, #owl-demo-testi").owlCarousel({
 
      navigation : true, // Show next and prev buttons
      slideSpeed : 300,
      navigationText:["<i class='fa fa-angle-left'></i>","<i class='fa fa-angle-right'></i>"],
      pagination:true,
      paginationSpeed : 100,
      singleItem:true
  });
 
});
