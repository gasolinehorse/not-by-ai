<?php
$pageTitle = 'Not By AI — İçeriğinize insan yapımı rozetini ekleyin';
$pageDes = 'Not By AI rozetlerini indirin ve insan eliyle üretilmiş (metin, sanat, fotoğraf, video ve müzik) içeriklerinize ekleyin';
include '../header.php';
include './top-nav.php';
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
            <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l no-download" src="/img/not-by-ai-badges-l.svg" alt="">
          </div>
          <div class="col-lg-10 col-xl-8">
            <header>
              <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">YZ içermeyen içerikleriniz bir rozeti hak&nbsp;ediyor</h1>
            </header>
            <p class="display-5">Yapay zeka (YZ), insan yapımı içerikler üzerinden eğitilir. İnsanlar yeni içerik üretmeyi bırakıp yalnızca YZ'ye başvurursa, dünya genelinde dijital içerikler birbirini tekrarlayan ve durgun bir hâl&nbsp;alabilir.</p>
            <p class="display-5">Eğer içeriğiniz YZ tarafından üretilmediyse, siz de çalışmalarınıza bu rozeti&nbsp;ekleyin.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white-tr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black-tr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Sanatçı rozetlerini indirin</h2>
                  <p class="small mt-2 text-opacity-50">Dijital ve geleneksel sanat, resim, çizim, çizgi roman ve daha pek çok sanat eseri için uygundur.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white-tr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black-tr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Yazar rozetlerini indirin</h2>
                  <p class="small mt-2 text-opacity-50">İnternet günceleri, denemeler, kitaplar, araştırmalar, yazılım kodları ve diğer metin tabanlı içerikler için uygundur.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white-tr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black-tr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Yapımcı rozetlerini indirin</h2>
                  <p class="small mt-2 text-opacity-50">Ses, video, fotoğrafçılık, genel yaratıcı yaklaşım/felsefe ve daha fazlası için uygundur.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
          <div class="col-lg-7 p-2 bg-white rounded-5 mt-3">
            <svg class="mt-1" xmlns="http://www.w3.org/2000/svg" width="127.972" height="18.995"><path fill="#EED601" fill-rule="nonzero" d="m13.022 6.32 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L0 7.256l6.95-.935L9.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L27 7.256l6.95-.935L36.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L54 7.256l6.95-.935L63.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L81 7.256l6.95-.935L90.986 0l3.036 6.32Zm27 0 6.95.935-5.073 4.842 1.26 6.898-6.173-3.329-6.172 3.33 1.26-6.9L108 7.256l6.95-.935L117.986 0l3.036 6.32Z"/></svg>
            <p class="small my-1">Aramıza hoş geldiniz. Not By AI rozetleri <?php include '../all-stats.php'; ?> aşkın sayfada yer almaktadır.</p>
          </div>
        </div>
      </section>
      <div class="pb-4 mt-3 border-bottom"></div>
    </main>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi/tr" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Misyon</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">Rozeti Kimler Kullanabilir</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Faydalar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Galeri</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="https://notbyai.fyi/help">Kaynaklar</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Destek Olun</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Rozetleri İndirin&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">İşletmeler için Not By AI</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Rozetleri indir&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3 class="marker">Misyon</h3>
          <p>Not By AI rozetleri, daha fazla insanın özgün içerik üretmesini teşvik etmek ve kullanıcıların insan tarafından üretilen içeriği tespit etmesine yardımcı olmak için oluşturulmuştur. Nihai hedefimiz, insanlığın ilerlemeye devam etmesini sağlamaktır.</p>
          <p>Bir uzman, 2025 yılında dijital içeriklerin  %90 kadarının YZ tarafından üretileceğini tahmin ediyor.<sup>1</sup>  Yapay zeka tarafından üretilen içeriklerdeki bu yükseliş ile birlikte, yapay zekanın insan tarafından üretilen içeriklerle eğitildiğini hatırlamak gerekmektedir. İnsanlar içerik üretmek için yalnızca yapay zekaya güvenirse, yapay zeka tarafından üretilen yeni içerikler yalnızca geçmişten gelen geri dönüştürülmüş içerikler olabilir. Bu durum, insanlığın ilerlemesine büyük bir engel teşkil edebilir.<sup>2</sup> Ancak yapay zekaya olan bağlılığımızı sınırlayarak ve özgün içerikler üretmeye devam ederek türümüzün ilerlemesini sağlayabiliriz.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="İnsanlar tarafından oluşturulan içeriği kullanarak yeni içerik üreten YZ">
            <figcaption class="display-6">Bu grafik, insanların yeni içerik üretmeyi bıraktığı ve yapay zekanın önceden var olan içeriği yeniden kullanarak özgünlükten yoksun içerik ürettiği bir senaryoyu temsil etmektedir.</figcaption>
          </figure>
          <p>YZ'nin teknoloji tarihinde önemli bir dönüm noktası olduğunu ve Not By AI rozetinin YZ kullanımını durdurmak için tasarlanmadığını belirtmek gerekir. Aksine bu rozet, bu gelişmeyi kutlarken YZ tarafından yerimizden edilmeyip, YZ ile birlikte çalıştığımızdan emin olmak için tasarlanmıştır.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Rozeti Kimler Kullanabilir</h3>
          <h4 class="pt-1">Not By AI %90 Kuralı</h4>
          <p>YZ tarafından oluşturulan içerik ile insan tarafından oluşturulan içerik arasındaki sınır muğlaktır. Ancak eğer ticari amaçlı olmayan içeriğinizin en az %90'ının insanlar tarafından oluşturulduğunu belirlediyseniz, rozetleri web sayfalarınıza, internet güncenize, sanat eserlerinize, filmlerinize, makalelerinize, kitaplarınıza, podcast'lerinize veya herhangi bir projenize ekleyebilirsiniz. Ticari amaçlı projelerinize ise abonelikle ekleyebilirsiniz. %90'lık bu oran, ilham alma, gizlilik politikaları gibi yasal belgeleri destekleme (içeriğinizin veya hizmetinizin ana odağının hukuk olmadığı varsayılırsa), SEO meta etiketleri veya kodları gibi kullanıcıya açık olmayan içerikleri yazma, dil bilgisi hataları ve yazım hatalarını arama veya içeriği çevirme gibi YZ kullanımlarını içerebilir.</p>
          <p>Not By AI, bir YZ algılama aracı değildir ve misyonumuz, insan tarafından üretilen içeriğin ispatını arayanlardan ziyade, gönüllü olarak insan merkezli yaklaşımları savunmak isteyen kullanıcılara yöneliktir. Bu, Not By AI %90 Kuralını takip etmekten sorumlu olan kişinin siz olması gerektiği anlamına gelir.</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Faydalar</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><img class="mb-1" src="img/industry.svg" alt=""> İşletmelere</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><img class="mb-1" src="img/individual.svg" alt=""> Bireylere</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              Not By AI üyesi olarak, size ikonik Not By AI rozetlerimizi (onaylandıktan sonra) sunmanın yanı sıra, kreatif sürecinizi ve yaklaşımınızı belgeleyen bir proje sayfası oluşturmanıza da yardımcı olacağız. Bu sayede hedef kitleniz, YZ yardımı olmadan veya çok az bir yardımla içeriğinizi nasıl oluşturduğunuzu öğrenebilirler.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Not By AI Rozetlerini</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI projects"></a>
                  <div class="xs text-center pt-2">Proje sayfası</div>
                </div>
              </div>
              Proje sayfanıza rozetlerinize tıklayarak ulaşılabilir. Bu sayfa, hem hazır hem de olası müşterilerinizin veya kullanıcılarınızın, gösterdiğiniz insan emeğinin sadece bir rozet eklemekten ibaret olmadığını anlamaları için elzemdir. Bu, özellikle müşterilerinizin çözmek istediği iş problemi karmaşıksa ve uzman insanlardan özel bir çözüm gerektiriyorsa önemlidir. Not By AI ile şunları yapabilirsiniz:
              <ul class="mt-3 ul--checks">
                <li class="mb-1">İnsan odaklı çözümlerinizi öne çıkarın.</li>
                <li class="mb-1">İçeriğinizin yapay zeka sanrılarından korunduğunu kanıtlayın.</li>
                <li class="mb-1">Rakiplerinizden ayrılın.</li>
                <li class="mb-1">İçeriğinizin yapay zeka telif hakkı ihlali içermediğini gösterin.</li>
                <li class="mb-1">Markanız için güven ve itibar oluşturun.</li>
              </ul>
              <a href="https://notbyai.fyi/app/signup" class="btn mt-2 mb-3">Not By AI’ye katıl</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Eğitimli profesyoneller veya YZ algılayıcıları olmadan, insan tarafından oluşturulan içeriğinizi YZ tarafından oluşturulan içerikten ayırt etmek neredeyse imkansızdır. Not By AI rozetlerini kullanmak, kitlenizin insan odaklı yaklaşımınızı fark etmelerine yardımcı olur, böylece içeriğinizin gerçekten sizden geldiğini ve ChatGPT, Claude veya Gemini gibi üretken bir yapay zekadan kopyalanıp yapıştırılmadığını anlarlar. <div class="mt-3">Daha da önemlisi, bu farkındalığı artırır ve daha fazla kişinin özgün içerik üretmesini teşvik eder. Bu süreç, bizlerin bir tür olarak ve topluca insan içeriğine katkıda bulunmaya devam etmemizi sağlayarak, içeriğin yapay zeka tarafından üretilen geri dönüştürülmüş içerikle değiştirilmesini önler.<br>
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Not By AI badges</div>
                </div>
              </div>
              Ticari olmayan projeler için rozetleri %100 ücretsiz olarak sunuyoruz. Misyonumuz, Not By AI hareketini mümkün olduğunca geniş bir kitleye yaymaktır. Bizi desteklemek isterseniz, ücretli aboneliklerimizi inceleyebilir veya <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">bağış yoluyla katkıda bulunabilirsiniz</a>.</div>
            </div>
          </div>
          <p class="mt-3"><a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a> gibi bazı internet siteleri, benzer amaçlarla duyurular yayınlamaktadır. Ancak bu duyurular, yayınlandıktan kısa bir süre sonra görünürlüğünü yitirebilmektedir. Not By AI rozetleri ile bu mesajların sürekli görünür olmasını sağlayabilirsiniz.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3 class="marker">Galeri</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir internet sitesine ekle</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir sanat eserine ekle</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir uygulamaya ekle</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir makaleye ekle</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir kitaba ekle</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir albüm kapağına ekle</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir blog yazısına ekle</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Bir resme ekle</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="https://notbyai.fyi/gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Daha Fazla İlham Göster</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3 class="marker">Destek Olun</h3>
          <p>Not By AI hareketi tamamen gerçek insanlar tarafından oluşturulmuştur. Desteğiniz fark yaratacaktır. İçerik oluşturuculara güç vermek ve insanlığın ilerlemeye devam etmesini sağlamak için <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">bugün bağış yapın</a>. Bağışınız Not By AI hareketini büyütmek için <a href="https://notbyai.fyi/help/where-does-donation-money-go.php" class="text-decoration-underline">çeşitli alanlarda kullanılacaktır</a>. Teşekkür ederiz.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Şimdi Bağış Yapın</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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