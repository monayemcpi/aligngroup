<?php 

if(is_tax('project_category')):?>
<!--=============== Start Category Content Section ==================-->
    <div class="col-md-4">
        <div class="home-project-container">
            <div class="project-image">
                <img src="<?php echo get_the_post_thumbnail_url() ; ?>" alt="<?php echo the_title() ; ?>" class="img-responsive">
            </div>
            <div class="project-content">
                <h4>
                    <?php  the_title() ; ?>
                </h4>
                <?php the_excerpt() ; ?>
                <a href="<?php echo the_permalink() ; ?>" class="btn-common">View More</a>
            </div>
        </div>
    </div>
    <?php if($ck++==2): echo '</div><div class="row">'; $ck=0; endif; ?>
<!--=============== End Category Content Section ==================-->
<?php  endif;   ?>

