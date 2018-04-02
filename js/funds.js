(function($) {
	$(".funds-recurring-donation-link").mouseover(function(){
    $(".funds-department-info").show("fade");
  });
  $(".funds-recurring-donation-link").mouseout(function(){
    $(".funds-department-info").hide("fade");
  });

})( jQuery );
