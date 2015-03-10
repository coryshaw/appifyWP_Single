<?php
/**
 * Appify functions and definitions
 *
 * Sets up the theme and provides some helper functions. Some helper functions
 * are used in the theme as custom template tags. Others are attached to action and
 * filter hooks in WordPress to change core functionality.
 *
 * The first function, Appify_setup(), sets up the theme by registering support
 * for various features in WordPress, such as post thumbnails, navigation menus, and the like.
 *
 * When using a child theme (see http://codex.wordpress.org/Theme_Development and
 * http://codex.wordpress.org/Child_Themes), you can override certain functions
 * (those wrapped in a function_exists() call) by defining them first in your child theme's
 * functions.php file. The child theme's functions.php file is included before the parent
 * theme's file, so the child theme functions would be used.
 *
 * Functions that are not pluggable (not wrapped in function_exists()) are instead attached
 * to a filter or action hook. The hook can be removed by using remove_action() or
 * remove_filter() and you can attach your own function to the hook.
 *
 * We can remove the parent theme's hook only after it is attached, which means we need to
 * wait until setting up the child theme:
 *
 * <code>
 * add_action( 'after_setup_theme', 'my_child_theme_setup' );
 * function my_child_theme_setup() {
 *     // We are providing our own filter for excerpt_length (or using the unfiltered value)
 *     remove_filter( 'excerpt_length', 'Appify_excerpt_length' );
 *     ...
 * }
 * </code>
 *
 * For more information on hooks, actions, and filters, see http://codex.wordpress.org/Plugin_API.
 *
 * @package WordPress
 * @subpackage AppifyWP
 */

/**
 * Set the content width based on the theme's design and stylesheet.
 *
 * Used to set the width of images and content. Should be equal to the width the theme
 * is designed for, generally via the style.css stylesheet.
 */
if ( ! isset( $content_width ) )
	$content_width = 500;

/** Tell WordPress to run Appify_setup() when the 'after_setup_theme' hook is run. */
add_action( 'after_setup_theme', 'Appify_setup' );

if ( ! function_exists( 'Appify_setup' ) ):
/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which runs
 * before the init hook. The init hook is too late for some features, such as indicating
 * support post thumbnails.
 *
 * To override Appify_setup() in a child theme, add your own Appify_setup to your child theme's
 * functions.php file.
 *
 * @uses add_theme_support() To add support for post thumbnails and automatic feed links.
 * @uses register_nav_menus() To add support for navigation menus.
 * @uses add_custom_background() To add support for a custom background.
 * @uses add_editor_style() To style the visual editor.
 * @uses load_theme_textdomain() For translation/localization support.
 * @uses add_custom_image_header() To add support for a custom header.
 * @uses register_default_headers() To register the default custom header images provided with the theme.
 * @uses set_post_thumbnail_size() To set a custom post thumbnail size.
 *
 * @since Twenty Ten 1.0
 */
function Appify_setup() {

	// This theme styles the visual editor with editor-style.css to match the theme style.
	add_editor_style();

	// This theme uses post thumbnails
	add_theme_support( 'post-thumbnails' );

	// Add default posts and comments RSS feed links to head
	add_theme_support( 'automatic-feed-links' );

	// Make theme available for translation
	// Translations can be filed in the /languages/ directory
	load_theme_textdomain( 'Appify', TEMPLATEPATH . '/languages' );

	$locale = get_locale();
	$locale_file = TEMPLATEPATH . "/languages/$locale.php";
	if ( is_readable( $locale_file ) )
		require_once( $locale_file );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus( array(
		'primary' => __( 'Primary Navigation', 'Appify' ),
	) );

	// This theme allows users to set a custom background
	//add_custom_background();

	// Your changeable header business starts here
	define( 'HEADER_TEXTCOLOR', '' );
	// No CSS, just IMG call. The %s is a placeholder for the theme template directory URI.
	//define( 'HEADER_IMAGE', '%s/images/headers/app_icon.png' );
	
	// The height and width of your custom header. You can hook into the theme's own filters to change these values.
	// Add a filter to Appify_header_image_width and Appify_header_image_height to change these values.
	//define( 'HEADER_IMAGE_WIDTH', apply_filters( 'Appify_header_image_width', 80 ) );
	//define( 'HEADER_IMAGE_HEIGHT', apply_filters( 'Appify_header_image_height', 80 ) );

	// We'll be using post thumbnails for custom header images on posts and pages.
	// We want them to be 940 pixels wide by 198 pixels tall.
	// Larger images will be auto-cropped to fit, smaller ones will be ignored. See header.php.
	//set_post_thumbnail_size( HEADER_IMAGE_WIDTH, HEADER_IMAGE_HEIGHT, true );

	// Don't support text inside the header image.
	define( 'NO_HEADER_TEXT', true );

	// Add a way for the custom header to be styled in the admin panel that controls
	// custom headers. See Appify_admin_header_style(), below.
	//add_custom_image_header( '', 'Appify_admin_header_style' );

	// ... and thus ends the changeable header business.

	// Default custom headers packaged with the theme. %s is a placeholder for the theme template directory URI.
//	register_default_headers( array(
//		'Default' => array(
//			'url' => '%s/images/headers/app_icon.png',
//			'thumbnail_url' => '%s/images/headers/app_icon.png',
//			/* translators: header image description */
//			'description' => __( 'Default', 'Appify' )
//		)
//	) );
}
endif;

if ( ! function_exists( 'Appify_admin_header_style' ) ) :
/**
 * Styles the header image displayed on the Appearance > Header admin panel.
 *
 * Referenced via add_custom_image_header() in Appify_setup().
 *
 * @since Twenty Ten 1.0
 */
function Appify_admin_header_style() {
?>
<style type="text/css">
/* Shows the same border as on front end */
#headimg {
	border-bottom: 1px solid #000;
	border-top: 4px solid #000;
}
/* If NO_HEADER_TEXT is false, you would style the text with these selectors:
	#headimg #name { }
	#headimg #desc { }
*/
</style>
<?php
}
endif;

/**
 * Makes some changes to the <title> tag, by filtering the output of wp_title().
 *
 * If we have a site description and we're viewing the home page or a blog posts
 * page (when using a static front page), then we will add the site description.
 *
 * If we're viewing a search result, then we're going to recreate the title entirely.
 * We're going to add page numbers to all titles as well, to the middle of a search
 * result title and the end of all other titles.
 *
 * The site title also gets added to all titles.
 *
 * @since Twenty Ten 1.0
 *
 * @param string $title Title generated by wp_title()
 * @param string $separator The separator passed to wp_title(). Twenty Ten uses a
 * 	vertical bar, "|", as a separator in header.php.
 * @return string The new title, ready for the <title> tag.
 */
function Appify_filter_wp_title( $title, $separator ) {
	// Don't affect wp_title() calls in feeds.
	if ( is_feed() )
		return $title;

	// The $paged global variable contains the page number of a listing of posts.
	// The $page global variable contains the page number of a single post that is paged.
	// We'll display whichever one applies, if we're not looking at the first page.
	global $paged, $page;

	if ( is_search() ) {
		// If we're a search, let's start over:
		$title = sprintf( __( 'Search results for %s', 'Appify' ), '"' . get_search_query() . '"' );
		// Add a page number if we're on page 2 or more:
		if ( $paged >= 2 )
			$title .= " $separator " . sprintf( __( 'Page %s', 'Appify' ), $paged );
		// Add the site name to the end:
		$title .= " $separator " . get_bloginfo( 'name', 'display' );
		// We're done. Let's send the new title back to wp_title():
		return $title;
	}

	// Otherwise, let's start by adding the site name to the end:
	$title .= get_bloginfo( 'name', 'display' );

	// If we have a site description and we're on the home/front page, add the description:
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title .= " $separator " . $site_description;

	// Add a page number if necessary:
	if ( $paged >= 2 || $page >= 2 )
		$title .= " $separator " . sprintf( __( 'Page %s', 'Appify' ), max( $paged, $page ) );

	// Return the new title to wp_title():
	return $title;
}
add_filter( 'wp_title', 'Appify_filter_wp_title', 10, 2 );

/**
 * Get our wp_nav_menu() fallback, wp_page_menu(), to show a home link.
 *
 * To override this in a child theme, remove the filter and optionally add
 * your own function tied to the wp_page_menu_args filter hook.
 *
 * @since Twenty Ten 1.0
 */
function Appify_page_menu_args( $args ) {
	$args['show_home'] = true;
	return $args;
}
add_filter( 'wp_page_menu_args', 'Appify_page_menu_args' );

/**
 * Sets the post excerpt length to 40 characters.
 *
 * To override this length in a child theme, remove the filter and add your own
 * function tied to the excerpt_length filter hook.
 *
 * @since Twenty Ten 1.0
 * @return int
 */
function Appify_excerpt_length( $length ) {
	return 40;
}
add_filter( 'excerpt_length', 'Appify_excerpt_length' );

/**
 * Returns a "Continue Reading" link for excerpts
 *
 * @since Twenty Ten 1.0
 * @return string "Continue Reading" link
 */
function Appify_continue_reading_link() {
	return ' <a href="'. get_permalink() . '">' . __( 'Continue reading <span class="meta-nav">&rarr;</span>', 'Appify' ) . '</a>';
}

/**
 * Replaces "[...]" (appended to automatically generated excerpts) with an ellipsis and Appify_continue_reading_link().
 *
 * To override this in a child theme, remove the filter and add your own
 * function tied to the excerpt_more filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string An ellipsis
 */
function Appify_auto_excerpt_more( $more ) {
	return ' &hellip;' . Appify_continue_reading_link();
}
add_filter( 'excerpt_more', 'Appify_auto_excerpt_more' );

/**
 * Adds a pretty "Continue Reading" link to custom post excerpts.
 *
 * To override this link in a child theme, remove the filter and add your own
 * function tied to the get_the_excerpt filter hook.
 *
 * @since Twenty Ten 1.0
 * @return string Excerpt with a pretty "Continue Reading" link
 */
function Appify_custom_excerpt_more( $output ) {
	if ( has_excerpt() && ! is_attachment() ) {
		$output .= Appify_continue_reading_link();
	}
	return $output;
}
add_filter( 'get_the_excerpt', 'Appify_custom_excerpt_more' );

/**
 * Remove inline styles printed when the gallery shortcode is used.
 *
 * Galleries are styled by the theme in Twenty Ten's style.css.
 *
 * @since Twenty Ten 1.0
 * @return string The gallery style filter, with the styles themselves removed.
 */
function Appify_remove_gallery_css( $css ) {
	return preg_replace( "#<style type='text/css'>(.*?)</style>#s", '', $css );
}
add_filter( 'gallery_style', 'Appify_remove_gallery_css' );

if ( ! function_exists( 'Appify_comment' ) ) :
/**
 * Template for comments and pingbacks.
 *
 * To override this walker in a child theme without modifying the comments template
 * simply create your own Appify_comment(), and that function will be used instead.
 *
 * Used as a callback by wp_list_comments() for displaying the comments.
 *
 * @since Twenty Ten 1.0
 */
function Appify_comment( $comment, $args, $depth ) {
	$GLOBALS['comment'] = $comment;
	switch ( $comment->comment_type ) :
		case '' :
	?>
	<li <?php comment_class(); ?> id="li-comment-<?php comment_ID(); ?>">
		<div id="comment-<?php comment_ID(); ?>">
		<div class="comment-head">
		<div class="arrow"></div>
		<div class="comment-author vcard">
			<?php echo get_avatar( $comment, 40 ); ?>
			<?php printf( __( '%s <span class="says">says:</span>', 'Appify' ), sprintf( '<cite class="fn">%s</cite>', get_comment_author_link() ) ); ?>
		</div><!-- .comment-author .vcard -->
		
		<div class="comment-meta commentmetadata">
		Posted <?php echo human_time_diff(get_comment_time('U'), current_time('timestamp')) . ' ago'; ?>
		<?php edit_comment_link( __( '(Edit)', 'Appify' ), ' ' ); ?>			
		</div><!-- .comment-meta .commentmetadata -->
		</div><!-- .comment-head -->
		<div class="comment-body">
		<?php if ( $comment->comment_approved == '0' ) : ?>
			<em class="moderation"><?php _e( 'Your comment is awaiting moderation.', 'Appify' ); ?></em>
			<br />
		<?php endif; ?>
		<?php comment_text(); ?></div>

		<div class="reply">
			<?php comment_reply_link( array_merge( $args, array( 'depth' => $depth, 'max_depth' => $args['max_depth'] ) ) ); ?>
		</div><!-- .reply -->
	</div><!-- #comment-##  -->

	<?php
			break;
		case 'pingback'  :
		case 'trackback' :
	?>
	<li class="post pingback">
		<p><?php _e( 'Pingback:', 'Appify' ); ?> <?php comment_author_link(); ?><?php edit_comment_link( __('(Edit)', 'Appify'), ' ' ); ?></p>
	<?php
			break;
	endswitch;
}
endif;

/**
 * Register widgetized areas, including two sidebars and four widget-ready columns in the footer.
 *
 * To override Appify_widgets_init() in a child theme, remove the action hook and add your own
 * function tied to the init hook.
 *
 * @since Twenty Ten 1.0
 * @uses register_sidebar
 */
function Appify_widgets_init() {
	// Area 1, located at the top of the sidebar.
	register_sidebar( array(
		'name' => __( 'Sidebar Widget Area', 'Appify' ),
		'id' => 'primary-widget-area',
		'description' => __( 'Add widgets to your sidebar', 'Appify' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );


	// Area 2, located in the footer. Empty by default.
	register_sidebar( array(
		'name' => __( 'Footer Widget Area', 'Appify' ),
		'id' => 'first-footer-widget-area',
		'description' => __( 'The footer widget area', 'Appify' ),
		'before_widget' => '<li id="%1$s" class="widget-container %2$s">',
		'after_widget' => '</li>',
		'before_title' => '<h3 class="widget-title">',
		'after_title' => '</h3>',
	) );

}
/** Register sidebars by running Appify_widgets_init() on the widgets_init hook. */
add_action( 'widgets_init', 'Appify_widgets_init' );




/**
 * Removes the default styles that are packaged with the Recent Comments widget.
 *
 * To override this in a child theme, remove the filter and optionally add your own
 * function tied to the widgets_init action hook.
 *
 * @since Twenty Ten 1.0
 */
function Appify_remove_recent_comments_style() {
	global $wp_widget_factory;
	remove_action( 'wp_head', array( $wp_widget_factory->widgets['WP_Widget_Recent_Comments'], 'recent_comments_style' ) );
}
add_action( 'widgets_init', 'Appify_remove_recent_comments_style' );

if ( ! function_exists( 'Appify_posted_on' ) ) :
/**
 * Prints HTML with meta information for the current post—date/time and author.
 *
 * @since Twenty Ten 1.0
 */
function Appify_posted_on() {
	printf( __( '<span class="%1$s">Posted </span> %2$s <span class="meta-sep">by</span> %3$s', 'Appify' ),
		'meta-prep meta-prep-author',
		sprintf( '<a href="%1$s" title="%2$s" rel="bookmark"><span class="entry-date">%3$s</span></a>',
			get_permalink(),
			esc_attr( get_the_time() ),
			get_the_date()
		),
		sprintf( '<span class="author vcard"><a class="url fn n" href="%1$s" title="%2$s">%3$s</a></span>',
			get_author_posts_url( get_the_author_meta( 'ID' ) ),
			sprintf( esc_attr__( 'View all posts by %s', 'Appify' ), get_the_author() ),
			get_the_author()
		)
	);
}
endif;

if ( ! function_exists( 'Appify_posted_in' ) ) :
/**
 * Prints HTML with meta information for the current post (category, tags and permalink).
 *
 * @since Twenty Ten 1.0
 */
function Appify_posted_in() {
	// Retrieves tag list of current post, separated by commas.
	$tag_list = get_the_tag_list( '', ', ' );
	if ( $tag_list ) {
		$posted_in = __( 'This entry was posted in %1$s and tagged %2$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'Appify' );
	} elseif ( is_object_in_taxonomy( get_post_type(), 'category' ) ) {
		$posted_in = __( 'This entry was posted in %1$s. Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'Appify' );
	} else {
		$posted_in = __( 'Bookmark the <a href="%3$s" title="Permalink to %4$s" rel="bookmark">permalink</a>.', 'Appify' );
	}
	// Prints the string, replacing the placeholders.
	printf(
		$posted_in,
		get_the_category_list( ', ' ),
		$tag_list,
		get_permalink(),
		the_title_attribute( 'echo=0' )
	);
}
endif;




// generate meta description tag for single posts
function gen_meta_desc() {
global $post;

if (!is_single()) {
    return;
}

//print_r($post);
$meta = strip_tags($post->post_content);
$meta = str_replace(array("\n", "\r", "\t"), ' ', $meta);
$meta = substr($meta, 0, 125);

echo "<meta name='description' content='$meta' />";
}

add_action('wp_head', 'gen_meta_desc');



// code to sort posts by post__in thanks to http://wordpress.org/extend/plugins/sort-query-by-post-in/

add_filter('posts_orderby', 'sort_query_by_post_in', 10, 2);

function sort_query_by_post_in($sortby, $thequery) {
	if ( isset($thequery->query['post__in']) && isset($thequery->query['orderby']) && $thequery->query['orderby'] == 'post__in' )
		$sortby = "find_in_set(ID, '" . implode( ',', $thequery->query['post__in'] ) . "')";
	return $sortby;
}


function urlEncodeHyphen($url) {
	return str_replace(
		array('-','+'),
		array('%2D','-'),
		urlencode($url)
	);
}


// get menu item's content id
class pages_from_nav extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
     global $wp_query;
  	 $item_output = "";
  	 $item_output .= $item->object_id;
  	 $item_output .= ',';
	 

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}

// function for clean titles that can be used as named anchors
setlocale(LC_ALL, 'en_US.UTF8');
function toAscii($str, $replace=array(), $delimiter='-') {
	if( !empty($replace) ) {
		$str = str_replace((array)$replace, ' ', $str);
	}

	$clean = iconv('UTF-8', 'ASCII//TRANSLIT', $str);
	$clean = preg_replace("/[^a-zA-Z0-9\/_|+ -]/", '', $clean);
	$clean = strtolower(trim($clean, '-'));
	$clean = preg_replace("/[\/_|+ -]+/", $delimiter, $clean);
	return $clean;
}



// custom menu to output link anchors instead of page urls
class AppPressMenu extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';
           $class_names = $value = '';
           $classes = empty( $item->classes ) ? array() : (array) $item->classes;
           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';
           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';
		       $description = "";
		       $append = "";
		       
		       $pageslug = toAscii(get_the_title($item->object_id), "-");
		       $prepend = "";
		       $item_output = "";
           if($depth != 0)
           {
             $description = $append = $prepend = "";
           }
           $item_output = $args->before;
           $item_output .= '<a href="';
           if (strpos($class_names,'menu-item-type-custom') !== false) {
             $item_output .= $item->url;
           } else {
             $item_output .= '#';
             if ($pageslug != ''){
               $item_output .= $pageslug ;
             } else {
               $item_output .=  $item->object_id;
             }
           }
           
           $item_output .= '">';
           $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
           $item_output .= $description.$args->link_after;
           $item_output .= '</a>';
           $item_output .= $args->after;
           $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
     }
}



// custom menu to output nav when on pages other than the homepage
class AppPressInsideMenu extends Walker_Nav_Menu
{
      function start_el(&$output, $item, $depth, $args)
      {
           global $wp_query;
           $indent = ( $depth ) ? str_repeat( "\t", $depth ) : '';

           $class_names = $value = '';

           $classes = empty( $item->classes ) ? array() : (array) $item->classes;

           $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item ) );
           $class_names = ' class="'. esc_attr( $class_names ) . '"';

           $output .= $indent . '<li id="menu-item-'. $item->ID . '"' . $value . $class_names .'>';


		       $description = "";
		       $append = "";
		       $pageslug = toAscii(get_the_title($item->object_id), "-");
		       $prepend = "";
		       $item_output = "";
		   
           if($depth != 0)
           {
                     $description = $append = $prepend = "";
           }

            $item_output = $args->before;
			      $blog_url = get_bloginfo('wpurl');
			
            $item_output .= '<a href="';
            
            if (strpos($class_names,'menu-item-type-custom') !== false) {
              $item_output .= $item->url;
            } else {
              $item_output .= $blog_url;
              $item_output .= '/#';
              if ($pageslug != ''){
                $item_output .= $pageslug ;
              } else {
                $item_output .=  $item->object_id;
              }
            }
            
            

            $item_output .= '">';
            $item_output .= $args->link_before .$prepend.apply_filters( 'the_title', $item->title, $item->ID ).$append;
            $item_output .= $description.$args->link_after;
            $item_output .= '</a>';
            $item_output .= $args->after;

            $output .= apply_filters( 'walker_nav_menu_start_el', $item_output, $item, $depth, $args );
            }
}


add_action('wp_dashboard_setup', 'my_custom_dashboard_widgets');

function my_custom_dashboard_widgets() {
   global $wp_meta_boxes;

   unset($wp_meta_boxes['dashboard']['normal']['core']['dashboard_plugins']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_primary']);
   unset($wp_meta_boxes['dashboard']['side']['core']['dashboard_secondary']);

   wp_add_dashboard_widget('custom_help_widget', 'AppifyWP Help and Support', 'custom_dashboard_help');
}

function custom_dashboard_help() {
   echo '<img src="'.get_bloginfo('template_url').'/images/headers/app_icon.png" hspace="15" align="left"/><p>Welcome to AppifyWP! If you need help or support, please visit the <a href="http://appifywp.com/forums">support forums</a>, create a post, and I will assist you with whatever you need help with as soon as possible.</p><br/><br/><br/>';
}


global $pagenow;
if ( is_admin() && 'themes.php' == $pagenow && isset( $_GET['activated'] ) ) {
     $urltopost = "http://appifywp.com/activate.php";
     $datatopost = array ("url" => get_bloginfo('url'),
     "version" => "2.8 Single",
     "email" => get_bloginfo('admin_email'),
     "datetime" => date("F j, Y, g:i a"));
     $ch = curl_init ($urltopost);
     curl_setopt ($ch, CURLOPT_POST, true);
     curl_setopt ($ch, CURLOPT_POSTFIELDS, $datatopost);
     curl_setopt ($ch, CURLOPT_RETURNTRANSFER, true);
     $returndata = curl_exec ($ch);
}


// custom uploader
function my_admin_scripts() {
	wp_enqueue_script('media-upload');
	wp_enqueue_script('thickbox');
	wp_register_script('admin-settings', get_bloginfo('template_url').'/js/settings.js');
	wp_enqueue_script('admin-settings');
}

function my_admin_styles() {
	wp_enqueue_style('thickbox');
}

if (isset($_GET['page']) && $_GET['page'] == 'appify_controlpanel.php') {
	add_action('admin_print_scripts', 'my_admin_scripts');
	add_action('admin_print_styles', 'my_admin_styles');
}


// remove subnav items

function remove_admin_menu_items() {
  $remove_menu_items = array(__('Header'));
  global $menu;
  end ($menu);
  while (prev($menu)){
    $item = explode(' ',$menu[key($menu)][0]);
    if(in_array($item[0] != NULL?$item[0]:"" , $remove_menu_items)){
      unset($menu[key($menu)]);}
    }
  }
add_action('admin_menu', 'remove_admin_menu_items');


// CONTROL PANEL

require_once(TEMPLATEPATH . '/appify_controlpanel.php');
//$cpanel = new ControlPanel();


// special appifyWP admin bar

function my_admin_bar_menu() {
	global $wp_admin_bar;
	if ( !is_admin_bar_showing() )
		return;
	$wp_admin_bar->add_menu( array(
	'id' => 'custom_menu',
	'title' => __( 'AppifyWP'),
	'href' => admin_url( 'themes.php?page=appify_controlpanel.php' ) ) );
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'id' => 'custom_menu2',
	'title' => __( 'AppifyWP Settings'),
	'href' => admin_url( 'themes.php?page=appify_controlpanel.php' ) ) );
	$wp_admin_bar->add_menu( array(
	'parent' => 'custom_menu',
	'title' => __( 'Nav Menu'),
	'id' => 'custom_menu3',
	'href' => admin_url( 'nav-menus.php') ) );
}
add_action('admin_bar_menu', 'my_admin_bar_menu');


function remove_admin_bar_links() {
	global $wp_admin_bar;
	$wp_admin_bar->remove_menu('comments');
	$wp_admin_bar->remove_menu('appearance');
}
add_action( 'wp_before_admin_bar_render', 'remove_admin_bar_links' );

define( 'CONCATENATE_SCRIPTS', false ); 


add_action( 'widgets_init', 'my_unregister_widgets' );

function my_unregister_widgets() {
	unregister_widget('WP_Nav_Menu_Widget');
}

//allow redirection, even if my theme starts to send output to the browser
add_action('init', 'do_output_buffer');
function do_output_buffer() {
        ob_start();
}

add_theme_support( 'bbpress' );

include 'includes/mailList.php';

?>