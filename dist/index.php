<?php
$pageTitle = 'Not By AI — Add the Badge to Your Human-Created Content';
$pageDes = 'Download and add the Not By AI badge to showcase your AI-free & human-first approach to content creation (writings, art, photos, paintings, videos, and music)';
include 'header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Your download will start shortly. <br>Please do not close your window.</span></div>
    <script async src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
    <script src="https://www.google.com/recaptcha/enterprise.js?render=6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM"></script>
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
      <section class="row justify-content-center">
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 ps-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l no-download" src="/img/not-by-ai-badges-l.svg" alt="">
        </div>
        <div class="col-lg-10 col-xl-8">
          <header>
            <h1 id="tagline" class="pt-lg-5 mt-md-3 pb-1">Your AI-free Content <br>Deserves a&nbsp;Badge</h1>
          </header>
          <p class="display-5">Artificial Intelligence (AI) is trained using human-created content. If humans stop producing new content and rely solely on AI, online content across the world may become repetitive and&nbsp;stagnant.</p>
          <p class="display-5">If your content is not AI-generated, add the badge to your work, with&nbsp;pride.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Artist badge</h2>
                  <p class="small mt-2 text-opacity-50">Good for artwork, including digital and traditional art, paintings, illustrations, comics, and more.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Writer badge</h2>
                  <p class="small mt-2 text-opacity-50">Good for blog posts, essays, books, research, code, and other text-based content.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Producer badge</h2>
                  <p class="small mt-2 text-opacity-50">Good for audio, video, photography, overall creative approach/philosophy, and more.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">You are in good company. The Not By AI badges are used on <?php include 'all-stats.php'; ?> pages.</div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">Who Can Use the Badge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Gallery</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Benefits of Not By AI</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="/help">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Support Us</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download Badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Not By AI for Business</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download Badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>Mission</h3>
          <p>The Not By AI badges are created to encourage more humans to produce original content and help users identify human-generated content. The Ultimate goal is to make sure humanity continues to advance.</p>
          <p>An expert estimates that 90 percent of online content could be generated by AI by 2025.<sup>1</sup> With the surge in AI-generated content, it is important to note that AI is trained on human-generated content. If humans rely solely on AI to generate content moving forward, any new content generated by AI may just be recycled content from the past. This could pose a major obstacle to human advancement. Only by limiting the reliance on AI and continuing to create original content can propel us forward as a species.</p>
          <figure>
            <img class="img-fluid mb-3" src="/img/ai-generates-content-using-human-content.svg" alt="AI using human-created content to produce new content">
            <figcaption class="display-6">The chart represents a scenario in which humans stop generating new content and AI reuses pre-existing content to produce new content.</figcaption>
          </figure>
          <p>It is worth mentioning that AI technologies mark a major milestone in the history of technology and the Not By AI badge is not designed to discourage the use of AI. Instead, it is to make sure that, while we celebrate the achievement, we work with AI instead of being replaced by&nbsp;AI.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>Who Can Use the Badge</h3>
          <h4 class="pt-1">The Not By AI 90% Rule</h4>
          <p>Understanding that there is a blurred line between what is considered AI-generated vs human-generated, if you are a content creator, such as a writer, researcher, artist, music producer, sound designer, or filmmaker, or a business that provides creative content, and you estimate that <span class="text-decoration-underline">at least 90% of your content is created by humans</span>, you are eligible to add the badge into your website, blog, art, film, essay, publications, resume, or whatever your project is. The 90% <i>can</i> include using AI for inspiration purposes, supporting legal documents such as privacy policies (assuming that legal is not the main focus of your content or service), non-user facing content such as SEO meta tags or code, to look for grammatical errors and typos, and to translate content.</p>
          <h4>The Qualification</h4>
          <p>If you follow the Not By AI 90% Rule, came to this site as a human, manually downloaded our badges, and made the effort to insert them into your project, you qualify for non-commercial use. Similar to how reCAPTCHA detects humans by analyzing user behavior, this labor-intense process of manually inserting our badges is our way of verification. While it is not bulletproof, Not By AI is not an AI detection tool; our mission is tailored for users who voluntarily want to advocate for human-centric approaches, rather than for those seeking evidence of AI-produced content. You should be the one held accountable for human content. To assist, we offer Creator Pages for you to showcase proofs of your human-created content. Additionally, we manually review all Creator Pages and collaborate with content creators for further validation when necessary. Whenever possible, we also leverage third-party tools to detect potential AI-generated content, while acknowledging that the accuracy of current AI detector technology has not yet been proven.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>Gallery</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a website</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an artwork</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an app</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an essay</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a book</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an album cover</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a blog article</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a painting</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Show More Inspirations</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>Benefits of Not By AI</h3>
          <ul class="nav nav-underline mb-4 border-bottom" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> As a business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> As an individual</button>
            </li>
          </ul>
          <div class="tab-content px-3" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              <a href="/business" class="text-decoration-underline">Not By AI for Business</a> helps your clients, prospects, and users recognize your human-first approach to problem-solving. This is especially important when the business problem they look to solve is complex and requires a tailored solution that is built by trained humans. Below are ways your business can be benefited by Not By AI:
              <ul class="mt-2">
                <li>It highlights your customized, human-centric content and solutions.</li>
                <li>It sets you apart from the competition.</li>
                <li>It builds trust and credibility for your brand.</li>
                <li>It proves that your content is safe from AI hallucinations.</li>
              </ul>
              <a class="h5 text-decoration-underline cursor-pointer" href="/business">Not By AI for Business</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Without trained professionals or AI detectors, it is nearly impossible to distinguish your human content from AI-generated content. Using the Not By AI badges helps your audience recognize your human-first approach so they understand that your content is truly from you and not copied and pasted from a generative AI. <div class="mt-3">More importantly, this fosters awareness and encourages more individuals to produce original content. This process makes sure we, as a species, continue to contribute to human content collectively and prevent content from being replaced by recycled content produced by AI.</div>
            </div>
          </div>
          <p class="mt-3">Some websites, like <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, publish announcements to achieve similar goals. However, these announcements may no longer be visible shortly after their release. With the Not By AI badge, you can ensure that this messaging receives constant exposure. </p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>Support Us</h3>
          <p>The whole Not By AI movement is created by real humans. Your support will make a difference. <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Donate today</a> to empower the content creators and ensure that humanity continues to advance. Your donation will be used in <a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">various places</a> to grow Not By AI.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Donate Today</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
          <div class="modal fade" id="downloadEmail" tabindex="-1" aria-labelledby="downloadEmailLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
              <div class="modal-content border-0 rounded-0 download-popup">
                <div class="modal-header px-md-5 py-md-4 align-items-start">
                  <div class="modal-title fs-3 h3" id="downloadEmailLabel">Download the Not By AI Badges
                    <p class="fw-normal pt-1 mb-0" id="personal-des" style="font-size: 0.82rem; letter-spacing: 0px;">Free for personal use under the <a class="text-decoration-underline" href="/license" target="_blank">License Agreement</a>. </p>
                    <p class="fw-normal pt-1 mb-0 d-none" id="commercial-des" style="font-size: 0.82rem; letter-spacing: 0px;">Show your audience your human-centric approach. </p>
                  </div>
                  <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body pb-4 pt-md-4 pb-md-5 px-md-5">
                  <form id="forms" method="post" action="process-form.php">
                    <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
                    <p class="small mt-2 mb-1 w-100">How will you use the badge? </p>
                    <div class="d-flex pb-2">
                      <div class="form-check me-3">
                        <input class="form-check-input" type="radio" name="usage" id="usage1" value="Personal Use" required>
                        <label class="form-check-label" for="usage1">
                          Personal Use
                        </label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="usage" id="usage2" value="Commercial Use">
                        <label class="form-check-label" for="usage2">
                          Commercial Use
                        </label>
                      </div>
                    </div>
                    <div id="personal-form">
                      <div class="row justify-content-between">
                        <div class="col-md-7 col-lg-8 pt-2 pe-md-4">
                          <label for="email">Email</label>
                          <input type="email" name="email" required>
                        </div>
                        <div id="donate-box" class="col-6 col-md-5 col-lg-4 border-md pb-1 pb-md-3 pt-2 px-md-4 rounded-3 mt-2 mt-md-0">
                          <label for="your-price">Pay What You Wish</label>
                          <div class="d-flex align-items-center">
                            <div class="display-4 pe-1 opacity-50">$</div>
                            <input id="your-price" type="your-price" name="your-price" pattern="\d*" title="Only numbers are allowed" value="0" required>
                          </div>
                        </div>
                        <input type="hidden" name="badgeType" id="badgeType" value="">
                      </div>
                      <div class="pt-3">
                        <div class="d-flex mb-1 mb-lg-0">
                          <input type="checkbox" id="personalCreatorPage" name="personalCreatorPage" value="I want to upload drafts or other assets to a Creator Page to prove my human creation for $4.99/mo."><label for="personalCreatorPage">I want to upload drafts or other assets to a <a class="text-decoration-underline" href="#creatorPagePromoContainer" data-bs-toggle="collapse">Creator Page</a> to prove my human creation for $4.99/mo.</label>
                        </div>
                        <div class="d-flex">
                          <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
                        </div>
                      </div>
                      <label for="nogo" class="d-none">Company</label>
                      <input type="text" name="nogo" class="d-none">
                      <input id="not-by-ai-badges-download-no-cost" class="g-recaptcha btn mt-4" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback="onSubmit" data-action="submit" type="submit" value="Send Me the Badges">
                      <a id="not-by-ai-badges-download-with-donation-no-cp" style="display: none;" href="https://donate.stripe.com/dR67uh7oe2hucOAcMR" class="btn mt-4">Send Me the Badges</a>
                      <a id="not-by-ai-badges-download-with-cp" class="btn mt-4" style="display: none;" href="https://buy.stripe.com/3cs9Cp0ZQg8kbKweUX">Check Out and Download My Badges</a>
                      <div class="collapse pt-3" id="creatorPagePromoContainer">
                        <div class="border-top pt-4 mt-4">
                          <div class="row">
                            <div class="col-md-6">
                              <img class="img-fluid pt-2 mt-lg-0" srcset="/img/creator-page-create@2x.jpg 2x" src="/img/creator-page-create.jpg" alt="The Not By AI Creator Page">
                            </div>
                            <div class="col-md-6">
                              <p class="xs mt-lg-3 mb-1">Creator Page</p>
                              <p class="h4 pb-1">Submit your project details and we will set up a personalized Creator Page for you to link your badge to. </p>
                              <div class="d-flex">
                                <input type="checkbox" id="personalCreatorPagePromo" name="personalCreatorPagePromo" value="I'm in for one!"><label for="personalCreatorPagePromo">I'm in for one!</label>
                              </div>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                    <div id="commercial-form" class="d-none">
                      <div class="row">
                        <div class="col-lg-7">
                          <div class="h4 mt-3">Showcase your human creativity</div>
                          <p class="small mt-2 mb-4 w-100">Submit your content for approval, unlock your <a class="text-decoration-underline" href="#creatorPagePromoContainer-commercial" data-bs-toggle="collapse">Creator Page</a> to share your creative approach with your audience, and add the Not By AI badges on your work to stand out in the AI world.</p>
                          <a class="btn mb-2" href="/business">Learn More About Not By AI for Business</a>
                        </div>
                        <div class="col-lg-5 text-center text-lg-end d-none d-lg-block">
                          <img class="img-fluid mt-lg-3" srcset="/img/not-by-ai-pro-package@2x.jpg 2x" src="/img/not-by-ai-pro-package.jpg" alt="The Not By AI Creator Page">
                        </div>
                      </div>
                      <div class="collapse pt-3" id="creatorPagePromoContainer-commercial">
                        <div class="border-top pt-4 mt-4">
                          <div class="row">
                            <div class="col-md-6">
                              <img class="img-fluid pt-2 mt-lg-0" srcset="/img/creator-page-create@2x.jpg 2x" src="/img/creator-page-create.jpg" alt="The Not By AI Creator Page">
                            </div>
                            <div class="col-md-6">
                              <p class="xs mt-lg-3 mb-1">Creator Page</p>
                              <p class="h4 pb-1">Submit your project details and we will set up a personalized Creator Page for you to link your badge to. </p>
                            </div>
                          </div>
                        </div>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
        <ol class="source pt-5">
          <li>
            <cite>Why 90% of online content could be ‘generated by AI by 2025' https://www.youtube.com/watch?v=DgYCcdwGwrE</cite>
          </li>
        </ol>
      </div>
    </div>
    <script type="text/javascript">
      var personalRadio = document.getElementById("usage1");
      var commercialRadio = document.getElementById("usage2");
      var personalForm = document.getElementById("personal-form");
      var commercialForm = document.getElementById("commercial-form");
      var personalDes = document.getElementById("personal-des");
      var commercialDes = document.getElementById("commercial-des");
      personalRadio.addEventListener("change", function() {
        if (personalRadio.checked) {
            personalForm.classList.remove("d-none");
            commercialForm.classList.add("d-none");
            personalDes.classList.remove("d-none");
            commercialDes.classList.add("d-none");
        } else {
            personalForm.classList.add("d-none");
            commercialForm.classList.remove("d-none");
            personalDes.classList.add("d-none");
            commercialDes.classList.remove("d-none");
        }
      });
      commercialRadio.addEventListener("change", function() {
        if (commercialRadio.checked) {
            commercialForm.classList.remove("d-none");
            personalForm.classList.add("d-none");
            commercialDes.classList.remove("d-none");
            personalDes.classList.add("d-none");
        } else {
            commercialForm.classList.add("d-none");
            personalForm.classList.remove("d-none");
            commercialDes.classList.add("d-none");
            personalDes.classList.remove("d-none");
        }
      });

      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
      var trafficSource = document.referrer;
      if (trafficSource.indexOf("google") == -1 && trafficSource.indexOf("bing") == -1 && trafficSource.indexOf("yahoo") == -1 && trafficSource.length > 0) {
        document.getElementById("tagline").innerHTML = "<div id='google_translate_element' class='mb-2'></div>If You See the <span translate='no'>'Not&nbsp;By&nbsp;AI'</span> Badge, You See Human-Created Content.";
        document.getElementById("tagline").style.zoom = "90%";
        
        var script = document.createElement("script");
        script.type = "text/javascript";
        script.src = "//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit";
        document.head.appendChild(script);
        
        window.googleTranslateElementInit = function() {
          new google.translate.TranslateElement({
            pageLanguage: 'en',
            layout: google.translate.TranslateElement.InlineLayout.SIMPLE
          }, 'google_translate_element');
        };
      }

      document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('img.no-download').forEach(function(img) {
          img.addEventListener('contextmenu', function(e) {
            e.preventDefault();
          });
        });
      });

      const checkbox1 = document.getElementById('personalCreatorPage');
      const checkbox2 = document.getElementById('personalCreatorPagePromo');
      function syncCheckboxes(checkboxChanged, checkboxToSync) {
        checkboxToSync.checked = checkboxChanged.checked;
      }
      checkbox1.addEventListener('change', () => syncCheckboxes(checkbox1, checkbox2));
      checkbox2.addEventListener('change', () => syncCheckboxes(checkbox2, checkbox1));
      function toggleButtons() {
        var buttonA = document.getElementById('not-by-ai-badges-download-no-cost');
        var buttonB = document.getElementById('not-by-ai-badges-download-with-cp');
        var buttonC = document.getElementById('not-by-ai-badges-download-with-donation-no-cp');
        var isChecked = document.getElementById('personalCreatorPage').checked || document.getElementById('personalCreatorPagePromo').checked;
        if (isChecked) {
          buttonA.style.display = 'none';
          buttonB.style.display = 'inline-block';
          buttonC.style.display = 'none';
          document.getElementById('your-price').value = "0";
          document.getElementById('your-price').disabled = true;
        } else {
          buttonA.style.display = 'inline-block';
          buttonB.style.display = 'none';
          document.getElementById('your-price').disabled = false;
        }
      }
      document.getElementById('personalCreatorPage').addEventListener('change', toggleButtons);
      document.getElementById('personalCreatorPagePromo').addEventListener('change', toggleButtons);

      document.addEventListener('DOMContentLoaded', function () {
        var donationInput = document.getElementById('your-price');
        var buttonA = document.getElementById('not-by-ai-badges-download-no-cost');
        var buttonB = document.getElementById('not-by-ai-badges-download-with-donation-no-cp');
        donationInput.addEventListener('input', function() {
          const value = parseFloat(donationInput.value);
          if (value > 0) {
            buttonA.style.display = 'none';
            buttonB.style.display = 'inline-block';
          } else {
            buttonA.style.display = 'inline-block';
            buttonB.style.display = 'none';
          }
        });
      });

      document.getElementById("artist-badge").onclick = function() {
        document.getElementById("badgeType").value = "Artist";
      };
      document.getElementById("writer-badge").onclick = function() {
        document.getElementById("badgeType").value = "Writer";
      };
      document.getElementById("producer-badge").onclick = function() {
        document.getElementById("badgeType").value = "Producer";
      };
    </script>
    <?php include 'footer.php'; ?>