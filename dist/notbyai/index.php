<?php
get_header();
?>
  <div class="container-fluid bg-white text-center curve">
    <div class="row">
      <div class="col-6 col-sm-4 text-start mt-sm-2 pt-2 ps-4 pt-sm-3 ps-sm-4 share order-sm-1">
        <a href="https://twitter.com/NotByAIBadge" target="_blank"><img class="mx-1 opacity-50" src="<?php echo get_stylesheet_directory_uri(); ?>/img/twitter.svg" alt="Follow us on Twitter"></a>
        <a href="https://facebook.com/notbyai" target="_blank"><img class="mx-1 opacity-50" src="<?php echo get_stylesheet_directory_uri(); ?>/img/facebook.svg" alt="Follow us on Facebook"></a>
        <a href="https://www.linkedin.com/company/notbyai/" target="_blank"><img width="16" class="mx-1 opacity-50" src="<?php echo get_stylesheet_directory_uri(); ?>/img/linkedin.svg" alt="Follow us on Linkedin"></a>
        <a href="mailto:?subject=Not By AI&amp;body=Download the Not By AI badge from https://notbyai.fyi." title="Share by Email" target="_blank"><img class="mx-1 mt-1 opacity-50" src="<?php echo get_stylesheet_directory_uri(); ?>/img/forward.svg" alt="Share via email"></a>
      </div>
      <div class="col-6 col-sm-4 text-end mt-sm-2 pt-2 pt-sm-3 order-sm-3">
        <span class="small opacity-50 pe-4 pe-sm-5 me-sm-3 cursor-pointer" data-bs-toggle="modal" data-bs-target="#donate" target="_blank">Support Us</span>
      </div>
      <div class="col-sm-4 text-center order-sm-2">
        <img class="mt-4 mb-5" width="128.5" height="26.77" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai.svg" alt="Not By AI">
      </div>
    </div>
    <main class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 col-xl-7 col-xxl-6">
        <header>
          <h1 id="tagline" class="pt-md-5 mt-md-3 pb-1">Your AI-free Content Deserves a&nbsp;Badge</h1>
        </header>
      </div>
      <div class="col-lg-9">
        <p class="display-5">Artificial Intelligence (AI) is trained using human-created content. If humans stop producing new content and rely solely on AI, online content across the world may run the risk of becoming repetitive and&nbsp;stagnant.</p>
        <p class="display-5">If your content is not AI-generated, add the badge to your work, with&nbsp;pride.</p>
      </div>
    </main>
    <div class="mx-auto px-5 px-sm-4 px-xl-0 pt-5" style="max-width: 1052px;">
      <div class="row justify-content-center gx-4">
        <div class="col-sm-4 pb-4">
          <span id="artist-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
            <span class="row">
              <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                  <img class="position-static z-1 w-100 ai-folder px-xl-1" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai-folder.svg" alt="">
                  <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ai-art.svg" alt="">
                  <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-sample-wrapper">
                    <img width="131" height="42" class="img-fluid badget-grab pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/painted-by-human-not-by-ai-white.svg" alt="">
                    <img width="131" height="42" class="img-fluid badget-grab d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/painted-by-human-not-by-ai-black.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-12 download-link-wrapper mt-1">
                <h2 class="h6 py-2 px-md-3 download-link d-inline rounded">Download the artist badge</h2>
                <p class="small mt-2 opacity-50">Good for artwork, including digital and traditional art, paintings, illustrations, comics, and more.</p>
              </div>
            </span>
          </span>
        </div>
        <div class="col-sm-4 pb-4">
          <span id="writer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
            <span class="row">
              <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                  <img class="position-static z-1 w-100 ai-folder px-xl-1" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai-folder.svg" alt="">
                  <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ai-article.svg" alt="">
                  <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-sample-wrapper">
                    <img width="131" height="42" class="img-fluid badget-grab pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/written-by-human-not-by-ai-white.svg" alt="">
                    <img width="131" height="42" class="img-fluid badget-grab d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/written-by-human-not-by-ai-black.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-12 download-link-wrapper mt-1">
                <h2 class="h6 py-2 px-md-3 download-link d-inline rounded">Download the writer badge</h2>
                <p class="small mt-2 opacity-50">Good for blog posts, essays, books, research, code, and other text-based content</p>
              </div>
            </span>
          </span>
        </div>
        <div class="col-sm-4 pb-4">
          <span id="producer-badge" class="d-block cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">
            <span class="row">
              <div class="col-12 not-by-ai-folder-wrapper rounded px-2 px-xl-3 pt-3 pb-2">
                <div class="not-by-ai-folder fade-in-move-up position-relative pb-1">
                  <img class="position-static z-1 w-100 ai-folder px-xl-1" src="<?php echo get_stylesheet_directory_uri(); ?>/img/not-by-ai-folder.svg" alt="">
                  <img class="img-fluid position-absolute top-50 start-50 translate-middle z-2 img-fluid d-none d-lg-block" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ai-music.svg" alt="">
                  <div class="position-absolute bottom-0 z-3 w-100 pb-2 pb-mb-3 pb-lg-4 d-flex flex-column flex-lg-row align-items-center justify-content-evenly not-by-ai-badge-sample-wrapper">
                    <img width="131" height="42" class="img-fluid badget-grab pb-3 pb-sm-4 pb-md-3 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/produced-by-human-not-by-ai-white.svg" alt="">
                    <img width="131" height="42" class="img-fluid badget-grab d-block d-sm-none d-md-inline-block pb-3 pb-md-2 pb-lg-0" src="<?php echo get_stylesheet_directory_uri(); ?>/img/produced-by-human-not-by-ai-black.svg" alt="">
                  </div>
                </div>
              </div>
              <div class="col-12 download-link-wrapper mt-1">
                <h2 class="h6 py-2 px-md-3 download-link d-inline rounded">Download the producer badge</h2>
                <p class="small mt-2 opacity-50">Good for audio, video, photography, overall creative approach/philosophy, and more</p>
              </div>
            </span>
          </span>
        </div>
      </div>
    </div>
    <div class="pb-5 border-bottom"></div>
    <div class="row justify-content-center">
      <nav class="col-md-3 col-xl-2 text-start pt-5 d-none d-md-block">
        <ul class="nav flex-column position-sticky top-0 pt-5">
          <li class="nav-item">
            <a class="nav-link text-black active" href="#not-by-ai-mission">Mission</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#who-can-use-not-by-ai-badge">Who Can Use the Badge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#which-not-by-ai-badge-should-i-use">Which Badge Should I Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#not-by-ai-badge-use-examples">Examples</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#why-should-i-use-not-by-ai-badge">Why Should I Use the Badge</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#not-by-ai-bdage-guidelines">Badge Use</a>
          </li>
          <li class="nav-item">
            <a class="nav-link text-black" href="#legal-effect-of-not-by-ai-badge">Legal Effect</a>
          </li>
          <li class="nav-item">
            <span id="side-download" class="nav-link text-black text-decoration-underline mt-5 cursor-pointer" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download the Badge&nbsp;<img src="<?php echo get_stylesheet_directory_uri(); ?>/img/download-not-by-ai-badge.svg" alt=""></span>
          </li>
        </ul>
      </nav>
      <div class="col-md-1 border-start"></div>
      <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-5">
        <div id="not-by-ai-mission" class="py-3"></div>
        <h3>Mission</h3>
        <p>The Not By AI badge is created to encourage more humans to produce original content and help users identify human-generated content. The Ultimate goal is make sure humanity continues to advance.</p>
        <p>An expert estimates that 90 percent of online content could be generated by AI by 2025.<sup>1</sup> With the surge in AI-generated content, it is important to note that AI is trained on human-generated content. If humans rely solely on AI to generate content moving forward, any new content generated by AI may just be recycled content from the past. This could pose a major obstacle to human advancement. Only by limiting the reliance on AI and continue to create original content can propel us forward as a species.</p>
        <figure>
          <img class="img-fluid mb-3" src="<?php echo get_stylesheet_directory_uri(); ?>/img/ai-generates-content-using-human-content.svg" alt="AI using human-created content to produce new content">
          <figcaption class="display-6">The chart represents a scenario in which humans stop generating new content and AI reuses pre-existing content to produce new content.</figcaption>
        </figure>
        <p>It is worth mentioning that AI technologies mark a major milestone in the history of technology and the Not By AI badge is not designed to discourage the use of AI. Instead, it is to make sure that, while we celebrate the achievement, we work with AI instead of being replaced by&nbsp;AI.</p>
        <div id="who-can-use-not-by-ai-badge" class="py-3"></div>
        <h3>Who Can Use the Badge</h3>
        <p>Understanding that there is a blurred line between what is considered AI-generated vs human-generated, if you are a content creator, such as a writer, researcher, artist, music producer, sound designer, or filmmaker, and you estimate that <span class="text-decoration-underline">at least 90% of your content is created by humans</span>, you are eligible to add the badge into your website, blog, essay, publications, resume, or whatever your project is. The 90% <i>can</i> include using AI for inspiration purposes, to look for grammatical errors and typos, and to translate content.</p>
        <div id="which-not-by-ai-badge-should-i-use" class="py-3"></div>
        <h3>Which Badge Should I Use</h3>
        <ul>
          <li class="pb-2"><h4 class="fw-bold fs-6 d-inline">When to use the Painted By Human, Not By AI badge: </h4><br>
          Use this badge if your artwork, including digital and traditional art, contains less than 10% of AI output. </li>
          <li class="pb-2"><h4 class="fw-bold fs-6 d-inline">When to use the Written By Human, Not By AI badge: </h4><br>
          Use this badge if your article, including blog posts, essays, research, emails, and other text-based content, contains less than 10% of AI output. </li>
          <li class="pb-2"><h4 class="fw-bold fs-6 d-inline">When to use the Produced By Human, Not By AI badge: </h4><br>
          Use this badge if your audio (music, vocal, sound effects, voice over, and other sounds) or video (films, movies, TikTok/YouTube/Instagram and other social clips, tutorials, and other video-based content) contains less than 10% of AI output. </li>
        </ul>
        <p><span class="text-decoration-underline">If you want to indicate that your overall content, which could include images, text, and audio, follows the 90% rule mentioned above, use the Produced By Human, Not By AI badge to accommodate all.</span> Alternatively, you may opt to display all relevant badges.</p>
        <div id="not-by-ai-badge-use-examples" class="py-3"></div>
        <h3>Examples</h3>
        <div class="row pb-4">
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to a website</h5>
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-footer.svg" alt="">
          </div>
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to a blog article</h5>
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-blog.svg" alt="">
          </div>
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to an essay</h5>
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-essay.svg" alt="">
          </div>
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to an artwork</h5>
            <img class="img-fluid" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-art@2x.jpg 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-art.jpg" alt="">
          </div>
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to an album cover or a musician profile</h5>
            <img class="img-fluid" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-music@2x.jpg 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-music.jpg" alt="">
          </div>
          <div class="col-sm-6 pt-4 pt-sm-3">
            <h5>Add to a resume or a business card</h5>
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/add-not-by-ai-badge-to-business.svg" alt="">
          </div>
        </div>
        <div id="why-should-i-use-not-by-ai-badge" class="py-3"></div>
        <h3>Why Should I Use the Badge</h3>
        <p>You should add the badge to your work because it helps your audience recognize your human-first approach, which, in turn, fosters awareness and encourages more individuals to produce new and original content. This process makes sure we, as a species, continue to contribute to online content collectively and prevent online content from being replaced by recycled content produced by AI.</p>
        <p>Some websites, like <a class="text-decoration-underline" href="https://www.wired.com/story/how-wired-will-use-generative-ai-tools/" target="_blank">WIRED</a>, publish announcements to achieve similar goals. However, these announcements may no longer be visible shortly after their release. With the Not By AI badge, you can ensure that this messaging receives constant exposure. </p>
        <div id="not-by-ai-bdage-guidelines" class="py-3"></div>
        <h3>Badge Use</h3>
        <p>The following guidelines provide instructions on how to use the Not an AI badge.</p>
        <ul>
          <li class="pb-2">Linking the badge out to notbyai.fyi is highly recommended. Wrap the badge image using the anchor HTML element with the href attribute. For example, <pre class="my-2 py-1 px-2 bg-black text-white"><code>&lt;a href="https://notbyai.fyi"&gt;&lt;img src="written-by-human-not-by-ai-white.svg" alt="written by human, not by AI"&gt;&lt;/a&gt;</code></pre> This allows your audience to understand the mission and why you participate in this movement by clicking on the badge to learn more. </li>
          <li class="pb-2">Respect the clear space: Clear space is the surrounding area around the badge that should avoid any content. The minimum clear space is the x-height of the Not By AI typemark.</li>
          <li class="pb-2">Do not alter the badge: The badge should not be altered or modified in any way.</li>
          <li class="pb-2">Minimum Size: To make sure that the badge remains legible and recognizable, it is important to maintain the minimum size of 42 px high for 1x resolution screens, or 84 px high for 2x resolution screens.</li>
          <li class="pb-2">While the Not By AI badge is meant to be displayed and noted, the content creator is welcome to place the badge in a less visible area, such as a website footer or the back of an album, to prevent the badge from visually competing with the content.</li>
        </ul>
        <p>Incorrect badge usage examples:</p>
        <div class="row">
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-rewrite-not-by-ai-badge.svg" alt="">
            <p class="display-6 pt-2 pb-3 pb-sm-0">Do not rewrite the badge</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-color-not-by-ai-badge.svg" alt="">
            <p class="display-6 pt-2 pb-3 pb-sm-0">Do not replace any colors in the badge</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" srcset="<?php echo get_stylesheet_directory_uri(); ?>/img/no-shadow-not-by-ai-badge@2x.png 2x" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-shadow-not-by-ai-badge.png" alt="">
            <p class="display-6 pt-1 pb-3 pb-sm-0">Do not add effects to the badge</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-remake-not-by-ai-badge.svg" alt="">
            <p class="display-6 pt-2 pb-3 pb-sm-0">Do not make changes to badge elements</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-small-not-by-ai-badge.svg" alt="">
            <p class="display-6 pt-2 pb-3 pb-sm-0">Make sure to maintain the minimum size</p>
          </div>
          <div class="col-sm-6 col-lg-4">
            <img class="img-fluid" src="<?php echo get_stylesheet_directory_uri(); ?>/img/no-blurry-not-by-ai-badge.png" alt="">
            <p class="display-6 pt-2 pb-3 pb-sm-0">Make sure the badge is legible</p>
          </div>
        </div>
        <div id="legal-effect-of-not-by-ai-badge" class="py-3"></div>
        <h3>Legal Effect</h3>
        <p>The current Not By AI badges do not hold any legal effect significance and displaying the badge on any asset does not guarantee the content is not majorly created by AI. Legal experts are encouraged to <a href="<? bloginfo('url') ?>/contact" class="text-decoration-underline">get in touch</a> to explore the potential of formalizing and regulating the use of the Not By AI badge.</p>
        <div class="modal fade" id="downloadEmail" tabindex="-1" aria-labelledby="downloadEmailLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 rounded-0 download-popup">
              <div class="modal-header px-md-5 py-md-4">
                <div class="modal-title fs-3 h3" id="downloadEmailLabel">Enter your email to receive your free badge</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body pb-4 pt-md-4 pb-md-5 px-md-5">
                <?php echo do_shortcode( '[wpforms id="86" title="false"]' ); ?>
                <div class="d-block d-sm-none"><p class="small pt-2">On a go? <a class="text-decoration-underline" href="mailto:?subject=Not By AI reminder&amp;body=Remind me to download the Not By AI badge from https://notbyai.fyi." title="Share by Email" target="_blank">Send yourself a reminder</a>.</p></div>
              </div>
            </div>
          </div>
        </div>
        <div class="modal fade" id="donate" tabindex="-1" aria-labelledby="donateLabel" aria-hidden="true">
          <div class="modal-dialog modal-lg">
            <div class="modal-content border-0 rounded-0">
              <div class="modal-header px-md-5 py-md-4">
                <div class="modal-title fs-3 h3" id="donateLabel">Contribute to our mission.</div>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body pb-4 pt-md-4 pb-md-5 px-md-5 text-center">
	              <p class="mb-0">Please consider a donation to make a big impact. Your gift helps nurture the Not By AI project.</p>
                <script async
								  src="https://js.stripe.com/v3/buy-button.js">
								</script>
								<stripe-buy-button
								  buy-button-id="buy_btn_1N2mpPHl9sHS7hKr9qop1oXF"
								  publishable-key="pk_live_51N2maJHl9sHS7hKrsfltSFO2NfQTxMw2M66jYcdoFi4SsBcEjwjmLvSjftn482UqQRMGx0YbbdoMMjkzo8Pel7ld00Buib1tK9"
								>
								</stripe-buy-button>
              </div>
            </div>
          </div>
        </div>
        <ol class="source pt-5">
          <li>
            <cite>Why 90% of online content could be ‘generated by AI by 2025' https://www.youtube.com/watch?v=DgYCcdwGwrE</cite>
          </li>
        </ol>
      </div>
    </div>
    <script>
      jQuery(function($) {
        $('.modal').on('shown.bs.modal', function() {
          $('#wpforms-39-field_1').focus();
        });
      });
    </script>
		<?php
		get_footer();