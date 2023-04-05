<?php
/**
 * Template Name: kontakt page
 */
?>

<!DOCTYPE html>
<html style="margin-top: 0px !important;">
<body class="bg">
<?php
get_header();
?>

    <div style="display: flex;">
     
        </div>
        <div>
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
			the_content();
			
            endwhile;
        endif;
        ?>


<div> <?php get_footer(); ?> </div>