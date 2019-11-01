<?php

// ENABLE TRANSLATION
add_action( 'after_setup_theme', 'act_theme_trans' );
function act_theme_trans(){
    load_theme_textdomain( 'act_theme', get_template_directory() . '/languages' );
}



// REGISTER CUSTOM TAXONOMY FOR PORTFOLIO
add_action( 'init', 'create_topics_hierarchical_taxonomy', 0 );
function create_topics_hierarchical_taxonomy() {
  $labels = array(
    'name' => _x( 'Portfolios', 'taxonomy general name' ),
    'singular_name' => _x( 'Portfolio', 'taxonomy singular name' ),
    'search_items' =>  __( 'Search Portfolios' ),
    'all_items' => __( 'All Portfolios' ),
    'parent_item' => __( 'Parent Portfolio' ),
    'parent_item_colon' => __( 'Parent Portfolio:' ),
    'edit_item' => __( 'Edit Portfolio' ),
    'update_item' => __( 'Update Portfolio' ),
    'add_new_item' => __( 'Add New Portfolio' ),
    'new_item_name' => __( 'New Portfolio Name' ),
    'menu_name' => __( 'Portfolio Categories' ),
  );

  register_taxonomy('portfolio_category',array('portfolio'), array(
    'hierarchical' => true,
    'labels' => $labels,
    'show_ui' => true,
    'show_admin_column' => true,
    'query_var' => true,
    'rewrite' => array( 'slug' => 'portfolio_category' ),
  ));

}



// REGISTER CUSTOM POST TYPE PORTFOLIO
function custom_post_type() {
	$labels = array(
		'name'                => _x( 'Portfolios', 'Post Type General Name', 'artware' ),
		'singular_name'       => _x( 'Portfolio', 'Post Type Singular Name', 'artware' ),
		'menu_name'           => __( 'Portfolios', 'artware' ),
		'parent_item_colon'   => __( 'Parent Portfolio', 'artware' ),
		'all_items'           => __( 'All Portfolios', 'artware' ),
		'view_item'           => __( 'View Portfolio', 'artware' ),
		'add_new_item'        => __( 'Add New Portfolio', 'artware' ),
		'add_new'             => __( 'Add New', 'artware' ),
		'edit_item'           => __( 'Edit Portfolio', 'artware' ),
		'update_item'         => __( 'Update Portfolio', 'artware' ),
		'search_items'        => __( 'Search Portfolio', 'artware' ),
		'not_found'           => __( 'Not Found', 'artware' ),
		'not_found_in_trash'  => __( 'Not found in Trash', 'artware' ),
	);
	$args = array(
		'label'               => __( 'portfolio', 'artware' ),
		'description'         => __( 'Portfolio news and reviews', 'artware' ),
		'labels'              => $labels,
		'supports'            => array( 'title', 'editor', 'excerpt', 'author', 'thumbnail', 'comments', 'revisions', 'custom-fields', 'page-attributes' ),
		'taxonomies'          => array( 'portfolio_category' ),
		'hierarchical'        => false,
		'public'              => true,
		'show_ui'             => true,
		'show_in_menu'        => true,
		'show_in_nav_menus'   => true,
		'show_in_admin_bar'   => true,
		'menu_position'       => 5,
    'menu_icon'           => 'dashicons-layout',
		'can_export'          => true,
		'has_archive'         => true,
		'exclude_from_search' => false,
		'publicly_queryable'  => true,
		'capability_type'     => 'page',
	);
	register_post_type( 'portfolio', $args );
}
add_action( 'init', 'custom_post_type', 0 );



// REGISTER WIDGET AREAS
add_action( 'widgets_init', 'act_widgets_init' );
function act_widgets_init() {
    register_sidebar( array(
  'name' => __( 'Header Top 1', 'act_sidebar1' ),
  'id' => 'sidebar-1',
  'description' => __( 'Widgets in this area will be shown on header top left side.', 'act_sidebar1' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Header Top 2', 'act_sidebar2' ),
  'id' => 'sidebar-2',
  'description' => __( 'Widgets in this area will be shown on header top right side.', 'act_sidebar2' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Footer 1', 'act_sidebar3' ),
  'id' => 'sidebar-3',
  'description' => __( 'Widgets in this area will be shown on footer.', 'act_sidebar3' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Footer 2', 'act_sidebar4' ),
  'id' => 'sidebar-4',
  'description' => __( 'Widgets in this area will be shown on footer.', 'act_sidebar4' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Footer 3', 'act_sidebar5' ),
  'id' => 'sidebar-5',
  'description' => __( 'Widgets in this area will be shown on footer.', 'act_sidebar5' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Footer 4', 'act_sidebar6' ),
  'id' => 'sidebar-6',
  'description' => __( 'Widgets in this area will be shown on footer.', 'act_sidebar6' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );

	register_sidebar( array(
  'name' => __( 'Header Bottom', 'act_sidebar7' ),
  'id' => 'sidebar-7',
  'description' => __( 'Widgets in this area will be shown on footer.', 'act_sidebar7' ),
  'before_widget' => '<li id="%1$s" class="widget %2$s">',
	'after_widget'  => '</li>',
	'before_title'  => '<h2 class="widgettitle">',
	'after_title'   => '</h2>',
    ) );
}



// HIDE ITEMS FROM ADMIN TOOLBAR
function remove_from_admin_bar($wp_admin_bar) {
    $wp_admin_bar->remove_node('updates');
    $wp_admin_bar->remove_node('comments');
    $wp_admin_bar->remove_node('new-content');
    $wp_admin_bar->remove_node('wp-logo');
}
add_action('admin_bar_menu', 'remove_from_admin_bar', 999);



// REGISTER MENU
function register_my_menu() {
  register_nav_menu('main-menu',__( 'Main Menu' ));
}
add_action( 'init', 'register_my_menu' );



// LOAD CUSTOM SCRIPTS
function load_scripts() {
  wp_enqueue_script( 'custom-script', get_template_directory_uri() . '/js/main.js', array( 'jquery' ) );
  wp_enqueue_script( 'custom-script2', 'https://cdnjs.cloudflare.com/ajax/libs/jquery.transit/0.9.9/jquery.transit.min.js', array() );
}
add_action( 'wp_enqueue_scripts', 'load_scripts' );



// ENABLE UPLOADING OF SVG AND FONT TYPE FILES
function custom_upload($mime_types){
    $mime_types['svg'] = 'image/svg+xml';
    $mime_types['woff'] = 'font/opentype';
	  $mime_types['woff2'] = 'font/opentype';
    return $mime_types;
}
add_filter('upload_mimes', 'custom_upload', 1, 1);



// REMOVE QUERY STRING FROM STATIC RESOURCES
function remove_cssjs_ver( $src ) {
 if( strpos( $src, '?ver=' ) )
 $src = remove_query_arg( 'ver', $src );
 return $src;
}
add_filter( 'style_loader_src', 'remove_cssjs_ver', 10, 2 );
add_filter( 'script_loader_src', 'remove_cssjs_ver', 10, 2 );



// DEFER PARSING OF JAVASCRIPT
if (!(is_admin() )) {
    function defer_parsing_of_js ( $url ) {
        if ( FALSE === strpos( $url, '.js' ) ) return $url;
        if ( strpos( $url, 'jquery.js' ) ) return $url;
        // return "$url' defer ";
        return "$url' defer onload='";
    }
    add_filter( 'clean_url', 'defer_parsing_of_js', 11, 1 );
}



// FIX PHP MAILER
class email_return_path {
	function __construct() { add_action( 'phpmailer_init', array( $this, 'fix' ) ); }
	function fix( $phpmailer ) { $phpmailer->Sender = $phpmailer->From; }
}
new email_return_path();



// REMOVE EMOJICONS
function disable_wp_emojicons() {
  remove_action( 'admin_print_styles', 'print_emoji_styles' );
  remove_action( 'wp_head', 'print_emoji_detection_script', 7 );
  remove_action( 'admin_print_scripts', 'print_emoji_detection_script' );
  remove_action( 'wp_print_styles', 'print_emoji_styles' );
  remove_filter( 'wp_mail', 'wp_staticize_emoji_for_email' );
  remove_filter( 'the_content_feed', 'wp_staticize_emoji' );
  remove_filter( 'comment_text_rss', 'wp_staticize_emoji' );
  add_filter( 'tiny_mce_plugins', 'disable_emojicons_tinymce' );
}
add_action( 'init', 'disable_wp_emojicons' );

function disable_emojicons_tinymce( $plugins ) {
  if ( is_array( $plugins ) ) { return array_diff( $plugins, array( 'wpemoji' ) ); } else { return array(); }
}
add_filter( 'emoji_svg_url', '__return_false' );



// REMOVE UNNEEDED META TAGS
remove_action('wp_head', 'rsd_link');
remove_action('wp_head', 'wlwmanifest_link');
remove_action('wp_head', 'wp_shortlink_wp_head');
remove_action('wp_head', 'wp_generator');



// REMOVE VISUAL COMPOSER META TAG
if ( class_exists( 'Vc_Manager' ) ) {
 function myoverride() { remove_action('wp_head', array(visual_composer(), 'addMetaData')); }
 add_action('init', 'myoverride', 100);
}



// DISABLE VISUAL COMPOSER - PRETTYPHOTO
function remove_vc_prettyphoto(){
 wp_dequeue_script( 'prettyphoto' );
 wp_deregister_script( 'prettyphoto' );
 wp_dequeue_style( 'prettyphoto' );
 wp_deregister_style( 'prettyphoto' );
}
add_action( 'wp_enqueue_scripts', 'remove_vc_prettyphoto', 9999 );



// DISABLE VC UPDATE NAG
setcookie('vchideactivationmsg', '1', strtotime('+3 years'), '/');
setcookie('vchideactivationmsg_vc11', (defined('WPB_VC_VERSION') ? WPB_VC_VERSION : '1'), strtotime('+3 years'), '/');



// DISABLE SEO YOAST NAG
function remove_yoast_license_nag_from_admin_page() {
    echo '<style>div.yoast-notice {display: none;}</style>';
}
add_action('admin_head', 'remove_yoast_license_nag_from_admin_page');



// DISABLE GUTENBERG
add_filter('use_block_editor_for_post', '__return_false', 10);
add_filter('use_block_editor_for_post_type', '__return_false', 10);



// REMOVE BLOCK CSS
function wps_deregister_styles() {
    wp_dequeue_style( 'wp-block-library' );
}
add_action( 'wp_print_styles', 'wps_deregister_styles', 100 );



// REMOVE RSS FEEDS
function disable_feeds() {
	wp_redirect( home_url() );
	die;
}
add_action( 'do_feed',      'disable_feeds', -1 );
add_action( 'do_feed_rdf',  'disable_feeds', -1 );
add_action( 'do_feed_rss',  'disable_feeds', -1 );
add_action( 'do_feed_rss2', 'disable_feeds', -1 );
add_action( 'do_feed_atom', 'disable_feeds', -1 );
add_action( 'do_feed_rss2_comments', 'disable_feeds', -1 );
add_action( 'do_feed_atom_comments', 'disable_feeds', -1 );
add_action( 'feed_links_show_posts_feed',    '__return_false', -1 );
add_action( 'feed_links_show_comments_feed', '__return_false', -1 );
remove_action( 'wp_head', 'feed_links',       2 );
remove_action( 'wp_head', 'feed_links_extra', 3 );




// O P T I O N A L    S E T T I N G S

// DISABLE WPML LANGUAGE SELECTOR CSS AND META TAG
// define('ICL_DONT_LOAD_LANGUAGE_SELECTOR_CSS', true);
// remove_action( 'wp_head', array( $sitepress, 'meta_generator_tag' ) );


// DISABLE REVOLUTION SLIDER META TAG
// function remove_revslider_meta_tag() {
//     return '';
// }
// add_filter( 'revslider_meta_generator', 'remove_revslider_meta_tag' );


// MAKE VC SHORTCODE READABLE FROM WIDGETS
// add_filter('widget_text', 'do_shortcode');


// RUN PHP CODE FROM TEXT WIDGET
// function php_execute($html){
// 	if(strpos($html,"<"."?php")!==false){
// 		ob_start(); eval("?".">".$html);
// 		$html=ob_get_contents();
// 		ob_end_clean();
// 	}
// 	return $html;
// }
// add_filter('widget_text','php_execute',100);


// ADD EXCERPT SUPPORT TO PAGES
// add_post_type_support( 'page', 'excerpt' );


// LIMIT EXCERPT TO # WORDS
// add_action( 'wp_enqueue_scripts', 'load_scripts' );
// function get_excerpt($limit, $source = null){
//     if($source == "content" ? ($excerpt = get_the_content()) : ($excerpt = get_the_excerpt()));
//     $excerpt = preg_replace(" (\[.*?\])",'',$excerpt);
//     $excerpt = strip_shortcodes($excerpt);
//     $excerpt = strip_tags($excerpt);
//     $excerpt = substr($excerpt, 0, $limit);
//     $excerpt = substr($excerpt, 0, strripos($excerpt, " "));
//     $excerpt = trim(preg_replace( '/\s+/', ' ', $excerpt));
//     $excerpt = $excerpt.' [...]';
//     return $excerpt;
// }


// DISABLE PORTFOLIOS FROM SEARCH RESULTS
// function SearchFilter($query) {
// 	  if ($query->is_search) {
// 		$query->set('post_type', array('page', 'post'));
// 	  }
// 	  return $query;
// }
// add_filter('pre_get_posts','SearchFilter');

?>
