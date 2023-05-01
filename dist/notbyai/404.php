<?php get_header(); ?>
	<div class="container-flex bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
				<article id="post-0" class="post not-found">
				<header class="header">
				<h1 class="entry-title" itemprop="name"><?php esc_html_e( 'Not Found', 'blankslate' ); ?></h1>
				</header>
				<div class="entry-content" itemprop="mainContentOfPage">
				<p><?php esc_html_e( 'We are humans and mistakes happen.', 'blankslate' ); ?></p>
				</div>
				</article>
			</div>
		</main>
<?php get_footer(); ?>