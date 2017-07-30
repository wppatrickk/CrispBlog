jQuery(document).ready(function($) {
	$('.pagination').css('visibility', 'hidden');
	
	var $container = $('.blog-posts').isotope({
		itemSelector: '.post',
		masonry: {
			columnWidth: '.post'
		}
	});
	
	
	var nextitem = $('.nav-links .next');
	var templateUrl = objectL10n.templateUrl;

	$container.infinitescroll({
		navSelector  : '.nav-links',
        nextSelector : nextitem,
        itemSelector : '.post',
        loading: {
			finishedMsg: objectL10n.finished,
			msgText: objectL10n.loading,
			img: templateUrl + '/images/spinner.svg',
          }
        },
        function( newElements ) {
			var $newElems = $( newElements ).hide();
			$newElems.imagesLoaded( function() {
				$newElems.fadeIn();
				$container.isotope( 'appended', $newElems );
				$(window).scrollTop($(window).scrollTop()+100);
			});
        }
	);
});