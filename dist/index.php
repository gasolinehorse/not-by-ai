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
    <main class="row human-touch bg-light-gradient pt-4 position-relative">
      <section class="col-12 mt-4">
        <div class="row justify-content-center">
          <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 ps-0 pt-5 pt-xxl-0">
            <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l no-download position-relative z-1" src="/img/not-by-ai-badges-l.svg" alt="">
          </div>
          <div class="col-lg-10 col-xl-8">
            <header>
              <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">Your AI-free Content <br>Deserves a&nbsp;Badge</h1>
            </header>
            <p class="display-5">Artificial Intelligence (AI) is trained using human-created content. If humans stop producing new content and rely solely on AI, online content across the world may become repetitive and&nbsp;stagnant.</p>
            <p class="display-5">If your content is not AI-generated, add the badge to your&nbsp;work.</p>
          </div>
          <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 pe-0 pt-5 pt-xxl-0">
            <img class="img-fluid d-none d-xl-block float-end not-by-ai-badges-r no-download" src="/img/not-by-ai-badges-r.svg" alt="">
          </div>
        </div>
      </section>
      <section class="col-12 mx-auto px-5 px-sm-4 px-xl-0 pt-3" style="max-width: 1052px;">
        <div class="row justify-content-center gx-4">
          <div class="col-sm-4 pb-4">
            <span id="artist-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-art.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img id="example-not-by-ai-badge-artist-wht" width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white.svg" alt="">
                      <img id="example-not-by-ai-badge-artist-blk" width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Artist badges</h2>
                  <p class="small mt-2 text-opacity-50">Good for digital/traditional artwork, paintings, illustrations, music, animations, and more.</p>
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
                      <img id="example-not-by-ai-badge-writer-wht" width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white.svg" alt="">
                      <img id="example-not-by-ai-badge-writer-blk" width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Writer badges</h2>
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
                      <img id="example-not-by-ai-badge-producer-wht" width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white.svg" alt="">
                      <img id="example-not-by-ai-badge-producer-blk" width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Download the Producer badges</h2>
                  <p class="small mt-2 text-opacity-50">Good for audio, video, performances, overall creative approach/philosophy, and more.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-7 p-2 bg-white rounded-5 mt-3">
            <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="127.972" height="18.995"><path fill="#EED601" fill-rule="nonzero" d="m13.022 6.32 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L0 7.256l6.95-.935L9.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L27 7.256l6.95-.935L36.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L54 7.256l6.95-.935L63.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L81 7.256l6.95-.935L90.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L108 7.256l6.95-.935L117.986 0l3.036 6.32Z"/></svg>
            <p class="small my-1">You are in good company. The Not By AI badges are featured on <?php include 'all-stats.php'; ?> pages.</p>
          </div>
        </div>
      </section>
      <div class="pb-4 mt-3 border-bottom"></div>
    </main>
    <div id="top-nav-stop-point" class="row justify-content-center">
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
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Benefits</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Gallery</a>
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
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download Badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3 class="marker">Mission</h3>
          <p>The Not By AI badges are created to encourage more humans to produce original content and help audiences identify human-generated content. The ultimate goal is to make sure humanity continues to advance.</p>
          <p>An expert estimates that 90 percent of online content could be generated by AI sometime in 2025.<sup>1</sup> With the surge in AI-generated content, it is important to note that AI is trained on human-generated content. If humans rely solely on AI to generate content moving forward, any new content generated by AI may just be recycled content from the past. This could pose a major obstacle to human advancement.<sup>2</sup> Only by limiting our reliance on AI and continuing to create original content can we propel ourselves forward as a species.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="AI using human-created content to produce new content">
            <figcaption class="display-6">The chart represents a scenario in which humans stop generating new content and AI reuses pre-existing content to produce content that lacks originality.</figcaption>
          </figure>
          <p>It is worth mentioning that AI technologies mark a major milestone in the history of technology and the Not By AI badge is not designed to discourage the use of AI. Instead, it is to make sure that, while we celebrate the achievement, we work with AI instead of being replaced by&nbsp;AI.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Who Can Use the Badge</h3>
          <h4 class="pt-1">The Not By AI 90% Rule</h4>
          <p>Understanding that there is a blurred line between what is considered AI-generated vs human-generated, if you estimate that <span class="text-decoration-underline">at least 90% of your content is created by humans</span>, you are eligible to add the badges into your website, blog, art, film, essay, books, podcast, or whatever your project is for non-commercial use, and, with a subscription, commercial use. The 90% <i>can</i> include using AI for inspiration purposes, supporting legal documents such as privacy policies (assuming that legal is not the main focus of your content or service), non-user-facing content such as SEO meta tags or code, and looking for grammatical errors and typos.</p>
          <p>Please note that Not By AI is not an AI detection tool; our mission is tailored for users who voluntarily want to advocate for human-centric approaches, rather than for those seeking evidence of human-produced content. This means you should be the one held accountable for following the Not By AI 90% Rule.</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Benefits</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><img class="mb-1" src="img/industry.svg" alt=""> As a business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><img class="mb-1" src="img/individual.svg" alt=""> As an individual</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              In addition to providing you with our iconic Not By AI badges (once approved), as a Not By AI member, we will help you set up a project page that documents your creative process and approach. This allows your audience to learn how you in fact created your content without or with very little help from AI.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Not By AI badges</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI projects"></a>
                  <div class="xs text-center pt-2">Project page</div>
                </div>
              </div>
              A project page can be linked from your badges. It is a crucial page for your clients, prospects, and users to recognize that your human effort is more than just inserting a badge. This is especially important when the business problem they look to solve is complex and requires a tailored solution from trained humans. With Not By AI, you can:
              <ul class="mt-3 ul--checks">
                <li class="mb-1">Highlight your human-centric solutions</li>
                <li class="mb-1">Prove that your content is safe from AI hallucinations</li>
                <li class="mb-1">Set yourself apart from the competition</li>
                <li class="mb-1">Show that your content is free from AI copyright infringement</li>
                <li class="mb-1">Build trust & credibility for your brand</li>
              </ul>
              <a href="/app/signup" class="btn mt-2 mb-3">Join Not By AI</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Without trained professionals or AI detectors, it is nearly impossible to distinguish your human content from AI-generated content. Using the Not By AI badges helps your audience recognize your human-first approach so they understand that your content is truly from you and not copied and pasted from a generative AI, such as ChatGPT, Claude, or Gemini. <div class="mt-3">More importantly, this fosters awareness and encourages more individuals to produce original content. This process makes sure we, as a species, continue to contribute to human content collectively and prevent content from being replaced by recycled content produced by AI.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Not By AI badges</div>
                </div>
              </div>
              We offer the badges for 100% free for non-commercial projects. It is our mission to spread the Not By AI movement as widely as possible. If you want to support us, please consider our paid subscriptions or <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">contribute through a donation</a>.</div>
            </div>
          </div>
          <p class="mt-3">Some websites, like <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, publish announcements to achieve similar goals. However, these announcements may no longer be visible shortly after their release. With the Not By AI badges, you can ensure that this messaging receives constant exposure. </p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3 class="marker">Gallery</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a website</h5>
              <img class="img-fluid rounded" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an artwork</h5>
              <img class="img-fluid rounded"srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an app</h5>
              <img class="img-fluid rounded"srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an essay</h5>
              <img class="img-fluid rounded" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a book</h5>
              <img class="img-fluid rounded"srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to an album cover</h5>
              <img class="img-fluid rounded"srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a blog article</h5>
              <img class="img-fluid rounded" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Add to a painting</h5>
              <img class="img-fluid rounded"srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Show More Inspirations</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3 class="marker">Support Us</h3>
          <p>The whole Not By AI movement is created by real humans. Your support will make a difference. <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Donate today</a> to empower the content creators and ensure that humanity continues to advance. Your donation will be used in <a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">various places</a> to grow Not By AI. Thank you.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Donate Today</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
        </section>
        <ol class="source pt-5 pb-4">
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
    <script type="text/javascript">
      const imageSets = {
        'example-not-by-ai-badge-artist-wht': [
          '/img/painted-by-human-not-by-ai-white.svg',
          '/img/drawn-by-human-not-by-ai-white.svg',
          '/img/animated-by-human-not-by-ai-white.svg',
          '/img/designed-by-human-not-by-ai-white.svg',
          '/img/composed-by-human-not-by-ai-white.svg',
          '/img/crafted-by-human-not-by-ai-white.svg'
        ],
        'example-not-by-ai-badge-artist-blk': [
          '/img/illustrated-by-human-not-by-ai-black.svg',
          '/img/painted-by-human-not-by-ai-black.svg',
          '/img/photographed-by-human-not-by-ai-black.svg',
          '/img/sculpted-by-human-not-by-ai-black.svg',
          '/img/sung-by-human-not-by-ai-black.svg'
        ],
        'example-not-by-ai-badge-writer-wht': [
          '/img/written-by-human-not-by-ai-white.svg',
          '/img/authored-by-human-not-by-ai-white.svg',
          '/img/created-by-human-not-by-ai-white.svg'
        ],
        'example-not-by-ai-badge-writer-blk': [
          '/img/researched-by-human-not-by-ai-black.svg',
          '/img/written-by-human-not-by-ai-black.svg',
          '/img/scripted-by-human-not-by-ai-black.svg'
        ],
        'example-not-by-ai-badge-producer-wht': [
          '/img/filmed-by-human-not-by-ai-white.svg',
          '/img/produced-by-human-not-by-ai-white.svg',
          '/img/arranged-by-human-not-by-ai-white.svg',
          '/img/developed-by-human-not-by-ai-white.svg'
        ],
        'example-not-by-ai-badge-producer-blk': [
          '/img/produced-by-human-not-by-ai-black.svg',
          '/img/narrated-by-human-not-by-ai-black.svg',
          '/img/performed-by-human-not-by-ai-black.svg'
        ]
      };

      function rotateImages(id, delay) {
        const images = imageSets[id];
        const imgElement = document.getElementById(id);
        let currentIndex = 0;

        function shuffleImage() {
          imgElement.classList.remove('bounce');
          void imgElement.offsetWidth;
          imgElement.classList.add('bounce');
          setTimeout(() => {
            currentIndex = (currentIndex + 1) % images.length;
            imgElement.src = images[currentIndex];
          }, delay);

          setTimeout(shuffleImage, 5000);
        }
        shuffleImage();
      }
      rotateImages('example-not-by-ai-badge-artist-wht', 450); 
      rotateImages('example-not-by-ai-badge-artist-blk', 520); 
      rotateImages('example-not-by-ai-badge-writer-wht', 590); 
      rotateImages('example-not-by-ai-badge-writer-blk', 660); 
      rotateImages('example-not-by-ai-badge-producer-wht', 730); 
      rotateImages('example-not-by-ai-badge-producer-blk', 800);
    </script>
    <?php include 'footer.php'; ?>