<?php
/**
 * Template part for displaying posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Align_Architecture
 */

?>
<?php if(!is_home()): ?>

<section class="page-hero-section" style="background-image:url(<?php echo get_template_directory_uri().'/images/banner-post.jpg' ;?>)">
    <div class="page-header">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1 class="text-white">
                        <?php the_title() ; ?>
                    </h1>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==========Start Content Section ========== -->
<?php if(!is_singular('projects')): ?>
<section class="page-content">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content() ; ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>
<!-- ========== End Content Section ========== -->



<!-- ==========Start Project Content Section ========== -->
<?php if(is_singular('projects')): ?>
<section class="page-content">
    <div class="container">
        <!-- Start Project Description -->
        <div class="row">
            <div class="col-md-12">
                <div class="project-details">
                    <div class="row">
                        <div class="col-md-4">
                            <img src="<?php the_post_thumbnail_url() ; ?>" class="img-responsive">
                        </div>
                        <div class="col-md-8">
                            <h2 class="page-header">Project Description</h2>
                           <div class="project-detail-box">
                            <?php the_content() ; ?>
                           </div>   
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Description -->
        <?php if(count(getProjectGallery(get_the_ID())) > 1): ?>
        <!-- Start Project Gallery -->
        <div class="row">
            <div class="col-md-12">
                <div class="project-gallery">
                    <h2 class="page-header">Project Gallery</h2>
                    <div class="gallery-content">
                        <div class="row">
                            <?php  $galleryImage = getProjectGallery(get_the_ID()) ; for($i=0;$i<count( $galleryImage);$i++): ?>
                            <div class="col-md-4">
                                <div class="gallery-item">
                                    <img src="<?php echo $galleryImage[$i] ; ?>" class="img-responsive">
                                </div>                                
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Project Gallery -->
      <?php endif; ?>
    </div>
</section>

<!-- Start Gallery Modal -->
<div class="modal fade" id="galleryModal">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-body">
				<img src="" alt="" class="img-respoonsive gallery-image-hover">
			</div>
		</div>
	</div>
</div>
<!-- End Gallery Modal -->

<?php endif; ?>
<!-- ========== End Project Content Section ========== -->



<?php endif; ?>
