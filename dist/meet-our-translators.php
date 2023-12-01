<?php
$pageTitle = 'Meet the Not By AI Translators';
$pageDes = 'The Not By AI badges are now available in over 20 languages thanks to our translators. You can also help us translate!';
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
        <h1>Meet Our Translator</h1>
      </header>
      <div class="col-md-10 col-xl-9 pt-5">
        <div class="row justify-content-center text-start">
          <div class="col-lg-10 pb-5">
            <div class="row">
              <div class="col-sm-6">
                <p>These are the amazing individuals behind the Not By AI badges. Not By AI would not be able to grow and expand into different regions without their help. Thanks to their contributions, we now have over 20 languages translated.</p>

              </div>
              <div class="col-sm-6">
                <p class="mb-4">If you want to be a part of the mission to help and ensure humanity continues to generate authentic content and advance, become a translator.</p>
                <a href="/translate" class="btn btn-dark rounded-0 mb-5" target="_blank">Help Us Translate</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-10 col-xl-9 px-4 px-lg-0 mb-5">
        <div class="row bg-light pt-4 pb-5 gy-4">
          <div class="col-12">
            <h3 class="h4">The Not By AI Translators</h3>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-sm-4">
            <p class="mb-0"><a class="text-decoration-underline" href="#">Allen Hsu</a></p>
          </div>
          <div class="col-12 pt-4">
            <p class="opacity-50">...and other XX anonymous translators.</p>
          </div>
          <div class="overflow-hidden pt-4">
            <div class="sliding-background"></div>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>