<!--=============== Start Slider ==================-->
<section class="slider-section">
    <div class="slider-container">
        <div class="slider">
            <ul>
                <?php foreach(getSlider() as $row): ?>
                <li data-slotamount="8" data-masterspeed="715" data-delay="4000">
                    <img src="<?php echo $row->image; ?>" class="img-responsive">
                    <div class="slider-caption">
                        <div class="caption sfr" data-x="600" data-y="150" data-easing="easeInBack" data-speed="1400" data-dealy="500">
                            <h2><?php echo $row->title ; ?></h2>
                        </div>
                        <div class="caption sfr" data-x="700" data-y="220" data-delay="1000" data-speed="3000" data-easing="easeInBack">
                            <h4><?php echo $row->subtitle ; ?></h4>
                        </div>
                        <div class="caption sfr" data-x="1160" data-y="290" data-easing="easeInBack" data-speed="1400" data-start="1500">
                            <a href="<?php echo $row->url; ?>" class="btn btn-sm ">View more</a>
                        </div>
                    </div>
                </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
</section>
<!--=============== End Slider ==================-->
<!--=============== Start Specialization Section ==================-->
<section class="special-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">
                our specialization
                </h3>
            </div>
        </div>
        <div class="row">
            <?php $ck=0; foreach(getSpecialization() as $row):  ?>
            <div class="col-sm-4 col-md-4">
                <div class="special-container">
                   <img src="<?php echo $row->image; ?>" alt="<?php echo $row->title; ?>"> 
                   <h3><?php echo $row->title; ?></h3>
                   <p class="text-justify"><?php echo $row->subtitle; ?> </p>
                   <a class="btn-common" href="<?php echo $row->url; ?>">View more</a>
                </div>
            </div>
            <?php if($ck++==2): echo '</div><div class="row">'; $ck=0; endif;endforeach; ?>
        </div>
    </div>
</section>
<!--=============== End Specialization Slider ==================-->
<?php if(getProjectHomepage()!=null): ?>
<!--=============== Start Project Section ==================-->
<section class="project-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">
                    Our Project
                </h3>
            </div>
        </div>
        <div class="row">
            <?php $ck=0; foreach(getProjectHomepage() as $row):  ?>
            <div class="col-xs-12 col-sm-6 col-md-4">
                <div class="home-project-container">
                    <div class="project-image">
                        <img src="<?php echo $row->image; ?>" alt="<?php echo $row->title; ?>" class="img-responsive">
                    </div>
                    <div class="project-content">
                        <h4><?php echo  $row->title; ?></h4>
                        <p><?php echo $row->subtitle; ?></p>
                        <a href="<?php echo $row->url; ?>" class="btn-common">View More</a>
                    </div>
                </div>
            </div>
            <?php if($ck++==2): echo '</div><div class="row">'; $ck=0; endif;endforeach; ?>
        </div>
    </div>
</section>
<!--=============== End Project Section ==================-->
<?php endif; ?>
<?php if(homepageClient()!=null): ?>
<!--=============== Start Client Section ==================-->
<section class="client-section">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h3 class="heading">Our Client</h3>
            </div>
        </div>
        <div class="row">
        <?php foreach(homepageClient() as $row):  ?>
            <div class="col-xs-4 col-sm-3 col-md-2">
                <div class="client-item">            
                    <img src="<?php echo $row->image; ?>" alt="" class="img-responsive">
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
</section>
<!--=============== End Client Section ==================-->
<?php endif; ?>