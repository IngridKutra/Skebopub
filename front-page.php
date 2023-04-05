<?php
/**
 * Template Name: front-page
 * 
 * 
 */
?>

<!DOCTYPE html>
<html style="margin-top: 0px !important;">
<style type="text/css">
img.small_logo {
    display: none;
}
</style>
<?php
get_header();
?>
 <main>
    <div>
        <div class="bg"></div>
        <div class="logo"><?php the_post_thumbnail(); ?></div>
        <?php 
        if ( have_posts() ) :
            while ( have_posts() ) : the_post();
            endwhile;
        endif;
        ?>

</div>
</main>
<div> <?php get_footer(); ?> </div>