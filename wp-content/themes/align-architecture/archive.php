<?php
/**
 * The template for displaying archive pages
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Align_Architecture
 */

get_header();

?>
<!--=============== Start Category Title Section ==================-->
<section class="page-hero-section" style="background-image:url(<?php echo get_template_directory_uri().'/images/banner-post.jpg' ;?>)">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white text-capitalize">
                        <?php echo single_cat_title() ; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>
<!--=============== End Category Title Section ==================-->
<section class="category-content-section <?php if(is_tax('project_category')) echo 'project-section' ; ?>">
    <div class="container">
        <div class="row">
            <?php

                while ( have_posts() ) :
                    the_post();

                    get_template_part( 'template-parts/content-category', get_post_type() );

                    //the_post_navigation();

                    // If comments are open or we have at least one comment, load up the comment template.
                    if ( comments_open() || get_comments_number() ) :
                        comments_template();
                    endif;
                endwhile; // End of the loop.
            ?>
        </div>
    </div>
</section>
<?php get_footer(); ?>
