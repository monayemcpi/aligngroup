<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package Align_Architecture
 */

?>
<footer>
    <div class="footer-inner">
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-md-4">
                    <div class="footer-content">
                        <h3 class="text-center">Like on Facebook</h3>
                        <h4 class="text-center">KEEP IN TOUCH</h4>
                        <a class="text-center" target="_blank" href="" class="text-center"><i class="fa fa-facebook"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="footer-content">
                        <h3 class="text-center">Follow on Twitter</h3>
                        <h4 class="text-center">GET THE LATEST</h4>
                        <a class="text-center" target="_blank" href="" class="text-center"><i class="fa fa-twitter"></i></a>
                    </div>
                </div>
                <div class="col-sm-4 col-md-4">
                    <div class="footer-content">
                        <h3 class="text-center">check on instagram</h3>
                        <h4 class="text-center">SEE THE OPPORTUNITIES</h4>
                        <a class="text-center" target="_blank" href="" class="text-center"><i class="fa fa-instagram"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <p><a href="<?php echo site_url().'/about-us' ; ?>">About Us</a> | <a href="<?php echo site_url().'/contact-us' ; ?>">Contact Us</a> | <a href="<?php echo site_url().'/privacy-policy' ; ?>">Privacy Policy</a> | <a >Site Map</a> </p>
                    <a href="" class="text-center">Copyright <i class="fa fa-copyright"></i> <?php echo date('Y'); ?> Align Architechture | All rights reserved. </a>

                </div>
            </div>
        </div>
    </div>
</footer>
</div>
<?php wp_footer(); ?>
</body>
</html>
