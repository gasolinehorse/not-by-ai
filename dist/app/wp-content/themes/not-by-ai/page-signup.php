<?php /* Template Name: Signup */
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
		  <div class="col-sm-7 col-xl-5">
		    <h1 class="h2 pb-0 pt-3 pre-login">Let's Set Up Your Account</h1>
		    <p class="mb-4 pre-login">It's free and easy to start.</p>
				<?php
				while ( have_posts() ) :
					the_post();
		
					get_template_part( 'template-parts/content', 'page' );
		
				endwhile;
				?>
				<p class="pt-2 pt-lg-5 small text-lg-end pre-login">Already have an account? <a href="https://notbyai.fyi/app/login/" class="text-decoration-underline">Log in</a>.</p>
	    </div>
	  </div>
	</div>
</main>
<img src="https://notbyai.fyi/img/not-by-ai-badge-download-examples.svg" class="d-none d-md-block position-fixed bottom-0 end-0 z-0" alt="">
<footer class="entry-footer">
	<?php wp_footer(); ?>
</footer>