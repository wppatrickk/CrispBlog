<?php get_header() ?>

	<div id="content-wrap" class="full-width">

		<div class="button-group filter-button-group">
			<button data-filter="*">All</button>
			<?php $categories = get_categories( array(
				'orderby' => 'name',
				'order'   => 'ASC'
			));

			foreach( $categories as $category ) {
				$cslug = $category->slug;
				$cname = $category->name;
				echo '<button data-filter=".category-' . $cslug . '">' . $cname . '</button>';
			} ?>
		</div>

		<?php
		$args = array(
			'post_type' => 'post',
			'posts_per_page' => -1
		);

		$blogposts = new WP_Query( $args ); ?>

		<?php if( $blogposts->have_posts() ): ?>

			<ul class="blog-posts sorting">

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

									<a href="<?php the_permalink(); ?>" class="read-more"><?php echo __( 'Read More', 'crispblog' ); ?></a>
								</div>
							</div>

							<div class="clear"></div>
						</div>
					</li><!-- .post -->
				<?php endwhile ?>

			</ul>

		<?php endif; 
		wp_reset_query(); ?>

	</div>

<?php get_footer() ?>