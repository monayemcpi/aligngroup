<?php 
/**
 * Home Slider
 */
function home_slider_post_type() {
    $labels = array(
        'name'                  => _x( 'Home Slider', 'Post Type General Name', 'home' ),
        'singular_name'         => _x( 'Home Slider', 'Post Type Singular Name', 'home' ),
        'menu_name'             => __( 'Home Slider', 'home' ),
        'name_admin_bar'        => __( 'Home Slider', 'home' ),
        'all_items'             => __( 'All Home Slider', 'home' ),
        'add_new'               => __( 'New Home Slider', 'home' ),
        'add_new_item'          => __( 'New Home Slider', 'home' ),
        'new_item'              => __( 'New Home Slider', 'home' ),
        'edit_item'             => __( 'Edit Home Slider', 'home' ),
        'update_item'           => __( 'Update Home Slider', 'home' ),
        'view_item'             => __( 'View Home Slider', 'home' ),
        'search_items'          => __( 'Search Home Slider', 'home' ),
        'not_found'             => __( 'No Slider Found', 'home' ),
        'not_found_in_trash'    => __( 'No Slider Found In Trash', 'home' ),
        'items_list'            => __( 'List Of Home Slider', 'home' ),
        'items_list_navigation' => __( 'Home Slider Navigation', 'home' ),
        'filter_items_list'     => __( 'Filter Home Slider', 'home' ),
        'parent_item_colon'     => __( 'Home Slider Item:', 'home' ),
        'featured_image'        => __( 'Slider Image', 'home' ),
		'set_featured_image'    => __( 'Set Slider Image', 'home' ),
		'remove_featured_image' => _x( 'Remove slider image', 'home' ),
		'use_featured_image'    => _x( 'Use as slider image', 'home' ),
    );
    $args = array(
        'label'                 => __( 'Home Slider', 'home' ),
        'description'           => __( 'Home Slider Content', 'home' ),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'hierarchical'          => true,
        'can_export'            => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'menu_icon'             => 'dashicons-images-alt',
        'supports'              => array( 
                                    'title',
                                    'thumbnail',
                                    'editor',
                                    'excerpt',
                                    )
    );
    register_post_type( 'slider', $args );
}
add_action( 'init', 'home_slider_post_type' );
add_filter( 'gettext', 'change_publish_button', 10, 2 );

function change_publish_button( $translation, $text ) {

if ( $text == 'Publish' )
    return 'Save';

return $translation;
}

/*
 * End home slider
 */

 /*
 * Start Specialization Section
 */

function home_our_specialization_post_type() {
    $labels = array(
        'name'                  => _x( 'Our Specilization', 'Post Type General Name', 'home' ),
        'singular_name'         => _x( 'Our Specilization', 'Post Type Singular Name', 'home' ),
        'menu_name'             => __( 'Our Specilization', 'home' ),
        'name_admin_bar'        => __( 'Our Specilization', 'home' ),
        'all_items'             => __( 'All Our Specilization', 'home' ),
        'add_new'               => __( 'New Our Specilization', 'home' ),
        'add_new_item'          => __( 'New Our Specilization', 'home' ),
        'new_item'              => __( 'New Our Specilization', 'home' ),
        'edit_item'             => __( 'Edit Our Specilization', 'home' ),
        'update_item'           => __( 'Update Our Specilization', 'home' ),
        'view_item'             => __( 'View Our Specilization', 'home' ),
        'search_items'          => __( 'Search Our Specilization', 'home' ),
        'not_found'             => __( 'No Specialization Item Found', 'home' ),
        'not_found_in_trash'    => __( 'No Specialization Item Found In Trash', 'home' ),
        'items_list'            => __( 'List Of Our Specialization', 'home' ),
        'items_list_navigation' => __( 'Our Specialization Navigation', 'home' ),
        'filter_items_list'     => __( 'Filter Our Specialization', 'home' ),
        'parent_item_colon'     => __( 'Our Specialization Item:', 'home' ),
        'featured_image'        => __( 'Specialization Icon', 'home' ),
        'set_featured_image'    => __( 'Set Specialization Icon', 'home' ),
        'remove_featured_image' => _x( 'Remove Specialization Image', 'home' ),
        'use_featured_image'    => _x( 'Use as Specialization Image', 'home' ),
    );
    $args = array(
        'label'                 => __( 'Our Specilization', 'home' ),
        'description'           => __( 'Our Specilization Content', 'home' ),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'hierarchical'          => true,
        'can_export'            => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'menu_icon'             => 'dashicons-buddicons-community',
        'supports'              => array( 
                                    'title',
                                    'thumbnail',
                                    'editor',
                                    'excerpt',
                                    )
    );
    register_post_type( 'our_specializtion', $args );
}
add_action( 'init', 'home_our_specialization_post_type' );
/*
 * End Specialization Section
 */

/*
 * Start Project Section
 */


// Project Post Type

function project_post_type()
{
	$labels = array(
        'name'                  => _x( 'Projects', 'Post Type General Name', 'site' ),
        'singular_name'         => _x( 'Projects', 'Post Type Singular Name', 'site' ),
        'menu_name'             => __( 'Our Projects', 'site' ),
        'name_admin_bar'        => __( 'Projects', 'site' ),
        'all_items'             => __( 'All Projects', 'site' ),
        'add_new'               => __( 'Add New Project', 'site' ),
        'add_new_item'          => __( 'Add New Project', 'site' ),
        'new_item'              => __( 'New Project', 'site' ),
        'edit_item'             => __( 'Edit Project', 'site' ),
        'update_item'           => __( 'Update Project', 'site' ),
        'view_item'             => __( 'View Project', 'site' ),
        'search_items'          => __( 'Search Project', 'site' ),
        'not_found'             => __( 'No Project Found', 'site' ),
        'not_found_in_trash'    => __( 'No Project found in Trash', 'site' ),
        'items_list'            => __( 'Project List', 'site' ),
        'items_list_navigation' => __( 'Project List', 'site' ),
        'filter_items_list'     => __( 'Filter Project List', 'site' ),
        'featured_image'        => __( 'Project Image', 'home' ),
		'set_featured_image'    => __( 'Set Project Image', 'home' ),
		'remove_featured_image' => _x( 'Remove Project image', 'home' ),
		'use_featured_image'    => _x( 'Use as project image', 'home' ),
        'parent_item_colon'     => __( 'Project Item:', 'site' )
    );

    $args = array(
        'label'                 => __( 'Projects', 'site' ),
        'description'           => __( 'Project Content', 'site' ),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'hierarchical'          => true,
        'can_export'            => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'show_in_rest'          => true,
        'taxonomies'            => array('site-project-category'),
        'menu_icon'             => 'dashicons-admin-multisite',
        'supports'              => array( 
                                    'title',
                                    'thumbnail',
                                    'editor',
                                    'excerpt'
                                    )
    );

    register_post_type( 'projects', $args );
}
add_action( 'init', 'project_post_type' );

// Project Category 

function project_post_type_texanomy()
{
    $labels = array(
        'name'                       => _x( 'Project Category', 'Taxonomy General Name', 'site' ),
        'singular_name'              => _x( 'Project Category', 'Taxonomy Singular Name', 'site' ),
        'menu_name'                  => __( 'Project Category', 'site' ),
        'all_items'                  => __( 'All Project Category', 'site' ),
        'parent_item'                => __( 'Project Category', 'site' ),
        'parent_item_colon'          => __( 'Parent Project Category:', 'site' ),
        'new_item_name'              => __( 'New Project Category Name', 'site' ),
        'add_new_item'               => __( 'Add New Project Category', 'site' ),
        'edit_item'                  => __( 'Edit Project Category', 'site' ),
        'update_item'                => __( 'Update Project Category', 'site' ),
        'view_item'                  => __( 'View Project Category', 'site' ),
        'separate_items_with_commas' => __( 'Separate Project Category with commas', 'site' ),
        'add_or_remove_items'        => __( 'Add or remove Project Category', 'site' ),
        'choose_from_most_used'      => __( 'Choose from the most used', 'site' ),
        'popular_items'              => __( 'Popular Project Category', 'site' ),
        'search_items'               => __( 'Search Project Category', 'site' ),
        'not_found'                  => __( 'Not Found', 'site' ),
        'items_list'                 => __( 'Project Category list', 'site' ),
        'items_list_navigation'      => __( 'Project Category list navigation', 'site' )
    );
     $args = array(
        'labels'                     => $labels,
        'description'                => __( 'Project Content', 'site' ),
        'hierarchical'               => true,
        'public'                     => true,
        'show_ui'                    => true,
        'show_admin_column'          => true,
        'show_in_nav_menus'          => true,
        'show_tagcloud'              => true,
        'update_count_callback'      => '_update_post_term_count',
         'show_in_rest'              => true,
        'query_var'                  => true
    );
     register_taxonomy( 'project_category', array( 'projects' ), $args );
}

add_action( 'init', 'project_post_type_texanomy', 0 );


// Show Project In Home Custom Field
add_action('add_meta_boxes','show_project_home_metabox',9);
function show_project_home_metabox()
{
    add_meta_box( 'show_project_home', 'Show Project In Homepage',  'show_project_meta_box_callback', 'projects','side','low') ;
}
 function show_project_meta_box_callback($post)
 {
     wp_nonce_field( 'show_project_meta_box_save','show_project_meta_box_nonce') ;

    if(isset($post->ID)){
        $value = get_post_meta( $post->ID , 'home_show_project' ,true ) ;
    }
    else{
        $value = '' ;
    }

     echo '<label>' ;
     echo '<input type="checkbox"  name="home_show_project" id="home_show_project" value="true"> Show In Homepage </label>' ;
 ?>
 <script type="text/javascript">
     
     jQuery(document).ready(function(){

        var homeshow_project = '<?php echo $value ; ?>' ; 
 
         if(homeshow_project=="true")
         {
             jQuery("#home_show_project").prop('checked',true) ;
         }
         if(jQuery("#home_show_project").val() == "true"){
            jQuery(this).prop('checked',true) ;
         }
 
     }) ;
 
 </script>

 <?php    
 }
 function show_project_meta_box_save($post_id)
 {
     if ( ! isset( $_POST['show_project_meta_box_nonce'] ) ) 
     {
         return;
     }
     if ( ! wp_verify_nonce( $_POST['show_project_meta_box_nonce'], 'show_project_meta_box_save' ) ) 
     {
         return;
     }
 
     if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
     {
         return;
     }
 
     if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) 
     {
         if ( ! current_user_can( 'edit_page', $post_id ) ) 
         {
             return;
 
         }
     } 
        $my_data = sanitize_text_field( $_POST['home_show_project'] );
        update_post_meta( $post_id, 'home_show_project', $my_data );
 }
 add_action('save_post' , 'show_project_meta_box_save') ;


// Project Gallery
add_action('add_meta_boxes','project_gallery_metabox');
function project_gallery_metabox()
{

	add_meta_box( 'project_gallery_metabox', 'Project Gallery','project_gallery_metabox_callback','projects');
}

function project_gallery_metabox_callback($post)
{
	wp_nonce_field('project_gallery_meta_box_save','project_gallery_meta_box_nonce') ;

?>

<div class="project-gallery-section">
    <button type="button" class="button-primary" id="projectGalleryBtn"> Add New Gallery Image </button>
    <ul class="project-gallery">
        <?php  
            $data = (explode(",",get_post_meta($post->ID,'_project_gallery_metabox' , true))); 
            for($i = 0; $i<count($data) ; $i++):
                if($data[$i] != null):
        ?>
        <li>
            <span class="dashicons dashicons-trash remove-items removeItem"></span>
            <img src="<?php echo $data[$i] ; ?>">
            <input type="hidden" name="project_gallery[]" id="projectGallery" value="<?php echo $data[$i] ;?>">
        </li>
        <?php endif ; endfor ; ?>
    </ul>
</div>
<style type="text/css">
.project-gallery-section {
    height: 100%;
    width: 100%;
}
.project-gallery-section ul li {
    display: inline-block;
    margin-right: 10px;
}
.project-gallery-section img {
    height: 100px;
    width: 100px;
    object-fit: cover;
}
.project-gallery-section span {
    position: absolute;
    display: block;
    background: #c9c9c9;
    width: 100px;
    cursor: pointer;
    bottom: 35px;
    padding: 5px 0px;
    transition: all 0.5s ease-in;
    opacity: 0;
    visibility: hidden;
}
.project-gallery-section li:hover span {
    background: red;
    color: #fff;
    visibility: visible;
    opacity: 1;
}
</style>
<script type="text/javascript">

jQuery(document).ready(function() {
    var mediaUploader;
    jQuery("#projectGalleryBtn").click(function(e) {
        e.preventDefault();

        if (mediaUploader) {
            mediaUploader.open();
            return;
        }
        mediaUploader = wp.media.frames.file_frame = wp.media({
            title: 'Choose Activities Left Item Image',
            button: {
                text: 'Choose Picture'
            },
            multiple: false
        })
        mediaUploader.on('select', function() {
            attachments = mediaUploader.state().get('selection').first().toJSON();
            var image = '<li><span class="dashicons dashicons-trash removeItem"></span><img src="' + attachments.url + '"><input type="hidden" name="project_gallery[]" id="projectGallery" value="' + attachments.url + '"></li>';
            jQuery(".project-gallery").append(image);
        })
        mediaUploader.open();
    })
    jQuery(".project-gallery").on('click','.removeItem',function(){
        jQuery(this).closest('li').remove() ;
    })
})	
</script>
<?php

}

function project_gallery_meta_box_save($post_id)
{
    if ( ! isset( $_POST['project_gallery_meta_box_nonce'] ) ) 
    {
        return;
    }
    if ( ! wp_verify_nonce( $_POST['project_gallery_meta_box_nonce'], 'project_gallery_meta_box_save' ) ) 
    {
        return;
    }

    if ( defined( 'DOING_AUTOSAVE' ) && DOING_AUTOSAVE ) 
    {
        return;
    }

    if ( isset( $_POST['post_type'] ) && 'page' == $_POST['post_type'] ) 
    {
        if ( ! current_user_can( 'edit_page', $post_id ) ) 
        {
            return;

        }
    }
    $my_data = implode(",",$_POST['project_gallery']);
    update_post_meta( $post_id, '_project_gallery_metabox', $my_data);
}
add_action('save_post','project_gallery_meta_box_save') ;

 /*
 * End Project  Section
 */

 /*
 * Start Client  Section
 */
 
function clients_post_type()
{
    $labels = array(
        'name'                  => _x( 'Clients', 'Post Type General Name', 'clients' ),
        'singular_name'         => _x( 'Clients', 'Post Type Singular Name', 'clients' ),
        'menu_name'             => __( 'Our Clients', 'clients' ),
        'name_admin_bar'        => __( 'Clients', 'clients' ),
        'all_items'             => __( 'All Clients', 'clients' ),
        'add_new'               => __( 'Add New Client ', 'clients' ),
        'add_new_item'          => __( 'Add New Client ', 'clients' ),
        'new_item'              => __( 'New Client ', 'clients' ),
        'edit_item'             => __( 'Edit Client ', 'clients' ),
        'update_item'           => __( 'Update Client', 'clients' ),
        'view_item'             => __( 'View Client ', 'clients' ),
        'search_items'          => __( 'Search Client ', 'clients' ),
        'not_found'             => __( 'No Client Found', 'clients' ),
        'not_found_in_trash'    => __( 'No client found in Trash', 'clients' ),
        'items_list'            => __( 'Client List', 'clients' ),
        'items_list_navigation' => __( 'Client List', 'clients' ),
        'filter_items_list'     => __( 'Filter Client List', 'clients' ),
        'featured_image'        => __( 'Client Image', 'clients' ),
        'set_featured_image'    => __( 'Set Client Image', 'clients' ),
        'remove_featured_image' => _x( 'Remove Client image', 'clients' ),
        'use_featured_image'    => _x( 'Use as Client image', 'clients' ),
        'parent_item_colon'     => __( 'Clients Item:', 'clients' )
    );

    $args = array(
        'label'                 => __( 'Clients', 'clients' ),
        'description'           => __( 'Clients Content', 'clients' ),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'hierarchical'          => true,
        'can_export'            => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'menu_icon'             => 'dashicons-buddicons-buddypress-logo',
        'supports'              => array( 
                                    'title',
                                    'thumbnail',
                                    )
    );

    register_post_type( 'clients', $args );
}
add_action( 'init', 'clients_post_type' );

 /*
 * End Client  Section
 */


/*
 * Start Team  Section
*/

function team_post_type()
{
    $labels = array(
        'name'                  => _x( 'Our Team', 'Post Type General Name', 'team' ),
        'singular_name'         => _x( 'team', 'Post Type Singular Name', 'team' ),
        'menu_name'             => __( 'Our Team', 'team' ),
        'name_admin_bar'        => __( 'team', 'team' ),
        'all_items'             => __( 'All Team', 'team' ),
        'add_new'               => __( 'Add New Team Member', 'team' ),
        'add_new_item'          => __( 'Add New Team Member', 'team' ),
        'new_item'              => __( 'New Team Member', 'team' ),
        'edit_item'             => __( 'Edit Team Member', 'team' ),
        'update_item'           => __( 'Update Team Member', 'team' ),
        'view_item'             => __( 'View Team Member', 'team' ),
        'search_items'          => __( 'Search Team Member', 'team' ),
        'not_found'             => __( 'No Team Member Found', 'team' ),
        'not_found_in_trash'    => __( 'No Team Member found in Trash', 'team' ),
        'items_list'            => __( 'Team List', 'team' ),
        'items_list_navigation' => __( 'Team List', 'team' ),
        'filter_items_list'     => __( 'Filter Team List', 'team' ),
        'featured_image'        => __( 'Team Member Image', 'team' ),
        'set_featured_image'    => __( 'Set  as Team Member Image', 'team' ),
        'remove_featured_image' => _x( 'Remove Team Memeber Image', 'team' ),
        'use_featured_image'    => _x( 'Use as Team Member Image', 'team' ),
        'parent_item_colon'     => __( 'team Item:', 'team' )
    );

    $args = array(
        'label'                 => __( 'team', 'team' ),
        'description'           => __( 'team Content', 'team' ),
        'labels'                => $labels,
        'public'                => true,
        'publicly_queryable'    => true,
        'show_ui'               => true,
        'show_in_nav_menus'     => true,
        'show_in_menu'          => true,
        'show_in_admin_bar'     => true,
        'has_archive'           => true,
        'capability_type'       => 'post',
        'menu_position'         => 5,
        'hierarchical'          => true,
        'can_export'            => true,
        'exclude_from_search'   => false,
        'query_var'             => true,
        'menu_icon'             => 'dashicons-businessman',
        'supports'              => array( 
                                    'title',
                                    'thumbnail',
                                    'editor',
                                    )
    );

    register_post_type( 'team', $args );
}
add_action( 'init', 'team_post_type' );


// Social Link Metabox
add_action('add_meta_boxes','team_social_link_metabox_register');
function team_social_link_metabox_register(){
    add_meta_box('team_social_link_metabox', 'Social Links', 'team_social_link_metabox_func','team');
}
function team_social_link_metabox_func($post){
    $socialData = explode(",",get_post_meta($post->ID,'_team_social_link_url', true));
    if(isset($socialData)):
?>
    <p><label> <strong> Facebook Link <strong> </label> </p>
    <p><input type="text" placeholder="Enter Facebook Link" name="facebook_link" size="60" value="<?php echo $socialData[0]; ?>" ></p>
    <hr>
    <p><label> <strong> Twitter Link <strong> </label> </p>
    <p><input type="text" placeholder="Enter Twitter Link" name="twitter_link" size="60"  value="<?php echo $socialData[1]; ?>"></p>
    <hr>
    <p><label> <strong> Linkedin Link <strong> </label> </p>
    <p><input type="text" placeholder="Enter Linkedin Link" name="linkedin_link" size="60" value="<?php echo $socialData[2]; ?>"></p>
    <hr>
    <p><label> <strong> Instagram Link <strong> </label> </p>
    <p><input type="text" placeholder="Enter Instagram Link" name="instagram_link" size="60" value="<?php echo $socialData[3]; ?>"></p>
<?php
    endif;
}

function team_social_link_metabox_save($post_id){
    

    if( isset($_POST['facebook_link']) && isset($_POST['twitter_link']) && isset($_POST['linkedin_link']) && isset($_POST['instagram_link'])){

       $data = implode(",",array(
            $_POST['facebook_link'],
            $_POST['twitter_link'],
            $_POST['linkedin_link'],
            $_POST['instagram_link']
       ));
    }

    update_post_meta($post_id, '_team_social_link_url',$data);

}
add_action( 'save_post','team_social_link_metabox_save');




/*
 * End Team  Section
*/

