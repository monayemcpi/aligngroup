<?php
/**
 * Template part for displaying page content in page.php
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package Align_Architecture
 */

?>
<section class="page-hero-section" style="background-image:url(<?php echo the_post_thumbnail_url() ;?>)">
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
<section class="page-content <?php echo (is_page('contact')? 'contact-section' : '') ?>">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <?php the_content() ; ?>
                <?php if(is_page('our-team')) :?>
                <div class="space-30"></div>
                <?php foreach(getTeamData() as $row): ?>
                <div class="row">
                    <div class="col-md-3 col-xs-12">
                        <div class="team-img">
                            <img src="<?php echo $row->image; ?>" class="circle-img" alt="team image">
                        </div>
                        <div class="team-line"></div>
                    </div>
                    <div class="col-md-9 col-xs-12">
                        <div class="team-info">
                            <h3><?php echo $row->title; ?></h3>
                            <p><?php echo $row->content; ?></p>
                            <ul class="team-social">
                                <li><a href="<?php echo explode(",",$row->sociallink)[0] ; ?>"><i class="fa fa-facebook"></i></a></li>
                                <li><a href="<?php echo explode(",",$row->sociallink)[1] ; ?>"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="<?php echo explode(",",$row->sociallink)[2] ; ?>"><i class="fa fa-linkedin-square"></i></a></li>
                                <li><a href="<?php echo explode(",",$row->sociallink)[3] ; ?>"><i class="fa fa-instagram"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="space-30"></div>
                <?php endforeach; ?>
                <?php endif; ?>
            </div>
        </div>
    </div>
</section>

<?php if(is_page('contact')) :?>

<section class="contact-map">
    <div id="websiteMap">

    </div>
</section>

<script type="text/javascript">
function initMap() {
    var site = {
        lat: 22.365970,
        lng: 91.831015
    };
    var map = new google.maps.Map(document.getElementById('websiteMap'), {
        zoom: 15,
        center: site,

        styles: [{
                "featureType": "all",
                "elementType": "all",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "all",
                "elementType": "geometry.fill",
                "stylers": [{
                    "weight": "2.00"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "all",
                "elementType": "geometry.stroke",
                "stylers": [{
                    "color": "#fc0000"
                }]
            }, {
                "featureType": "all",
                "elementType": "labels.text",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "administrative.country",
                "elementType": "geometry.fill",
                "stylers": [{
                    "visibility": "on"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "all",
                "stylers": [{
                    "color": "#f2f2f2"
                }]
            }, {
                "featureType": "landscape",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "landscape.man_made",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "poi",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            },

            {
                "featureType": "poi.business",
                "elementType": "labels",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "road",
                "elementType": "all",
                "stylers": [{
                    "saturation": -100
                }, {
                    "lightness": 45
                }]
            }, {
                "featureType": "road",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#eeeeee"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#7b7b7b"
                }]
            }, {
                "featureType": "road",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }, {
                "featureType": "road.highway",
                "elementType": "all",
                "stylers": [{
                    "visibility": "simplified"
                }]
            }, {
                "featureType": "road.arterial",
                "elementType": "labels.icon",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "transit",
                "elementType": "all",
                "stylers": [{
                    "visibility": "off"
                }]
            }, {
                "featureType": "water",
                "elementType": "all",
                "stylers": [{
                    "color": "#46bcec"
                }, {
                    "visibility": "on"
                }]
            }, {
                "featureType": "water",
                "elementType": "geometry.fill",
                "stylers": [{
                    "color": "#c8d7d4"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels.text.fill",
                "stylers": [{
                    "color": "#070707"
                }]
            }, {
                "featureType": "water",
                "elementType": "labels.text.stroke",
                "stylers": [{
                    "color": "#ffffff"
                }]
            }
        ]

    });
    var marker = new google.maps.Marker({
        position: site,
        title: 'Align Architechts',
        map: map
    });
}
</script>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD_rlTg7Wttqje0wMr1uyK5gD3noDQlS-I&amp;callback=initMap" async="" defer=""></script>


<?php endif; ?>
