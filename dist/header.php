<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <title><?php echo $pageTitle ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1" />
  <meta name="description" content="<?php echo $pageDes ?>" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="/style.css?v=09042023" />
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-not-by-ai_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-not-by-ai_16x16.png">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/img/favicon-not-by-ai.png">
  <link rel="icon" type="image/svg+xml" href="/img/favicon-not-by-ai.svg">
  <link rel="icon" type="image/png" sizes="32x32" href="/img/favicon-not-by-ai_32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="/img/favicon-not-by-ai_16x16.png">
  <link rel="apple-touch-icon" type="image/png" sizes="180x180" href="/img/favicon-not-by-ai.png">
  <link rel="icon" type="image/svg+xml" href="/img/favicon-not-by-ai.svg">
  <meta property="og:title" content="<?php echo $pageTitle ?>" />
  <meta property="og:description" content="<?php echo $pageDes ?>" />
  <meta property="og:image" content="https://notbyai.fyi/img/not-by-ai-share.png" />
  <meta name="twitter:card" content="summary_large_image" />
  <meta name="twitter:site" content="@NotByAIBadge" />
  <meta name="twitter:title" content="<?php echo $pageTitle ?>" />
  <meta name="twitter:description" content="<?php echo $pageDes ?>" />
  <meta name="twitter:image" content="https://notbyai.fyi/img/not-by-ai-share.png" />
  <script async src='https://www.googletagmanager.com/gtag/js?id=G-T9E8EYVXP6'></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());
  
    gtag('config', 'G-T9E8EYVXP6');
  </script>
  <!-- Google Tag Manager -->
  <script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
  new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
  j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
  'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
  })(window,document,'script','dataLayer','GTM-5TNDH2X');</script>
  <!-- End Google Tag Manager -->
  <script>
    !function(t,e){var o,n,p,r;e.__SV||(window.posthog=e,e._i=[],e.init=function(i,s,a){function g(t,e){var o=e.split(".");2==o.length&&(t=t[o[0]],e=o[1]),t[e]=function(){t.push([e].concat(Array.prototype.slice.call(arguments,0)))}}(p=t.createElement("script")).type="text/javascript",p.async=!0,p.src=s.api_host+"/static/array.js",(r=t.getElementsByTagName("script")[0]).parentNode.insertBefore(p,r);var u=e;for(void 0!==a?u=e[a]=[]:a="posthog",u.people=u.people||[],u.toString=function(t){var e="posthog";return"posthog"!==a&&(e+="."+a),t||(e+=" (stub)"),e},u.people.toString=function(){return u.toString(1)+".people (stub)"},o="capture identify alias people.set people.set_once set_config register register_once unregister opt_out_capturing has_opted_out_capturing opt_in_capturing reset isFeatureEnabled onFeatureFlags getFeatureFlag getFeatureFlagPayload reloadFeatureFlags group updateEarlyAccessFeatureEnrollment getEarlyAccessFeatures getActiveMatchingSurveys getSurveys".split(" "),n=0;n<o.length;n++)g(u,o[n]);e._i.push([i,s,a])},e.__SV=1)}(document,window.posthog||[]);
    posthog.init('phc_ocPwrW2HB6TBIHU3E89HGPUltG5s9Wu48X9ahVfTpiF', {api_host: 'https://app.posthog.com'})
  </script>
</head>
<body class="bg-light p-2 p-sm-4">
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5TNDH2X"
  height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
  <div id="sidenav-bar" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <a onclick="closeNav()" href="/#not-by-ai-mission">Mission</a>
    <a onclick="closeNav()" href="/#who-can-use-not-by-ai-badge">Qualification</a>
    <a onclick="closeNav()" href="/help/which-not-by-ai-badge-should-i-use.php">Badge Types</a>
    <a onclick="closeNav()" href="/gallery">Gallery</a>
    <a onclick="closeNav()" href="/#why-should-i-use-not-by-ai-badge">Benefits</a>
    <a onclick="closeNav()" href="/help">Resources</a>
    <a href="https://notbyai.fyi/about">About Us</a>
    <a href="https://notbyai.fyi/contact">Contact</a>
    <div class="px-4 mt-3" onclick="closeNav()">
      <a href="#" id="side-nav-download" class="btn text-white cursor-pointer px-2" data-bs-toggle="modal" data-bs-target="#downloadEmail">Download Badges</a>
    </div>
    <div class="px-4 mt-3" onclick="closeNav()">
      <a href="https://notbyai.fyi/business" class="text-center px-2 rounded-2" style="box-shadow: 0 0 0px 1px #000000 inset;">Not By AI for Business</a>
    </div>
    <div class="d-flex pt-4">
      <a class="px-2 ms-4" href="https://twitter.com/NotByAIBadge" target="_blank"><img width="18" class="mx-1" src="/img/twitter.svg" alt="Follow us on Twitter"></a>
      <a class="px-2" href="https://facebook.com/notbyai" target="_blank"><img class="mx-1" src="/img/facebook.svg" alt="Follow us on Facebook"></a>
      <a class="px-2" href="https://www.linkedin.com/company/notbyai/" target="_blank"><img width="16" class="mx-1" src="/img/linkedin.svg" alt="Follow us on Linkedin"></a>
      <a class="px-2" href="mailto:?subject=Not By AI&amp;body=Download the Not By AI badges from https://notbyai.fyi." title="Share by Email" target="_blank"><img class="mx-1 mt-1" src="/img/forward.svg" alt="Share via email"></a>
    </div>
  </div>