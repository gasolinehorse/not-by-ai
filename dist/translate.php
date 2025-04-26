<?php
$pageTitle = 'Translate Not By AI — Easily Translate the Badges Into Your Language';
$pageDes = 'Translate the Not By AI badges into your language to help content creators like you around the world appreciate the AI-free approach. It’s easy and rewarding.';
include 'header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Submitting your translation. <br>Please do not close your window.</span></div>
    <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://www.google.com/recaptcha/api.js"></script>
    <script>
      function onSubmit(token) {
        var form = document.getElementById("forms");
        if (form.checkValidity()) {
          document.getElementById("loader").style.display = "flex";
          form.submit();
        } else {
          grecaptcha.reset();
          form.reportValidity();
        }
      }
    </script>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1 class="mt-4">Translate</h1>
      </header>
      <div class="row py-5 my-4 justify-content-center border-bottom">
        <div class="col-lg-9 col-xxl-7 pb-5">
          <h2 class="pt-md-3 pb-4">How Would You Like to Help?</h2>
          <div class="row justify-content-center">
            <div class="col-5 col-lg-3">
              <a href="#translate-not-by-ai-badges"><img class="img-fluid" srcset="/img/translate-not-by-ai-badges@2x.jpg 2x" src="/img/translate-not-by-ai-badges.jpg" alt="translate Not By AI badges"></a>
              <a class="d-block pt-3" href="#translate-not-by-ai-badges">Translate Badges <img src="/img/download-not-by-ai-badge.svg" alt="" style="margin-bottom: 3px;"></a>
            </div>
            <div class="col-1 align-self-center fst-italic my-4 opacity-50">
              or
            </div> 
            <div class="col-5 col-lg-3">
              <a href="#translate-not-by-ai-website"><img class="img-fluid" srcset="/img/translate-not-by-ai-website@2x.jpg 2x" src="/img/translate-not-by-ai-website.jpg" alt="translate Not By AI website"></a>
              <a class="d-block pt-3" href="#translate-not-by-ai-website">Translate Website <img src="/img/download-not-by-ai-badge.svg" alt="" style="margin-bottom: 3px;"></a>
            </div>
          </div>
          <div class="px-md-5 pt-4">
            <p class="bg-light p-3 small">Your involvement in our mission is one of the best things we humans can do while AI quickly takes over content creation. Your contribution is very much appreciated.</p>
          </div>
        </div>
      </div>
      <div id="translate-not-by-ai-badges" class="row justify-content-center" style="scroll-margin-top: 6rem;">
        <h3 class="pt-5 pb-3">Translate Badges</h3>
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
              <h4 class="h5 pb-3">Please fill out the translation form.</h4>
              <form id="forms" method="post" action="process-form-translate.php">
                <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
                <label for="name">Name</label>
                <input type="text" name="name" required>
                <label for="email">Email</label>
                <input type="email" name="email" required>
                <label for="message">Which language(s) would you like to translate?</label>
                <input type="text" name="language" required>
                <label for="message">Translate "painted by humans, not by AI" & "painted by a human, not by AI"</label>
                <input type="text" name="translate1" required>
                <label for="message">Translate "written by humans, not by AI" & "written by a human, not by AI"</label>
                <input type="text" name="translate2" required>
                <label for="message">Translate "produced by humans, not by AI" & "produced by a human, not by AI"</label>
                <input type="text" name="translate3" required>
                <div class="d-flex pt-3">
                  <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label class="mt-0" for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
                </div>
                <input type="text" name="nogo" style="display:none;">
                <input class="g-recaptcha btn mt-4" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback='onSubmit' data-action='submit' type="submit" value="Send My Translation">
              </form>
            </div>
            <div class="col-lg-6 text-start">
              <h4 class="h5 pb-3">Instructions:</h4>
              <p>Below are some tips and tricks to get you started.</p>
              <ul>
                <li class="pb-2">Your translation should be punctual and so simple that a third-grader can understand. </li>
                <li class="pb-2">Make sure “Not By AI” is translated in a way where “Not By AI” can be meaningful as a standalone.</li>
                <li class="pb-2">If the word "human" in your language is uncountable, you don’t need to submit two versions (singular and plural).</li>
                <li class="pb-2">It does not need to be a 1 to 1 translation. For example, you may consider "hand-painted, not by AI" or "painted by humans, no AI used" depending on what sounds more natural in your language.</li>
                <li class="pb-2">"Produce" has many meanings in English. In our case, it refers to music production and overall content creation. If there is no such word in your language, consider "create" or "make".</li>
                <li class="pb-2">In general, a shorter word count is preferred.</li>
              </ul>
              <p>You will be featured on our <a href="/meet-our-translators" class="text-decoration-underline">Meet Our Translators page</a> for your contribution (optional). Can't wait to see our badges in your beautiful languages!</p>
              <p class="small">These languages are <span class="fst-italic">no longer</span> needed: <?php include 'all-supported-languages.php'; ?></p>
            </div>
          </div>
        </div>
      </div>
      <div id="translate-not-by-ai-website" class="row justify-content-center border-top" style="scroll-margin-top: 5rem;">
        <div class="col-lg-9 py-5">
          <div class="row py-4">
            <h3 class="pb-lg-5">Translate Website</h3>
            <div class="col-lg-6 text-start">
              <h4 class="h5 pb-3">To those who go above and beyond:</h4>
              <p>Translating our homepage is a meaningful task and it helps the audience better understand the Not By AI mission. Our goal is not only to provide badges in all languages but also to make sure that, when someone clicks on a badge and lands on the Not By AI homepage, they understand why creators from all over the world are placing the badges on their content. Thank you for going the extra mile, we deeply appreciate your help!</p>
              <p>Please follow these two steps to submit your translation.</p>
              <p class="small">These languages are <span class="fst-italic">no longer</span> needed: English, Spanish, Simplified Chinese (CN), Traditional Chinese (TW), and Lithuanian.</p>
            </div>
            <div class="col-lg-6 text-start">
              <h5 class="h3">Step 1. </h5>
              <h4 class="h5 pb-3">Download the homepage copy document and add your translation to the document.</h4>
              <a class="btn mb-4" href="not-by-ai-homepage-copy.docx" target="_blank">Download Content to Translate</a>
              <h5 class="h3 pt-lg-2">Step 2. </h5>
              <h4 class="h5 pb-3">Once completed, send the translated document to us. We will review it and get back to you shortly.</h4>
              <a class="btn" href="mailto:hello@notbyai.fyi?subject=Not%20By%20AI%20Homepage%20Translation%20Submission" target="_blank">Submit My Translation</a>
            </div>
          </div>
          <?php include 'all-social.php'; ?>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>