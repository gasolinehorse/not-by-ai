<?php
$pageTitle = 'Not By AI — Add the Badge to Your Human-Created Content';
$pageDes = 'Download and add the Not By AI badge to showcase your AI-free & human-first approach to content creation (writings, art, photos, paintings, videos, and music)';
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
            <h1 id="tagline" class="pt-4 pt-lg-5 mt-md-3 pb-1">Jūsų turinys be DI <br>nusipelno&nbsp;ženklelio</h1>
          </header>
          <p class="display-5">Dirbtinis intelektas (DI) mokomas naudojant žmonių sukurtą turinį. Jei žmonės nustos kurti naują turinį ir pasikliaus tik DI, internetinis turinys visame pasaulyje gali pradėti kartotis ir&nbsp;sustingti.</p>
          <p class="display-5">Jei jūsų turinys nėra generuotas DI, pridėkite ženklelį prie savo&nbsp;kūrinio.</p>
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
                      <img id="example-not-by-ai-badge-artist-wht" width="131" height="42" class="no-download img-fluid pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="/img/painted-by-human-not-by-ai-white.svg" alt="">
                      <img id="example-not-by-ai-badge-artist-blk" width="131" height="42" class="no-download img-fluid d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="/img/painted-by-human-not-by-ai-black.svg" alt="">
                    </div>
                  </div>
                </div>
                <div class="col-12 download-link-wrapper mt-1">
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Atsisiųsti menininko ženklelius</h2>
                  <p class="small mt-2 text-opacity-50">Tinka meno kūriniams, įskaitant skaitmeninį ir tradicinį meną, paveikslus, iliustracijas, komiksus ir daugiau.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Atsisiųsti rašytojo ženklelius</h2>
                  <p class="small mt-2 text-opacity-50">Tinka tinklaraščio įrašams, rašiniams, knygoms, moksliniams tyrimams, kodams ir kitam tekstiniam turiniui.</p>
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
                  <h2 class="h6 py-1 px-md-3 download-link rounded">Atsisiųsti kūrėjo ženklelius</h2>
                  <p class="small mt-2 text-opacity-50">Tinka garso ir vaizdo įrašams, fotografijoms, bendram kūrybiniam požiūriui / filosofijai ir daugiau.</p>
                </div>
              </span>
            </span>
          </div>
        </div>
        <div class="row justify-content-center">
        	<div class="col-lg-8 gx-4 h5 p-3 bg-light rounded-5 mt-2">Esate geroje bendrovėje. Ženkleliai „Not By AI“ rodomi daugiau nei <?php include './all-stats.php'; ?> tūkst. puslapių.</div>
        </div>
      </section>
    </main>
    <div class="pb-5 border-bottom"></div>
    <div id="top-nav-stop-point" class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item ps-2">
            <a class="ps-1" href="https://notbyai.fyi" style="opacity: 1;"><img class="mb-4 img-fluid" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI"></a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black active" id="quick-link-mission" href="#not-by-ai-mission">Misija</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-who" href="#who-can-use-not-by-ai-badge">Kas gali naudoti ženklelį</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-why" href="#why-should-i-use-not-by-ai-badge">Naudos</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-examples" href="#not-by-ai-badge-use-examples">Galerija</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-resources" href="https://notbyai.fyi/help">Ištekliai</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" id="quick-link-support" href="#support-not-by-ai">Palaikyti mus</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Atsisiųsti ženklelius&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
          <li class="nav-item pb-4">
            <a class="for-business-link ms-3 mt-3 rounded-2" style="letter-spacing: -0.15px;" href="https://notbyai.fyi/business">„Not By AI“ verslui</a>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <nav id="mobile-top-bar" class="d-none d-sm-none position-fixed top-0 start-0 end-0 z-3 bg-white border-bottom py-2 px-4 w-100">
          <div class="me-auto"><img class="img-fluid" width="100" src="/img/not-by-ai.svg" alt="Not By AI"></div>
          <div><span id="mobile-top-bar__download" class="text-decoration-underline cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Atsisiųsti ženklelius&nbsp;<img src="/img/download-not-by-ai-badge.svg" alt=""></div>
        </nav>
        <section>
          <div id="not-by-ai-mission" class="py-3"></div>
          <h3>Misija</h3>
          <p>Ženkleliai „Not By AI“ sukurti siekiant paskatinti daugiau žmonių kurti originalų turinį ir padėti auditorijai atpažinti žmonių sugeneruotą turinį. Galutinis tikslas – užtikrinti, kad žmonija ir toliau tobulėtų.</p>
          <p>Eksperto vertinimu, iki 2025 m. 90 procentų internetinio turinio gali būti generuojama DI.<sup>1</sup> Didėjant DI generuojamo turinio bangai, svarbu pažymėti, kad DI yra apmokytas pagal žmogaus sugeneruotą turinį. Jei žmonės, generuodami turinį, ateityje pasikliaus tik DI, bet koks naujas DI sugeneruotas turinys gali būti tik perdirbtas praeities turinys. Tai gali tapti didele kliūtimi žmonijos pažangai.<sup>2</sup> Tik apribojus priklausomybę nuo DI ir toliau kuriant originalų turinį, mes, kaip rūšis, galime judėti į priekį.</p>
          <figure>
            <img class="img-fluid mt-3" srcset="/img/AI-generates-content-using-human-content@2x.png 2x" src="/img/AI-generates-content-using-human-content.png" alt="AI using human-created content to produce new content">
            <figcaption class="display-6">Diagramoje pavaizduotas scenarijus, kai žmonės nustoja generuoti naują turinį, o DI pakartotinai panaudoja jau egzistuojantį turinį, kad sukurtų originalumo neturintį turinį.</figcaption>
          </figure>
          <p>Verta paminėti, kad DI technologijos yra svarbus technologijų istorijos etapas, o ženkleliu „Not By AI“ nesiekiama atgrasyti nuo DI naudojimo. Vietoj to, juo siekiama užtikrinti, kad nors ir švenčiame šį pasiekimą, dirbtume su DI, o ne būtume pakeisti&nbsp;DI.</p>
        </section>
        <section>
          <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
          <h3>Kas gali naudoti ženklelį</h3>
          <h4 class="pt-1">„Not By AI“ 90 % taisyklė</h4>
          <p>Suprasdami, kad riba tarp to, kas laikoma DI ir žmogaus sugeneruotu turiniu, yra neryški, jei manote, kad <span class="text-decoration-underline">bent 90 % jūsų turinio sukūrė žmonės</span>, galite pridėti ženklelius į savo svetainę, tinklaraštį, meno kūrinį, filmą, rašinį, knygą, tinklalaidę ar bet kokį kitą projektą nekomerciniam naudojimui, o užsiprenumeravę – ir komerciniam naudojimui. 90 % gali būti naudojami DI įkvėpimo tikslais, teisiniams dokumentams, tokiems kaip privatumo politika, palaikyti (darant prielaidą, kad teisinis aspektas nėra pagrindinis jūsų turinio ar paslaugos tikslas), su naudotoju nesusijusiam turiniui, tokiam kaip SEO metažymės ar kodas, gramatinių klaidų ir rašybos klaidų paieškai ir turinio vertimui.</p>
          <p>Atkreipkite dėmesį, kad „Not By AI“ nėra DI aptikimo priemonė, mūsų misija pritaikyta naudotojams, kurie savanoriškai nori propaguoti į žmogų orientuotus būdus, o ne tiems, kurie ieško žmogaus sukurto turinio įrodymų. Tai reiškia, kad jūs patys turėtumėte būti atsakingi už pirmiau minėtos „Not By AI“ 90 % taisyklės laikymąsi.</p>
        </section>
        <section>
          <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
          <h3>Naudos</h3>
          <ul class="nav nav-underline" id="myTab" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active fw-normal me-3" id="home-tab" data-bs-toggle="tab" data-bs-target="#business-tab-pane" type="button" role="tab" aria-controls="business-tab-pane" aria-selected="true"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="14" height="14" fill="none"><path stroke="#000" stroke-linecap="round" d="M2 .5h10v13H2V.5Z"/><path stroke="#000" stroke-linecap="round" d="M5 3h4v2H5zM9 7v2H5V7zM5 11h4v2H5zM.5 13.5h13"/></svg> Kaip verslas</button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link fw-normal" id="profile-tab" data-bs-toggle="tab" data-bs-target="#indivisual-tab-pane" type="button" role="tab" aria-controls="indivisual-tab-pane" aria-selected="false"><svg class="mb-1 d-none d-sm-inline-block" xmlns="http://www.w3.org/2000/svg" width="13" height="14" fill="none"><circle cx="6.5" cy="4.5" r="3.5" stroke="#000" stroke-linecap="round"/><path fill="#000" fill-rule="evenodd" d="M4.177 7.118c-.75.411-1.412 1-1.957 1.68C1.162 10.124.5 11.857.5 13.5v.5h12v-.5c0-1.644-.662-3.377-1.72-4.701-.544-.681-1.207-1.27-1.957-1.681a3.5 3.5 0 0 1-1.015.63c.821.312 1.574.903 2.19 1.675.822 1.028 1.362 2.329 1.478 3.577H1.524C1.64 11.752 2.18 10.451 3 9.423c.617-.772 1.37-1.363 2.19-1.676a3.5 3.5 0 0 1-1.014-.63Z" clip-rule="evenodd"/><path stroke="#000" d="M6.5 8v6"/></svg> Kaip asmuo</button>
            </li>
          </ul>
          <div class="tab-content pt-4 pb-4 px-3 bg-light" id="myTabContent">
            <div class="tab-pane fade show active" id="business-tab-pane" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
              Kaip „Not By AI“ narys, be to, kad suteiksime jums mūsų kultinius „Not By AI“ ženklelius (kai jie bus patvirtinti), padėsime jums parengti projekto puslapį, kuriame bus užfiksuotas jūsų kūrybinis procesas ir požiūris. Tai leis jūsų auditorijai sužinoti, kaip iš tikrųjų sukūrėte savo turinį be DI pagalbos arba su labai maža DI pagalba.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Ženkleliai „Not By AI“">
                  <div class="xs text-center">Ženkleliai „Not By AI“</div>
                </div>
                <div class="col-1 px-0 text-center">
                  <div class="h3">+</div>  
                </div>
                <div class="col-5 text-center">
                  <a href="https://notbyai.fyi/hi/not-by-ai/"><img id="not-by-ai-offering-badges" class="img-fluid shadow mt-3 mt-md-0" srcset="/img/sign-up-not-by-ai-pages@2x.png 2x" src="/img/sign-up-not-by-ai-pages.png" alt="Not By AI projects"></a>
                  <div class="xs text-center pt-2">Projekto puslapį</div>
                </div>
              </div>
              Projekto puslapį galima susieti iš jūsų ženklelių. Tai labai svarbus puslapis, kad jūsų klientai, potencialūs klientai ir naudotojai galėtų atpažinti, jog jūsų žmogiškosios pastangos yra daugiau nei tik ženklelio įdėjimas. Tai ypač svarbu, kai verslo problema, kurią jie nori išspręsti, yra sudėtinga ir jai išspręsti reikia pritaikyto apmokytų žmonių sprendimo. Su „Not By AI“ galite:
              <ul class="mt-3 ul--checks">
                <li class="mb-1">išryškinti į žmogų orientuotus sprendimus;</li>
                <li class="mb-1">įrodyti, kad jūsų turinys apsaugotas nuo DI haliucinacijų;</li>
                <li class="mb-1">išsiskirti iš konkurentų;</li>
                <li class="mb-1">parodyti, kad jūsų turinys apsaugotas nuo DI autorinių teisių pažeidimų;</li>
                <li class="mb-1">sukurti pasitikėjimą ir patikimumą savo firminiui ženklui.</li>
              </ul>
              <a href="https://notbyai.fyi/app/signup" class="btn mt-2 mb-3">Jungtis prie mūsų</a>
            </div>
            <div class="tab-pane fade" id="indivisual-tab-pane" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
              Be apmokytų specialistų ar DI aptikėjų beveik neįmanoma atskirti jūsų žmogiškojo turinio nuo DI sugeneruoto turinio. Naudodami ženklelius „Not By AI“ padėsite savo auditorijai atpažinti jūsų žmogiškąjį požiūrį, kad jie suprastų, jog jūsų turinys yra tikrai jūsų, o ne nukopijuotas ir įklijuotas iš generuojančio DI, pavyzdžiui, „ChatGPT“, „Claude“ ar „Gemini“.<div class="mt-3">Dar svarbiau, kad tai didina informuotumą ir skatina daugiau žmonių kurti originalų turinį. Šis procesas užtikrina, kad mes, kaip rūšis, ir toliau kolektyviai prisidėsime prie žmogiškojo turinio kūrimo ir neleisime, kad turinį pakeistų DI sukurtas perdirbtas turinys.
              <div class="row justify-content-center align-items-center mt-2 mb-3 px-3">
                <div class="col-5 text-center">
                  <img id="not-by-ai-offering-badges" class="img-fluid mt-3" srcset="/img/sign-up-not-by-ai-badges@2x.png 2x" src="/img/sign-up-not-by-ai-badges.png" alt="Ženkleliai „Not By AI“">
                  <div class="xs text-center">Ženkleliai „Not By AI“</div>
                </div>
              </div>
              Nekomerciniams projektams ženklelius siūlome 100 % nemokamai. Mūsų misija – kuo plačiau skleisti judėjimą „Not By AI“. Jei norite mus palaikyti, apsvarstykite mūsų mokamas prenumeratas <a href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank" class="text-decoration-underline">arba prisidėkite aukodami</a>.</div>
            </div>
          </div>
          <p class="mt-3">Kai kurios interneto svetainės, pavyzdžiui, <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">„WIRED“</a>, skelbia skelbimus siekdamos panašių tikslų. Tačiau netrukus po paskelbimo šie skelbimai gali būti nebematomi. Su „Not By AI“ ženkleliais galite užtikrinti, kad šie pranešimai būtų nuolat matomi.</p>
        </section>
        <section>
          <div id="not-by-ai-badge-use-examples" class="py-3"></div>
          <h3>Galerija</h3>
          <div class="row pb-4">
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į svetainę</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-footer.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į meno kūrinį</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-artwork@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-artwork.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į programą</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-app@2x.png 2x" src="/img/add-not-by-ai-badge-to-app.png" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į rašinį</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-essay.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į knygą</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-book@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-book.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į albumo viršelį</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-music.jpg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į tinklaraščio straipsnį</h5>
              <img class="img-fluid" src="/img/add-not-by-ai-badge-to-blog.svg" alt="">
            </div>
            <div class="col-6 pt-4 pt-sm-3">
              <h5>Pridėti į paveikslą</h5>
              <img class="img-fluid" srcset="/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="/img/add-not-by-ai-badge-to-art.jpg" alt="">
            </div>           
          </div>
          <p class="text-center"><a href="https://notbyai.fyi/gallery" id="not-by-ai-inspirations" class="h5 text-decoration-underline">Rodyti daugiau įkvėpimų</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);"></p>
        </section>
        <section>
          <div id="support-not-by-ai" class="py-3"></div>
          <h3>Palaikykite mus</h3>
          <p>Visą judėjimą „Not By AI“ kuria tikri žmonės. Jūsų palaikymas turės reikšmės. <a class="text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Paaukokite šiandien</a>, kad suteiktumėte daugiau galimybių turinio kūrėjams ir užtikrintumėte, kad žmonija ir toliau žengtų į priekį. Jūsų aukojimas bus panaudotas <a href="https://notbyai.fyi/help/where-does-donation-money-go.php" class="text-decoration-underline">įvairiose vietose</a>, kad „Not By AI“ augtų.</p>
          <a class="h5 text-decoration-underline" href="https://donate.stripe.com/dR66qd4c22hucOAdQS" target="_blank">Aukoti šiandien</a> <img src="/img/download-not-by-ai-badge.svg" alt="" style="transform: rotate(-90deg);">
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
    <?php include './footer.php'; ?>