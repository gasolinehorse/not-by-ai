<?php
$pageTitle = 'Not By AI License';
$pageDes = 'Find a Not By AI business or individual.';
include 'header.php';
include 'top-nav.php';
?>
    <main class="row justify-content-center px-4 px-lg-0">
      <header>
        <h1 class="display-2">Find a Not By AI Business or Individual</h1>
      </header>
      <div class="col-md-10 col-xl-9 py-4">
        <div class="row justify-content-center text-start">
          <div class="col-lg-7 pb-5">
            <img class="img-fluid mb-4" srcset="/img/not-by-ai-badge-business-lookup@2x.jpg 2x" src="/img/not-by-ai-badge-business-lookup.jpg" alt="Not By AI badge code examples">
            <p>Spot a verified Not By AI badge in real life? Locate the 6-character badge code on the badge (for example, 123abc) and enter it below to learn more about their creative approach.</p>
            <form onsubmit="redirectCreatorPage(); return false;" class="pb-5">
              <label class="h4" for="badgeCode">Enter the 6-Character Badge Code:</label>
              <input type="text" id="badgeCode" class="w-100 mb-2" name="q" placeholder="123abc" required>
              <input class="btn w-100" type="submit" value="View the Not By AI Creator Page">
            </form>
            <p class="small mb-2">Where to find the 6-character badge code on a verified Not By AI badge:</p>
            <img class="img-fluid mb-3" src="/img/how-to-find-not-by-ai-badge-code.svg" alt="How to find the Not By AI badge code">
            <p class="small">If you don't see the code on a verified badge, it usually means you can click directly on the badge to view the Creator page.</p>
            <p class="small">If you don't see the code and the "verified" text on the badge, the badge is not verified and is restricted for non-commercial use only.</p>
          </div>
        </div>
      </div>
    </main>
    <script>
      function redirectCreatorPage() {
        const badgeCode = document.getElementById("badgeCode").value;
        if (badgeCode.length !== 6) {
          alert("Badge code must be 6 characters long.");
          return;
        }
        const finalUrl = `https://app.notbyai.fyi/project/${badgeCode}`;
        window.location.href = finalUrl;
      }
    </script>
    <?php include 'footer.php'; ?>