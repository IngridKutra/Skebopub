<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.9.1/font/bootstrap-icons.css" integrity="sha384-xeJqLiuOvjUBq3iGOjvSQSIlwrpqjSHXpduPd6rQpuiM3f5/ijby8pCsnbu5S81n" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <title><?php wp_title();?></title>
    <?php wp_head(); ?>
    <?php if( is_page('kontakt-page') ){ ?>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/jquery.validate.min.js"></script>
	<script type="text/javascript" src="<?php bloginfo('template_directory'); ?>/js/verif.js"></script>
<?php }?>
</head>
<script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
<body <?php body_class(); ?>>

<header>
 
<nav class="navbar navbar-expand-md navbar-light">
<a href="https://wordpress-skebopub.azurewebsites.net/">
<img class="small_logo" src="https://wordpress-skebopub.azurewebsites.net/wp-content/uploads/2022/09/SKEBOPUB-2.png" alt="logo" style="width: 50px;">
</a>
<button id="btn" class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" href="#navbarSupportedContent" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <div class="navbar-nav" id="navElements">
      <a class="nav-item nav-link active" href="https://wordpress-skebopub.azurewebsites.net/">HEM <span class="sr-only">(current)</span></a>
      <a class="nav-item nav-link" href="https://wordpress-skebopub.azurewebsites.net/events/">EVENTS</a>
      <a class="nav-item nav-link" href="https://wordpress-skebopub.azurewebsites.net/nyheter/">NYHETER</a>
      <a class="nav-item nav-link" href="https://wordpress-skebopub.azurewebsites.net/kontakta-oss/">KONTAKT</a>
      <a class="nav-item nav-link" href="https://wordpress-skebopub.azurewebsites.net/hitta-oss/">HITTA OSS</a>
    </div>
    <div class="social_ic">
    <a href="https://sv-se.facebook.com/Skebopuben/"><i class="bi bi-facebook"></i></a>
    <a href="https://www.instagram.com/skebopuben/"><i class="bi bi-instagram"></i></a>
    <a href="https://www.facebook.com/messages/t/110751052321052"><i class="bi bi-messenger"></i></a>
    </div>
  </div>


</nav>
</header>
	
<div> <?php get_footer(); ?> </div>