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
				the_title( '<h3 class="entry-title cat-excerpt-entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h3>' );
				the_post_thumbnail( 'thumbnail');

// BM CHANGE Removed the_excerpt function

				//BM CHANGE ADDED to get read more working

				the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'Read more %s <span class="meta-nav">&rarr;</span>', 'ssnblog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );


		?>
	</header><!-- .entry-header -->
</article>
