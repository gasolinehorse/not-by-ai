    <div class="container-fluid">
      <div class="row border-top text-center" style="border-color: #505050 !important;">
        <div class="col text-center py-3 text-center">
          <a href="https://notbyai.fyi/translate" class="display-6 me-3">Help Us Translate</a>
          <a href="https://notbyai.fyi/about" class="display-6 me-3">About&nbsp;Us</a>
          <a href="https://notbyai.fyi/#who-can-use-not-by-ai-badge" class="display-6 me-3">The 90%&nbsp;Rule</a>
          <a href="https://notbyai.fyi/contact" class="display-6">Contact</a><br>
          <a href="https://notbyai.fyi/feedback" class="display-6 me-3 opacity-50">Feedback</a>
          <a href="https://notbyai.fyi/license" class="display-6 me-3 opacity-50">License</a>
          <a href="https://notbyai.fyi/privacy-policy" class="display-6 opacity-50">Privacy Policy</a>
          <a href="https://notbyai.fyi"><img class="pt-3 d-block mx-auto" src="/img/written-by-human-not-by-ai-white.svg" alt="Written By Human, Not By AI"></a>
        </div>
        <small class="pb-3 text-white">Not By AI © 2023 All rights reserved.</small>
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
  <div id="curtain" class="position-fixed top-0 w-100 h-100" onclick="closeNav()"></div>
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