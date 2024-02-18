<?php
$pageTitle = 'Not By AI Help Center | How Do I Link My Not By AI Badge?';
$pageDes = 'Explore the Not By AI guides, resources, FAQs, and documentations that help showcase your original content created by humans, not AI.';
include '../header.php';
include '../top-nav.php';
?>
    <style>
      .top-nav-biz-link {
        display: none !important;
      }      
    </style>
    <main>
      <header class="row no-md-bg justify-content-center text-start pt-1 pb-2 mb-3 mb-md-5 bg-light" style="margin-top: -1.8rem; background-image: url(/img/creator-profile-of-not-by-ai.svg); background-position: top right; background-repeat: no-repeat; background-attachment: fixed;">
        <div class="col-md-11 col-xl-8 pt-1">
          <div class="row">
            <div class="col">
              <small class="xs"><a href="https://notbyai.fyi" class="text-decoration-underline">Home</a> <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> <a href="https://notbyai.fyi/help" class="text-decoration-underline">Help Center</a> <svg width="5" height="7" fill="none" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" clip-rule="evenodd" d="M2.793 3.5.646 1.354l.708-.708L4.207 3.5 1.354 6.354l-.708-.708L2.793 3.5Z" fill="#000"/></svg> How Do I Link My Not By AI Badge?</small>
            </div>
          </div>
        </div>
      </header>
      <div class="row justify-content-center">
        <div class="col-md-7 col-xl-5 text-start px-4 px-lg-0 pt-3 pt-md-2 pb-4 order-md-3">
          <section>
            <h1 class="h2 pb-3">How Do I Link My Not By AI Badge?</h1>
            <p>We strongly recommend you to link the badges to notbyai.fyi or your Creator Page (paid users only) when it's possible so that your users can click on the badge to visit the page and understand the mission you are participating in.</p>
            <p>The linking method varies depending on where you content is located and how you choose to display the Not By AI badge:</p>
            <h2 class="h4 pt-2">Content Management Systems (CMS) or Editors</h2>
            <p>If your content is hosted on CMS like Wordpress, HubSpot, Shopify, writing platforms such as Medium, Squarespace, and LinkedIn, or if your content is in a text editor like Google Docs or Word, follow the general steps below: </p>
            <ol>
              <li class="mb-1">Select the image insert tool in your editor.</li>
              <li class="mb-1">When a popup shows up in your editor, select and insert your downloaded Not By AI badge in PNG file format.</li>
              <li class="mb-1">Once inserted, highlight the image by clicking on it.</li>
              <li class="mb-1">Select the hyperlink tool and input https://notbyai.fyi or the link to your Creator Page as the destination URL.</li>
              <li>Press 'Save' or 'Publish' based on your progress in content creation.</li>
            </ol>
            <p>Please note that the steps above is a general guide for inserting and linking an image and may not specifically match the steps in your editor.</p>
            
            <h2 class="h4 pt-4 mt-3 border-top">Hardcoded</h2>
            <p>If your content is hardcoded in HTML or PHP, use the following code to populate the Not By AI badge.</p>
            <pre class="my-2 py-1 px-2 bg-black text-white" style="user-select: all; -webkit-user-select: all;"><code>&lt;a href="https://notbyai.fyi"&gt;&lt;img src="written-by-human-not-by-ai-white.svg" alt="Written by Human, Not by AI"&gt;&lt;/a&gt;</code></pre>
            <p>Be sure to replace the image path in <code>src="..."</code> with your image location, replace the URL in <code>href="..."</code> with your Creator Page link if you are a paid user, and replace the Writer badge mentioned in <code>alt</code> with the badge you intend to use.</p>

            <h2 class="h4 pt-4 mt-3 border-top">Physical</h2>
            <p>If you're working with physical content, such as books, paintings, sculptures, or any handcrafted products, the best implementation may differ depending on the type of content. Look for space within your content where a link to https://notbyai.fyi or your Creator Page can be displayed without distracting your audience. For example, consider the book blurb on the back of a book, or locate a nearby object, such as a painting's plaque or a product's tag, to show the link or a QR code to the link.</p>

            <p class="pt-4 mt-3 border-top">For information on which image type works best for your content, please refer to <a class="text-decoration-underline" href="/help/which-image-file-format-should-i-use.php">Which Image File Format Should I Use</a>.</p>
          </section>
          <section class="py-4">
            <a href="https://notbyai.fyi/help" class="text-decoration-underline small">Back to Help Center</a>
          </section>
        </div>
        <div class="col-md-1 border-start order-2" style="transform: translateX(40px);"></div>
        <aside class="col-md-3 col-xl-2 text-start px-4 px-md-0 order-md-1">
          <div class="nav flex-column position-sticky top-0 pt-md-3 pe-md-4">
            <div class="row pb-3 px-2 mb-3 bg-light">
              <div class="col">
                <div class="h5 pb-1 mt-4">Still Need Help?</div>
                <div>
                  <p>
                    If you cannot find an answer in our Help Center, <a href="mailto:help@notbyai.fyi" class="text-decoration-underline">send us a message</a> so we can help you out.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </aside>
      </div>
    </main>
    <?php include '../footer.php'; ?>