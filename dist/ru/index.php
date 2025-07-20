<?php
$pageTitle = 'Not By AI — Ваш контент без ИИ заслуживает значка';
$pageDes = 'Если ваш контент не создан с помощью искусственного интеллекта, добавьте значок к своей работе.';
include '../header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Загрузка скоро начнется. <br>Пожалуйста, не закрывайте это окно.</span></div>
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
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">Ваш контент без ИИ заслуживает значка</h1>
          </header>
          <p class="display-5">Искусственный интеллект (ИИ) обучается с использованием контента, созданного человеком. Если люди перестанут создавать новый контент и будут полагаться исключительно на ИИ, онлайн-контент по всему миру может стать повторяющимся и застойным.</p>
          <p class="display-5">Если ваш контент не создан с помощью искусственного интеллекта, добавьте значок к своей работе.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/ru/painted-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/ru/painted-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Скачайте значки Художника</h2>
                  <p class="small mt-2 text-opacity-50">Подходит для художественных работ, включая цифровое и традиционное искусство, картины, иллюстрации, комиксы и многое другое.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/ru/written-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/ru/written-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Скачайте значки Писателя</h2>
                  <p class="small mt-2 text-opacity-50">Подходит для записей в блогах, эссе, книг, исследований, кода и другого текстового контента.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/ru/written-by-human-not-by-ai-white.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/ru/written-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Скачайте значки Продюсера</h2>
                  <p class="small mt-2 text-opacity-50">Подходит для аудио, видео, фотографии, общего творческого подхода и многого другого.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">Вы в хорошей компании. Значки Not By AI используются на <?php include '../all-stats.php'; ?> страниц.
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
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Миссия</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">Кто может использовать значок</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Преимущества</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Галерея</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="/help">Ресурсы</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Поддержите нас</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Скачайте значки&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Not By AI для бизнеса</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Скачайте значки&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3 class="marker">Миссия</h3>
          <p>Значки Not By AI созданы для того, чтобы побудить больше людей создавать оригинальный контент и помочь аудитории определять контент, созданный человеком. Конечная цель — обеспечить дальнейшее развитие человечества.</p>
          <p>По оценкам экспертов, к 2025 году 90 процентов онлайн-контента может быть создано с помощью искусственного интеллекта.<sup>1</sup> С учетом стремительного роста объемов ИИ-сгенерированного контента важно понимать, что ИИ обучается на контенте, созданном людьми. Если люди полностью перейдут на использование ИИ для создания контента, то новый контент, создаваемый ИИ, может оказаться лишь переработкой уже существующего. Это может стать серьезным препятствием для прогресса человечества.<sup>2</sup> Только ограничив нашу зависимость от ИИ и продолжая создавать оригинальный контент, мы сможем двигаться вперед как вид.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="ИИ использует человеческий контент для создания нового контента">
            <figcaption class="display-6">На диаграмме показан сценарий, при котором люди прекращают создавать новый контент, а ИИ лишь перерабатывает уже существующий, в результате чего теряется оригинальность.</figcaption>
          </figure>
          <p>Стоит отметить, что технологии искусственного интеллекта являются важной вехой в истории развитии технологий, и значок Not By AI предназначен не для того, чтобы препятствовать использованию ИИ. Напротив, он предназначен для того, чтобы, отмечая достижение, мы работали с ИИ, а не были им заменены.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Кто может использовать значок</h3>
          <h4 class="pt-1">Правило 90% Не ИИ</h4>
          <p>Понимая, что существует размытая грань между тем, что считается созданным ИИ и созданным человеком, если вы оцениваете, что по крайней мере 90% вашего контента создано людьми, вы имеете право добавлять значки на свой веб-сайт, блог, искусство, фильм, эссе, книги, подкаст или любой другой ваш проект для некоммерческого использования, а при наличии подписки — для коммерческого использования. 90% могут включать использование ИИ для вдохновения, поддержку юридических документов, таких как политики конфиденциальности (при условии, что юридические вопросы не являются основным направлением вашего контента или услуги), непользовательский контент, такой как метатеги SEO или код, а также перевод контента и поиск грамматических ошибок и опечаток.</p>
          <p>Обратите внимание, что Not By AI не является инструментом обнаружения ИИ; наша миссия рассчитана на пользователей, которые добровольно хотят отстаивать подходы, ориентированные на человека, а не на тех, кто ищет доказательства наличия контента, созданного человеком. Это означает, что вы должны нести ответственность за соблюдение Правила 90% Не ИИ.</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3 class="marker">Преимущества</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><img class="mb-1" src="img/industry.svg" alt=""> Для бизнеса</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><img class="mb-1" src="img/individual.svg" alt=""> Для личного использования</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              Помимо предоставления вам наших значков Not By AI (после одобрения), как участнику Not By AI мы поможем вам создать страницу проекта, которая документирует ваш творческий процесс и подход. Это позволит вашей аудитории узнать, как вы на самом деле создали свой контент без или с очень незначительной помощью ИИ.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Значок Not By AI">
                  <div class="xs text-center">Значок Not By AI</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Страница проекта Not By AI"></a>
                  <div class="xs text-center pt-2">Страница проекта</div>
                </div>
              </div>
              Страница проекта может быть связана с вашими значками. Это важная страница для ваших клиентов, потенциальных клиентов и пользователей, чтобы осознать, что ваши человеческие усилия — это больше, чем просто вставка значка. Это особенно важно, когда бизнес-проблема, которую они хотят решить, сложна и требует индивидуального решения от обученных людей. С Not By AI вы можете:
              <ul class="mt-3 ul--checks">
                <li class="mb-1">Подчеркнуть ваши решения, ориентированные на человека</li>
                <li class="mb-1">Доказать, что ваш контент защищен от ошибок ИИ</li>
                <li class="mb-1">Выделиться среди конкурентов</li>
                <li class="mb-1">Показать, что ваш контент свободен от нарушений авторских прав искусственным интеллектом</li>
                <li class="mb-1">Повысить доверие и авторитетность вашего бренда</li>
              </ul>
              <a href="/app/signup" class="btn mt-2 mb-3">Присоединяйтесь к Not By AI</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Без обученных профессионалов или детекторов ИИ практически невозможно отличить ваш человеческий контент от контента, сгенерированного ИИ. Использование значков Not By AI помогает вашей аудитории распознать ваш подход, ориентированный на человека, чтобы они понимали, что ваш контент действительно от вас, а не скопирован и вставлен из генеративного ИИ, такого как ChatGPT, Claude или Gemini.<div class="mt-3">Что еще более важно, это повышает осведомленность и побуждает большее число людей создавать оригинальный контент. Этот процесс гарантирует, что мы, как вид, продолжим вносить коллективный вклад в создание контента для людей и предотвратим замену контента переработанным контентом, созданным с помощью искусственного интеллекта.

              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Значок Not By AI">
                  <div class="xs text-center">Значок Not By AI</div>
                </div>
              </div>
              Мы предлагаем значки абсолютно бесплатно для некоммерческих проектов. Наша миссия — максимально широко распространить движение Not By AI. Если вы хотите поддержать нас, пожалуйста, рассмотрите наши платные подписки или внесите свой вклад <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">через пожертвование</a>.</div>
            </div>
          </div>
          <p class="mt-3">Некоторые веб-сайты, такие как <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, публикуют объявления для достижения аналогичных целей. Однако эти объявления могут перестать быть видимыми вскоре после их выпуска. С помощью значков Not By AI вы можете гарантировать, что такие сообщения будут постоянно доступны.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3 class="marker">Галерея</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить на веб-сайт</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в художественную работу</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в приложение</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в эссе</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в книгу</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить на обложку альбома</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в статью в блоге</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Добавить в картину</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Больше вдохновений</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3 class="marker">Поддержите нас</h3>
          <p>Все движение Not By AI создано реальными людьми. Ваша поддержка будет иметь значение. Пожертвуйте сегодня, чтобы помочь создателям контента и обеспечить дальнейшее развитие человечества. Ваше <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">пожертвование</a> будет использовано для <a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">развития</a> Not By AI. Спасибо.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Поддержать</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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