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
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3 ms-3" href="https://notbyai.fyi/how-it-works">使用方法</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/pricing">付費方案</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/gallery">範例</a></li>
          <li class="d-inline"><a class="xs pe-lg-4 px-xl-3" href="https://notbyai.fyi/help">資源中心</a></li>
        </ul>
      </div>
      <div class="col-8 col-sm-4 col-lg-2 text-center">
        <a href="https://notbyai.fyi/tw" style="opacity: 1;"><img class="my-3 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
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
                <img src="/img/not-by-ai-language.svg" alt="" style="margin-bottom: 3px;"> <span class="d-none d-lg-inline-block">繁體中文</span>
              </a>
              <ul class="dropdown-menu px-3 py-2" style="border-color: #eae9e9;">
                <li class="pb-2 small"><a href="http://notbyai.fyi">English</a></li>
                <li class="pb-2 small"><a href="http://notbyai.fyi/es">Español</a></li>
                <!-- <li class="pb-2 small"><a href="http://notbyai.fyi/fr">Français</a></li> -->
                <li class="pb-2 small"><a href="http://notbyai.fyi/cn">简体中文</a></li>
                <li class="small"><a href="http://notbyai.fyi/tw">繁體中文 <div class="d-inline-block float-end"><svg width="11" height="8" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="m1 3 3.5 3.5 6-6" stroke="#000"/></svg></div></a></li>
              </ul>
            </span>
          </li>
          <?php endif; ?>
          <li class="d-none d-md-inline"><a class="xs px-3" href="https://notbyai.fyi/app/login">登入</a></li>
          <li class="d-none d-md-inline"><a class="xs px-3 me-4 me-sm-3 me-lg-5" href="https://notbyai.fyi/app/signup">註冊 <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg); margin-bottom: 3px;"></a></li>
        </ul>
      </div>
    </div>