<?php get_header() ?>

	<div id="content-wrap" class="<?php echo get_theme_mod('crispblog_archive_layout', 'full_width'); ?>">

		<div id="content">
		
			<?php 
			$posts_layout = get_theme_mod('crispblog_home_layout', 'home_grid');
			if ($posts_layout) {
				if ($posts_layout == 'home_standard') {
					get_template_part( 'loops/loop', 'index' );
				} elseif ($posts_layout == 'home_grid') {
					get_template_part( 'loops/loop', 'grid' );
				} elseif ($posts_layout == 'home_textless') {
					get_template_part( 'loops/loop', 'pictures' );
				} elseif ($posts_layout == 'home_sorting') {
					get_template_part( 'loops/loop', 'sorting' );
				} elseif ($posts_layout == 'home_infinite') {
					get_template_part( 'loops/loop', 'infinite' );
				}	
			} else {
				get_template_part( 'loops/loop', 'index' );
			} ?>

		</div><!-- #content -->
		
		<?php if (get_theme_mod('crispblog_archive_layout', 'full_width') != 'full_width') { ?>
		<?php get_sidebar() ?>
		<?php } ?>
		
		
		<div class="clear"></div>

	</div>

<?php get_footer() ?>