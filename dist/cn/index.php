<?php
$pageTitle = 'Not By AI — 为你的非AI创作贴上这个贴纸吧！';
$pageDes = '下载Not By AI贴纸来让大家知道你的创作（不论文章、画作、摄影、视频、音乐等）是手工製造、非AI所生成的';
include '../header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>下载即将开始。 <br>请不要关闭此视窗。</span></div>
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
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">为你非AI的原创内容<br>贴上个贴纸吧</h1>
          </header>
          <p class="display-5">人工智能（AI）是靠以前人类创作的内容训练而成。倘若人类就此全面仰赖AI并且放弃创作，世界各地的产出内容恐将一成不变并停滞。</p>
          <p class="display-5">如果你持续坚持真人创作，下载这贴纸并把它加到你的创作里吧！</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">艺术家贴纸下载</h2>
                  <p class="small mt-2 text-opacity-50">适用于数字与传统艺术、画作、图像、漫画等</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">作家贴纸下载</h2>
                  <p class="small mt-2 text-opacity-50">适用于博客、论文、书、研究、代码等文字内容</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">制作人贴纸下载</h2>
                  <p class="small mt-2 text-opacity-50">适用于影音、摄影、阐述整体上的创作方式或理念等</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">别担心！有超过 <?php include 'all-stats.php'; ?>的网页正使用着Not By AI贴纸。
          </div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi/cn" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">使命</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">谁能使用贴纸</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">优点</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">示例</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="/help">资源中心</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">赞助我们</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">下载贴纸&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Not By AI商业版</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">下载贴纸&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>使命</h3>
          <p>Not By AI是为了鼓励人们持续产出原创内容，且让这些原创内容能被注目而产生。而最终目的是确保人类文明得以持续产出创作与进步。</p>
          <p>有专家估计在2025年，会有超过九成的线上内容为AI所生成<sup>1</sup>。在这样的AI狂澜之下，我们必须提醒自己AI是以人类过去的创作所训练而成。换句话说，假如人类从此便全面仰赖AI来生成内容，这些新的内容恐怕只会是回收过重置的旧内容罢了。这对人类文明的进展恐将造成极大的威胁<sup>2</sup>。唯有限制AI的使用并持续坚持原创内容才能确保人类的进步。</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="AI使用人类的内容来生成新的内容">
            <figcaption class="display-6">AI不断重复使用过去人类所创作的内容来生成“新”的内容的示意图</figcaption>
          </figure>
          <p>然而，必须强调的是，AI科技是史上无可否认的重大里程碑，而我们设计Not By AI贴纸并不是不鼓励你使用AI。我们是要确保人类能够与AI携手向前，而非被AI给取代。</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>谁能使用贴纸</h3>
          <h4 class="pt-1">Not By AI 90%规定</h4>
          <p>在了解什麽算是AI生成与什麽算是人类生成时常难以定义的前提下，如果你估计自己的内容有90%是人类所创作的，你便能将Not By AI贴纸加到你的网站、部落格、艺术品、视频、论文、书、播客，或其他型态的非商业用途的作品。若是商业用途而你也遵守Not By AI 90%规定，你便也符合可以注册并付费使用的资格。这90%是可以包含使用AI来找灵感、生成像是隐私政策的法用文件（除非你的主题或服务项目是法律相关）、生成像是搜索引擎优化（SEO）等非用戶会看到的代码，以及找语法错误和错字。</p>
          <p>也别忘了Not By AI并不是AI探测器。我们的努力是奉献给想主动宣示自己创作是原创的内容创作者，而不是寻找证据的人。这也代表了，身为用戶的你必须扛起遵循Not By AI 90%规定的责任。</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>优点</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> 对企业来说</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> 对个人来说</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              除了提供给你我们备受欢迎的Not By AI贴纸以外（经过申请后），成为Not By AI会员的另一大好处是我们将帮你架设一个作品页面。这个作品页面是让你用来写下你的创作历程与理念的，好让你的用戶与客群能够加以了解你以人为本、AI为辅或完全无AI的创作方式。
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI贴纸">
                  <div class="xs text-center">Not By AI贴纸</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI作品页面"></a>
                  <div class="xs text-center pt-2">作品页面</div>
                </div>
              </div>
              你可以把贴纸连结到你的作品页面。这之所以重要是因为，这样你的客户、潜在客户、用戶才能藉以了解你的贴纸不只是贴纸，更代表了你对原创内容的秉持。尤其在商业世界中，问题往往极其複杂并需要训练有素的专业人员来解决，这更加说明了Not By AI的重要性。简而言之，Not By AI的好处包含：
              <ul class="mt-3 ul--checks">
                <li class="mb-1">凸显你以人为本的问题解决能力</li>
                <li class="mb-1">证明你的创作不受AI幻觉（一种AI编造事实的情况）的影响</li>
                <li class="mb-1">让你在竞争之中脱颖而出</li>
                <li class="mb-1">认证你的创作没有AI侵权问题</li>
                <li class="mb-1">为你的品牌建立信任与信服力</li>
              </ul>
              <a href="/app/signup" class="btn mt-2 mb-3">加入Not By AI</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              现今要判定一个作品是否为AI生成的十分困难，即使是专业人士或AI探测器都未必可靠。使用Not By AI贴纸可以让你的观众们了解你以人为出发点的创作力，并证明你的内容真的出自于你，而不是由ChatGPT、Claude，或Gemini之类的生成式AI所生成。<div class="mt-3">更重要的是，这能推广真人原创内容的重要性。我们人类必须在这关键的时间点持续共同产出原创内容，以确保我们未来的内容不会被AI量产的回收内容给取代。<br><br>我们提供100%免费的贴纸给非商业用途的内容创作者，因为我们是认真的想将这份Not By AI运动推广到世界各地。如果你不吝帮忙，请考虑看看我们的付费方案或<a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">捐款帮助</a>。</div>
            </div>
          </div>
          <p class="mt-3">有些像<a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>的网站会特别po文阐述AI使用规范以达成同样的目标。然而，这样的宣示往往立刻被其他文章埋没。使用Not By AI贴纸则没有这样的问题，你的贴纸可以随时提醒着大家你对原创的坚持。</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>示例</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在网站上</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在艺术品上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在App里</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在论文上</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在书本上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在专辑封面上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在博客里</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>贴在画作上</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">参考更多灵感</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>赞助我们</h3>
          <p>整个Not By AI运动是由真实人类以时间和精力所创造的。你的每份贊助对我们而言是十分重要的。请考虑<a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">现在捐款</a>以帮助和你我一样、还坚持原创内容的创作者，同时并确保人类文明得以持续演进。你的捐款将被用在<a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">各种用途</a>上以助长Not By AI。</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">现在就捐款</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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