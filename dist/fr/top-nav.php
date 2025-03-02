  <div id="sidenav-bar" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a href="https://notbyai.fyi/how-it-works">Mode d’emploi</a>
    <a href="https://notbyai.fyi/pricing">Tarifs</a>
    <a href="https://notbyai.fyi/gallery">Galerie</a>
    <a href="https://notbyai.fyi/help">Ressources</a>
    <a href="https://notbyai.fyi/about">À propos</a>
    <a href="https://notbyai.fyi/contact">Nous contacter</a>
    <div class="px-4 mt-3" onclick="closeNav()">
      <a href="#" id="side-nav-download" class="btn text-white cursor-pointer px-2" data-bs-toggle="modal" data-bs-target="#downloadEmail">Téléchargez les badges</a>
    </div>
    <div class="px-4 mt-3" onclick="closeNav()">
      <a href="https://notbyai.fyi/app/login" class="text-center px-2 rounded-2" style="box-shadow: 0 0 0px 1px #000000 inset;">Se connecter</a>
    </div>
    <div class="d-flex pt-4">
      <a class="px-2 ms-4" href="https://twitter.com/NotByAIBadge" target="_blank"><img width="18" class="mx-1" src="/img/twitter.svg" alt="Follow us on Twitter"></a>
      <a class="px-2" href="https://facebook.com/notbyai" target="_blank"><img class="mx-1" src="/img/facebook.svg" alt="Follow us on Facebook"></a>
      <a class="px-2" href="https://www.linkedin.com/company/notbyai/" target="_blank"><img width="16" class="mx-1" src="/img/linkedin.svg" alt="Follow us on Linkedin"></a>
      <a class="px-2" href="mailto:?subject=Not By AI&amp;body=Download the Not By AI badges from https://notbyai.fyi." title="Share by Email" target="_blank"><img class="mx-1 mt-1" src="/img/forward.svg" alt="Share via email"></a>
    </div>
  </div>
  <div class="container-fluid bg-white text-center curve">
    <div id="topNav" class="row sticky-top bg-white border-bottom align-items-center mb-4 mb-xl-5">
      <div class="col-2 col-sm-4 text-start ps-4 ps-sm-4 share d-block d-lg-none">
        <span onclick="openNav()">
          <div class="hamburger-menu">
            <div class="bar"></div>
            <div class="bar"></div>
            <div class="bar"></div>
          </div>
        </span>
      </div>
      <div class="col-lg-5 text-start pe-4 d-none d-lg-block">
        <ul class="list-unstyled d-inline">
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3 ms-3" href="https://notbyai.fyi/how-it-works">Mode d’emploi</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/pricing">Tarifs</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/gallery">Galerie</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/help">Ressources</a></li>
        </ul>
      </div>
      <div class="col-8 col-sm-4 col-lg-2 text-center">
        <a href="https://notbyai.fyi/fr" style="opacity: 1;"><img class="my-3 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
      </div>
      <div class="col-2 col-sm-4 col-lg-5 text-end pe-4">
        <ul class="list-unstyled d-inline">
          <?php
          function isHomePage() {
            $currentPage = basename($_SERVER['PHP_SELF']);
            $homePage = 'index.php'; // Replace with the name of your homepage file
            return ($currentPage == $homePage);
          }
          ?>
          <?php if (isHomePage()): ?>
          <li class="d-inline">
            <span class="dropdown">
              <a class="xs pe-3 pe-lg-4 px-xl-3" href="#" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="/img/not-by-ai-language.svg" alt="" style="margin-bottom: 3px;"> <span class="d-none d-xl-inline-block">Français</span>
              </a>
              <ul class="dropdown-menu px-3 py-2" style="border-color: #eae9e9;">
                <li class="pb-2 small"><a href="http://notbyai.fyi">English</a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/es">Español</a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/fr">Français <div class="d-inline-block float-end"><svg width="11" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1 3 3.5 3.5 6-6" stroke="#000"/></svg></div></a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/lt">Lithuanian</a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/cn">简体中文</a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/tw">繁體中文</a></li>
                <li class="pt-2 small border-top"><a class="small opacity-50" href="http://notbyai.fyi/translate#translate-not-by-ai-website">Help Us Translate</a></li>
              </ul>
            </span>
          </li>
          <?php endif; ?>
          <li class="d-none d-md-inline"><a class="xs pe-3 pe-lg-4 px-xl-3" href="https://notbyai.fyi/app/login">Se connecter</a></li>
          <li class="d-none d-md-inline"><a class="xs pe-3 pe-lg-4 px-xl-3 me-4 me-sm-3 me-lg-5" href="https://notbyai.fyi/app/signup">Créer un compte <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg); margin-bottom: 3px;"></a></li>
        </ul>
      </div>
    </div>
    <script>
      if (window.location.pathname.match(/\/(es|tw|cn|fr|lt)/)) {
        localStorage.setItem('cameFromLanguagePath', window.location.pathname);
      }
    </script>