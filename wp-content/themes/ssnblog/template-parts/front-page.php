<?php
/*
Template Name: front-page
*/
?>

<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

<!-- Code below copied from https://codex.wordpress.org/The_Loop

			<?php
			if ( have_posts() ) {
				while ( have_posts() ) {
					the_post();
					//
					// Post Content here
					//
				} // end while
			} // end if
			?>

		-->


			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content', 'page' );

				// If comments are open or we have at least one comment, load up the comment template.
				if ( comments_open() || get_comments_number() ) :
					comments_template();
				endif;

			endwhile; // End of the loop.
			?>

		</main><!-- #main -->
	</div><!-- #primary -->

	<div id="latest-3-news-posts">
		latest 3 'news' posts
	</div>

	<div id="latest-3-stories-posts">
		latest 3 'stories' posts
	</div>

	<div id="latest-3-about-homelessness-posts">
		latest 3 'about homelessness' posts
	</div>


<?php
get_sidebar();
get_footer();
