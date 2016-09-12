<?php
/* *
* Template Name: Experience
*/ ?>

<?php get_header(); ?>

<div class="callout">
            <div class="row column text-center">
                <h1 class="pageHeader">Experience</h1>
            </div>
        </div>

        <div class="row" id="content">
            <div class="medium-12 columns">
                <?php while ( have_posts() ) : the_post(); ?>

                    <?php get_template_part( 'template-parts/content', 'page' ); ?>

                <?php endwhile; ?>
            </div>
        </div>

<?php

get_footer(); ?>
