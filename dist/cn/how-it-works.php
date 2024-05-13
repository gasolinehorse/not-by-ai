<?php
$pageTitle = 'Not By AI使用方法';
$pageDes = '了解如何使用Not By AI贴纸与页面来帮助你宣扬你的真人且非AI创作内容。';
include '../header.php';
include 'top-nav.php';
?>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1 class="mt-4 display-2">使用方法</h1>
      </header>
      <section class="col-md-10 col-xl-7 pb-1">
        <p class="mb-4">将Not By AI贴纸贴在你的创作内容中可以迅速有效地传达你的真人、非AI创作理念。然而，由于贴纸有被滥用的可能，如果你有商业意图，我们强烈建议你让我们帮你架设一个可以让你阐述你以人为本的创作方式的页面（你的贴纸也将链接至此）。步骤简单得像数123：</p>
      </section>
      <div class="col-xl-11 text-start">
        <div class="row justify-content-center">
          <div class="col-md-4 col-lg-3 bg-light">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/step1-submit-project.png" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">01</div>
                  <h2 class="">提交你的创作</h2>
                  <p class="small">填写你的内容细节、阐述你的创作理念，并上传能证明你是创作者的文件（假如有的话），像是草稿、纪录了你创作时的影像等。</p>
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
                  <h2 class="">等待审核</h2>
                  <p class="small">我们将检视你提交的内容和细节，如果你有漏掉什麽，我们会予以提醒。倘若一切顺利，我们会把好消息email给你！</p>
                  <div class="h5 xs opacity-50">目前真人审核等待时间：~3个工作日</div>
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
                  <h2 class="">大力推广</h2>
                  <p class="small">审核通过后，我们会把你专属的Not By AI页面的连结提供给你。这时，请把你的贴纸置入到你的创作中并连结到你的Not By AI页面（假如可以连结的话）。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pb-5 pt-2">
          <a href="https://notbyai.fyi/app/signup" class="btn mt-4 mb-4">开始使用</a><br>
          <div class="small opacity-50">或<a href="https://buy.stripe.com/4gw01P6ka09mbKw9AB" class="text-decoration-underline">一次付99美元来下载贴纸就好</a></div>
        </div>
      </div>
      <div id="all-not-by-ai-use-case-wrapper" class="overflow-hidden">
        <img id="all-not-by-ai-use-case" class="my-lg-4 no-download" style="height: 323px; pointer-events: none;" src="/img/long-not-by-ai-gallery-scroll.jpg" alt="Not By AI範例" />
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
          <div class="h5 text-center mb-lg-5 mt-4">益处无穷</div>
          <div class="col-lg-6 ps-sm-4 order-lg-1">
            <h3 class="h2 pt-4">备受欢迎的Not By AI贴纸让你展示你的真人创作</h3>
            <p>Not By AI是拥有领先地位并充满前瞻性的的运动，从2023年初便成立，并致力于推广真人创作的内容。我们的贴纸已被用在 <?php include 'all-stats.php'; ?>个页面上。乘着大量的好评，Not By AI贴纸如今已成为一个能快速有效展示你的真人创作内容的媒介。独家设计的贴纸形状能让人轻松辨识，而低调俭朴的贴纸设计风格也能轻松融入你的创作内容，丝毫不夺你的风采。</p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100" srcset="/img/not-by-ai-badges-for-authenticity@2x.png 2x" src="/img/not-by-ai-badges-for-authenticity.png" style="max-width: 500px;" alt="A Not By AI貼紙" />
          </div>
        </div>
        <div class="row py-4 pb-lg-5 mb-lg-4 order-lg-2">
          <div class="col-lg-6 ps-sm-4">
            <h3 class="h2 pt-4">用Not By AI页面加强你真人内容的可性度</h3>
            <p>Not By AI页面是个能让你尽情阐扬你的创作理念的空间。它能用来确保我们贴纸的公信力并建立起你与观众之间的信任。将你的贴纸连结到你的Not By AI页面，便能让你得以藉由我们为所有真人创作者而打造的系统来展示你的真实性。请让我们为你託管这重要的资讯吧！</p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100" srcset="/img/not-by-ai-project-page-for-credibility@2x.png 2x" src="/img/not-by-ai-project-page-for-credibility.png" style="max-width: 500px;" alt="A Not By AI頁面" />
            <div class="xs opacity-50" style="margin-top: -20px;">Not By AI頁面</div>
          </div>
        </div>
        <div class="row bg-light mb-lg-3 justify-content-center">
          <div class="col-lg-3 d-none d-lg-block">
            <img class="w-100" src="/img/support-not-by-ai.svg" alt="">
          </div>
          <div class="col-lg-9 py-5 text-center text-lg-start">
            <h4 class="h2 mb-0">现在就加入Not By AI提升你的公信力</h4>
            <p>在这个被AI主宰的世界里，展示你独一无二的创作力。</p>
            <a href="https://notbyai.fyi/app/signup" class="btn">加入Not By AI</a>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>