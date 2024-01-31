<?php
$pageTitle = 'Start applying for your Not By AI Creator Page';
$pageDes = 'Thank you for your purchase. Now, you can download the Not By AI badges and set up your Creator Page.';
include 'header.php';
include 'top-nav.php';
?>
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
    <div class="row justify-content-center px-4 px-lg-0">
      <div class="col-lg-9 pb-5">
        <header class="header">
          <h1>Time to Build Your Creator&nbsp;Page</h1>
        </header>
        <div class="row justify-content-center">
	        <div class="col-sm-10 col-md-9 col-lg-6">
		        <div class="h5 pt-lg-4 pb-3">Your badges will soon be in your inbox. Now is the perfect time to build your Creator Page. </div>
            <a href="/creator-page-application" class="btn btn-dark mb-5">Get Started</a>
	        </div>
          <div class="col-12">
            <img class="img-fluid pt-2 mt-lg-0" srcset="/img/creator-page-create@2x.jpg 2x" src="/img/creator-page-create.jpg" alt="The Not By AI Creator Page">
          </div>
        </div>
      </div>
    </div>
    <?php include 'footer.php'; ?>