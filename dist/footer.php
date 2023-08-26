    <div class="border-top text-start pt-3">
      <div class="container pt-3">
        <div class="row mt-3">
          <div class="col-lg-4 text-center text-md-start pb-3">
            <img class="mb-3" src="/img/not-by-ai.svg" alt="Not By AI">
            <div class="display-2 lh-sm pb-2">Human Minds Shape&nbsp;Tomorrow</div>
            <p style="font-size: 1.3125rem;">With a badge, we empower humans to create authentic content</p>
          </div>
          <div class="text-center text-md-start col-md-3 col-lg-2">
            <ul class="nav flex-column">
              <li class="fw-bold py-2">Badges</li>
              <li class="lh-sm pb-1"><a class="display-6" href="/">Not By AI for Individuals</a></li>
              <li class="lh-sm pb-1"><a class="display-6" href="/business">Not By AI for Business</a></li>
            </ul>
          </div>
          <div class="text-center text-md-start col-md-3 col-lg-2">
            <ul class="nav flex-column">
              <li class="fw-bold py-2">Company</li>
              <li class="lh-sm pb-1"><a class="display-6" href="/translate">Help Us Translate</a></li>
              <li class="lh-sm pb-1"><a class="display-6" href="/feedback">Feedback</a></li>
              <li class="lh-sm pb-1"><a class="display-6" href="/contact">Contact Us</a></li>
            </ul>
          </div>
          <div class="text-center text-md-start col-md-3 col-lg-2">
            <ul class="nav flex-column">
              <li class="fw-bold py-2">Social</li>
              <li class="lh-sm pb-1"><a class="display-6" target="_blank" href="https://twitter.com/NotByAIBadge">X (Formerly Twitter)</a></li>
              <li class="lh-sm pb-1"><a class="display-6" target="_blank" href="https://www.facebook.com/notbyai">Facebook</a></li>
              <li class="lh-sm pb-1"><a class="display-6" target="_blank" href="https://www.linkedin.com/company/notbyai/">Linkedin</a></li>
            </ul>
          </div>
          <div class="text-center text-md-start col-md-3 col-lg-2">
            <a href="https://notbyai.fyi"><img class="pt-3 d-block mx-auto" src="/img/written-by-human-not-by-ai-white.svg" alt="Written By Human, Not By AI"></a>
          </div>
        </div>
        <div class="row flex-column flex-md-row align-content-between pt-4 pb-5">
          <div class="col">
            <div class="display-6 text-center text-md-start opacity-50 pb-2">Not By AI © 2023 All rights reserved.</div>
          </div>
          <div class="col d-flex justify-content-center justify-content-md-end text-center text-md-end">
            <a href="https://notbyai.fyi/license" class="display-6 me-4 opacity-50">License</a>
            <a href="https://notbyai.fyi/privacy-policy" class="display-6 opacity-50">Privacy Policy</a>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div class="modal fade" id="donate" tabindex="-1" aria-labelledby="donateLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
      <div class="modal-content border-0 rounded-0">
        <div class="modal-header px-md-5 py-md-4">
          <div class="modal-title fs-3 h3" id="donateLabel">Contribute to Our Mission</div>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body pb-4 pt-md-4 pb-md-5 px-md-5 text-center">
          <p class="mb-0">We have a huge to-do list (literally) to grow Not By AI and need your help to do so. <br>Your support empowers the future of content and humans.</p>
          <script async
            src="https://js.stripe.com/v3/buy-button.js">
          </script>
          <stripe-buy-button
            buy-button-id="buy_btn_1NE0dmHl9sHS7hKrb8qDcV73"
            publishable-key="pk_live_51N2maJHl9sHS7hKrsfltSFO2NfQTxMw2M66jYcdoFi4SsBcEjwjmLvSjftn482UqQRMGx0YbbdoMMjkzo8Pel7ld00Buib1tK9"
          >
          </stripe-buy-button>
        </div>
      </div>
    </div>
  </div>
  <div id="curtain" class="position-fixed top-0 start-0 w-100 h-100" onclick="closeNav()"></div>
  <script type="text/javascript">
    function openNav() {
      document.getElementById("sidenav-bar").style.width = "250px";
      document.getElementById("sidenav-bar").classList.add("show");
      document.getElementById("curtain").classList.add("show");
    }
    function closeNav() {
      document.getElementById("sidenav-bar").style.width = "0";
      document.getElementById("sidenav-bar").classList.remove("show");
      document.getElementById("curtain").classList.remove("show");
    }
  </script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
</body>
</html>