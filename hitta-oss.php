<?php
/**
 * Template Name: hitta-oss
 */
?>

<!DOCTYPE html>
<html style="margin-top: 0px !important;">
<div class="bg"></div>
 <main>


    <div class="header_nav"> <?php get_header(); ?> </div>
    
    <div class="hitta_oss_cards">
    <div class="card" style="width: 20rem;">
    <div class="card-body">
    <p class="card-title">Öppetider</p>
    <p class="card-text"><?php the_field("open"); ?></p>
    </div>
    <a class="card-text" href="https://goo.gl/maps/NULudNM54L16jjT4A"><?php the_field("address"); ?></a>
    <div id="karta" class="card-img">
     
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d998.4098216443057!2d18.60946477764753!3d59.96831516553073!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x465ffd264dcf4737%3A0x8638f19b178905ae!2sSkebopuben!5e0!3m2!1sen!2sse!4v1663665573988!5m2!1sen!2sse" width="400" height="300" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div>
    </div>

    <div class="card" style="width: 20rem;">
    <div id="house_image" class="card-img"><?php the_post_thumbnail();?></div>
    <div class="card-body">
    <p class="card-title">Handla på puben</p>
        <p class="card-text"><?php the_field("handla"); ?></p>
    <p class="card-title">Parkering och kommunikation</p>
        <p class="card-text"><?php the_field("parkering_och_kommunikation"); ?></p>
    </div>
    </div>
</div>




	 </main>
   <div> <?php get_footer(); ?> </div>