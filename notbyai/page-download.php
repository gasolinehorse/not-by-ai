<?php /* Template Name: Download */ ?>
<?php get_header(); ?>
	<meta http-equiv="refresh" content="0; url='https://notbyai.fyi/Not-By-AI.zip'" />
	<div class="container-flex bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header">
				<h1 class="fs-2 h3 entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				</header>
				<div class="entry-content" itemprop="mainContentOfPage">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
				</div>
				</article>
				<div class="row justify-content-center pt-4">
					<div class="col-lg-8">
						<img alt="Not By AI" class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai-banner.png">
					</div>
				</div>
				<p class="pt-5 pb-3 mt-5 border-top fs-5 h3">Share your Not By AI commitment on social media:</p>
				<div>
          <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="share on Twitter"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="share on Facebook"></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.svg" alt="share on LinkedIn"></a>
        </div>
        <a href="https://notbyai.fyi" class="btn btn-dark rounded-0 my-5">Return to Homepage</a>
				<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
				<?php endwhile; endif; ?>
      </div>
    </main>
<?php get_footer(); ?>