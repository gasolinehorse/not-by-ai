<?php
$pageTitle = $project_name . ' Not By AI';
$pageDes = 'Download and add the Not By AI badge to showcase your AI-free & human-first approach to content creation (writings, art, photos, paintings, videos, and music)';
include '../../header.php';
include '../../top-nav.php';
?>
    <main>
      <header class="row no-md-bg justify-content-center text-start pt-1 pb-3 mb-3 mb-md-5 bg-light" style="background-image: url(/img/creator-profile-on-not-by-ai.svg); background-position: bottom right; background-repeat: no-repeat;">
        <div class="col-md-11 col-xl-8 pt-1">
          <div class="row position-relative z-1">
            <div class="col">
              <small class="xs"><a href="https://notbyai.fyi" class="text-decoration-underline">Home</a> <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> Creations <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> <?php echo $project_name; ?></small>
            </div>
          </div>
          <div class="row justify-content-center pt-5 pb-md-4 pb-xl-2">
            <div class="col-1 pe-1">
              <img class="img-fluid" alt="" src="/img/not-by-ai-quote.svg">
            </div>
            <div class="col-11 col-md-9 pb-3 pb-md-0 pb-xl-2">
              <h1 class="display-7"><?php echo $project_author; ?> affirms that the applicable content of <?php echo $project_name; ?> is majorly or entirely created by one or more humans. It adheres to the <a href="https://notbyai.fyi/help/what-is-the-not-by-ai-90-rule">Not By AI 90% Rule</a> and has undergone human review.<sup style="font-size: 50%;">1</sup></h1>
            </div>
          </div>
          <div class="row justify-content-start pt-2 pb-3 py-md-4">
            <div class="col-1"></div>
            <div class="col-3 col-sm-auto border-md-top pt-md-4 pt-lg-4 pb-xl-2">
              <img width="85" class="border rounded img-fluid position-relative z-1 mt-md-2 mt-lg-3" src="<?php echo dirname($_SERVER['PHP_SELF']); ?>/img/logo.png" alt="logo">
            </div>
            <div class="col-8 col-md-4 col-lg-6 col-xl-8 border-md-top pt-1 pt-md-4 pt-lg-4 pb-xl-2">
              <h2 class="h2 mb-0 mt-md-2 mt-lg-3 lh-sm"><?php echo $project_name; ?> <svg class="mb-1 mb-md-0" xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none"><path fill="#007CE4" fill-rule="evenodd" d="m9.545 18.48-1.45.885a1.781 1.781 0 0 1-2.616-.952l-.543-1.61a.871.871 0 0 0-.695-.584l-1.68-.254a1.782 1.782 0 0 1-1.392-2.412l.62-1.582a.871.871 0 0 0-.158-.894L.507 9.803A1.782 1.782 0 0 1 .991 7.06l1.492-.814a.872.872 0 0 0 .454-.786l-.042-1.699a1.782 1.782 0 0 1 2.133-1.79l1.666.336c.32.065.65-.055.853-.31L8.607.67a1.782 1.782 0 0 1 2.784 0l1.06 1.328a.872.872 0 0 0 .854.31l1.665-.335a1.781 1.781 0 0 1 2.133 1.79l-.041 1.698a.872.872 0 0 0 .454.786l1.492.814a1.782 1.782 0 0 1 .483 2.742l-1.123 1.274a.871.871 0 0 0-.158.894l.62 1.582a1.782 1.782 0 0 1-1.392 2.412l-1.68.254a.871.871 0 0 0-.696.583l-.542 1.61a1.782 1.782 0 0 1-2.616.953l-1.45-.885a.872.872 0 0 0-.909 0Z" clip-rule="evenodd"/><path fill="#fff" fill-rule="evenodd" d="m15.083 8.685-5.982 5.983-4.185-4.185 1.506-1.506 2.679 2.678 4.476-4.476 1.506 1.506Z" clip-rule="evenodd"/></svg></h2>
              <small class="xs d-block">By <?php echo $project_author; ?></small>
            </div>
          </div>
        </div>
      </header>
      <div class="row justify-content-center">
        <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 order-md-3">
          <section class="pb-3 pb-lg-4">
            <h3 class="pt-4">About <?php echo $project_name; ?></h3>
            <p class="mb-2"><?php echo $project_about; ?></p>
          </section>
          <section class="p-4 px-md-5 py-md-4 position-relative bg-light overflow-auto">
            <div class="py-md-2">
              <h5 class="d-xxl-inline me-3">Applicable badge(s):</h5>
              <div class="d-block d-md-inline-block">
                <img style="display: none;" class="me-3 my-2 <?php echo $project_badge_art; ?>" src="/img/painted-by-human-not-by-ai-white.svg" alt="Painted by Human, Not By AI">
                <img style="display: none;" class="me-3 my-2 <?php echo $project_badge_writing; ?>" src="/img/written-by-human-not-by-ai-white.svg" alt="Written by Human, Not By AI">
                <img style="display: none;" class="me-3 my-2 <?php echo $project_badge_production; ?>" src="/img/produced-by-human-not-by-ai-white.svg" alt="Produced by Human, Not By AI">
              </div>
            </div>
          </section>
          <section id="support-assets">
            <?php echo $project_assets; ?>
          </section>
          <ol class="source pt-5 mt-lg-5 pb-3">
            <li>
              <cite>The use of the Not By AI badges and the human review process do not guarantee that the content is not majorly created by AI, we are dedicated to enhancing our verification process and credibility.</cite>
            </li>
          </ol>
        </div>
        <div class="col-md-1 border-start order-2" style="transform: translateX(40px);"></div>
        <aside class="col-md-3 col-xl-2 text-start px-4 px-md-0 order-md-1">
          <div class="nav flex-column position-sticky top-0 pt-md-3 pe-md-4 creator-profile">
            <div class="row pb-3 px-2 mb-3">
              <div class="col">
                <div class="h5 pb-1 pt-3">Project Details</div>
                <div class="pb-1 pb-md-3 pt-2">
                  <div class="creator-profile__label">
                    Industry
                  </div>
                  <div class="creator-profile__field">
                    <?php echo $project_category; ?>
                  </div>
                </div>
                <div class="pb-1 pb-md-3 pt-2">
                  <div class="creator-profile__label">
                    Location
                  </div>
                  <div class="creator-profile__field">
                    <?php echo $project_location; ?>
                  </div>
                </div>
                <div class="pb-1 pb-md-3 pt-2">
                  <div class="creator-profile__label">
                    Applicable Content
                  </div>
                  <div class="creator-profile__field">
                    <ul class="mb-0">
                      <li style="display: none;" class="<?php echo $project_badge_art; ?> mt-1 lh-sm">Art</li>
                      <li style="display: none;" class="<?php echo $project_badge_writing; ?> mt-1 lh-sm">Writing</li>
                      <li style="display: none;" class="<?php echo $project_badge_production; ?> mt-1 lh-sm">Production/General</li>
                    </ul>
                  </div>
                </div>  
                <div class="pb-1 pb-md-3 pt-2">
                  <div class="creator-profile__label">
                    IA Use Is Limited to 
                  </div>
                  <div class="creator-profile__field">
                    <ul class="mb-0">
                      <li style="display: none;" class="<?php echo $project_use_research ?> mt-1 lh-sm">Research</li>
                      <li style="display: none;" class="<?php echo $project_use_inspiration ?> mt-1 lh-sm">Inspiration</li>
                      <li style="display: none;" class="<?php echo $project_use_proofing ?> mt-1 lh-sm">Copy Editing and/or Proofreading</li>
                      <li style="display: none;" class="<?php echo $project_use_none ?> mt-1 lh-sm">None</li>
                    </ul>
                  </div>
                </div>
                <div class="pb-1 pb-md-3 pt-2">
                  <div class="creator-profile__label">
                    Website
                  </div>
                  <div class="creator-profile__field">
                    <a class="text-decoration-underline" href="https://<?php echo $project_url; ?>" target="_blank"><?php echo $project_url; ?></a>
                  </div>
                </div>
                <div class="pb-3 pt-3">
                  <div class="xs opacity-50 lh-sm">
                    A Not By AI Project since <?php echo $project_date; ?>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
      <div class="row">
        <div class="position-relative overflow-hidden w-100 mt-5 pt-4 border-bottom">
          <div class="xs bg-white position-absolute z-1 bottom-0 start-50 translate-middle-x px-2 py-1 mb-3 rounded-2">Show your creativity with the Not By AI badges. <a href="https://notbyai.fyi" class="text-decoration-underline">Download free</a> <img src="/img/download-not-by-ai-badge.svg" alt=""></div>
          <div class="sliding-background-l position-relative z-0"></div>
        </div>
      </div>
    </main>
    <?php include '../../footer.php'; ?>