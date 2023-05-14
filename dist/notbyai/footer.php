		<div class="row border-top text-center">
      <div class="col text-center py-3 text-center">
        <a href="<? bloginfo('url') ?>/translate" class="display-6 pt-3 me-3">Help Us Translate</a>
        <a href="<? bloginfo('url') ?>/feedback" class="display-6 pt-3 me-3">Feedback</a>
        <a href="<? bloginfo('url') ?>/about" class="display-6 pt-3 me-3">About Us</a>
        <a href="<? bloginfo('url') ?>/license" class="display-6 pt-3 me-3">License</a>
        <a href="<? bloginfo('url') ?>/contact" class="display-6 pt-3">Contact</a>
        <a href="https://notbyai.fyi"><img class="pt-3 d-block mx-auto" src="<?php echo get_stylesheet_directory_uri(); ?>/img/written-by-human-not-by-ai-white.svg" alt="Written By Human, Not By AI"></a>
      </div>
      <small class="pb-3">Not By AI © 2023 All rights reserved.</small>
    </div>
  </div>
  <script>
  var trafficSource = document.referrer;
  if (trafficSource.indexOf("google") == -1 && trafficSource.indexOf("bing") == -1 && trafficSource.indexOf("yahoo") == -1 && trafficSource.length > 0) {
    document.getElementById("tagline").innerHTML = "I Added a 'Not&nbsp;By&nbsp;AI' Badge to My Content to Prove Its&nbsp;Originality.";
    document.getElementById("tagline").style.zoom = "90%";
  }
  </script>
</body>
</html>