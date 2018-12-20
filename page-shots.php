<?php
/*
 Template Name: Shots
 *
 * This is your custom page template. You can create as many of these as you need.
 * Simply name is "page-whatever.php" and in add the "Template Name" title at the
 * top, the same way it is here.
 *
 * When you create your page, you can just select the template and viola, you have
 * a custom page template to call your very own. Your mother would be so proud.
 *
 * For more info: http://codex.wordpress.org/Page_Templates
*/
?>

<?php get_header(); ?>

<div class="main-wrap">
    <div class="shots-container">
        <h1 class="shots-1-title">
            <?php the_field('shots_1_title') ;?>
        </h1>
        <div class="shots-1">
            <?php// Opening container or wrap outside of the loop?>
            <?php

                            // check if the repeater field has rows of data
                            if( have_rows('shots_1') ):


                            // loop through the rows of data
                            while ( have_rows('shots_1') ) : the_row(); 
                            
                            ?>
            <div class="shots-slide">
                <img class="img-responsive" src="<?php the_sub_field('shots_slide_1') ;?>" alt="">
            </div>
            <?php
                            

                            endwhile;

                            endif;

                            ?>
        </div>

        <h1 class="shots-2-title">
            <?php the_field('shots_2_title') ;?>
        </h1>
        <div class="shots-2">
            <?php// Opening container or wrap outside of the loop?>
            <?php

                            // check if the repeater field has rows of data
                            if( have_rows('shots_2') ):


                            // loop through the rows of data
                            while ( have_rows('shots_2') ) : the_row(); 
                            
                            ?>
            <div class="shots-slide">
                <img class="shots-img-2 img-responsive" src="<?php the_sub_field('shots_slide_2') ;?>" alt="">
            </div>
            <?php
                            

                            endwhile;

                            endif;

                            ?>
        </div>
    </div>
</div>

<?php get_footer(); ?>