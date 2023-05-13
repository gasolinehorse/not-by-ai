<?php /* Template Name: Contact */ ?>
<?php get_header(); ?>
	<div class="container-fluid bg-white text-center curve">
    <a href="https://notbyai.fyi/"><img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI"></a>
    <main class="row justify-content-center px-4 px-lg-0">
    	<h1>Contact</h1>
      <div class="col-lg-9 py-5">
      	<div class="row">
      		<div class="col-lg-6 text-start pb-5">
      			<h5 class="pb-3">Please Fill Out the Form to Contact Us.</h5>
      			<?php echo do_shortcode('[wpforms id="84" title="false"]'); ?>
      		</div>
      		<div class="col-lg-6 text-start">
      			<h2 class="h5 pb-3" style="letter-spacing: 0px;">Frequently Asked Questions:</h2>
      			<h3 class="h4">The Not By AI badge is not available in my language, what do I do?</h3>
      			<p>We are currently working on adding more languages. If you do not see your language, please <a class="text-decoration-underline" href="<? bloginfo('url') ?>/translate">help us translate</a> or let us know that you would which language you would like to request using the contact form.</p>
      			<h3 class="h4">Is commercial licensing available?</h3>
      			<p>More details to come in the very near future. For now, please contact us and we will keep you posted.</p>
      			<h3 class="h4">Is non-profit licensing available?</h3>
      			<p>More details to come in the very near future. For now, please contact us and we will keep you posted.</p>
      			<h3 class="h4">I am not sure which of the three Not By AI badges to use for my project. How do I choose?</h3>
      			<p>If you are not sure which badge to use, the Produced By Humans, Not By AI badge is likely the most suitable option. You can also use the contact form to suggest a new badge or request an answer from us. We are happy to help!</p>
      			<h3 class="h4">I am using the Not By AI badge on my project. Can I share it with you and the community?</h3>
      			<p>Absolutely. We love seeing how our badges are used. Feel free to share it with us using the contact form. We may even share it on our social media channels or in our upcoming newsletter.</p>
      			<h3 class="h4">Do I need to link the Not By AI badge when I use it?</h3>
      			<p>We strongly recommend you to link the badge to notbyai.fyi to help your users understand the mission you are participating in. Learn more about the instructions for linking the badge under the <a class="text-decoration-underline" href="https://notbyai.fyi/#not-by-ai-bdage-guidelines">Badge Use</a> section.</p>
      			<h3 class="h4">Can we collaborate?</h3>
      			<p>That would be wonderful. Send us a message and tell us about what you have in mind! </p>
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