<?php get_header() ?>

	<div id="content-wrap" class="<?php echo get_theme_mod('crispblog_archive_layout'); ?>">

		<div id="content">
		
			<?php if ( have_posts() ) : ?>

				<header class="page-header">
					<h1 class="page-title"><?php printf( esc_html__( 'Search Results for: %s', 'crispblog' ), '<span>' . get_search_query() . '</span>' ); ?></h1>
				</header><!-- .page-header -->

				<?php
				/* Start the Loop */
				while ( have_posts() ) : the_post();

					get_template_part( 'template-parts/content', 'search' );

				endwhile;

				the_posts_pagination();

			else :

				get_template_part( 'template-parts/content', 'none' );

			endif; ?>

		</div><!-- #content -->
		
		<?php get_sidebar() ?>		
		
		<div class="clear"></div>

	</div>

<?php get_footer() ?>