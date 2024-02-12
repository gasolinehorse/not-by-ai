<?php
$pageTitle = 'Start applying for your Not By AI Creator Page';
$pageDes = 'Thank you for your purchase. Now, you can download the Not By AI badges and set up your Creator Page.';
include 'header.php';
include 'top-nav.php';
?>
    <style>
      .top-nav-biz-link {
        display: none !important;
      }      
    </style>
    <div class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
        <header class="header">
          <h1 class="display-1">Build Your Creator&nbsp;Page</h1>
        </header>
        <div class="row justify-content-center">
	        <div class="col-sm-10 col-md-9 col-lg-8">
            <p class="pt-2 text-center">Thank you for your purchase! Please enter the same email you used for the purchase to get started.</p>
            <?php
            if (isset($_GET['error'])) {
              if ($_GET['error'] == 'invalid_email') {
                echo '<p class="py-2 rounded-2 small" style="background-color: rgb(255, 232, 232);">Invalid email. Please try again or <a href="" class="text-decoration-underline">contact us</a> if you have any questions.</p>';
              }
            }
            ?>
            <form id="forms" action="login-action.php" method="post">
              <label for="email">Email:</label>
              <input type="email" id="email" name="email" required autofocus>
              <input class="btn mt-3 mb-5" type="submit" value="Get Started">
            </form>
	        </div>
          <div class="col-12">
            <img class="img-fluid pt-2 mt-lg-0" srcset="/img/creator-page-create@2x.jpg 2x" src="/img/creator-page-create.jpg" alt="The Not By AI Creator Page">
            <p class="small pt-2">Your badges will be sent to your inbox automatically. You can also <a href="/Not-By-AI.zip" class="text-decoration-underline" target="_blank">download them here</a>.</p>
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>