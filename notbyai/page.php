<?php get_header(); ?>
	<div class="container-flex bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
      	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
				<article id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
				<header class="header">
				<h1 class="entry-title" itemprop="name"><?php the_title(); ?></h1> <?php edit_post_link(); ?>
				</header>
				<div class="entry-content" itemprop="mainContentOfPage">
				<?php if ( has_post_thumbnail() ) { the_post_thumbnail( 'full', array( 'itemprop' => 'image' ) ); } ?>
				<?php the_content(); ?>
				<div class="entry-links"><?php wp_link_pages(); ?></div>
				</div>
				</article>
				<?php if ( comments_open() && !post_password_required() ) { comments_template( '', true ); } ?>
				<?php endwhile; endif; ?>
      </div>
    </main>
<?php get_footer(); ?>