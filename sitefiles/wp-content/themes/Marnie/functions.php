<?php 

add_action('wp_ajax_cvf_send_message', array('CVF_Posts', 'cvf_send_message') );
add_action('wp_ajax_nopriv_cvf_send_message', array('CVF_Posts', 'cvf_send_message') );
add_filter('wp_mail_content_type', array('CVF_Posts', 'cvf_mail_content_type') );

class CVF_Posts {
    
    public static function cvf_send_message() {
        
        if (isset($_POST['message'])) {
            
            // $to = get_option('admin_email');
            $to = 'alextryonpdx@gmail.com';
            $headers = 'From: ' . $_POST['name'] . ' <"' . $_POST['email'] . '">';
            $subject = "AlamedaDental | New Message from " . $_POST['name'];
            
            ob_start();
            
            echo '
                <h2>Message:</h2>' . 
                wpautop($_POST['message']) . '
                <br />
                --
                <p><a href = "' . home_url() . '">AlamedaDental.com</a></p>
            ';
            
            $message = ob_get_contents();
            
            ob_end_clean();

            $mail = wp_mail($to, $subject, $message, $headers);
            
            if($mail){
                echo 'success';
            }
        }
        
        exit();
        
    }
        
    public static function cvf_mail_content_type() {
        return "text/html";
    }
}


function marnie_styles() {
    wp_register_style('fonts', get_stylesheet_directory_uri() . '/fonts.css', array(), 'all');
    wp_enqueue_style('fonts'); // Enqueue it!
    wp_register_style('style', get_stylesheet_directory_uri() . '/style.css', array(), 'all');
    wp_enqueue_style('style'); // Enqueue it!
    wp_register_style('custom', get_stylesheet_directory_uri() . '/custom.css', array(), 'all');
    wp_enqueue_style('custom'); // Enqueue it!
}
add_action('wp_enqueue_scripts', 'marnie_styles'); // Add Theme Stylesheet



function mytheme_excerpt_length() {
  return 80;
}
add_filter('excerpt_length','mytheme_excerpt_length');



/*------------------------------------*\
	Custom Post Types
\*------------------------------------*/

// Create 1 Custom Post type for a Demo, called HTML5-Blank
function create_post_type_services()
{
    register_taxonomy_for_object_type('category', 'services'); // Register Taxonomies for Category
    register_taxonomy_for_object_type('post_tag', 'services');
    register_post_type('services', // Register Custom Post Type
        array(
        'labels' => array(
            'name' => __('Services', 'services'), // Rename these to suit
            'singular_name' => __('Service', 'services'),
            'add_new' => __('Add New', 'services'),
            'add_new_item' => __('Add New Service', 'services'),
            'edit' => __('Edit', 'services'),
            'edit_item' => __('Edit Service', 'services'),
            'new_item' => __('New Service', 'services'),
            'view' => __('View Service', 'services'),
            'view_item' => __('View Service', 'services'),
            'search_items' => __('Search Services', 'services'),
            'not_found' => __('No Services found', 'services'),
            'not_found_in_trash' => __('No Services found in Trash', 'services')
        ),
        'public' => true,
        'hierarchical' => true, // Allows your posts to behave like Hierarchy Pages
        'has_archive' => true,
        'supports' => array(
            'title',
            'editor',
            'excerpt',
            'thumbnail'
        ), // Go to Dashboard Custom HTML5 Blank post for supports
        'can_export' => true, // Allows export in Tools > Export
        'taxonomies' => array(
            'post_tag',
            'category'
        ) // Add Category and Post Tags support
    ));
}
add_action('init', 'create_post_type_services'); // Add our HTML5 Blank Custom Post Type
/*------------------------------------*\
	ShortCode Functions
\*------------------------------------*/

//accent text
function startAccent(){
    return "<span class='accent'>";
}
add_shortcode( 'accent', 'startAccent' );


//end text accent 
function endAccent(){
    return "</span>";
}
add_shortcode( 'end', 'endAccent' );

//lighten text
function startLighter(){
    return "<span class='lighter'>";
}
add_shortcode( 'lighter', 'startLighter' );


//end text accent 
function endLighter(){
    return "</span>";
}
add_shortcode( 'end-lighter', 'endLighter' );


//2-columns text
function halfWide(){
    return "<span class='halfwide'>";
}
add_shortcode( 'half-column', 'halfWide' );
//end 2-columns 
add_shortcode( 'end-half-column', 'endAccent' );




// create a styled button
function readMore() {
    return '<a onclick="readMore(this)" class="read-more"> READ MORE...</a></p><div class="more">';

}
add_shortcode('more','readMore');

// create a styled button
function endMore() {
    return '</div>';

}
add_shortcode('end-more','endMore');



?>