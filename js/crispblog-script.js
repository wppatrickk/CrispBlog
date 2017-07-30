jQuery(document).ready(function() {
    jQuery("#mobile-slide a").click(function(e) {
        e.preventDefault();

        var jQuerymenu = jQuery(jQuery("#menu"));

        jQuery("#menu").slideUp();
		jQuery(this).parent().removeClass('menu-opened');

        if (jQuerymenu.is(":hidden")) {
            jQuerymenu.slideDown("slow");
			jQuery(this).parent().addClass('menu-opened');
        }
    });

	jQuery("#mobile-menu ul li a").click(function(e) {
		if(jQuery(this).parent().hasClass('menu-item-has-children')) {
			if(!jQuery(this).parent().hasClass('opened')) {
				jQuery(this).parent().addClass('opened');
				jQuery(this).parent().find("ul").first().slideDown(200);
			} else {
				jQuery(this).parent().removeClass('opened');
				jQuery(this).parent().find("ul").first().slideUp(200);
			}
			
			e.preventDefault();
		}
	});

	jQuery(".post-image img").lazyload({
		effect : "fadeIn"
	});
	
	var jQueryimgs = jQuery(".grid-image");
	jQueryimgs.lazyload({
		effect : "fadeIn",
		failure_limit: Math.max(jQueryimgs.length - 1, 0)
	});

	jQuery(window).on('resize', function(){
    	var winwidth = jQuery(window).width();
    	if (winwidth > 900) {
    		jQuery('#menu').show();
    	}
	});

	jQuery('.post-content a').each(function () {
		if (jQuery(this).attr('href').toLowerCase().match(/\.(jpg|png|gif)/g)) {
			jQuery(this).addClass('thickbox');
		}
	});
});

jQuery(window).load(function() {
	var contenth = jQuery('#content').height();
	var sidebarh = jQuery('#sidebar').height();

	if (contenth < sidebarh) {
		jQuery('#content').height(sidebarh);
	}
});