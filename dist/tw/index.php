<?php
$pageTitle = 'Not By AI — 為你的非AI創作貼上這個貼紙吧！';
$pageDes = '下載Not By AI貼紙來讓大家知道你的創作（不論文章、畫作、攝影、影片、音樂等）是手工製造、非AI所生成的';
include '../header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>下載即將開始。 <br>請先不要關閉此視窗。</span></div>
    <script async src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
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
    <main>
      <section class="row justify-content-center mt-4">
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 ps-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l no-download" src="/img/not-by-ai-badges-l.svg" alt="">
        </div>
        <div class="col-lg-10 col-xl-8">
          <header>
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">為你非AI的原創內容<br>貼上個貼紙吧</h1>
          </header>
          <p class="display-5">人工智慧（AI）是靠以前人類創作的內容訓練而成。倘若人類就此全面仰賴AI並且放棄創作，世界各地的產出內容恐將一成不變並停滯。</p>
          <p class="display-5">如果你持續堅持真人創作，下載這貼紙並把它加到你的創作裡吧！</p>
        </div>
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 pe-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-end not-by-ai-badges-r no-download" src="/img/not-by-ai-badges-r.svg" alt="">
        </div>
      </section>
      <section class="mx-auto px-5 px-sm-4 px-xl-0 pt-3" style="max-width: 1052px;">
        <div class="row justify-content-center gx-4">
          <div class="col-sm-4 pb-4">
            <span id="artist-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-art.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">藝術家貼紙下載</h2>
                  <p class="small mt-2 text-opacity-50">適用於數位與傳統藝術、畫作、圖像、漫畫等</p>
                </div>
              </span>
            </span>
          </div>
          <div class="col-sm-4 pb-4">
            <span id="writer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-article.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">作家貼紙下載</h2>
                  <p class="small mt-2 text-opacity-50">適用於部落格、論文、書、研究、程式碼等文字內容</p>
                </div>
              </span>
            </span>
          </div>
          <div class="col-sm-4 pb-4">
            <span id="producer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-music.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">製作人貼紙下載</h2>
                  <p class="small mt-2 text-opacity-50">適用於影音、攝影、闡述整體上的創作方式或理念等</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">安啦！有超過 <?php include 'all-stats.php'; ?>的頁面正使用著Not By AI貼紙。
          </div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi/tw" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">使命</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">誰能使用貼紙</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">優點</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">範例</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="/help">資源中心</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">贊助我們</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">下載貼紙&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Not By AI商用版</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">下載貼紙&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>使命</h3>
          <p>Not By AI是為了鼓勵人們持續產出原創內容，且讓這些原創內容能被注目而產生。而最終目的是確保人類文明得以持續產出創作與進步。</p>
          <p>有專家估計在2025年，會有超過九成的線上內容為AI所產生<sup>1</sup>。在這樣的AI狂瀾之下，我們必須提醒自己AI是以人類過去的創作所訓練而成。換句話說，假如人類從此便全面仰賴AI來產生內容，這些新的內容恐怕只會是回收過重置的舊內容罷了。這對人類文明的進展恐將造成極大的威脅<sup>2</sup>。唯有限制AI的使用並持續堅持原創內容才能確保人類的進步。</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="AI使用人類的内容來生成新的内容">
            <figcaption class="display-6">AI不斷重複使用過去人類所創作的內容來產生“新”的內容的示意圖</figcaption>
          </figure>
          <p>然而，必須強調的是，AI科技是史上無可否認的重大里程碑，而我們設計Not By AI貼紙並不是為了要勸退你使用AI。我們是要確保人類能夠與AI攜手向前，而非被AI給取代。</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>誰能使用貼紙</h3>
          <h4 class="pt-1">Not By AI 90%規定</h4>
          <p>在了解什麼算是AI產生與什麼算是人類產生時常難以定義的前提下，如果你估計自己的內容有90%是人類所創作的，你便能將Not By AI貼紙加到你的網站、部落格、藝術品、影片、論文、書、Podcast，或其他型態的非商業用途的作品。若是商業用途而你也遵守Not By AI 90%規定，你便也符合可以註冊並付費使用的資格。這90%是可以包含使用AI來找靈感、產生像是隱私政策的法用文件（除非你的主題或服務項目是法律相關）、產生像是搜尋引擎最佳化（SEO）等非使用者會看到的程式碼，以及抓文法錯誤和錯字。</p>
          <p>也別忘了Not By AI並不是AI偵測工具。我們的努力是奉獻給想主動宣示自己創作是原創的內容工作者，而不是想找證據的人。這也代表了，身為使用者的你必須扛起遵循Not By AI 90%規定的責任。</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>優點</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> 對企業來說</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> 對個人來說</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              除了提供給你我們備受歡迎的Not By AI貼紙以外（經過申請後），成為Not By AI會員的另一大好處是我們將幫你架設一個作品頁面。這個作品頁面是讓你用來寫下你的創作歷程與理念的，好讓你的使用者與客群能夠加以了解你以人為本、AI為輔或完全無AI的創作方式。
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI 貼紙">
                  <div class="xs text-center">Not By AI貼紙</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI 作品頁面"></a>
                  <div class="xs text-center pt-2">作品頁面</div>
                </div>
              </div>
              你可以把貼紙連結到你的作品頁面。這之所以重要是因為，這樣你的客戶、潛在客戶、使用者才能藉以了解你的貼紙不只是貼紙，更代表了你對原創內容的秉持。尤其在商業世界中，問題往往極其複雜並需要訓練有素的專業人員來解決，這更加說明了Not By AI的重要性。簡而言之，Not By AI的好處包含：
              <ul class="mt-3 ul--checks">
                <li class="mb-1">凸顯你以人為本的問題解決能力</li>
                <li class="mb-1">證明你的創作不受AI幻覺（一種AI編造事實的情況）的影響</li>
                <li class="mb-1">讓你在競爭之中脫穎而出</li>
                <li class="mb-1">認證你的創作沒有AI侵權問題</li>
                <li class="mb-1">為你的品牌建立信任與信服力</li>
              </ul>
              <a href="/app/signup" class="btn mt-2 mb-3">加入Not By AI</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              現今要判定一個作品是否為AI產生的十分困難，即使是專業人士或AI偵測器都未必可靠。使用Not By AI貼紙可以讓你的觀眾們了解你以人為出發點的創作力，並證明你的內容真的出自於你，而不是由ChatGPT、Claude，或Gemini之類的生成式AI所產生。<div class="mt-3">更重要的是，這能推廣真人原創內容的重要性。我們人類必須在這關鍵的時間點持續共同產出原創內容，以確保我們未來的內容不會被AI量產的回收內容給取代。<br><br>我們提供100%免費的貼紙給非商業用途的內容創作者，因為我們是認真的想將這份Not By AI運動推廣到世界各地。如果你不吝幫忙，請考慮看看我們的付費方案或<a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">捐款幫助</a>。</div>
            </div>
          </div>
          <p class="mt-3">有些像<a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>的網站會特別po文闡述AI使用規範以達成同樣的目標。然而，這樣的宣示往往立刻被其他文章埋沒。使用Not By AI貼紙則沒有這樣的問題，你的貼紙可以隨時提醒著大家你對原創的堅持。</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>範例</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在網站上</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在藝術品上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在App裡</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在論文上</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在書本上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在專輯封面上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在部落格裡</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>貼在畫作上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">參考更多靈感</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>贊助我們</h3>
          <p>整個Not By AI運動是由真實人類以時間和精力所創造的。你的每份贊助對我們而言是十分有感的。請考慮<a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">現在捐款</a>以幫助和你我一樣、還堅持原創內容的創作者，同時並確保人類文明得以持續演進。你的捐款將被用在<a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">各種用途</a>上以助長Not By AI。</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">現在就捐款</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
        </section>
        <ol class="source pt-5">
          <li class="mb-1">
            <cite>Why 90% of online content could be ‘generated by AI by 2025' https://www.youtube.com/watch?v=DgYCcdwGwrE</cite>
          </li>
          <li>
            <cite>AI produces gibberish when trained on too much AI-generated data https://www.nature.com/articles/d41586-024-02355-z</cite>
          </li>
        </ol>
      </div>
    </div>
    <script>
      window.addEventListener('scroll', function() {
        var nav = document.getElementById('topNav');
        var stopPoint = document.getElementById('top-nav-stop-point').getBoundingClientRect().top;
        var navHeight = nav.offsetHeight;

        if (window.pageYOffset > 0 && stopPoint > navHeight) {
          nav.classList.add('sticky-top');
        } else {
          nav.classList.remove('sticky-top');
        }
      });
    </script>
    <?php include 'footer.php'; ?>