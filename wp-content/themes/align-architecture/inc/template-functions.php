<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package Align_Architecture
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function align_architecture_body_classes( $classes ) {
	global $post;

    if( isset( $post ) && is_object( $post ) ) {
        $classes = array( "page-{$post->post_title}" );
    }


    return $classes;
}
add_filter( 'body_class', 'align_architecture_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function align_architecture_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'align_architecture_pingback_header' );

/** 
 * Add Style & Script
*/
function add_theme_scripts() {
    wp_enqueue_style( 'theme-stylesheet', get_template_directory_uri() .'/css/lib.css',array() );
    wp_enqueue_style( 'slider-stylesheet', get_template_directory_uri() .'/css/slider.css',array() );
    wp_enqueue_style( 'mThumbnailScroller-stylesheet', get_template_directory_uri() .'/css/jquery.mThumbnailScroller.css',array() );
    wp_enqueue_style( 'style', get_stylesheet_uri() );
    wp_enqueue_script( 'theme-script', get_template_directory_uri() . '/js/lib.js', array (), 1.0, true);
    wp_enqueue_script( 'slider-plugin-script', get_template_directory_uri() . '/js/slider-plugin.js', array (), 1.0, true);
    wp_enqueue_script( 'slider-script', get_template_directory_uri() . '/js/slider.js', array (), 1.0, true);
    wp_enqueue_script( 'jquery-mThumbnailScroller', get_template_directory_uri() . '/js/jquery.mThumbnailScroller.js', array (), 1.0, true);
    wp_enqueue_script( 'scipt', get_template_directory_uri() . '/js/style.js', array (), 1.0, true);
   
  }
add_action( 'wp_enqueue_scripts', 'add_theme_scripts' );

// Header & Logo


// Get Logo Url
function getLogo()
{    
	$custom_logo_id = get_theme_mod('custom_logo');
	$image = wp_get_attachment_image_src($custom_logo_id, 'full');
	return $image[0] ;
}

// Home Slider
function home_slider()
{
    $sliderData = [] ;
    $args = [
        'post_type'      => 'slider',
        'orderby'        => 'post_date',
        'order'          => 'DESC',
        'posts_per_page' => -1
    ] ;
    $data = get_posts($args);
    foreach($data as $row){
        array_push($sliderData,[
            'title'         => $row->post_title,
            'subtitle'      => wp_trim_words($row->post_content, 40, '...' ) ,
            'image'         => get_the_post_thumbnail_url( $row->ID ),
            'post_link'     => get_post_permalink($row->ID)
        ]);
    }
    return $sliderData ;
}

// Menu
function getMenu()
{
    $data           = [] ;
    $menuLocations  = get_nav_menu_locations(); 
    $menuID         = $menuLocations['primary-menu'];     
    $primaryNav     = wp_get_nav_menu_items($menuID);

    foreach($primaryNav as $nav){
        array_push($data,[
        	'title' 	=> $nav->title,
        	'url' 	    => $nav->url,
            'parent_id' => $nav->menu_item_parent,
            'menu_id'   => $nav->ID
        ]);
    }
    return arrayToObject($data);
}



function getMenuTest()
{
    $data           = [] ;
    $menuLocations  = get_nav_menu_locations(); 
    $menuID         = $menuLocations['primary-menu'];     
    $primaryNav     = wp_get_nav_menu_items($menuID);

   // return $primaryNav ;

    foreach($primaryNav as $nav){
        array_push($data,[
        	'title' 	=> $nav->title,
        	'url' 	    => $nav->url,
            'parent_id' => $nav->menu_item_parent,
            'menu_id'   => $nav->ID
        ]);
    }
    return arrayToObject($data);
}


// Slider
function getSlider()
{
    $data = [] ;
	$args = [
		'post_type'     => 'slider',
		'post_per_page' => '-1',
		'order' 		=> 'ASC'
    ];

	foreach (get_posts($args) as $row) {
		$record = [
			'id'  	   => $row->ID,
			'title'    => $row->post_title,
			'subtitle' => $row->post_excerpt,
            'image'    => get_the_post_thumbnail_url($row->ID),
            'url'      => get_permalink($row->ID)
		];
		array_push($data,$record);
	}
	return arrayToObject($data);

}

// Get Specialization 
function getSpecialization(){
    $data = [] ;
	$args = [
		'post_type'     => 'our_specializtion',
		'post_per_page' => '-1',
		'order' 		=> 'ASC'
    ];

    foreach (get_posts($args) as $row) {
		$record = [
			'id'  	   => $row->ID,
			'title'    => $row->post_title,
			'subtitle' => $row->post_excerpt,
            'image'    => get_the_post_thumbnail_url($row->ID),
            'url'      => get_permalink($row->ID)
		];
		array_push($data,$record);
	}
    if(count($data)>0){
        
        return arrayToObject($data);
    }

    else{
            return null ;
    }

}

// Get Homepage Project

function getProjectHomepage()
{
    $data = [] ;
	$args = [
		'post_type'     => 'projects',
		'post_per_page' => '20',
		'order' 		=> 'DESC'
    ];
    $result =  new WP_Query( $args );

    foreach ($result->posts as $row) {

        $isHomepage = get_post_meta( $row->ID , 'home_show_project' ,true ) ;

        if($isHomepage == "true"){
            $record = [
                'id'  	   => $row->ID,
                'title'    => $row->post_title,
                'subtitle' => $row->post_excerpt,
                'image'    => get_the_post_thumbnail_url($row->ID),
                'url'      => get_permalink($row->ID)
            ];
            array_push($data,$record);
        }

    }
    
    if(count($data)>0){
        
        return arrayToObject($data);
    }

    else{
            return null ;
    }


}


// Get Client

function homepageClient()
{
    $data = [] ;
	$args = [
		'post_type'     => 'clients',
		'post_per_page' => '20',
		'order' 		=> 'ASC'
    ];

    $record =  new WP_Query( $args );
    foreach ($record->posts as $row) {

		$record = [
			'id'  	   => $row->ID,
            'image'    => get_the_post_thumbnail_url($row->ID),
		];
		array_push($data,$record);

    }


    if(count($data)>0){
        
        return arrayToObject($data);
    }

    else{
            return null ;
    }

}


// Get Project Gallery

function getProjectGallery($id)
{
    $data = (explode(",",get_post_meta($id,'_project_gallery_metabox' , true))); 
    return  $data;
}


// Custom Body Class

function customBodyClass()
{
    global $wp ;
    
    if($wp->request == ''){
        
        $className = 'home' ; 
    }
    else if(is_singular('projects')){
        
        $className = 'project-page' ;
    }
    else{
         $className = $wp->request;
    }
    return $className ;
}

// Get team data

function getTeamData()
{
    $data = [] ;
	$args = [
		'post_type'     => 'team',
		'post_per_page' => '20',
		'order' 		=> 'ASC'
    ];
    $record =  new WP_Query( $args );
    foreach ($record->posts as $row) {
        $socialData = get_post_meta( $row->ID , '_team_social_link_url' ,true ) ;
		$record = [
			'id'  	    => $row->ID,
			'title'  	=> $row->post_title,
            'image'     => get_the_post_thumbnail_url($row->ID),
            'content'   => $row->post_content,
            'sociallink'=>  $socialData
		];
		array_push($data,$record);
    }

    if(count($data)>0){
        
        return arrayToObject($data);
    }

    else{
            return null ;
    }

}