<?php /* Template Name: Translate */ ?>
<?php get_header(); ?>
	<div class="container-fluid bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
    	<h1>Translate</h1>
      <div class="col-lg-9 py-5">
      	<div class="row">
      		<div class="col-lg-6 text-start pb-5">
      			<h5 class="pb-3">Please Fill Out the Translation Form.</h5>
      			<?php echo do_shortcode('[wpforms id="61" title="false"]'); ?>
      		</div>
      		<div class="col-lg-6 text-start">
      			<h2 class="h5 pb-3">Instructions:</h3>
            <p>First of all, your involvement in our mission is one of the best things we humans can do while AI quickly takes over content creation. Your contribution is very much appreciated.</p>
      			<p>Below are some tips and tricks to get you started.</p>
            <ul>
              <li>Your translation should be punctual and so simple that a third-grader can understand. </li>
              <li>Make sure “not by AI” is translated in a way where “not by AI” can be meaningful as a standalone.</li>
              <li>It does not need to be a 1 to 1 translation. For example, you may consider "hand-painted, not by AI" or "human-painted, no AI reliance" depending on what sounds more natural in your language. Localization is fine but stay close to the original meaning.</li>
              <li>"Produce" has many meanings in English. In our case, it is referring to music production and overall content creation. If there is no such word in your language, consider "create" or "make".</li>
              <li>In general, shorter word count is preferred.</li>
            </ul>
            <p>Can't wait to see what you are going to submit!</p>
            <p class="small">These languages are <span class="fst-italic">no longer</span> needed: English, Spanish, German, Korean, Chinese, French, Japanese, Indonesian, Portuguese, and Swedish.</p>
      		</div>
      	</div>
				<p class="pt-5 pb-3 mt-5 border-top fs-5 h3">Share Your Not By AI Commitment on Social Media:</p>
				<div>
          <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="share on Twitter"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="share on Facebook"></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.svg" alt="share on LinkedIn"></a>
        </div>
        <a href="https://notbyai.fyi" class="btn btn-dark rounded-0 my-5">Return to Homepage</a>
      </div>
    </main>
<?php get_footer(); ?>