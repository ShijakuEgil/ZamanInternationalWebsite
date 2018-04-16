(function($) {
	$(".calendar-month-wrapper").on('click', function(){
        // NOTE: passed alert('click works');
        var month = $(this).data('month');
        var ajaxUrl = $(this).data('url');
        // NOTE: passed alert(month);
        // NOTE: passed alert(ajaxUrl);
        $.ajax({

            url : ajaxUrl,
            type : 'post',
            data: {

                month : month,
                action : 'zaman_get_events_at_month',
            },
            // dataType : "json",
            error: function(status){
                console.log(status);
            },
            success:function(response){
                 // response = JSON.parse(response);
                 console.log('response' + response);
              $(".calendar-center-container").html(response);
            }
        });
    });

	$('#carouselExample').on('slide.bs.carousel', function (e) {

    var $e = $(e.relatedTarget);
    var idx = $e.index();
    var itemsPerSlide = 4;
    var totalItems = $('.carousel-item').length;

    if (idx >= totalItems-(itemsPerSlide-1)) {
        var it = itemsPerSlide - (totalItems - idx);
        for (var i=0; i<it; i++) {
            // append slides to end
            if (e.direction=="left") {
                $('.carousel-item').eq(i).appendTo('.carousel-inner');
            }
            else {
                $('.carousel-item').eq(0).appendTo('.carousel-inner');
            }
        }
    }
});

})( jQuery );
