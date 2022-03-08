<!DOCTYPE html>

<html lang="en">
<head>

<!-- Google Tag Manager --> 
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KS268MX');</script> 
<!-- End Google Tag Manager -->

<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Medicare Made Simple - Your how-to guide to help you choose the right Medicare plan</title>
<link rel="icon" href="<?= bs() ?>front_assets/image/favicon/favicon.ico" type="image/png">
<!-- Bootstrap -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
<link rel="stylesheet" href="<?php bs();?>/info-guide/css/info-guide.css">

<!-- Font Awesome for Icons -->
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css" integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous"/>

<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --> 
<!-- WARNING: Respond.js doesn't work if you view the page via file:// --> 
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
<![endif]-->
</head>

<body>
<!-- Google Tag Manager (noscript) -->
<noscript>
<iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KS268MX"
height="0" width="0" style="display:none;visibility:hidden"></iframe>
</noscript>
<!-- End Google Tag Manager (noscript) -->

<header class="container header" id="header">
  <div class="row">
    <div class="col-sm-6">
      <div class="logo" id="logo"><a href="<?php bs();?>"><img src="<?php bs();?>/info-guide/images/CMM-email-logo.png" id="hpoLogo1" alt="ClearMatch Medicare"/></a></div>
    </div>
    <div class="col-sm-6">
      <div class="needHelp"> <span>Speak with a Licensed Sales Agent</span> <span class="phone" id="hpoPhone">888-992-0738</span> <span class="hours">Mon to Fri: 8:30 a.m. to 8:00 p.m. ET</span> </div>
    </div>
  </div>
</header>
<div class="container jumbotron">
  <h1>Medicare <span>Made Simple</span></h1>
  <p>Download your free Medicare Information Guide.</p>
  <p><a id="lp-hero-btn" href="<?php bs();?>/info-guide/pdf/CMM-Medicare-Info-Guide.pdf" target="_blank" download class="btn btn-lg btn-primary" role="button">Download Free Guide</a></p>
</div>
<div class="container" id="content">
  <div class="row">
    <div class="col-md-12">
      <h1>Welcome to ClearMatch Medicare !</h1>
      <p>We understand that your Medicare decision is one of the most important decisions of your life. It&#8217;s our job to take the worry and stress out of looking for Medicare coverage.</p>
      <p>This Guide will help you:</p>
      <ul>
        <li>Know when you're eligible to enroll in Medicare</li>
        <li>Navigate the various plans available to you</li>
        <li>Understand the difference between Medicare Advantage and Medicare Supplement</li>
        <li>And much more!</li>
      </ul>
      <br>
      <p class="text-center"><a id="lp-body-btn" href="<?php bs();?>/info-guide/pdf/CMM-Medicare-Info-Guide.pdf" target="_blank" download class="btn btn-lg btn-primary" role="button">Download Free Guide</a></p>
    </div>
  </div>
</div>
<footer class="container">
  <div class="row">
    <div class="col-md-12">
      <p class="text-center">&copy; 2021 HealthPlanOne, LLC</p>
    </div>
  </div>
</footer>
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

<script>
  //Google Event Tracking
    $('#lp-hero-btn').bind('click',
        function handleOutboundLinkClicks(event) {
            ga('send', 'event', {
                eventCategory: 'download',
                eventAction: 'click1',
                eventLabel: 'Info Guide 1',
                transport: 'beacon',
                nonInteraction: true
            });
        });
    $('#lp-body-btn').bind('click',
        function handleOutboundLinkClicks(event) {
            ga('send', 'event', {
                eventCategory: 'download',
                eventAction: 'click2',
                eventLabel: 'Info Guide 2',
                transport: 'beacon',
                nonInteraction: true
            });
        });
</script>
</body>
</html>