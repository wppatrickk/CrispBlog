<?php get_header() ?>

	<div id="content-wrap" class="full-width">

		<?php $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
		$args = array(
			'post_type' => 'post',
			'paged' => $paged
		);

		$blogposts = new WP_Query( $args );

		$temp_query = $wp_query;
		$wp_query = NULL;
		$wp_query = $blogposts;

		if( $blogposts->have_posts() ): ?>

			<ul class="blog-posts infinite">

				<?php while( $blogposts->have_posts() ): $blogposts->the_post(); ?>
					<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
						<div class="post-inner">
							<div class="post-image">
								<div class="grid-image" style="background-image: url(<?php the_post_thumbnail_url('blog-image'); ?>)">
									<a href="<?php the_permalink(); ?>"></a>
								</div>
							</div>

							<div class="post-wrap">
								<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title_attribute() ?>" rel="bookmark"><?php the_title() ?></a></h2>

								<div class="post-meta">
									<div class="post-meta-left">
										<p><span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i> <span><?php the_time('j M, Y'); ?></span></span></p>
									</div>

									<div class="post-meta-right">
										<p><a href="<?php the_permalink(); ?>/?link=comment"><span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i> <span><?php comments_number( '0', '1', '%' ); ?></span></span></a></p>
									</div>

									<div class="clear"></div>
								</div>	

								<div class="post-content">
									<p><?php $excerpt = get_the_excerpt();
									echo wp_trim_words($excerpt, 20); ?></p>

									<a href="<?php the_permalink(); ?>" class="read-more"><?php echo __( 'Read More', 'wpd-inspire' ); ?></a>
								</div>
							</div>

							<div class="clear"></div>
						</div>
					</li><!-- .post -->
				<?php endwhile ?>

			</ul>

			<?php the_posts_pagination(); ?>

		<?php endif;
		wp_reset_query();

		$wp_query = NULL;
		$wp_query = $temp_query; ?>

	</div>

<?php get_footer() ?>