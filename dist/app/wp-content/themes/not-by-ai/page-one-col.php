<?php /* Template Name: One Column */
echo '<link rel="stylesheet" href="https://notbyai.fyi/app/wp-content/plugins/wp-user-frontend/assets/css/frontend-forms.css?ver=4.0.6">';
get_header();
?>
<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
	<header class="entry-header d-flex justify-content-center align-items-center py-5 px-2 px-lg-5">
		<a href="https://notbyai.fyi/app/"><img width="128.5" height="26.77" src="https://notbyai.fyi/img/not-by-ai.svg" alt="Not By AI"></a>
	</header><!-- .entry-header -->
	<div class="entry-content container">
	  <div class="wpuf-dashboard-container row justify-content-center">
		  <div class="col-sm-7 col-xl-4">
		    <div class="h3 mb-2"><?php single_post_title(); ?></div>
				<?php
				while ( have_posts() ) :
					the_post();
		
					get_template_part( 'template-parts/content', 'page' );
		
					// If comments are open or we have at least one comment, load up the comment template.
					if ( comments_open() || get_comments_number() ) :
						comments_template();
					endif;
		
				endwhile; // End of the loop.
				?>
	      <div class="wpuf-pagination"></div>
	      <p class="pt-5 small text-end">Don't have an account? <a href="https://notbyai.fyi/app/signup/" class="text-decoration-underline">Sign up</a> now.</p>
	    </div>
	</div>
</article><!-- #post-<?php the_ID(); ?> -->
<footer class="entry-footer">
	<?php not_by_ai_entry_footer(); ?>
	<?php wp_footer(); ?>
</footer><!-- .entry-footer -->