<?php get_header() ?>
	
	<div id="content-wrap" class="<?php echo get_theme_mod('crispblog_archive_layout', 'full_width'); ?>">

		<div id="content">
		
			<h3 class="page-subtitle"><?php the_archive_title(); ?></h3>
			
			<?php $tag_post_layout = get_theme_mod('crispblog_tag_layout', 'tag_grid');
			if ($tag_post_layout == 'tag_standard') { ?>
				<ul class="blog-posts">

					<?php while( have_posts() ): the_post(); ?>
						<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
							<div class="post-image">
								<a href="<?php the_permalink(); ?>">
									<img data-original="<?php the_post_thumbnail_url('blog-image'); ?>" width="1200" height="800" />
								</a>
							</div>

							<div class="post-wrap">
								<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>

								<div class="post-meta">
									<div class="post-meta-left">
										<p>
											<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><span class="meta">Posted on</span> <span><?php the_time('j M, Y'); ?></span></span>
											<span class="post-author"><i class="fa fa-user" aria-hidden="true"></i><span class="meta">by</span> <span><?php the_author(); ?></span></span>
										</p>
									</div>

									<div class="post-meta-right">
										<p><a href="<?php the_permalink(); ?>/?link=comment"><span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i> <span><?php comments_number( '0', '1', '%' ); ?></span></span></a></p>
									</div>

									<div class="clear"></div>
								</div>	

								<div class="post-content">
									<p><?php $excerpt = get_the_excerpt();
									echo wp_trim_words($excerpt, 40); ?></p>

									<a href="<?php the_permalink(); ?>" class="read-more"><?php echo __( 'Read More', 'crispblog' ); ?></a>
								</div>
							</div>

							<div class="clear"></div>
						</li><!-- .post -->
					<?php endwhile ?>

				</ul>
			<?php } elseif ($tag_post_layout == 'tag_grid') { ?>
				<ul class="blog-posts grid">

					<?php while( have_posts() ): the_post(); ?>
						<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
							<div class="post-image">
								<a href="<?php the_permalink(); ?>">
									<div class="grid-image" data-original="<?php the_post_thumbnail_url('blog-image'); ?>" style="background-image: url(<?php the_post_thumbnail_url('blog-image'); ?>)"></div>
								</a>
							</div>

							<div class="post-wrap">
								<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>

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
						</li><!-- .post -->
					<?php endwhile ?>

				</ul>
			<?php } elseif ($tag_post_layout == 'tag_textless') { ?>
				<ul class="blog-posts pictures">

					<?php while( have_posts() ): the_post(); ?>
						<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
							<div class="post-inner">
								<div class="post-image">
									<div class="grid-image" style="background-image: url(<?php the_post_thumbnail_url('blog-image'); ?>)">
										<a href="<?php the_permalink(); ?>"></a>
									</div>

									<div class="post-wrap">
										<h2 class="post-title"><a href="<?php the_permalink(); ?>"><span><?php the_title() ?></span></a></h2>
									</div>
								</div>
							</div>
						</li><!-- .post -->	
					<?php endwhile ?>

				</ul>
			<?php } elseif ($tag_post_layout == 'tag_infinite') { ?>
				<ul class="blog-posts infinite">

					<?php while( have_posts() ): the_post(); ?>
						<li id="post-<?php the_ID() ?>" <?php post_class(); ?>>
							<div class="post-inner">
								<div class="post-image">
									<a href="<?php the_permalink(); ?>">
										<div class="grid-image" style="background-image: url(<?php the_post_thumbnail_url('blog-image'); ?>)"></div>
									</a>
								</div>

								<div class="post-wrap">
									<h2 class="post-title"><a href="<?php the_permalink() ?>" title="<?php the_title() ?>" rel="bookmark"><?php the_title() ?></a></h2>

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
			<?php } ?>

			<?php the_posts_pagination(); ?>

		</div><!-- #content -->

		<?php if (get_theme_mod('crispblog_archive_layout', 'full_width') != 'full_width') { ?>
		<?php get_sidebar() ?>
		<?php } ?>

		<div class="clear"></div>

	</div>

<?php get_footer() ?>