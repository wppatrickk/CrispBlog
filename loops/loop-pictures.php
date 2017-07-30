<?php $paged = ( get_query_var('paged') == 0 ) ? 1 : get_query_var('paged');
$args = array(
	'post_type' => 'post',
	'paged' => $paged
);

$blogposts = new WP_Query( $args ); ?>

<?php if( $blogposts->have_posts() ): ?>

	<ul class="blog-posts pictures">

		<?php while( $blogposts->have_posts() ): $blogposts->the_post(); ?>
			<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
				<div class="post-image">
					<div class="grid-image" style="background-image: url(<?php the_post_thumbnail_url('blog-image'); ?>)">
						<a href="<?php the_permalink(); ?>"></a>
					</div>

					<div class="post-wrap">
						<h2 class="post-title"><a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>"><span><?php the_title() ?></span></a></h2>
					</div>
				</div>
			</li><!-- .post -->	
		<?php endwhile ?>

	</ul>

	<?php the_posts_pagination(); ?>

<?php endif;
wp_reset_query(); ?>