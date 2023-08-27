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
            <h5 class="pb-3">Please fill out the form to contact us.</h5>
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
            <h2 class="h5 pb-3" style="letter-spacing: 0px;">Frequently asked questions:</h2>
            <h3 class="h4">The Not By AI badge is not available in my language, what do I do?</h3>
            <p>We are currently working on adding more languages. If you do not see your language, please <a class="text-decoration-underline" href="https://notbyai.fyi/translate">help us translate</a> or let us know that you would which language you would like to request using the contact form.</p>
            <h3 class="h4">Is commercial licensing available?</h3>
            <p>Yes. Please refer to the License link at the bottom of the page. </p>
            <h3 class="h4">I am not sure which of the three Not By AI badges to use for my project. How do I choose?</h3>
            <p>If you are not sure which badge to use, the Produced By Humans, Not By AI badge is likely the most suitable option. You can also use the contact form to suggest a new badge or request an answer from us. We are happy to help!</p>
            <h3 class="h4">I am using the Not By AI badge on my project. Can I share it with you and the community?</h3>
            <p>Absolutely. We love seeing how our badges are used. Feel free to share it with us using the contact form. We may even share it on our social media channels or in our upcoming newsletter.</p>
            <h3 class="h4">Do I need to link the Not By AI badge when I use it?</h3>
            <p>We strongly recommend you to link the badge to notbyai.fyi to help your users understand the mission you are participating in. Learn more about the instructions for linking the badge under the <a class="text-decoration-underline" href="https://notbyai.fyi/#not-by-ai-bdage-guidelines">Badge Use</a> section.</p>
            <h3 class="h4">Can we collaborate?</h3>
            <p>That would be wonderful. Send us a message and tell us about what you have in mind! </p>
          </section>
        </div>
        <section>
          <h3 class="pt-5 pb-3 mt-5 border-top fs-5">Share Your Not By AI Commitment on Social Media:</h3>
          <div>
            <a href="https://twitter.com/intent/tweet?url=https%3A%2F%2Fnotbyai.fyi&text=" target="_blank"><img height="35" class="mx-3 share__tt" src="/img/twitter.svg" alt="share on Twitter"></a>
            <a href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2Fnotbyai.fyi" target="_blank"><img height="35" class="mx-3 share__fb" src="/img/facebook.svg" alt="share on Facebook"></a>
            <a href="http://www.linkedin.com/shareArticle?mini=true&url=https%3A%2F%2Fnotbyai.fyi&title=" target="_blank"><img height="35" class="mx-3 share__li" src="/img/linkedin.svg" alt="share on LinkedIn"></a>
          </div>
          <a href="https://notbyai.fyi" class="btn my-5">Return to Homepage</a>
        </section>
      </div>
    </main>
    <?php include 'footer.php'; ?>