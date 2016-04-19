<?php
/*
Template Name: front-page
*/
?>

<?php

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">






			<!-- Attempts with Clair to get correct functionality working

<div id="latest-3-news-posts">
	latest 3 'news' posts
<?php query_posts('category_name=news&showposts=3');
	//if ( have_posts() ) {
		//while ( have_posts() ) :
			  //the_title(); the_permalink();
				//echo '<h1><a href="'. get_the_permalink() .'">'. get_the_title() ."</a></h1>";
		//endwhile;
	//} // end if

	// $latest_blog_posts = new WP_Query( array( 'posts_per_page' => 3 , 'category_name' => 'news') );

//if ( $latest_blog_posts->have_posts() ) : while ( $latest_blog_posts->have_posts() ) : $latest_blog_posts->the_title();
    // Loop output goes here
// endwhile; endif;
	?>
</div> -->

			<?php
			while ( have_posts() ) : the_post();

				get_template_part( 'template-parts/content-front-page', 'page' );

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
