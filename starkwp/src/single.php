<?php
/**
 * The template for displaying all single posts and attachments
 *
 * @package Stark
 * @subpackage WP
 * @since StarkWP 1.0
 */

get_header(); ?>

<div id="primary" class="content-area">	

	<?php
	// Start the loop.
	while ( have_posts() ) : the_post();

		// Include the single post content template.
		get_template_part( 'template-parts/content', 'single' );

		?>
		<div class="wrapper">
		<?php

		if ( is_singular( 'attachment' ) ) {
			// Parent post navigation.
			the_post_navigation( array(
				'prev_text' => _x( '<span class="meta-nav">Published in</span><span class="post-title">%title</span>', 'Parent post link', 'twentysixteen' ),
			) );
		} elseif ( is_singular( 'post' ) ) {
			// Previous/next post navigation.
			the_post_navigation( array(
				'next_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Next', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Next post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
				'prev_text' => '<span class="meta-nav" aria-hidden="true">' . __( 'Previous', 'twentysixteen' ) . '</span> ' .
						'<span class="screen-reader-text">' . __( 'Previous post:', 'twentysixteen' ) . '</span> ' .
						'<span class="post-title">%title</span>',
			) );
		}

		// If comments are open or we have at least one comment, load up the comment template.
		if ( comments_open() || get_comments_number() ) {
			comments_template();
		}
		?>
		</div>
		<?php	

		// End of the loop.
	endwhile;
	?>

</div><!-- .content-area -->

<?php get_footer(); ?>
