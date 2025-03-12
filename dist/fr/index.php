<?php
$pageTitle = 'Not By AI — Ajoutez le badge à votre contenu créé par des humains';
$pageDes = 'Téléchargez et ajoutez le badge Not By AI pour mettre en avant votre approche sans IA et centrée sur l’humain dans la création de contenu (écrits, œuvres d’art, photos, peintures, vidéos et musique)';
include '../header.php';
include 'top-nav.php';
?>
    <div id="loader" class="position-fixed top-0 start-0 w-100 h-100 justify-content-center align-items-center" style="display: none; backdrop-filter: blur(12px); background-color: rgba(255, 255, 255, 0.8); z-index: 1056;"><span class="h4"><div><lottie-player src="/img/loader.json" background="transparent"  speed="1" class="my-0 mx-auto" style="width: 70px; height: 70px;" loop autoplay></lottie-player></div>Votre téléchargement commencera sous peu.<br>Veuillez ne pas fermer votre fenêtre.</span></div>
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
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">Vos contenus réalisés sans IA méritent un&nbsp;badge</h1>
          </header>
          <p class="display-5">L’intelligence artificielle (IA) est entraînée sur des contenus réalisés par des hommes et des femmes. Si les humains arrêtent de produire de nouvelles œuvres pour s’appuyer uniquement sur l’IA, les contenus présents en ligne et partout dans le monde risquent de devenir répétitifs et&nbsp;redondants.</p>
          <p class="display-5">Si vos contenus ne sont pas générés par IA, vous pouvez ajouter le badge à votre&nbsp;travail.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white-fr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black-fr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Téléchargez les badges pour les artistes</h2>
                  <p class="small mt-2 text-opacity-50">À utiliser sur les œuvres d’art, qu’elles soient numériques ou traditionnelles, les peintures, les illustrations, les BD, etc.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/written-by-human-not-by-ai-white-fr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/written-by-human-not-by-ai-black-fr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Téléchargez les badges pour les auteurs</h2>
                  <p class="small mt-2 text-opacity-50">À utiliser sur les articles de blog, les livres, la recherche, le code et tout autre type de contenu textuel.</p>
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
                      <img width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/produced-by-human-not-by-ai-white-fr.svg" alt="">
                      <img width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/produced-by-human-not-by-ai-black-fr.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Téléchargez les badges pour les producteurs</h2>
                  <p class="small mt-2 text-opacity-50">À utiliser sur les productions audio, vidéo, photographiques, et plus généralement sur toute pratique/philosophie créative, etc.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">Vous êtes en bonne compagnie. Les badges Not By AI / Pas par l’IA figurent sur <?php include '../all-stats.php'; ?> pages.</div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi/fr" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">À qui s’adresse le badge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Avantages</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Galerie</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="/help">Ressources</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Nous aider</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Télécharger les badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">Pour les entreprises</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Télécharger les badges&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>Mission</h3>
          <p>Les badges Not By AI / Pas par l’IA ont été créés pour encourager les hommes et les femmes à produire des contenus originaux, ainsi que pour aider le public à reconnaître les contenus générés par des humains. L’objectif final est de faire en sorte que l’humanité continue d’avancer.</p>
          <p>D’après une spécialiste de l’IA, 90 % des contenus en ligne pourraient être générés par l’IA en 2025.<sup>1</sup> Avec l’explosion des contenus générés par IA, il est important de rappeler que l’IA est entraînée sur des contenus générés par des hommes et des femmes. Si les humains deviennent dépendants à l’IA pour générer des contenus, ces nouveaux contenus générés par IA se contenteront de recycler des contenus du passé. Cela constituerait un obstacle majeur au progrès humain. 2 Pour que notre espèce continue d’avancer, nous devons limiter la dépendance à l’IA et continuer de créer des œuvres originales.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="AI using human-created content to produce new content">
            <figcaption class="display-6">Ce graphique représente un scénario dans lequel les humains arrêtent de générer de nouvelles œuvres et l’IA réutilise ce qui existe déjà pour produire des contenus sans originalité.</figcaption>
          </figure>
          <p>Rappelons que les technologies d’IA constituent une révolution dans l’histoire de la technologie. Le badge Not By AI / Pas par l’IA n’a pas vocation à décourager toute utilisation de l’IA. Au contraire, il insiste sur le fait que malgré l’exploit qu’elle représente, l’IA doit rester un outil de travail et non se substituer à la création originale. </p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>À qui s’adresse le badge</h3>
          <h4 class="pt-1">La règle des 90 %</h4>
          <p>Nous reconnaissons que la frontière entre ce qui est considéré comme généré par IA ou par l’humain est poreuse. Aussi, si vous estimez qu’<span class="text-decoration-underline">au moins 90 % de vos contenus sont créés par des humains</span>, vous pouvez ajouter les badges sur votre site web, blog, art, film, essai, publication, podcast ou tout autre projet non commercial. Pour une utilisation commerciale, vous devez souscrire à un abonnement. Les 90 % <i>peuvent</i> inclure l’utilisation de l’IA à des fins d’inspiration, pour des documents juridiques annexes comme une politique de confidentialité (tant que vous n’êtes pas fournisseur de contenus ou de services juridiques), pour des contenus non destinés aux utilisateurs finaux (SEO meta tags, code), ou pour rechercher des erreurs d’orthographe ou de grammaire.</p>
          <p>Rappelons enfin que Not By AI / Pas par l’IA n’est pas un outil de détection d’IA ; notre mission s’adresse aux utilisateurs qui souhaitent défendre des pratiques centrées sur l’humain plutôt qu’à ceux qui recherchent la preuve qu’un contenu a été produit par l’humain. Aussi est-ce à vous que revient la responsabilité de suivre la règle des 90 % énoncée ci-dessus.</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>Avantages</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> En tant qu’entreprise</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> En tant que personne</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              En plus de vous envoyer nos célèbres badges Not By AI / Pas par l’IA (une fois votre compte validé), lorsque vous devenez membre, nous vous aidons à créer une page projet qui documente votre processus créatif et votre pratique. Cela permettra à votre public d’en savoir plus sur comment vous avez créé votre contenu sans l’aide de l’IA (ou presque).
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Badges Not By AI / Pas par l’IA</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI projects"></a>
                  <div class="xs text-center pt-2">Page du projet</div>
                </div>
              </div>
              Vous pouvez mettre un lien vers votre page projet dans vos badges. C’est une page cruciale, car elle permet à vos clients, vos prospects et aux internautes de reconnaître que l’effort humain va au-delà de la simple insertion d’un badge. Cela est d’autant plus important lorsqu’une demande professionnelle complexe exige une solution personnalisée de la part d’hommes et de femmes disposant des capacités nécessaires. Avec Not By AI / Pas par l’IA, vous pouvez :
              <ul class="mt-3 ul--checks">
                <li class="mb-1">Mettre en avant vos solutions centrées sur l’humain</li>
                <li class="mb-1">Prouver que vos contenus ne contiennent aucune hallucination d’IA</li>
                <li class="mb-1">Sortir du lot vis-à-vis de la concurrence</li>
                <li class="mb-1">Montrer que vos contenus sont libres de toute infraction aux droits d’auteurs par l’IA</li>
                <li class="mb-1">Établir la fiabilité et la crédibilité de votre marque</li>
              </ul>
              <a href="/app/signup" class="btn mt-2 mb-3">Rejoignez Not By AI / Pas par l’IA</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Sans l’intervention de professionnels formés à cet effet ou l’utilisation de détecteurs d’IA, il est quasi impossible de distinguer votre contenu généré par l’humain d’un contenu généré par IA. Les badges Not By AI / Pas par l’IA aident le grand public à reconnaître que votre approche est humaine avant tout, et qu’il ne s’agit pas d’un simple copié-collé issu d’une IA générative comme ChatGPT, Claude ou Gemini. <div class="mt-3">Plus important encore, en renforçant leur visibilité, cette démarche encourage de plus en plus de personnes à produire des contenus originaux. Cela nous pousse, en tant qu’espèce, à continuer de contribuer de façon collective aux œuvres humaines, et à empêcher que celles-ci soient remplacées par des contenus recyclés produits par l’IA.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Not By AI badges">
                  <div class="xs text-center">Badges Not By AI / Pas par l’IA</div>
                </div>
              </div>
              Nos badges sont 100 % gratuits pour les projets à vocation non commerciale. C’est notre mission de faire connaître le mouvement Not By AI / Pas par l’IA au plus grand nombre. Si vous souhaitez nous aider, vous pouvez opter pour un abonnement payant ou <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">faire un don</a>.</div>
            </div>
          </div>
          <p class="mt-3">Certains sites web, comme celui de <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, ont publié des déclarations pour parvenir à des fins similaires. Toutefois, ces déclarations perdent en visibilité peu après leur publication. Les badges Not By AI / Pas par l’IA font en sorte que le message reste visible en permanence.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>Galerie</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur un site web</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur une œuvre d’art</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur une appli</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur un essai</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur un livre</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur une pochette d’album</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur un article de blog</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Badge sur une peinture</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Afficher plus d’inspirations</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>Nous aider</h3>
          <p>Le mouvement Not By AI / Pas par l’IA a été fondé par de vrais humains. Votre soutien fera toute la différence. <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Faites un don</a> pour donner aux créateurs de contenus les moyens d’avancer et faire en sorte que l’humanité continue d’avancer. Votre don sera utilisé à <a href="/help/where-does-donation-money-go.php" class="text-decoration-underline">différents endroits</a> pour faire grandir Not By AI / Pas par l’IA.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Faire un don</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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