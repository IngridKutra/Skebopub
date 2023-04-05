<?php
/**
 * Template Name: events page
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
	

    <div id="OneEvent">
	
    <?php $the_query = new WP_Query( array( 'post_type' => 'post' ) );

    if ( $the_query->have_posts()) :
    while ( $the_query->have_posts()) :
      $the_query->the_post();
      ?> 

      <div class="card" style="width: 17rem; height: fit-content;">
  <div class="card-img-top"> <?php the_post_thumbnail();?></div>  
  <div class="card-body">
    <h5 class="card-title"><?php the_title(); ?></h5>
    <h6 class="card-title"><?php the_field("datum"); ?></h6>
    <p class="card-text"><?php the_field("beskrivning"); ?></p>
    <a href="https://wordpress-skebopub.azurewebsites.net/?page_id=81" class="btn btn-primary">Boka biljett</a>
    <br>

  </div>
</div>
<?php 
  endwhile;
else:
?>
  <p>Finns inte events</p>
  <?php 
  endif;
?>
</div>
</div>




	 </main>
   <div> <?php get_footer(); ?> </div>