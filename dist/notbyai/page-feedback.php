<?php /* Template Name: Feedback */ ?>
<?php get_header(); ?>
	<div class="container-fluid bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
    	<h1>Feedback</h1>
      <div class="col-lg-9 py-5">
      	<div class="row justify-content-center">
      		<div class="col-lg-6 text-start pb-5">
      			<h2 class="h3 text-center pb-3">Please Fill Out the Form to Provide Feedback.</h5>
      			<?php echo do_shortcode('[wpforms id="82" title="false"]'); ?>
      		</div>
      	</div>
				<h3 class="pt-5 pb-3 mt-5 border-top fs-5">Share Your Not By AI Commitment on Social Media:</h3>
				<div>
          <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="share on Twitter"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="share on Facebook"></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.svg" alt="share on LinkedIn"></a>
        </div>
        <a href="https://notbyai.fyi" class="btn btn-dark rounded-0 my-5">Return to Homepage</a>
      </div>
    </main>
<?php get_footer(); ?>