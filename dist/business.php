<?php
$pageTitle = 'Not By AI for Business — Add the Badge to Your Human-Created Content';
$pageDes = 'Add the Not By AI badge to showcase your AI-free & human-first business approach to content creation (writings, art, photos, paintings, videos, and music)';
include 'header.php';
include 'top-nav-dark.php';
?>
    <main class="container-fluid overflow-x-hidden">
      <section class="row justify-content-center px-sm-4 px-lg-0">
        <div class="col-xl-9 col-xxl-8">
          <header>
            <h1 id="tagline" class="pt-md-5 mt-md-3 pb-1 text-white">Add a Badge to Show Your Human-First&nbsp;Approach</h1>
          </header>
        </div>
        <div class="col-lg-11 col-xl-9 col-xxl-8">
          <p class="display-5 text-white">Content originality has become the rare differentiator for companies and entrepreneurs. Show your audience that your work is Not&nbsp;By&nbsp;AI.</p>
        </div>
      </section>
      <section class="mx-auto px-5 px-sm-4 px-xl-0 pt-4 container-fluid pb-5 border-bottom" style="max-width: 1052px; background-image: url(/img/ai-dots.png); background-position: center; background-repeat: no-repeat; background-size: 100%;">
        <div class="row justify-content-center gx-4">
          <div class="col-sm-4 pb-4 pt-4 fade-in-move-up" style="background-image: url(/img/ai-glow.jpg); background-position: top center; background-repeat: no-repeat; background-size: 100%; animation-delay: 0.6s; opacity: 0;">
            <span id="artist-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-art.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded text-white">Download the Artist badge</h2>
                  <p class="small mt-2 text-opacity-50 text-white">Good for artwork, including digital and traditional art, paintings, illustrations, comics, and more.</p>
                </div>
              </span>
            </span>
          </div>
          <div class="col-sm-4 pb-4 pt-4 fade-in-move-up" style="background-image: url(/img/ai-glow.jpg); background-position: top center; background-repeat: no-repeat; background-size: 100%; animation-delay: 0.7s; opacity: 0;">
            <span id="writer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-article.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded text-white">Download the Writer badge</h2>
                  <p class="small mt-2 text-opacity-50 text-white">Good for blog posts, essays, books, research, code, and other text-based content</p>
                </div>
              </span>
            </span>
          </div>
          <div class="col-sm-4 pb-4 pt-4 fade-in-move-up" style="background-image: url(/img/ai-glow.jpg); background-position: top center; background-repeat: no-repeat; background-size: 100%; animation-delay: 0.8s; opacity: 0;">
            <span id="producer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
              <span class="row">
                <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                  <div class="not-by-ai-folder position-relative pb-1">
                    <img class="position-static z-1 w-100 ai-folder px-xl-1" src="/img/not-by-ai-folder.svg" alt="">
                    <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="/img/ai-music.png" alt="">
                    <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-folder">
                      <img width="131" height="42" class="img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded text-white">Download the Producer badge</h2>
                  <p class="small mt-2 text-opacity-50 text-white">Good for audio, video, photography, overall creative approach/philosophy, and more</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center pb-5">
          <div class="col-lg-8 gx-4 h5 p-3 bg-dark rounded-5 mt-2 text-white">You are in good company. The Not By AI badges are used on <?php include 'all-stats.php'; ?> pages.</div>
        </div>
      </section>
      <section class="container text-white text-start">
        <p class="small text-center pt-5 mt-lg-5 why">Why Not By AI?</p>
        <div class="row justify-content-center py-5 mb-3 show-when-scrolled">
          <div class="col-lg-4">
            <h3 class="pb-1">Show your originality</h3>
            <p>The human touch of originality in all content is now a rare and valuable selling point. AI may seem like it is capable of composing “original content”, the content AI creates is actually based on past human-created content as AI is trained on it. For the time being, the originality of a human is uniquely irreplaceable.</p>
          </div>
          <div class="col-lg-6 text-center">
            <img class="img-fluid" srcset="/img/not-by-ai-originality-showcase@2x.jpg 2x" src="/img/not-by-ai-originality-showcase.jpg" alt="" />
          </div>
        </div>
        <div class="row justify-content-center py-5 mb-3 show-when-scrolled">
          <div class="col-lg-4">
            <h3 class="pb-1">Grow your business</h3>
            <p>Your clients, prospects, audience will appreciate AI but they will still want humans to address their specific needs. AI may be powerful, it is still only passively listening to prompts to generate answers. Only a trained human can understand the complexity of a real life problem and tailor a solution uniquely for it.</p>
          </div>
          <div class="col-lg-6 text-center">
            <img class="img-fluid" srcset="/img/not-by-ai-business-growth@2x.jpg 2x" src="/img/not-by-ai-business-growth.jpg" alt="" />
          </div>
        </div>
        <div class="row justify-content-center py-5 mb-3 show-when-scrolled">
          <div class="col-lg-4">
            <h3 class="pb-1">Promote creativity</h3>
            <p>Stating that your work is generated by humans instead of AI can inspire others to join the movement. Furthermore, if we, as a species, stopped creating content and solely relied on AI, the content AI produced would become repetitive and stagnant. To advance humanity, humans should take the creative lead.</p>
          </div>
          <div class="col-lg-6 text-center">
            <img class="img-fluid" srcset="/img/not-by-ai-creativity-promotion@2x.jpg 2x" src="/img/not-by-ai-creativity-promotion.jpg" alt="" />
          </div>
        </div>
      </section>
      <section class="my-lg-5">
        <article class="horizontal">
          <div class="pin-wrap overflow-x-hidden" style="background-image: url(/img/ai-dots-lg.jpg); background-position: center center; background-repeat: no-repeat; background-size: 100%;">
            <div>
              <div class="mt-lg-5">
                <h3 class="h1 text-white mt-5 pt-4 marquee__content d-inline-block"><span class="outlined-text">Badge Your Content</span><br>Catch Your Audience</h3>
              </div>
              <span class="cursor-pointer for-business-link mt-3 mb-5 me-2 rounded-2 bg-white" style="border-color: #FFFFFF !important;" data-bs-toggle="modal" data-bs-target="#downloadEmail">Purchase the Badges</span>
              <a class="for-business-link mt-3 mb-5 border-white rounded-2 text-white" style="border-color: #FFFFFF !important;" href="/gallery">View Gallery</a>
            </div>
            <div class="animation-wrap to-right float-start pt-3 pt-lg-5 mt-3">
              <div class="horizontal__item text-white">
                <h4 class="py-4 px-3 mb-0">Highlight your human-centric solutions</h4>
                <img class="w-100" srcset="/img/not-by-ai-benefit-drawing@2x.jpg 2x" src="/img/not-by-ai-benefit-drawing.jpg" alt="" />
              </div>
              <div class="horizontal__item text-white">
                <h4 class="py-4 px-3 mb-0">Prove that your content is safe from AI hallucinations</h4>
                <img class="w-100" srcset="/img/not-by-ai-benefit-hallucination-prevent@2x.jpg 2x" src="/img/not-by-ai-benefit-hallucination-prevent.jpg" alt="" />
              </div>
              <div class="horizontal__item text-white">
                <h4 class="py-4 px-3 mb-0">Set yourself apart from the competition</h4>
                <img class="w-100" srcset="/img/not-by-ai-benefit-book@2x.jpg 2x" src="/img/not-by-ai-benefit-book.jpg" alt="" />
              </div>
              <div class="horizontal__item text-white">
                <h4 class="py-4 px-3 mb-0">Build trust & credibility for your brand</h4>
                <img class="w-100" srcset="/img/not-by-ai-benefit-client@2x.jpg 2x" src="/img/not-by-ai-benefit-client.jpg" alt="" />
              </div>
              <div class="horizontal__item text-white">
                <h4 class="py-2 px-3 my-1">Show that your content is free from<br>AI copyright infringement</h4>
                <img class="w-100" srcset="/img/not-by-ai-benefit-no-copyright-infringement@2x.jpg 2x" src="/img/not-by-ai-benefit-no-copyright-infringement.jpg" alt="" />
              </div>
            </div>
          </div>
        </article>
      </section>
    </main>
    <section id="faq" class="py-5 overflow-hidden">
      <h3 class="display-2 text-white pt-5 pb-3">Frequently Asked Questions</h3>
      <div class="container pb-5">
        <div class="row justify-content-center">
          <div class="col-lg-8">
            <div class="accordion" id="accordionExample" data-bs-theme="dark">
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseLang" aria-expanded="true" aria-controls="collapseLang">
                    What languages are included with my purchase of the Not By AI badges
                  </button>
                </h2>
                <div id="collapseLang" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    It currently includes <?php include 'all-supported-languages.php'; ?>
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapsePay" aria-expanded="false" aria-controls="collapsePay">
                    What payment methods are accepted?
                  </button>
                </h2>
                <div id="collapsePay" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    We accept most major credit and debit cards. We are not able to accept payment by check at this moment.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseVerify" aria-expanded="false" aria-controls="collapseVerify">
                    Will you verify that my content is not created by AI before I can use the badges?
                  </button>
                </h2>
                <div id="collapseVerify" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    For now, we will not. But you should still follow the <a href="/help/what-is-the-not-by-ai-90-rule.php" class="text-decoration-underline text-white" target="_blank">Not By AI 90% Rule</a>. Once purchased, you are welcome to start using the badges immediately.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseAI" aria-expanded="false" aria-controls="collapseAI">
                    Can I still use the Not By AI badges if I used a little AI in my business?
                  </button>
                </h2>
                <div id="collapseAI" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Yes, if you follow <a href="/help/what-is-the-not-by-ai-90-rule.php" class="text-decoration-underline text-white" target="_blank">the Not By AI Rule</a>. In short, the Not By AI rule states that if you estimate that at least 90% of your content is human-created, you can use the badge. This 90% can include using AI for inspiration purposes, supporting legal documents such as privacy policies (assuming that legal is not the main focus of your content or service), non-user facing content such as SEO meta tags or code, to look for grammatical errors and typos, and to translate content.
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSub" aria-expanded="false" aria-controls="collapseSub">
                    Is this a subscription-based service?
                  </button>
                </h2>
                <div id="collapseSub" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    No. This is a one-time, 99 USD payment. 
                  </div>
                </div>
              </div>
              <div class="accordion-item">
                <h2 class="accordion-header">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseChoose" aria-expanded="false" aria-controls="collapseChoose">
                    I am not sure which of the three Not By AI badges to use for my business. How do I choose?
                  </button>
                </h2>
                <div id="collapseChoose" class="accordion-collapse collapse" data-bs-parent="#accordionExample">
                  <div class="accordion-body">
                    Once purchased, you will receive all three badges. Refer to the <a href="/help" class="text-white text-decoration-underline" target="_blank">Help Center</a> for details about selecting the right badges to use and inserting the badges into your project. You can also use the contact form to request an answer from us. We are happy to help!
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="pb-5 mb-5">
      <div class="marquee overflow-hidden d-flex mt-lg-4">
        <h3 class="h1 text-white mt-5 pt-4 marquee__content d-inline-block"><span class="outlined-text">You worked hard,</span> don't let AI take your credit.</h3>
        <h3 class="h1 text-white mt-5 pt-4 marquee__content d-inline-block" aria-hidden="true"><span class="outlined-text">You worked hard,</span> don't let AI take your credit.</h3>
      </div>
      <span class="btn btn--white mt-4 mb-5" data-bs-toggle="modal" data-bs-target="#downloadEmail">Purchase the Badges for $99</span>
    </section>
    <div class="modal fade text-start" id="downloadEmail" tabindex="-1" aria-labelledby="downloadEmailLabel" aria-hidden="true">
      <div class="modal-dialog modal-lg">
        <div class="modal-content border-0 rounded-0 download-popup">
          <div class="modal-header px-md-5 py-md-4 align-items-start">
            <div class="modal-title fs-3 h3" id="downloadEmailLabel">Download the Not By AI Badges
              <p class="fw-normal pt-1 mb-0" id="commercial-des" style="font-size: 0.82rem; letter-spacing: 0px;">Show your audience your human-centric approach. </p>
            </div>
            <button type="button" class="btn-close mt-0" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body pb-4 pt-md-4 pb-md-5 px-md-5">
            <form method="post" action="process-form.php">
              <noscript>Please enable JavaScript in your browser to complete this form.</noscript>
              <div id="commercial-form">
                <p class="small mt-2 mb-1 w-100">You will get: </p>
                <ul style="padding-left: 2rem;">
                  <li style="list-style-type: disc;">All three badges</li>
                  <li style="list-style-type: disc;">Each badge comes with dark and light themes</li>
                  <li style="list-style-type: disc;">Available in PNG, SVG, and EPS</li>
                  <li style="list-style-type: disc;">Available in <span class="text-decoration-underline" data-bs-toggle="collapse" href="#collapseInspirations" role="button" aria-expanded="false" aria-controls="collapseInspirations">multiple languages</span></li>
                  <li style="list-style-type: disc;">Your customized Creator Page (coming soon)</li>
                </ul>
                <div class="collapse" id="collapseInspirations">
                  <div class="card card-body border-0 bg-light">
                    <p class="mb-3 small">The Not By AI badges are currently available in the following languages: <?php include 'all-supported-languages.php'; ?></p>
                  </div>
                </div>
                <p class="small mt-2 mb-1 w-100">Amount: </p>
                <div class="h3 mb-3">US$ 99.00</div>
                <script async
                  src="https://js.stripe.com/v3/buy-button.js">
                </script>
                <stripe-buy-button
                  buy-button-id="buy_btn_1NCu2mHl9sHS7hKr4WcBxjXI"
                  publishable-key="pk_live_51N2maJHl9sHS7hKrsfltSFO2NfQTxMw2M66jYcdoFi4SsBcEjwjmLvSjftn482UqQRMGx0YbbdoMMjkzo8Pel7ld00Buib1tK9"
                >
                </stripe-buy-button>
                <div class="row">
                  <div class="col-9 col-lg-6" style="font-size: 0.82rem;">By clicking the Download My Badge button, you agree to the terms of the <a class="text-decoration-underline" href="https://notbyai.fyi/license">License Agreement</a></div>
                </div>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
    <script src="js/gsap.min.js"></script>
    <script src="js/ScrollTrigger.min.js"></script>
    <script type="text/javascript">
    const horizontalSections = gsap.utils.toArray('article.horizontal')
    horizontalSections.forEach(function (sec, i) {  
      var thisPinWrap = sec.querySelector('.pin-wrap');
      var thisAnimWrap = thisPinWrap.querySelector('.animation-wrap');
      var getToValue = () => -(thisAnimWrap.scrollWidth - window.innerWidth); 
      gsap.fromTo(thisAnimWrap, { 
        x: () => thisAnimWrap.classList.contains('to-right') ? 0 : getToValue() 
      }, { 
        x: () => thisAnimWrap.classList.contains('to-right') ? getToValue() : 0, 
        ease: "none",
        scrollTrigger: {
          trigger: sec,   
          start: "top top",
          end: () => "+=" + (thisAnimWrap.scrollWidth - window.innerWidth),
          pin: thisPinWrap,
          invalidateOnRefresh: true,
          scrub: true,
        }
      });
    }); 
    gsap.to('.show-when-scrolled', {
      scrollTrigger: {
        trigger: '.show-when-scrolled',
        start: 'top center',
        end: 'bottom top',
        toggleActions: 'play none none none'
      },
      opacity: 1,
      duration: 1,
      stagger: 0.4
    });
    </script>
    <?php include 'footer-dark.php'; ?>