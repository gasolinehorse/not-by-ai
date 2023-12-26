<?php
$pageTitle = 'Not By AI — Add the Badge to Your Human-Created Content';
$pageDes = 'Download and add the Not By AI badge to showcase your AI-free & human-first approach to content creation (writings, art, photos, paintings, videos, and music)';
include 'header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Your download will start shortly. <br>Please do not close your window.</span></div>
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
      <section class="row justify-content-center">
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 ps-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l" src="/img/not-by-ai-badges-l.svg" alt="">
        </div>
        <div class="col-lg-10 col-xl-8">
          <header>
            <h1 id="tagline" class="pt-lg-5 mt-md-3 pb-1">Your AI-free Content <br>Deserves a&nbsp;Badge</h1>
          </header>
          <p class="display-5">Artificial Intelligence (AI) is trained using human-created content. If humans stop producing new content and rely solely on AI, online content across the world may become repetitive and&nbsp;stagnant.</p>
          <p class="display-5">If your content is not AI-generated, add the badge to your work, with&nbsp;pride.</p>
        </div>
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 pe-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-end not-by-ai-badges-r" src="/img/not-by-ai-badges-r.svg" alt="">
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
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black.svg" alt="">
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
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black.svg" alt="">
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
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black.svg" alt="">
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
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">You are in good company. The Not By AI badges are used on 325K+ pages.</div>
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
            <a class="nav-link text-black" id="quick-link-use" href="/help">Resources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-use" href="#support-not-by-ai">Support Us</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download Badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3" href="https://notbyai.fyi/business">Not By AI for Business</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>Mission</h3>
          <p>The Not By AI badges are created to encourage more humans to produce original content and help users identify human-generated content. The Ultimate goal is make sure humanity continues to advance.</p>
          <p>An expert estimates that 90 percent of online content could be generated by AI by 2025.<sup>1</sup> With the surge in AI-generated content, it is important to note that AI is trained on human-generated content. If humans rely solely on AI to generate content moving forward, any new content generated by AI may just be recycled content from the past. This could pose a major obstacle to human advancement. Only by limiting the reliance on AI and continue to create original content can propel us forward as a species.</p>
          <figure>
            <img class="img-fluid mb-3" src="/img/ai-generates-content-using-human-content.svg" alt="AI using human-created content to produce new content">
            <figcaption class="display-6">The chart represents a scenario in which humans stop generating new content and AI reuses pre-existing content to produce new content.</figcaption>
          </figure>
          <p>It is worth mentioning that AI technologies mark a major milestone in the history of technology and the Not By AI badge is not designed to discourage the use of AI. Instead, it is to make sure that, while we celebrate the achievement, we work with AI instead of being replaced by&nbsp;AI.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>Who Can Use the Badge</h3>
          <h4>The Not By AI 90% Rule</h4>
          <p>Understanding that there is a blurred line between what is considered AI-generated vs human-generated, if you are a content creator, such as a writer, researcher, artist, music producer, sound designer, or filmmaker, or a business that provides creative content, and you estimate that <span class="text-decoration-underline">at least 90% of your content is created by humans</span>, you are eligible to add the badge into your website, blog, art, film, essay, publications, resume, or whatever your project is. The 90% <i>can</i> include using AI for inspiration purposes, supporting legal documents such as privacy policies (assuming that legal is not the main focus of your content or service), non-user facing content such as SEO meta tags or code, to look for grammatical errors and typos, and to translate content.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>Gallery</h3>
          <div class="row pb-4">
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to a website</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to an artwork</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to an app</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to an essay</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to a book</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to an album cover</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
              <h5>Add to a blog article</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-sm-6 pt-4 pt-sm-3">
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
          <p>The whole Not By AI movement is created by real humans. Your support will make a difference. Donate today to empower the content creators and ensure that humanity continues to advance. Your donation will be used to grow Not By AI <a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">in different ways</a>.</p>
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
                    <div class="d-flex pb-3">
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
                      <label for="email">Email</label>
                      <input type="email" name="email" required>
                      <div class="d-flex pt-3">
                        <input type="checkbox" id="marketing" name="marketing" value="I want to receive news such as updates, tips, resources, and discounts."><label for="marketing">I want to receive news such as updates, tips, resources, and discounts.</label>
                      </div>
                      <label for="nogo" class="d-none">Company</label>
                      <input type="text" name="nogo" class="d-none">
                      <input class="g-recaptcha btn mt-4" data-sitekey="6LcD-NsnAAAAAJ1SLXijs4KO4J2IX2OJHbABIumM" data-callback='onSubmit' data-action='submit' type="submit" value="Download My Badge">
                    </div>
                    <div id="commercial-form" class="d-none">
                      <p class="small mt-2 mb-1 w-100">You will get: </p>
                      <ul style="padding-left: 2rem;">
                        <li style="list-style-type: disc;">All three badges</li>
                        <li style="list-style-type: disc;">Each badge comes with dark and light themes</li>
                        <li style="list-style-type: disc;">Available in PNG, SVG, and EPS</li>
                        <li style="list-style-type: disc;">Available in <span class="text-decoration-underline" data-bs-toggle="collapse" href="#collapseLang" role="button" aria-expanded="false" aria-controls="collapseLang">multiple languages</span></li>
                      </ul>
                      <div class="collapse" id="collapseLang">
                        <div class="card card-body border-0 bg-light">
                          <p class="mb-3 small">The Not By AI badges are currently available in the following languages: <?php include 'all-supported-languages.php'; ?></p>
                        </div>
                      </div>
                      <p class="small mt-2 mb-1 w-100">Amount: </p>
                      <div class="h3 mb-3">US$ 99.00</div>
                      <a class="btn mb-2" href="https://buy.stripe.com/4gw01P6ka09mbKw9AB">Purchase My Badges</a>
                      <div class="row">
                        <div class="col-9 col-lg-6" style="font-size: 0.82rem;">By clicking the Download My Badge button, you agree to the terms of the <a class="text-decoration-underline" href="https://notbyai.fyi/license">License Agreement</a></div>
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
      function googleTranslateElementInit() {
        new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
      }
    </script>
    <script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
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

      var trafficSource = document.referrer;
      if (trafficSource.indexOf("google") == -1 && trafficSource.indexOf("bing") == -1 && trafficSource.indexOf("yahoo") == -1 && trafficSource.length > 0) {
        document.getElementById("tagline").innerHTML = "<div id='google_translate_element' class='mb-2'></div>If You See the <span translate='no'>'Not&nbsp;By&nbsp;AI'</span> Badge, You See Human-Created Content.";
        document.getElementById("tagline").style.zoom = "90%";
      }

      function hide() {
        var x = document.getElementById("not-by-ai-inspirations");
        if (x.style.display === "none") {
          x.style.display = "block";
        } else {
          x.style.display = "none";
        }
      }
    </script>
    <?php include 'footer.php'; ?>