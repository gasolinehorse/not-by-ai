<?php
$pageTitle = 'Not By AI — Añade la insignia a tu contenido creado por humanos';
$pageDes = 'Descarga y añade la insignia de Not By AI para mostrar que tu contenido (texto, arte, fotos, vídeos y música) está libre de IA';
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
    <main>
      <section class="row justify-content-center mt-4">
        <div class="overflow-hidden d-none d-lg-block col-lg-1 col-xl-2 ps-0 pt-5 pt-xxl-0">
          <img class="img-fluid d-none d-xl-block float-start not-by-ai-badges-l no-download" src="/img/not-by-ai-badges-l.svg" alt="">
        </div>
        <div class="col-lg-10 col-xl-8">
          <header>
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">Tu contenido libre de IA Se merece una&nbsp;Insignia</h1>
          </header>
          <p class="display-5">La Inteligencia Artificial (IA) se entrena a partir de contenido creado por humanos. Si los humanos dejan de producir contenido y dependen únicamente de la IA, los contenidos de Internet podrían volverse repetitivos y&nbsp;estancarse.</p>
          <p class="display-5">Si tu contenido está libre de IA, añade la insignia a tu&nbsp;trabajo.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Descarga la insignia de Artista</h2>
                  <p class="small mt-2 text-opacity-50">Para obras de arte, incluyendo arte tradicional y digital, pintura, ilustraciones, cómics y más.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Descarga la insignia de Escritor</h2>
                  <p class="small mt-2 text-opacity-50">Para blos, ensayos, libros, trabajos de investigación, código y otro contenido basado en texto.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Descarga la insignia de Productor</h2>
                  <p class="small mt-2 text-opacity-50">Para audio, vídeo, fotografía, enfoque creativo en general y más.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">Estás en buena compañía. Las insignias Not By AI aparecen en <?php include 'all-stats.php'; ?> páginas.</div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi/es" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Misión</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">¿Quién puede usar la insignia?</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Beneficios</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Galería</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="https://notbyai.fyi/help">Recursos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Apóyanos</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Descarga las insignias&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Not By AI para uso profesional</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Descarga las insignias&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>Misión</h3>
          <p>Las insignias Not By AI han sido creadas para animar alentar a la humanidad a producir contenido original y ayudar a los usuarios a identificar los contenidos libres de IA. El objetivo final es garantizar que la humanidad siga avanzando.</p>
          <p>Expertos estiman que el 90% del contenido en internet podría ser generado por IA en 2025.<sup>1</sup> Con el auge de los contenidos generados por IA, es importante tener en cuenta que ésta se entrena usando contenido generado por humanos. Si dependemos de la Inteligencia Artificial para generar contenido en el futuro, cualquier nuevo contenido podría ser simplemente un reciclaje de otro contenido creado por IA. Esto podría suponer un obstáculo significativo al desarrollo humano.<sup>2</sup> Sólo limitando la dependencia de la IA y creando contenido original podremos avanzar como especie.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="IA que utiliza contenido creado por humanos para producir nuevo contenido">
            <figcaption class="display-6">El gráfico representa un escenario en el que los humanos dejan de crear contenido y la IA reutiliza contenido preexistente.</figcaption>
          </figure>
          <p>Cabe destacar que las tecnologías de IA marcan un hito importante en la historia de la tecnología y la insignia Not By AI no está diseñada para desalentar el uso de la Inteligencia Artificial. Al contrario, se trata de asegurar que, mientras celebramos el logro, trabajamos con la IA en lugar de ser sustituidos por&nbsp;ella.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>¿Quién puede usar la insignia?</h3>
          <h4 class="pt-1">La regla del 90% de Not By AI</h4>
          <p>Partiendo de que no existe una división clara entre lo que se considera generado por humanos y IA, si estimas que <span class="text-decoration-underline">al menos el 90% de tu contenido ha sido creado por humanos</span>, puedes añadir las insignias a tu web, blog, arte, vídeo, ensayo, libros, podcasts o cualquier proyecto para uso no comercial y, con una subscripción, uso comercial. El 90% <i>puede</i> incluir uso de IA como inspiración, en documentos legales complementarios a tu trabajo (asumiendo que no es objetivo principal de tu contenido o servicio), contenido no orientado al usuario como SEO, meta tags o código y para corregir contenido.</p>
          <p>Ten en cuenta que Not By AI no es una herramienta de detección de IA; nuestra misión está dirigida a usuarios que voluntariamente desean optar por enfoques centrados en el ser humano, más que a aquellos que buscan pruebas de contenido libre de IA. Esto significa que tú serás el responsable de cumplir la regla del 90% mencionada anteriormente. </p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>Beneficios</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> As a business</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> As an individual</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              Además de proporcionarte, una vez aprobadas, las icónicas insignias Not By AI, como miembro, te ayudaremos a crear una página de proyecto que documente tu enfoque y proceso creativo. De este modo, tu público podrá saber cómo has creado tu contenido con mínima intervención de IA.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Insignias Not By AI</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI projects"></a>
                  <div class="xs text-center pt-2">Página de proyecto</div>
                </div>
              </div>
              Desde tus insignias se puede enlazar una página de proyecto. Será una página crucial para que tus clientes actuales y potenciales y tus usuarios reconozcan que el esfuerzo humano es algo más que insertar una insignia. Esto es especialmente importante cuando el problema que buscan solucionar es complejo y requiere una solución a medida por parte de humanos cualificados. Con Not By AI, puedes:
              <ul class="mt-3 ul--checks">
                <li class="mb-1">Destacar tus soluciones centradas en el ser humano</li>
                <li class="mb-1">Demostrar que tu contenido está libre de alucinaciones de la IA</li>
                <li class="mb-1">Diferenciarte de tus competidores</li>
                <li class="mb-1">Asegurar que tu contenido no infringe derechos de autor por uso de IA</li>
                <li class="mb-1">Construir confianza y credibilidad para tu marca</li>
              </ul>
              <a href="https://notbyai.fyi/app/signup" class="btn mt-2 mb-3">Únete a Not By AI</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Sin profesionales específicamente entrenados o detectores de IA, es prácticamente imposible distinguir tu contenido humano del generado por IA. Utilizar las insignias Not By AI ayuda a tu audiencia a reconocer tu enfoque humano, comprendiendo que tu contenido es verdaderamente tuyo y no copiado y pegado de una IA generativa como ChatGPT, Claude o Gemini. <div class="mt-3"><br>Y lo que es más importante, esta iniciativa despierta la conciencia y anima a más individuos a producir contenido original. Este proceso garantiza que nosotros, colectivamente como especie, continuemos contribuyendo a la creación humana y evita que los contenidos sean sustituidos por reciclaje producido por IA.<br><br>
              Ofrecemos las insignias de manera completamente gratuita para uso no comercial. Nuestra misión es difundir el movimiento lo más ampliamente posible. Si quieres apoyarnos, considera nuestras subscripciones o <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">contribuye con una donación</a>.</div>
            </div>
          </div>
          <p class="mt-3">Algunas webs, como <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, publican anuncios con un objetivo similar. Sin embargo, estos anuncios pueden dejar de ser visibles poco después de su publicación. Con las insignias Not By AI, puedes asegurarte de que el mensaje se exponga constantemente. </p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>Galería</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En una página web</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En una ilustración</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En una aplicación</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En un ensayo</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En un libro</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En una carátula</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En un blog</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>En una pintura</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="https://notbyai.fyi/gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Más inspiración</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>Apóyanos</h3>
          <p>Todo el movimiento Not By AI ha sido creado por humanos. Tu apoyo marca la diferencia. <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Dona hoy</a> para empoderar a los creadores de contenido y asegurar el avance de la humanidad. Tu donativo se usará de <a href="https://notbyai.fyi/help/where-does-donation-money-go.php" class="text-decoration-underline">varias formas</a> para expandir Not By AI.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Dona hoy</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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