<?php
$pageTitle = 'Contact Not By AI — Add the Badge to Human-Created Content';
$pageDes = 'Contact us if you have questions about using the Not By AI badge, showing your AI-free & human-created content, which badge to use, licensing, and more.';
include 'header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Submitting your message. <br>Please do not close your window.</span></div>
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
        <h1>Contact</h1>
      </header>
      <div class="col-lg-9 py-5">
        <div class="row">
          <section class="col-lg-6 text-start pb-5">
            <h2 class="h4 pb-3">Please fill out the form to contact us.</h2>
            <form id="forms" method="post" action="process-form-contact.php">
              <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
              <label for="name">Name</label>
              <input type="text" name="name" required autofocus>
              <label for="email">Email</label>
              <input type="email" name="email" required>
              <label for="message">Message</label>
              <textarea name="message" rows="5" required></textarea>
              <div class="d-flex pt-3">
                <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label class="mt-0" for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
              </div>
              <input type="text" name="nogo" style="display:none;">
              <input class="g-recaptcha btn mt-3" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback='onSubmit' data-action='submit' type="submit" value="Send My Message">
            </form>
          </section>
          <section class="col-lg-6 text-start">
            <h2 class="h4 pb-3" style="letter-spacing: 0px;">Helpful links:</h2>
            <h3 class="h5"><a href="/help/">Frequently Asked Questions</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></h3>
            <h3 class="h5"><a href="/help#how-to">How to Add the Not By AI Badges</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></h3>
            <h3 class="h5"><a href="/help/what-is-the-not-by-ai-90-rule.php">What Is the Not By AI 90% Rule</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></h3>
            <h3 class="h5 mb-4 pb-2"><a href="/gallery/">The Not By AI Gallery</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></h3>
            <div class="border-bottom mb-3"></div>
            <img class="img-fluid mt-4" srcset="/img/not-by-ai-badge-contact-us@2x.jpg 2x" src="/img/not-by-ai-badge-contact-us.jpg" alt="">
          </section>
        </div>
        <section>
          <?php include 'all-social.php'; ?>
        </section>
      </div>
    </main>
    <?php include 'footer.php'; ?>