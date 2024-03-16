<?php /* Template Name: Login */
get_header();
?>
<style>
	.logged-in .pre-login {
		display: none;
	}
</style>
<header class="d-flex justify-content-center align-items-center py-5 px-2 px-lg-5">
	<img width="128.5" height="26.77" src="https://notbyai.fyi/img/not-by-ai.svg" alt="Not By AI">
</header><!-- .entry-header -->
<main class="position-relative z-1">
	<div class="container">
	  <div class="row justify-content-center">
		  <div class="col-sm-7 col-xl-4">
		    <h1 class="h2 mb-2 pt-3 pt-lg-5 pre-login"><?php single_post_title(); ?></h1>
				<?php
				while ( have_posts() ) :
					the_post();
		
					get_template_part( 'template-parts/content', 'page' );
		
				endwhile;
				?>
	      <p class="pt-2 pt-lg-5 small text-lg-end pre-login">Don't have an account? <a href="https://notbyai.fyi/app/signup/" class="text-decoration-underline">Sign up</a> now.</p>
	    </div>
	  </div>
	</div>
</main>
<img src="https://notbyai.fyi/img/not-by-ai-badge-download-examples.svg" class="d-none d-md-block position-fixed bottom-0 end-0 z-0" alt="">
<footer class="entry-footer">
	<?php wp_footer(); ?>
</footer>