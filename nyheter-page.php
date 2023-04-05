<?php
/**
 * Template Name: nyheter-page
 */
?>

<!DOCTYPE html>
<html style="margin-top: 0px !important;">
<style type="text/css">
img.small_logo {
    display: none;
}
</style>
<div class="header_bg">
  <img class="bg_image_event_template" src="https://wordpress-skebopub.azurewebsites.net/wp-content/uploads/2022/09/header_img.jpg" alt="header image">
  <img class="logo_event_template" src="https://wordpress-skebopub.azurewebsites.net/wp-content/uploads/2022/09/SKEBOPUB-2.png" alt="logo" style="width: 20%;">
</div>

<main>
<div class="events_header">

    <div class="header_nav"> <?php get_header(); ?> </div>
</div>


	<div class="main_events">
	

    <div id="nyheter">
	
    <?php $the_query = new WP_Query( array( 'post_type' => 'post' ) );

    if ( $the_query->have_posts()) :
    while ( $the_query->have_posts()) :
      $the_query->the_post();
      ?> 

<div class="card mb-3" style="max-width: 80%; margin: 0 auto;" >
  <div class="row g-0">
    <div class="col-md-4">
      <div class="card-img" style="max-width: 300px;"> <?php the_post_thumbnail();?></div>
    </div>
    <div class="col-md-8">
      <div class="card-body">
        <h5 class="card-title"><?php the_title(); ?></h5>
        <p class="card-text"><small class="text-muted"><?php the_field("datum"); ?></small></p>
        <p class="card-text"><?php the_field("beskrivning"); ?></p>
        
      </div>
    </div>
  </div>
</div>
<?php 
  endwhile;
else:
?>
  <p>Finns inte nyheter</p>
  <?php 
  endif;
?>
</div>


</div>




	 </main>
   <div> <?php get_footer(); ?> </div>