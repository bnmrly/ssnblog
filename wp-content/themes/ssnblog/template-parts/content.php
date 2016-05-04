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

	<header class="entry-header">
		<?php
			if ( is_single() ) {
				the_title( '<h1 class="entry-title">', '</h1>' );
			} else {
				the_title( '<h2 class="entry-title"><a href="' . esc_url( get_permalink() ) . '" rel="bookmark">', '</a></h2>' );
			}
		?>
	</header><!-- .entry-header -->

<!-- BM CHANGE GOT RID OF CONTINUE READING AND REPLACE WITH MORE -->

	<div class="entry-content">
		<?php
			the_content( sprintf(
				/* translators: %s: Name of current post. */
				wp_kses( __( 'More %s <span class="meta-nav">&rarr;</span>', 'ssnblog' ), array( 'span' => array( 'class' => array() ) ) ),
				the_title( '<span class="screen-reader-text">"', '"</span>', false )
			) );

			wp_link_pages( array(
				'before' => '<div class="page-links">' . esc_html__( 'Pages:', 'ssnblog' ),
				'after'  => '</div>',
			) );
		?>
	</div><!-- .entry-content -->

	<?php
	if ( 'post' === get_post_type() ) : ?>

<div class ="info-container">

	<div class="entry-meta">
			<?php ssnblog_entry_footer(); ?>
		<?php ssnblog_posted_on(); ?>
	</div><!-- .entry-meta -->

<!-- previous code with facebook icon too small
<div class="social-share">
<span class="social-share__text">Share this post: </span>
<a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="streetsupportuk" data-dnt="true"></a>
	<a href="https://developers.facebook.com/docs/plugins/" class="fb-share-button"{count} data-via="streetsupportuk" data-dnt="true"></a>
</div>
</div>

-->

	<div class="social-share">
  <span class="social-share__text">Share this page: </span>
  <a href="https://twitter.com/share" class="twitter-share-button"{count} data-via="streetsupportuk" data-dnt="true"></a>
  <div class="fb-share-button" data-layout="button"></div>
</div>


	<div id="post-divider">
<span class="divider"><span class="divider__line"></span>
<span class="divider__background">
	<svg class="svg-logo-dims divider__icon"><use xmlns:xlink="http://www.w3.org/1999/xlink" xlink:href="/assets/svgsprite.svg#logo"></use></svg></span></span>
	</div>
	<?php
	endif; ?>
</article>
