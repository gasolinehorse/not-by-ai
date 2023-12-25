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
            <form id="forms" method="post" action="process-form-translate.php">
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
              <input type="text" name="nogo" style="display:none;">
              <input class="g-recaptcha btn mt-4" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback='onSubmit' data-action='submit' type="submit" value="Send My Translation">
            </form>
          </div>
          <div class="col-lg-6 text-start">
            <h2 class="h5 pb-3" style="letter-spacing: 0px;">Instructions:</h2>
            <p class="bg-light p-3 small">Your involvement in our mission is one of the best things we humans can do while AI quickly takes over content creation. Your contribution is very much appreciated.</p>
            <p>Below are some tips and tricks to get you started.</p>
            <ul>
              <li class="pb-2">Your translation should be punctual and so simple that a third-grader can understand. </li>
              <li class="pb-2">Make sure “Not By AI” is translated in a way where “Not By AI” can be meaningful as a standalone.</li>
              <li class="pb-2">It does not need to be a 1 to 1 translation. For example, you may consider "hand-painted, not by AI" or "human-painted, no AI reliance" depending on what sounds more natural in your language. Localization is fine but stay close to the original meaning.</li>
              <li class="pb-2">"Produce" has many meanings in English. In our case, it is referring to music production and overall content creation. If there is no such word in your language, consider "create" or "make".</li>
              <li class="pb-2">In general, shorter word count is preferred.</li>
            </ul>
            <p>You will be featured on our <a href="/meet-our-translators" class="text-decoration-underline">Meet Our Translators page</a> for your contribution (optional). Can't wait to see what our badges in your beautiful languages!</p>
            <p class="small">These languages are <span class="fst-italic">no longer</span> needed: <?php include 'all-supported-languages.php'; ?></p>
          </div>
        </div>
        <?php include 'all-social.php'; ?>
      </div>
    </main>
    <?php include 'footer.php'; ?>