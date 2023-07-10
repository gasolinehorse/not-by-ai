<?php
$pageTitle = 'Download the Not By AI Badge';
$pageDes = 'Add the Not By AI badge to showcase your AI-free & human-first approach to content creation (writings, art, photos, paintings, videos, and music)';
include 'header.php';
include 'top-nav.php';
?>
    <meta http-equiv="refresh" content="2; url='https://notbyai.fyi/Not-By-AI.zip'" />
    <div class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
        <header class="header">
          <h1>Thank You for Your&nbsp;Purchase</h1>
        </header>
        <div class="row justify-content-center">
	        <div class="col-sm-10 col-md-9 col-lg-5">
		        <div class="h5 pt-4 pb-3">Your download will start soon. You can also request a copy to be sent to your inbox below.</div>
		        <form method="post" action="process-form-post-purchase-request.php">
		          <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
	            <label class="d-block text-start" for="email">Email</label>
	            <input type="email" name="email" required>
	            <div class="d-flex pt-3">
	              <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label for="marketing" class="mt-0 text-start">I want to receive news such as updates, tips, resources, and discounts.</label>
	            </div>
	            <input type="submit" class="btn mt-4" value="Send Myself a Copy">
		        </form>
	        </div>
        </div>
      </div>
    </div>
    <div class="row justify-content-center pb-5">
      <div class="col-12">
        <div class="h5 pb-4">What to Do Next</div>
      </div>
      <div class="col-sm-8 col-md-7 col-lg-3">
        <div class="h1">Step 1</div>
        <p>Once you download the Not By AI ZIP file to your desktop and unzip it, open the folder. You will find subfolders that contain the Not By AI badges in different languages.</p>
      </div>
      <div class="col-sm-8 col-md-7 col-lg-3">
        <div class="h1">Step 2</div>
        <p>Add the Not By AI badge of your preferred language to your content. Here are some <a class="text-decoration-underline" href="https://notbyai.fyi/#not-by-ai-badge-use-examples">examples</a> for your reference.</p>
      </div>
      <div class="col-sm-8 col-md-7 col-lg-3">
        <div class="h1">Step 3</div>
        <p>If your content is in a digital format that allows for the Not By AI badge to be linked or clickable, consider inserting a link to https://notbyai.fyi. This will allow the users to learn more about why you are participating in the movement.</p>
      </div>
    </div>
    <div class="row">
      <div class="overflow-hidden">
        <div class="sliding-background"></div>
      </div>
    </div>
    <div class="row justify-content-center">
      <div class="col-lg-9 pb-5">
        <p class="pt-5 pb-3 mt-5 border-top fs-5 h3">Share Your Not By AI Commitment on Social Media:</p>
        <div>
          <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="/img/twitter.svg" alt="share on Twitter"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="/img/facebook.svg" alt="share on Facebook"></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="/img/linkedin.svg" alt="share on LinkedIn"></a>
        </div>
        <a href="https://notbyai.fyi" class="btn btn-dark rounded-0 my-5">Return to Homepage</a>
      </div>
    </div>
    <?php include 'footer.php'; ?>