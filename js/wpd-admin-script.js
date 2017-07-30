jQuery(document).ready(function(jQuery){
	jQuery('.custom_media_button').click(function() {
		tb_show('Upload a Image', 'media-upload.php?&type=image&TB_iframe=true&post_id=0', false);
		return false;
	});
	
	window.send_to_editor = function(html) {
		var image_url = jQuery('img', html).attr('src');
		jQuery('.custom_media_url').val(image_url);
		tb_remove();
	}
});