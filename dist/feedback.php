<?php
$pageTitle = 'Send Feedback to Not By AI';
$pageDes = 'Contact us and provide feedback if you have feedback regarding the Not By AI badge, content, website experience, licensing, and more.';
include 'header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Submitting your feedback. <br>Please do not close your window.</span></div>
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
        <h1 class="mt-4">Feedback</h1>
      </header>
      <div class="col-md-10 col-xl-9 py-5">
        <div class="row justify-content-center text-start">
          <div class="col-lg-6 pb-5">
            <h2 class="h3 text-center">Please Fill Out the Form to Provide Feedback.</h2>
            <p class="pb-3 text-center">Whatever you have to say, we want to hear it. Bonus point if you are a user and want to help and make the badge better.</p>
            <form id="forms" method="post" action="process-form-feedback.php">
              <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
              <label for="name">Name</label>
              <input type="text" name="name" required autofocus>
              <label for="email">Email</label>
              <input type="email" name="email" required>
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
              <input class="g-recaptcha btn mt-4" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback='onSubmit' data-action='submit' type="submit" value="Send My Message">
            </form>
          </div>
        </div>
        <?php include 'all-social.php'; ?>
      </div>
    </main>
    <?php include 'footer.php'; ?>