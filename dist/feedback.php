<?php
$pageTitle = 'Send Feedback to Not By AI';
$pageDes = 'Contact us and provide feedback if you have feedback regarding the Not By AI badge, content, website experience, licensing, and more.';
include 'header.php';
?>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1>Feedback</h1>
      </header>
      <div class="col-md-10 col-xl-9 py-5">
        <div class="row justify-content-center text-start">
          <div class="col-lg-6 pb-5">
            <h2 class="h3 text-center">Please Fill Out the Form to Provide Feedback.</h2>
            <p class="pb-3 text-center">Whatever you have to say, we want to hear it. Bonus point if you are a user and want to help and make the badge better.</p>
            <form class="" method="post" action="process-form-feedback.php">
              <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
              <label for="name">Name</label>
              <input type="text" name="name" required autofocus>
              <label for="email">Provide your email to get a reply regarding your feedback (optional)</label>
              <input type="email" name="email">
              <label for="feedbackType">What feedback would you like to provide?</label>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackType" id="feedbackType1" value="Things you love about Not By AI" required>
                <label class="form-check-label mt-0" for="feedbackType1">
                  Things you love about Not By AI
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackType" id="feedbackType2" value="Something is not working">
                <label class="form-check-label mt-0" for="feedbackType2">
                  Something is not working
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackType" id="feedbackType3" value="Features to suggest">
                <label class="form-check-label mt-0" for="feedbackType3">
                  Features to suggest
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="feedbackType" id="feedbackType4" value="General feedback">
                <label class="form-check-label mt-0" for="feedbackType4">
                  General feedback
                </label>
              </div>
              <label for="message">Tell us more</label>
              <textarea name="message" rows="5" required></textarea>
              <div class="d-flex pt-3">
                <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label class="mt-0" for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
              </div>
              <input type="submit" class="btn mt-4" value="Send My Message">
            </form>
          </div>
        </div>
        <h3 class="pt-5 pb-3 mt-5 border-top fs-5">Share Your Not By AI Commitment on Social Media:</h3>
        <div>
          <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="/img/twitter.svg" alt="share on Twitter"></a>
          <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="/img/facebook.svg" alt="share on Facebook"></a>
          <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="/img/linkedin.svg" alt="share on LinkedIn"></a>
        </div>
        <a href="https://notbyai.fyi" class="btn btn-dark rounded-0 my-5">Return to Homepage</a>
      </div>
    </main>
    <?php include 'footer.php'; ?>