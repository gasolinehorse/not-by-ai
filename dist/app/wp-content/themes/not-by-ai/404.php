<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package Not_By_AI
 */

get_header();
?>
	<header class="entry-header d-flex justify-content-center align-items-center py-5 px-2 px-lg-5">
		<a href="https://notbyai.fyi/app/"><img width="128.5" height="26.77" src="https://notbyai.fyi/img/not-by-ai.svg" alt="Not By AI"></a>
	</header><!-- .entry-header -->
	<main id="primary" class="site-main container">
		<div class="wpuf-dashboard-container row justify-content-center">
		  <div class="col-sm-9 col-xl-6 text-center">
			  <header class="page-header">
					<h1 class="page-title">Page Not Found</h1>
				</header><!-- .page-header -->
				<section class="error-404 not-found">
					<div class="page-content">
						<p>We are humans and mistakes happen. Please check the link and try again. Or contact us if you believe something is broken.</p>
					</div><!-- .page-content -->
					<a href="https://notbyai.fyi/app" class="btn mt-3">Return to Not By AI</a>
				</section><!-- .error-404 -->
		  </div>
		</div>
	</main><!-- #main -->

<?php
get_footer();
