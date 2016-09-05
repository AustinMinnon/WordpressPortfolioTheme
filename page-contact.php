<?php
/* *
* Template Name: Contact Page
*/
?>

<?php get_header(); ?>


<div class="row" id="content">
    <div class="medium-12 columns contactForm">
        <?php while ( have_posts() ) : the_post(); ?>

            <?php get_template_part( 'template-parts/content', 'page' ); ?>

        <?php endwhile; ?>
    </div>
</div>

<?php

get_footer(); ?>
