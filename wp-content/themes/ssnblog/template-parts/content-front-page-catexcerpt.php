<?php
/**
 * Template part for displaying posts.
 *
 * @link https://codex.wordpress.org/Template_Hierarchy
 *
 * @package ssnblog
 */

?>

<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>

	<header class="entry-header cat-excerpt-entry-header">
		<?php
				the_title( '<h4 class="entry-title cat-excerpt-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h4>' );
				the_post_thumbnail( 'thumbnail');

// Removed the_excerpt function

				the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Read more %s <span class="meta-nav">&rarr;</span>', 'ssnblog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );
		?>


	</header><!-- .entry-header -->
</article>
