$(document).ready(function() {
    // Slider range on quicksearch form
    /*$("#price-range").slider({
	    range: true,
	    min: 100,
	    max: 500,
	    step: 10,
	    values: [100, 500],
	    animate: 'slow',
	    create: function() {
	        $('#min-price').appendTo($('#price-range a').get(0));
	        $('#max-price').appendTo($('#price-range a').get(1));
	    },
	    slide: function(event, ui) { $(ui.handle).find('span').html('$' + ui.value); }
	});

	// only initially needed
	$('#min-price').html('$' + $('#price-range').slider('values', 0)).position({
	    my: 'center center',
	    at: 'center center',
	    of: $('#price-range a:eq(0)'),
	    offset: "0, 10"
	});

	$('#max-price').html('$' + $('#price-range').slider('values', 1)).position({
	    my: 'center center',
	    at: 'center center',
	    of: $('#price-range a:eq(1)'),
	    offset: "0, 10"
	});*/

	// Car Gallery
	var owl = $("#skoda1_car-gallery");
    owl.owlCarousel({
        items: 2, //2 items above 1000px browser width
        itemsDesktop: [970,2], //5 items between 1000px and 901px
        itemsDesktopSmall: [750, 2], // betweem 900px and 601px
        itemsTablet: [480, 1], //2 items between 600 and 0
        itemsMobile: [320, 1], // 1 item for mobile
        pagination: false,
        addClassActive: true,
        lazyLoad: true
    });

    // Custom Navigation Events
    $(".next").click(function() {
        owl.trigger('owl.next');
    })
    $(".prev").click(function() {
        owl.trigger('owl.prev');
    })
}); 

$(function() {
    $('#skoda1_dealer-gmap').gmap3({
        marker: {
            address: "Haltern am See, Weseler Str. 151", // Add dealer address here
        },
        map: {
            options: {
                zoom: 16,
                navigationControl: false,
                streetViewControl: false,
                scrollwheel: false,
                mapTypeControl: false,
                scaleControl: false,
                draggable: true,
            }
        }
    });
});

// Remove label on input focus
$(function() {
    $('input, textarea').on('focus blur', function () {
        $(this).prev().toggle();
    });
});

//Set the text of the numslide classes when the page is loaded
var totalItems = $('#skoda1_vehicle-gallery .item').length;
var currentIndex = $('#skoda1_vehicle-gallery div.active').index() + 1;
$('.numslide').html('IMAGE <span class="current-slide">'+currentIndex+'</span> OF '+totalItems+'');

$('#skoda1_vehicle-gallery').on('slide.bs.carousel', function () {
    currentIndex = $('#skoda1_vehicle-gallery div.active').index() + 1;
    $('.numslide').html('IMAGE <span class="current-slide">'+currentIndex+'</span> OF '+totalItems+'')
})