<?php
$pageTitle = 'Translate Not By AI — Easily Translate the Badges Into Your Language';
$pageDes = 'Translate the Not By AI badges into your language to help content creators like you around the world appreciate the AI-free approach. It’s easy and rewarding.';
include 'header.php';
?>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1>Translate</h1>
      </header>
      <div class="col-12">
        <div class="row text-center pt-4 pb-3">
          <div class="overflow-hidden">
            <div class="sliding-background"></div>
          </div>
        </div>
      </div>
      <div class="col-lg-9 py-5">
        <div class="row">
          <div class="col-lg-6 text-start pb-5">
            <h2 class="h5 pb-3" style="letter-spacing: 0px;">Please fill out the translation form.</h2>
            <form class="" method="post" action="process-form-translate.php">
              <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
              <label for="name">Name</label>
              <input type="text" name="name" required autofocus>
              <label for="email">Email</label>
              <input type="email" name="email" required>
              <label for="message">Which language(s) would you like to translate?</label>
              <input type="text" name="language" required>
              <label for="message">Translate "painted by human, not by AI"</label>
              <input type="text" name="translate1" required>
              <label for="message">Translate "written by human, not by AI"</label>
              <input type="text" name="translate2" required>
              <label for="message">Translate "produced by human, not by AI"</label>
              <input type="text" name="translate3" required>
              <div class="d-flex pt-3">
                <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label class="mt-0" for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
              </div>
              <div class="d-flex pt-2">
                <input type="checkbox" id="languageNotification" name="languageNotification" value="I want to be notified when a badge in a new language becomes available"><label class="mt-0" for="languageNotification">Notify me when a badge in a new language becomes available</label>
              </div>
              <input type="submit" class="btn mt-4" value="Send My Translation">
            </form>
          </div>
          <div class="col-lg-6 text-start">
            <h2 class="h5 pb-3" style="letter-spacing: 0px;">Instructions:</h2>
            <p class="bg-light p-3 small">First of all, your involvement in our mission is one of the best things we humans can do while AI quickly takes over content creation. Your contribution is very much appreciated.</p>
            <p>Below are some tips and tricks to get you started.</p>
            <ul>
              <li class="pb-2">Your translation should be punctual and so simple that a third-grader can understand. </li>
              <li class="pb-2">Make sure “Not By AI” is translated in a way where “Not By AI” can be meaningful as a standalone.</li>
              <li class="pb-2">It does not need to be a 1 to 1 translation. For example, you may consider "hand-painted, not by AI" or "human-painted, no AI reliance" depending on what sounds more natural in your language. Localization is fine but stay close to the original meaning.</li>
              <li class="pb-2">"Produce" has many meanings in English. In our case, it is referring to music production and overall content creation. If there is no such word in your language, consider "create" or "make".</li>
              <li class="pb-2">In general, shorter word count is preferred.</li>
            </ul>
            <p>Can't wait to see what you are going to submit!</p>
            <p class="small">These languages are <span class="fst-italic">no longer</span> needed: English, Spanish, German, Korean, Chinese, French, Japanese, Indonesian, Thai, Portuguese, Vietnamese, and Swedish.</p>
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