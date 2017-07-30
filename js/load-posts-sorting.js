jQuery(document).ready(function($) {
	var $grid = $('.blog-posts').isotope({
		itemSelector: '.post',
		masonry: {
			columnWidth: '.post'
		}
	});
	
	var $win = $(window);
	
	$('.filter-button-group').on( 'click', 'button', function() {
		var filterValue = $(this).attr('data-filter');
		$grid.isotope({ filter: filterValue });
	});

	$('.button-group').each(function (i, buttonGroup) {
		var $buttonGroup = $(buttonGroup);
		$buttonGroup.on('click', 'button', function () {
			$buttonGroup.find('.is-checked').removeClass('is-checked');
			$(this).addClass('is-checked');
		});
	});

	$grid.isotope({
		onLayout: function() {
			$win.trigger("scroll");
		}
	});
});