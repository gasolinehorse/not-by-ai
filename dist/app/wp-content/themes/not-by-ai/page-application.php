<?php /* Template Name: Application */
get_header();
?>
<style>
  .entry-content {
    padding: 0 !important;
    margin-top: 0 !important;
  }
</style>
  <header class="entry-header d-flex justify-content-between align-items-center py-3 px-2 px-lg-5">
    <a href="https://notbyai.fyi/app/"><img width="128.5" height="26.77" src="https://notbyai.fyi/img/not-by-ai.svg" alt="Not By AI"></a>
    <div class="dropdown d-flex align-items-center">
      <div class="pe-3">
        <a href="https://notbyai.fyi/app/"><div type="button" class="btn-close" aria-label="Close"></div></a>
      </div>
    </div>
  </header><!-- .entry-header -->
  <main>
    <div id="forms" class="application pb-5">
      <div class="row justify-content-center px-4 px-lg-0 text-start px-2 px-lg-5">
        <div id="application-form-wrapper" class="col-md-6 overflow-y-scroll custom-scrollbar pt-4 pe-lg-5" style="height: calc(100vh - 70px);">
          <header>
            <h1 class="h5 pt-2">Complete this form to request your Creator Page.</h1>
          </header>
          <?php
          while ( have_posts() ) :
            the_post();
      
            get_template_part( 'template-parts/content', 'page' );
      
          endwhile; // End of the loop.
          ?>
        </div>
        <div class="col-md-6 overflow-y-scroll overflow-x-hidden custom-scrollbar d-none d-md-block bg-light py-4" style="height: calc(100vh - 70px);">
          <div class="d-flex justify-content-between align-items-center">
            <h2 class="h5 opacity-50 pt-2 ps-4">Preview</h2>
            <p class="xs mb-0 opacity-25">For reference only. Not all fields are reflected.</p>
          </div>
          <div id="formPreview" class="browser mt-4 pe-none bg-white" style="zoom: 0.5; transform: translateX(5%);">
            <div>
              <div class="px-2" style="background-color: #F3F1EE;">
                <svg xmlns="http://www.w3.org/2000/svg" width="27" height="5" fill="none"><circle cx="2.5" cy="2.5" r="2.5" fill="#D9D9D9"/><circle cx="13.5" cy="2.5" r="2.5" fill="#D9D9D9"/><circle cx="24.5" cy="2.5" r="2.5" fill="#D9D9D9"/></svg>
              </div>
              <div class="text-center bg-white">
                <img class="my-2" width="128.5" height="26.77" src="/img/not-by-ai.svg" alt="Not By AI">
              </div>
              <div class="row mx-0 no-md-bg justify-content-center text-start pt-1 pb-3 mb-3 bg-light" style="background-image: url(/img/creator-profile-on-not-by-ai.svg); background-position: bottom right; background-repeat: no-repeat;">
                <div class="col-md-11 pt-1">
                  <div class="row position-relative z-1">
                    <div class="col">
                      <small class="xs"><a href="https://notbyai.fyi" class="text-decoration-underline">Home</a> <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> Creations <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> <span class="previewProjectName"><span class="blur-placeholder">Not By AI</span></span></small>
                    </div>
                  </div>
                  <div class="row justify-content-center pt-4 mt-2 pb-md-4 pb-xl-2">
                    <div class="col-1 pe-1">
                      <img class="img-fluid" alt="" src="/img/not-by-ai-quote.svg">
                    </div>
                    <div class="col-11 col-md-9">
                      <h1 class="display-7 pt-2"><span class="previewCreatedBy"><span class="blur-placeholder">Not By AI</span></span> affirms that the applicable content of <span class="previewProjectName"><span class="blur-placeholder">Not By AI</span></span> is majorly or entirely created by one or more humans. It adheres to the Not By AI 90% Rule and has undergone human review.<sup style="font-size: 50%;">1</sup></h1>
                    </div>
                  </div>
                  <div class="row justify-content-start">
                    <div class="col-1"></div>
                    <div class="col-3 col-sm-auto border-md-top">
                      <img width="85" class="border rounded img-fluid position-relative z-1 mt-md-2 mt-lg-3" src="https://notbyai.fyi/app/wp-content/themes/not-by-ai/img/not-by-ai-logo-mark-sample.png" alt="logo">
                    </div>
                    <div class="col-8 col-md-4 col-lg-6 col-xl-8 border-md-top pt-1">
                      <h2 class="h2 mb-0 mt-md-2 mt-lg-3 lh-sm"><span class="previewProjectName"><span class="blur-placeholder">Not By AI</span></span> <svg class="mb-1 mb-md-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path fill="#007CE4" fill-rule="evenodd" d="m9.545 18.48-1.45.885a1.781 1.781 0 0 1-2.616-.952l-.543-1.61a.871.871 0 0 0-.695-.584l-1.68-.254a1.782 1.782 0 0 1-1.392-2.412l.62-1.582a.871.871 0 0 0-.158-.894L.507 9.803A1.782 1.782 0 0 1 .991 7.06l1.492-.814a.872.872 0 0 0 .454-.786l-.042-1.699a1.782 1.782 0 0 1 2.133-1.79l1.666.336c.32.065.65-.055.853-.31L8.607.67a1.782 1.782 0 0 1 2.784 0l1.06 1.328a.872.872 0 0 0 .854.31l1.665-.335a1.781 1.781 0 0 1 2.133 1.79l-.041 1.698a.872.872 0 0 0 .454.786l1.492.814a1.782 1.782 0 0 1 .483 2.742l-1.123 1.274a.871.871 0 0 0-.158.894l.62 1.582a1.782 1.782 0 0 1-1.392 2.412l-1.68.254a.871.871 0 0 0-.696.583l-.542 1.61a1.782 1.782 0 0 1-2.616.953l-1.45-.885a.872.872 0 0 0-.909 0Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="m15.083 8.685-5.982 5.983-4.185-4.185 1.506-1.506 2.679 2.678 4.476-4.476 1.506 1.506Z" clip-rule="evenodd"/></svg></h2>
                      <small class="xs d-block">By <span class="previewCreatedBy"><span class="blur-placeholder">Not By AI</span></span></small>
                    </div>
                  </div>
                </div>
              </div>
              <div class="row justify-content-center">
                <div class="col-md-6 text-start px-4 px-lg-0 order-md-3">
                  <section class="pb-3 pb-lg-4">
                    <h3 class="pt-4">About <span class="previewProjectName"><span class="blur-placeholder">Not By AI</span></span></h3>
                    <span id="previewMessage"><p class="blur-placeholder">As the forerunner of the Not By AI movement, we believe that significant human input is essential to ignite and grow it. As a result, we are committed to refraining from using AI for content creation. We work in an agile environment and constantly push new ideas live and refine our approach. Copy is often typed into Notes on an phone, jotted down on paper as bullet lists, or entered directly to the website. The translation of the badges is assisted by humans from all over the world. All graphics and design work are created using Figma, Sketch, and Photoshop by our designer. Just like our web content, all of our social media posts are handcrafted by humans for humans. While we found AI helpful for miscellaneous tasks such as copy-proofing, it lacks the ability to come up with innovative ideas. To execute Not By AI, being innovative is crucial. </p>
                   <p class="mb-0 blur-placeholder">While producing a large amount of content without the help of AI is challenging, we remain committed to our human-centric approach. Producing content by humans is our nonnegotiable core value. </p></span>
                  </section>
                  <section class="p-3 position-relative bg-light overflow-auto">
                    <div class="">
                      <h5 class="d-xxl-inline me-3">Applicable badge(s):</h5>
                      <span class="previewArtistBadge blur-placeholder"><img class="me-3 my-2 d-inline-block" src="/img/painted-by-human-not-by-ai-white.svg" alt="Painted by Human, Not By AI"></span>
                      <span class="previewWriterBadge blur-placeholder"><img class="me-3 my-2 d-inline-block" src="/img/written-by-human-not-by-ai-white.svg" alt="Written by Human, Not By AI"></span>
                      <span class="previewProducerBadge blur-placeholder"><img class="me-3 my-2 d-inline-block" src="/img/produced-by-human-not-by-ai-white.svg" alt="Produced by Human, Not By AI"></span>
                    </div>
                  </section>
                  <section id="support-assets">
                    <div class="h3 pt-5">Support Assets</div>
                    <div class="row py-3 align-items-center text-center">
                      <div class="col-6 col-lg-3">
                        <img class="img-fluid mb-2 border rounded-2" src="/img/idkwicsyf/sample-photo.jpg" alt="">
                        <p class="mb-0"><a href="#" class="small text-decoration-underline opacity-25">Draft</a></p>
                      </div>
                      <div class="col-6 col-lg-3">
                        <img class="img-fluid mb-2 border rounded-2" src="/img/idkwicsyf/sample-photo.jpg" alt="">
                        <p class="mb-0"><a href="#" class="small text-decoration-underline opacity-25">Mood board</a></p>
                      </div>
                    </div>
                  </section>
                  <ol class="source pt-5 mt-lg-5 pb-3">
                    <li>
                      <cite>The use of the Not By AI badges and the human review process do not guarantee that the content is not majorly created by AI, we are dedicated to enhancing our verification process and credibility.</cite>
                    </li>
                  </ol>
                </div>
                <div class="col-md-1 border-start order-2" style="transform: translateX(40px);"></div>
                <aside class="col-md-3 col-xl-2 text-start px-4 px-md-0 order-md-1">
                  <div class="nav flex-column position-sticky top-0 pt-md-2 creator-profile">
                    <div class="row pb-3">
                      <div class="col">
                        <div class="h5 pb-1 pt-3">Project Details</div>
                        <div class="pb-1 pb-md-3 pt-2">
                          <div class="creator-profile__label">
                            Industry
                          </div>
                          <div class="creator-profile__field">
                            <span id="previewIndustry"><span class="blur-placeholder">Information Services</span></span>
                          </div>
                        </div>
                        <div class="pb-1 pb-md-3 pt-2">
                          <div class="creator-profile__label">
                            Location
                          </div>
                          <div class="creator-profile__field">
                             <span id="previewLocation"><span class="blur-placeholder">Philadelphia, USA</span></span>
                          </div>
                        </div>
                        <div class="pb-1 pb-md-3 pt-2">
                          <div class="creator-profile__label">
                            Applicable Content
                          </div>
                          <div class="creator-profile__field">
                            <ul class="mb-0 ps-2">
                              <li class="previewArtistBadge w-100 blur-placeholder">- Art</li>
                              <li class="previewWriterBadge w-100 blur-placeholder">- Writing</li>
                              <li class="previewProducerBadge w-100 blur-placeholder">- Production/General</li>
                            </ul>
                          </div>
                        </div>  
                        <div class="pb-1 pb-md-3 pt-2">
                          <div class="creator-profile__label">
                            IA Use Is Limited to 
                          </div>
                          <div class="creator-profile__field">
                            <ul class="mb-0 ps-2">
                              <li id="previewLimitResearch" style="display: none;">- Research</li>
                              <li id="previewLimitInspiration" style="display: none;">- Inspiration</li>
                              <li id="previewLimitProofing" style="display: none;">- Copy Editing and/or Proofreading</li>
                              <li id="previewLimitNone" style="display: none;">- None</li>
                            </ul>
                          </div>
                        </div>
                        <div class="pb-1 pb-md-3 pt-2">
                          <div class="creator-profile__label">
                            Website
                          </div>
                          <div class="creator-profile__field">
                            <a class="text-decoration-underline" href="#" target="_blank"><span id="previewWebsite"><span class="blur-placeholder">notbyai.fyi</span></span></a>
                          </div>
                        </div>
                        <div class="pb-3 pt-3">
                          <div class="xs opacity-50 lh-sm">
                            A Not By AI Project since <?php echo date('F j, Y'); ?>
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </aside>
              </div>
              <div class="row">
                <div class="position-relative overflow-hidden w-100 mt-5 pt-4 border-bottom">
                  <div class="xs bg-white position-absolute z-1 bottom-0 start-50 translate-middle-x px-2 py-1 mb-3">Show your creativity with the Not By AI badges. <a href="#" class="text-decoration-underline">Download free</a> <img src="/img/download-not-by-ai-badge.svg" alt=""></div>
                  <div class="sliding-background-l position-relative z-0"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
  <script type="text/javascript">
    document.addEventListener('DOMContentLoaded', function () {
      var hint = document.querySelectorAll('body main .wpuf-info');
      hint.forEach(function(hint) {
        if (hint.textContent.trim() === 'Post Limit Exceeded for your purchased subscription pack.') {
          window.location.replace("https://notbyai.fyi/app/?section=submit-post");
        }
        if (hint.textContent.trim() === 'You must purchase a subscription package before posting') {
          window.location.replace("https://notbyai.fyi/app/?section=submit-post");
        }
      });
      function updateTextInput(inputName, previewClass) {
        var inputs = document.querySelectorAll(`[name="${inputName}"]`);
        var previews = document.querySelectorAll(previewClass);

        inputs.forEach(function(input) {
          input.addEventListener('input', function() {
            var formattedValue = input.value.replace(/\n/g, '<br>');
            previews.forEach(function(preview) {
              preview.innerHTML = formattedValue;
              preview.classList.add('preview-loading');
              setTimeout(function() {
                preview.classList.remove('preview-loading');
              }, 2000);
            });
          });
        });
      }
      function updateSelectInput(inputName, previewId) {
        var input = document.querySelector(`[name="${inputName}"]`);
        var preview = document.querySelector(previewId);
        input.addEventListener('change', function () {
          preview.textContent = input.options[input.selectedIndex].text;
        });
      }
      function updateCheckboxInput(inputValue, correspondingDivClass) {
        const inputs = document.querySelectorAll(`input[value="${inputValue}"]`);
        const correspondingDivs = document.querySelectorAll(correspondingDivClass);
      
        inputs.forEach(function(input) {
          input.addEventListener('change', function() {
            correspondingDivs.forEach(function(div) {
              if (input.checked) {
                div.style.display = 'inline-block';
                div.style.filter = 'blur(0px)';
                div.style.opacity = '1';
              } else {
                div.style.display = 'none';
              }
            });
          });
        });
      }
      updateTextInput('post_title', '.previewProjectName');
      updateTextInput('website', '#previewWebsite');
      updateTextInput('created_by', '.previewCreatedBy');
      updateTextInput('location', '#previewLocation');
      updateTextInput('textarea', '#previewMessage');
      updateSelectInput('industry', '#previewIndustry');
      updateCheckboxInput('the_artist_badge', '.previewArtistBadge');
      updateCheckboxInput('the_writer_badge', '.previewWriterBadge');
      updateCheckboxInput('the_producer/generalist_badge', '.previewProducerBadge');
      updateCheckboxInput('the_artist_badge', '.previewArtistBadge');
      updateCheckboxInput('the_writer_badge', '.previewWriterBadge');
      updateCheckboxInput('the_producer/generalist_badge', '.previewProducerBadge');
      updateCheckboxInput('research', '#previewLimitResearch');
      updateCheckboxInput('inspiration', '#previewLimitInspiration');
      updateCheckboxInput('copy_editing_and/or_proofreading', '#previewLimitProofing');
      updateCheckboxInput('none', '#previewLimitNone');
    });
    document.addEventListener('DOMContentLoaded', function() {
      let isFirstClick = true;
      function handleBadgeClick(previewClass) {
        if (isFirstClick) {
          document.querySelectorAll('.previewArtistBadge, .previewWriterBadge, .previewProducerBadge').forEach(function(div) {
            div.style.display = 'none';
          });
          document.querySelector(previewClass).style.display = 'block';
          isFirstClick = false;
        }
      }
      document.querySelector('#artistBadge').addEventListener('click', function() {
        handleBadgeClick('.previewArtistBadge');
      });
      document.querySelector('#writerBadge').addEventListener('click', function() {
        handleBadgeClick('.previewWriterBadge');
      });
      document.querySelector('#producerBadge').addEventListener('click', function() {
        handleBadgeClick('.previewProducerBadge');
      });
    });
    document.addEventListener('DOMContentLoaded', (event) => {
      const formContainer = document.getElementById('application-form-wrapper');
      if (formContainer.scrollHeight > formContainer.clientHeight) {
        const scrollAmount = 300;
        setTimeout(() => {
          formContainer.scrollBy({ top: scrollAmount, behavior: 'smooth' });
          setTimeout(() => {
            formContainer.scrollBy({ top: -scrollAmount, behavior: 'smooth' });
          }, 1000);
        }, 2000); 
      }
    });
  </script>
<footer class="entry-footer">
  <?php wp_footer(); ?>
  <?php get_footer(); ?>
</footer>