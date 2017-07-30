<?php get_header() ?>

	<div id="content-wrap" class="right-sidebar">

		<div id="content">

			<?php the_post(); ?>
			<div id="post-<?php the_ID() ?>" class="post">
				<h1 class="post-title"><?php the_title() ?></h1>

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
			</div><!-- .post -->

		</div><!-- #content -->

		<?php get_sidebar() ?>

		<div class="clear"></div>

	</div>

<?php get_footer() ?>