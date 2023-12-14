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
        <h1>Meet Our Translators</h1>
      </header>
      <div class="col-md-10 col-xl-9 pt-5">
        <div class="row justify-content-center text-start">
          <div class="col-lg-10 pb-4">
            <img class="w-100 mb-4" srcset="/img/translate-multi-languages-not-by-ai.jpg 2x" src="/img/translate-multi-languages-not-by-ai.jpg" alt="Not By AI in greek" />
            <p>These are the amazing humans behind the Not By AI badges. Not By AI would not be able to grow and expand into different regions without their help.</p> 
            <p>Thanks to their contributions, we now have over twenty languages translated including <?php include 'all-supported-languages.php'; ?></p>
          </div>
        </div>
      </div>
      <div class="col-12 text-center position-relative z-2 fade-in-move-up" style="margin-bottom: -22px; animation-delay: 0.7s; opacity: 0;">
        <img width="90" height="90" srcset="/img/not-by-ai-translator-badge.png 2x" src="/img/not-by-ai-translator-badge.png" alt="Not By AI Translator List" />
      </div>
      <div class="col-lg-10 col-xl-9 px-4 px-lg-0 mb-4 mb-lg-5 positino-relative z-1 fade-in-move-up" style="animation-delay: 0.5s; opacity: 0;">
        <div class="row bg-light pt-4 pb-4 pb-lg-5 gy-4">
          <div class="col-12 pb-3">
            <h3 class="h4 border-bottom py-3">The Not By AI Translators</h3>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://fadamakis.com" target="_blank" rel="nofollow">Fotis Adamakis</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://www.idapersson.com" target="_blank" rel="nofollow">Ida Persson</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://github.com/tuncaykaptan" target="_blank" rel="nofollow">Tuncay KAPTAN</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://www.ptsgrn.dev" target="_blank" rel="nofollow">Patsagorn Yuenyong</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://carlos-aguilar.com" target="_blank" rel="nofollow">Carlos Aguilar</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://linerly.xyz" target="_blank" rel="nofollow">Linerly</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://mastodon.social/@vanzasetia" target="_blank" rel="nofollow">Vanza</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://mas.to/@KNTRO" target="_blank" rel="nofollow">KNTRO</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://www.instagram.com/chrispanetta_/" target="_blank" rel="nofollow">Chris Panetta</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0">Jérôme</p>
          </div>
          <script>
            var userTimezone = Intl.DateTimeFormat().resolvedOptions().timeZone;
            console.log('User timezone:', userTimezone);
            if (userTimezone === 'Asia/Taipei') {
                document.write('<div class="col-sm-4 col-6"><p class="mb-0"><a class="text-decoration-underline" href="https://twitter.com/Ivon852" target="_blank" rel="nofollow">Ivon Huang</a></p></div>');
            } else {
                document.write('<div class="col-sm-4 col-6"><p class="mb-0">Ivon Huang</p></div>');
            }
          </script>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://twitter.com/AlSeg_" target="_blank" rel="nofollow">Alyson Segovia</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://www.linkedin.com/in/oanastroe22" target="_blank" rel="nofollow">Oana Stroe</a></p>
          </div>
          <div class="col-sm-4 col-6">
            <p class="mb-0"><a class="text-decoration-underline" href="https://www.gasolinehorses.com/" target="_blank" rel="nofollow">Allen Hsu</a></p>
          </div>
          <div class="col-12 pt-4">
            <p class="opacity-50">...and other 23 anonymous translators.</p>
          </div>
          <div class="overflow-hidden pt-4">
            <div class="sliding-background sliding-background--trans"></div>
          </div>
        </div>
      </div>
      <div class="col-md-10 col-xl-9">
        <div class="row justify-content-center text-start">
          <div class="col-lg-10 pb-5">
            <p class="mb-4">If you want to be a part of the mission to help and ensure humanity continues to generate authentic content and advance, become a translator.</p>
            <a href="/translate" class="btn btn-dark rounded-0 mb-5">Help Us Translate</a>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>