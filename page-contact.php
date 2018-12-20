<?php
/*
 Template Name: Contact
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
    <div class="contact-container">
        <div class="row">
            <div class="contact-img col-md-6">
                <img class="img-responsive contact-img" src="<?php the_field('contact_photo') ;?>" alt="">
            </div>
            <div class="contact-body col-md-6">
                <p class="info">
                    Filipino-American artist
                    <br>
                    based in Oahu, Hawai'i
                    <br>
                    <a href="mailto:119@hoffapound.com">119@hoffapound.com</a>
                </p>
                <ul class="social-links">
                    <a href="https://www.instagram.com/khompono/">
                        <li class="social-link">
                            <img class="img-responsive social-img" src="<?php the_field('insta_icon') ;?>" alt="">
                        </li>
                    </a>
                    <a href="https://soundcloud.com/khompono">
                        <li class="social-link">
                            <img class="img-responsive social-img" src="<?php the_field('soundcloud_icon') ;?>" alt="">
                        </li>
                    </a>
                    <li class="social-link">

                    </li>
                </ul>
            </div>
        </div>
    </div>
</div>

<?php get_footer(); ?>