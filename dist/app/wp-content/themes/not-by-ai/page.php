<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Not_By_AI
 */

get_header();
?>
	<header class="entry-header d-flex justify-content-between align-items-center py-3 px-2 px-lg-5">
		<a href="https://notbyai.fyi/app/"><img width="128.5" height="26.77" src="https://notbyai.fyi/img/not-by-ai.svg" alt="Not By AI"></a>
		<div class="dropdown d-flex align-items-center">
		  <div class="pe-3">
			  <a href="https://notbyai.fyi/app/?section=submit-post" class="for-business-link rounded-2">Add a Project</a>
			  <ul class="dropdown-menu mt-3" style="border-color: #eae9e9; box-shadow: 0px 5px 12px #eae9e9;">
			    <li><a class="dropdown-item xs" href="https://notbyai.fyi/app/?section=edit-profile">Profile</a></li>
			    <li class="pb-2"><a class="dropdown-item xs" href="https://notbyai.fyi/app/?section=billing-address">Billing</a></li>
			    <li class="border-top pt-1"><a class="dropdown-item xs" href="<?php echo wp_logout_url(); ?>">Sign Out</a></li>
			  </ul>
		  </div>
		  <div class="mb-1 pe-3">
			  <a class="opacity-50" href="/help" target="_blank">
			  	<svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="#000" d="M8 1.333A6.674 6.674 0 0 1 14.667 8 6.674 6.674 0 0 1 8 14.667 6.674 6.674 0 0 1 1.333 8 6.674 6.674 0 0 1 8 1.333ZM8 0a8 8 0 1 0 0 16A8 8 0 0 0 8 0Zm.833 11.333a.833.833 0 1 1-1.666 0 .833.833 0 0 1 1.666 0Zm.929-6.665c-.405-.41-1.01-.637-1.7-.637-1.454 0-2.394 1.034-2.394 2.634h1.34c0-.991.553-1.342 1.026-1.342.423 0 .871.28.91.817.04.565-.26.851-.642 1.214-.941.895-.959 1.329-.955 2.312h1.337c-.009-.443.02-.802.623-1.452.452-.487 1.013-1.092 1.024-2.015.008-.616-.189-1.146-.569-1.531Z"/></svg>
			  </a>
		  </div>
		  <div class="opacity-50 mb-1" type="button" data-bs-toggle="dropdown" aria-expanded="false">
		    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="none"><path fill="#000" d="M16 9.458V6.542c-1.432-.51-1.817-.535-2.018-1.02-.202-.485.055-.779.706-2.148l-2.062-2.062c-1.35.642-1.659.91-2.15.706C9.993 1.817 9.966 1.425 9.46 0H6.542c-.51 1.43-.533 1.817-1.02 2.018-.5.209-.801-.067-2.148-.706L1.312 3.374c.651 1.37.908 1.662.706 2.15-.201.484-.587.509-2.018 1.018v2.917c1.426.506 1.817.533 2.018 1.018.203.49-.054.778-.706 2.149l2.062 2.062c1.333-.633 1.647-.915 2.149-.706.485.201.509.587 1.019 2.018h2.916c.505-1.42.533-1.815 1.025-2.02.496-.206.79.065 2.143.707l2.062-2.062c-.65-1.366-.908-1.661-.706-2.148.2-.484.587-.509 2.018-1.019Zm-3.25.51c-.385.929-.045 1.638.325 2.385l-.722.722c-.729-.362-1.441-.717-2.382-.326-.931.387-1.194 1.128-1.459 1.918H7.489c-.265-.79-.527-1.532-1.455-1.917-.946-.392-1.671-.03-2.386.325l-.722-.722c.371-.746.71-1.454.325-2.387-.386-.927-1.128-1.19-1.918-1.455V7.49c.79-.265 1.532-.527 1.917-1.456.385-.929.045-1.639-.325-2.386l.722-.722c.722.358 1.442.718 2.387.325.928-.385 1.19-1.127 1.455-1.917h1.023c.265.79.528 1.532 1.456 1.917.946.392 1.67.03 2.386-.325l.723.722c-.371.748-.71 1.458-.326 2.387.385.927 1.126 1.19 1.917 1.455v1.023c-.792.265-1.535.527-1.918 1.455ZM8 6c1.103 0 2 .897 2 2s-.897 2-2 2-2-.897-2-2 .897-2 2-2Zm0-1.333a3.333 3.333 0 1 0-.001 6.665A3.333 3.333 0 0 0 8 4.667Z"/></svg>
		  </div>
		</div>
	</header>
	<main id="primary" class="site-main">

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

	</main><!-- #main -->

<?php
get_footer();
