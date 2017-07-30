<?php get_header() ?>

	<div id="content-wrap" class="right-sidebar">

		<div id="content">

			<?php the_post(); ?>
			<div id="post-<?php the_ID() ?>" class="post">
				<?php
				$paged = get_query_var( 'page' ) ? get_query_var( 'page' ) : false;
				if ( $paged === false ) { ?>
				<div class="post-image">
					<?php the_post_thumbnail('blog-image'); ?>
				</div>
				<?php } ?>

				<h1 class="post-title"><?php the_title() ?></h1>

				<div class="post-meta">
					<div class="post-meta-left">
						<p>
							<span class="post-date"><i class="fa fa-calendar" aria-hidden="true"></i><span class="meta">Posted on</span> <span><?php the_time('j M, Y'); ?></span></span>
							<span class="post-author"><i class="fa fa-user" aria-hidden="true"></i><span class="meta">by</span> <span><?php the_author(); ?></span></span>
						</p>
					</div>

					<div class="post-meta-right">
						<p><span class="post-comment"><i class="fa fa-comment" aria-hidden="true"></i> <span><?php comments_number( '0', '1', '%' ); ?></span></span></p>
					</div>

					<div class="clear"></div>
				</div>
				
				<div class="post-content">
					<?php the_content( 'Continue reading ...' ); ?>
				</div>

				<?php
				global $multipage, $page, $numpages, $more, $pagenow;
				if ($multipage) {
					if ($page == 1) { ?>
						<div class="page-links first-page">
							<?php $next = $page + 1;
							$link = _wp_link_page($next).'' . __('Next Page', 'crispblog' ) . '</a>';
							$output = apply_filters( 'wp_link_pages_link', $link, $next );
							echo $output; ?>
						</div>
					<?php } elseif( $multipage && $page == $numpages ) { ?>
						<div class="page-links last-page">
							<?php $prev = $page - 1;
							$link = _wp_link_page($prev).'' . __('Previous Page', 'crispblog' ) . '</a>';
							$output = apply_filters( 'wp_link_pages_link', $link, $prev );
							echo $output; ?>
							<?php next_post_link( '%link', 'Next Post', TRUE ); ?>
						</div>
					<?php } else {
						wp_link_pages(array('before' => '<div class="page-links">', 'after' => '</div>', 'link_before'  => '<span class="current"><span class="currenttext">', 'link_after' => '</span></span>', 'next_or_number' => 'next', 'nextpagelink' => __('Next Page', 'crispblog' ), 'previouspagelink' => __('Previous Page', 'crispblog' ), 'pagelink' => '%', 'echo' => 1 ));
					}
				} ?>

				<div class="post-tags">
					<p><?php the_tags(); ?></p>
				</div>
				
				<?php $sharing = get_theme_mod('crispblog_sharing', '1');
				if ($sharing == '1') { ?>
				<div class="post-share">
					<?php $excerpt = wp_strip_all_tags(get_the_excerpt()); ?>
					<span><?php _e( 'Share this article', 'crispblog' ); ?> </span>
					<a target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false;" href="https://www.facebook.com/sharer/sharer.php?u=<?php the_permalink(); ?>&picture=<?php the_post_thumbnail_url(); ?>&title=<?php the_title(); ?>&description=<?php echo $excerpt; ?>">
  					<i class="fa fa-facebook" aria-hidden="true"></i></a>
					<a target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false;" href="http://twitter.com/home/?status=<?php the_title(); ?> - <?php the_permalink(); ?>"><i class="fa fa-twitter" aria-hidden="true"></i></a>
					<a target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false;" href="https://plus.google.com/share?url=<?php the_permalink(); ?>"><i class="fa fa-google-plus" aria-hidden="true"></i></a>
					<a target="_blank" OnClick="window.open(this.href,'targetWindow','toolbar=no,location=0,status=no,menubar=no,scrollbars=yes,resizable=yes,width=600,height=250'); return false;" href="http://pinterest.com/pin/create/bookmarklet/?media=<?php the_post_thumbnail_url(); ?>&url=<?php the_permalink(); ?>&is_video=false&description=<?php the_title(); ?>"><i class="fa fa-pinterest" aria-hidden="true"></i></a>
				</div>
				<?php } ?>
			</div><!-- .post -->

			<?php comments_template(); ?>		

		</div><!-- #content -->

		<?php get_sidebar() ?>
		
		<div class="clear"></div>

	</div>

<?php get_footer() ?>