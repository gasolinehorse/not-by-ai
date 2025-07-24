<?php
$pageTitle = 'Not By AI使用方法';
$pageDes = '了解如何使用Not By AI貼紙與頁面來幫助你宣揚你的真人且非AI創作內容。';
include '../header.php';
include 'top-nav.php';
?>
<style>#topNav { margin-bottom: 0 !important; border-bottom: 0 !important;}</style>
    <main class="row human-touch bg-light justify-content-center px-4 px-lg-0 pt-5">
      <header>
        <h1 class="mt-4 display-2">使用方法</h1>
      </header>
      <section class="col-md-10 col-xl-7 pb-1">
        <p class="mb-4">將Not By AI貼紙貼在你的創作內容中可以迅速有效的傳達你的真人、非AI創作理念。然而，由於貼紙有被濫用的可能，如果你有商業意圖，我們強烈建議你讓我們幫你架設一個可以讓你闡述你以人為本的創作方式的頁面（你的貼紙也將連結至此）。步驟簡單得像數123：</p>
      </section>
      <div class="col-xl-11 text-start">
        <div class="row justify-content-center">
          <div class="col-md-4 col-lg-3 bg-white mb-3 rounded">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/step1-submit-project.png" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">01</div>
                  <h2 class="">提交你的創作</h2>
                  <p class="small">填寫你的內容細節、闡述你的創作理念，並上傳能證明你是創作者的文件（假如有的話），像是草稿、紀錄了你創作時的影像等。</p>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1 px-2 text-center align-self-center d-none d-lg-block" style="max-width: 40px;"><img class="img-fluid" src="/img/arrow-solid-right.svg" alt=""></div>
          <div class="col-md-4 col-lg-3 bg-white mb-3 rounded">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/step2-project-review.png" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">02</div>
                  <h2 class="">等待審核</h2>
                  <p class="small">我們將檢視你提交的內容和細節，如果你有漏掉什麼，我們會予以提醒。倘若一切順利，我們會把好消息email給你！</p>
                  <div class="h5 xs opacity-50">目前真人審核等待時間：~3個工作日</div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-md-1 px-2 text-center align-self-center d-none d-lg-block" style="max-width: 40px;"><img class="img-fluid" src="/img/arrow-solid-right.svg" alt=""></div>
          <div class="col-md-4 col-lg-3 bg-white mb-3 rounded">
            <div class="py-4 px-3">
              <img class="img-fluid mb-3" src="https://notbyai.fyi/img/not-by-ai-short-reel.gif" alt="">
              <div class="d-flex">
                <div>
                  <div class="xs fw-bold pe-2">03</div>
                  <h2 class="">大力推廣</h2>
                  <p class="small">審核通過後，我們會把你專屬的Not By AI頁面的連結提供給你。這時，請把你的貼紙置入到你的創作中並連結到你的Not By AI頁面（假如可以連結的話）。</p>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="text-center pb-5 pt-2">
          <a href="https://notbyai.fyi/app/signup" class="btn mt-4 mb-4">開始使用</a><br>
          <div class="small opacity-50">或<a href="https://buy.stripe.com/4gw01P6ka09mbKw9AB" class="text-decoration-underline">一次付99美元來下載貼紙就好</a></div>
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
          <div class="h5 text-center mb-lg-5 mt-4">益處無窮</div>
          <div class="col-lg-6 ps-sm-4 order-lg-1">
            <h3 class="h2 pt-4">備受歡迎的Not By AI貼紙讓你秀出你的真人創作</h3>
            <p>Not By AI是擁有領導地位並充滿前瞻性的的運動，從2023年初便成立，並致力於推廣真人創作的內容。我們的貼紙已被用在 <?php include 'all-stats.php'; ?>個頁面上。乘著大量的好評，Not By AI貼紙如今已成為一個能快速有效展示你的真人創作內容的媒介。獨家設計的貼紙形狀能讓人輕鬆辨識，而低調儉樸的貼紙設計風格也能輕鬆融入你的創作內容，絲毫不奪你的風采。</p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100 rounded" srcset="/img/not-by-ai-badges-for-authenticity@2x.png 2x" src="/img/not-by-ai-badges-for-authenticity.png" style="max-width: 500px;" alt="A Not By AI貼紙" />
          </div>
        </div>
        <div class="row py-4 pb-lg-5 mb-lg-4 order-lg-2">
          <div class="col-lg-6 ps-sm-4">
            <h3 class="h2 pt-4">用Not By AI頁面加強你真人內容的可性度</h3>
            <p>Not By AI頁面是個能讓你盡情闡揚你的創作理念的空間。它能用來確保我們貼紙的公信力並建立起你與觀眾之間的信任。將你的貼紙連結到你的Not By AI頁面，便能讓你得以藉由我們為所有真人創作者而打造的系統來展示你的真實性。請讓我們為你託管這重要的資訊吧！</p>
          </div>
          <div class="col-lg-6 px-2 px-sm-0 text-center">
            <img class="w-100 rounded" srcset="/img/not-by-ai-project-page-for-credibility@2x.png 2x" src="/img/not-by-ai-project-page-for-credibility.png" style="max-width: 500px;" alt="A Not By AI頁面" />
            <div class="xs opacity-50" style="margin-top: -20px;">Not By AI頁面</div>
          </div>
        </div>
        <div class="row bg-white mt-5 rounded mb-3 justify-content-center">
          <div class="col-lg-3 d-none d-lg-block">
            <img class="w-100" src="/img/support-not-by-ai.svg" alt="">
          </div>
          <div class="col-lg-9 py-5 text-center text-lg-start">
            <h4 class="h2 mb-0">現在就加入Not By AI提升你的公信力</h4>
            <p>在這個被AI主宰的世界裡，展示你獨一無二的創作力。</p>
            <a href="https://notbyai.fyi/app/signup" class="btn">加入Not By AI</a>
          </div>
        </div>
      </div>
    </main>
    <?php include 'footer.php'; ?>