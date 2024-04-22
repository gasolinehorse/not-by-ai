<?php
$pageTitle = 'How Not By AI Works';
$pageDes = 'Learn about our Not By AI badges and project pages, and how they help you show your human content in the AI world.';
include 'header.php';
include 'top-nav.php';
?>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1 class="mt-4 display-2">How It Works</h1>
      </header>
      <section class="col-md-10 col-xl-7 pt-4 pb-1">
        <p>Adding our Not By AI badges to your content is an efficient way to demonstrate your human-created content. However, recognizing that our badges can be misused, we require you to set up a project page (where you can link your badges to) to describe your human-centric content approach if using our badges commercially. </p>
      </section>
      <div class="col-xl-11 text-start">
        <div class="row justify-content-center">
          <div class="col-md-4 col-lg-3 bg-light">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/step1-submit-project.png" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">01</div>
                  <h2 class="">Submit a Project</h2>
                  <p class="small">Fill out your project details, describe your creative approach, and upload any supporting docs, such as drafts or videos of you creating your content.</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1 px-2 text-center align-self-center d-none d-lg-block" style="max-width: 40px;"><img class="img-fluid" src="/img/arrow-solid-right.svg" alt=""></div>
          <div class="col-md-4 col-lg-3 bg-light">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/step2-project-review.png" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">02</div>
                  <h2 class="">Wait for Approval</h2>
                  <p class="small">We will review your content and details and remind you if anything is missing or looks off. If all is good, we will email you the good news!</p>
                  <div class="h5 xs opacity-50">Current human review wait time: ~5&nbsp;days</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1 px-2 text-center align-self-center d-none d-lg-block" style="max-width: 40px;"><img class="img-fluid" src="/img/arrow-solid-right.svg" alt=""></div>
          <div class="col-md-4 col-lg-3 bg-light">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/img/not-by-ai-short-reel.gif" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">03</div>
                  <h2 class="">Promote</h2>
                  <p class="small">Add the Not By AI badges to your content and, when possible, link them to your project page, which we will publish and provide you with a link to upon approval.</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pb-5 pt-2">
          <a href="https://notbyai.fyi/app/signup" class="btn mt-4">Get Started</a>
        </div>
      </div>
      <div id="all-not-by-ai-use-case-wrapper" class="overflow-hidden">
        <img id="all-not-by-ai-use-case" class="my-lg-4 no-download" style="height: 323px; pointer-events: none;" src="/img/long-not-by-ai-gallery-scroll.jpg" alt="Not By AI use cases" />
      </div>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/gsap.min.js"></script>
      <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.11.5/ScrollTrigger.min.js"></script>
      <script>
        gsap.registerPlugin(ScrollTrigger);

        const tl = gsap.timeline({
          scrollTrigger: {
            trigger: "#all-not-by-ai-use-case",
            start: "top center",
            end: "top center",
            ease: "none",
            pin: true
          }
        });

        tl.to("#all-not-by-ai-use-case", {
          x: "-" + (2567 - window.innerWidth) + "px",
          duration: 1
        });
      </script>
      <div class="col-lg-10 col-xl-9 px-4 px-lg-0 pt-lg-4 pb-5 text-start">
        <div class="row py-4 mb-lg-3">
          <div class="h5 text-center mb-lg-5 mt-4">How We Help</div>
          <div class="col-lg-6 ps-sm-4 order-lg-1">
            <h3 class="h2 pt-4">The Iconic Not By AI Badges Convey Authentic Content</h3>
            <p>Not By AI is the pioneering leader started in early 2023 in promoting human content and our badges are featured on over <?php include 'all-stats.php'; ?> pages. With such widespread recognization, the Not By AI badges have become an efficient way to show that your content is human-created. The badges feature a distinguishable shape and design that conveys its messaging without distracting your audience from consuming your content. </p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100" srcset="/img/not-by-ai-badges-for-authenticity@2x.png 2x" src="/img/not-by-ai-badges-for-authenticity.png" style="max-width: 500px;" alt="A Not By AI badge" />
          </div>
        </div>
        <div class="row py-4 mb-lg-3 order-lg-2">
          <div class="col-lg-6 ps-sm-4">
            <h3 class="h2 pt-4">The Project Page Enhances Your Credibility</h3>
            <p>A project page provides the space for you to describe your creative approach. This ensures the authenticity of our badges and builds trust with your audience. By linking your badges to your project page(s), you leverage a centralized system made for human content creators just like you, instead of having to host this crucial information on your own.</p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100" srcset="/img/not-by-ai-project-page-for-credibility@2x.png 2x" src="/img/not-by-ai-project-page-for-credibility.png" style="max-width: 500px;" alt="A Not By AI project page" />
            <div class="xs opacity-50" style="margin-top: -20px;">A Not By AI project page</div>
          </div>
        </div>
        <div class="row bg-light mb-lg-3 justify-content-center">
          <div class="col-lg-3 d-none d-lg-block">
            <img class="w-100" src="/img/support-not-by-ai.svg" alt="">
          </div>
          <div class="col-lg-9 py-5 text-center text-lg-start">
            <h4 class="h2 mb-0">Build Trust With Not By AI Today</h4>
            <p>In a world dominated by AI content, show your authenticity.</p>
            <a href="https://notbyai.fyi/app/signup" class="btn">Join Not By AI</a>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>