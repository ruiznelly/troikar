<?php
/*
 *  Author: Mostay C.A | @mostay.co
 *  URL: www.mostay.co | @mostay.co
 *  Custom functions, support, custom post types and more.
 */

/*--------------------------------------------------------------*\

     _/     _/_/ _/_/_/_/  _/_/_/_/  _/_/_/_/_/  _/_/    _/     _/
    _/_/  _/ _/ _/    _/  _/            _/     _/   _/    _/  _/
   _/  _/   _/ _/    _/  _/_/_/_/      _/     _/_/_/_/     _/
  _/       _/ _/    _/        _/      _/     _/     _/    _/
 _/       _/ _/_/_/_/  _/_/_/_/      _/     _/      _/   _/

\*--------------------------------------------------------------*/


/*------------------------------------*\
    Theme Support
\*------------------------------------*/

if (!isset($content_width))
{
    $content_width = 900;
}

if (function_exists('add_theme_support'))
{
    // Add Menu Support
    add_theme_support('menus');

    // Add Thumbnail Theme Support
    add_theme_support('post-thumbnails');
    add_image_size('extra', 1263, 651, true); // Large Thumbnail
    add_image_size('large', 1146, 591, true); // Large Thumbnail
    add_image_size('medium', 242, 242, true); // Medium Thumbnail
    add_image_size('special', 268, 138, true); // Medium Thumbnail
    add_image_size('small', 167, 86, true); // Small Thumbnail
    add_image_size('custom-size', 565, 565, true); // Custom Thumbnail Size call using the_post_thumbnail('custom-size');



    // Enables post and comment RSS feed links to head
    add_theme_support('automatic-feed-links');

    // Localisation Support
    load_theme_textdomain('mostay', get_template_directory() . '/languages');
}

/*------------------------------------*\
    Functions
\*------------------------------------*/

// mostay navigation
function mostay_nav()
{
    wp_nav_menu(
   
        array( 
        'new-menu' => __( 'Header Nav Menu' ),
	'theme_location' => 'Header Nav Menu',
	'container' => true )
    	
    );
}

// Load mostay scripts (header.php)
function mostay_header_scripts()
{
    if ($GLOBALS['pagenow'] != 'wp-login.php' && !is_admin()) {

        wp_deregister_script('jquery'); // Deregister WordPress jQuery
        wp_register_script('jquery', 'http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js', array(), '1.9.1'); // Google CDN jQuery
        wp_enqueue_script('jquery'); // Enqueue it!

        wp_register_script('conditionizr', 'http://cdnjs.cloudflare.com/ajax/libs/conditionizr.js/4.0.0/conditionizr.js', array(), '4.0.0'); // Conditionizr
        wp_enqueue_script('conditionizr'); // Enqueue it!

        wp_register_script('modernizr', 'http://cdnjs.cloudflare.com/ajax/libs/modernizr/2.7.1/modernizr.min.js', array(), '2.6.2'); // Modernizr
        wp_enqueue_script('modernizr'); // Enqueue it!

         wp_register_script('jquery-2.1.4', get_template_directory_uri() . '/js/jquery-2.1.4.min.js', array(), '2.1.4'); // Custom scripts
        wp_enqueue_script('jquery-2.1.4'); // Enqueue it!

        wp_register_script('jasny-bootstrap.min', get_template_directory_uri() . '/js/jasny-bootstrap.min.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('jasny-bootstrap.min'); // Enqueue it!

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0'); // Custom scripts

        wp_enqueue_script('bootstrap'); // Enqueue it!

        wp_register_script('bootstrap', get_template_directory_uri() . '/js/bootstrap.js', array(), '1.0.0'); // Custom scripts

        wp_enqueue_script('bootstrap'); // Enqueue it!

        wp_register_script('preloader-modernizr', get_template_directory_uri() . '/js/preloader-modernizr-2.6.2.min.js', array(), '2.6.2'); // Custom scripts
        wp_enqueue_script('preloader-modernizr'); // Enqueue it!

        wp_register_script('loaders', get_template_directory_uri() . '/js/loaders.js', array(), '1.0.0'); // Custom scripts

        wp_enqueue_script('loaders'); // Enqueue it!

        wp_register_script('jquery.flexslider', get_template_directory_uri() . '/js/jquery.flexslider.js', array(), '1.0.0'); // Custom scripts
        wp_enqueue_script('jquery.flexslider'); // Enqueue it!

        wp_register_script('parallax', get_template_directory_uri() . '/js/parallax.min.js', array(), '1.3.1', true); // parallax
        wp_enqueue_script('parallax'); // Enqueue it!

        wp_register_script('jquery.mixitup', get_template_directory_uri() . '/js/jquery.mixitup.min.js', array(), '2.1.8'); // Custom scripts
        wp_enqueue_script('jquery.mixitup'); // Enqueue it!

        wp_register_script('script', get_template_directory_uri() . '/js/script.js', array(), '1.0.0'); // Custom scripts

        wp_enqueue_script('script'); // Enqueue it!

    }
}

// Load mostay conditional scripts
function mostay_conditional_scripts()
{
    if (is_page('pagenamehere')) {
        wp_register_script('scriptname', get_template_directory_uri() . '/js/scriptname.js', array('jquery'), '1.0.0'); // Conditional script(s)
        wp_enqueue_script('scriptname'); // Enqueue it!
    }
}

// Load mostay styles
function mostay_styles()
{
    wp_register_style('normalize', get_template_directory_uri() . '/normalize.css', array(), '1.0', 'all');
    wp_enqueue_style('normalize'); // Enqueue it!

    wp_register_style('reset', get_template_directory_uri() . '/css/reset.css', array(), '1.0', 'all');
    wp_enqueue_style('reset'); // Enqueue it!

    wp_register_style('bootstrap', get_template_directory_uri() . '/css/bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style('bootstrap'); // Enqueue it!

    wp_register_style('jasny-bootstrap', get_template_directory_uri() . '/css/jasny-bootstrap.css', array(), '1.0', 'all');
    wp_enqueue_style('jasny-bootstrap'); // Enqueue it!

    wp_register_style('preloader-main', get_template_directory_uri() . '/css/preloader-main.css', array(), '1.0', 'all');
    wp_enqueue_style('preloader-main'); // Enqueue it!

    wp_register_style('loaders', get_template_directory_uri() . '/css/loaders.css', array(), '1.0', 'all');
    wp_enqueue_style('loaders'); // Enqueue it!

    wp_register_style('flexslider', get_template_directory_uri() . '/css/flexslider.css', array(), '1.0', 'all');
    wp_enqueue_style('flexslider'); // Enqueue it!

    wp_register_style('mostay', get_template_directory_uri() . '/css/style.css', array(), '1.0', 'all');
    wp_enqueue_style('mostay'); // Enqueue it!
}

// Register mostay Navigation
function register_mostay_menu()
{
    register_nav_menus(array( // Using array to specify more menus if needed
        'header-menu' => __('Header Menu', 'mostay'), // Main Navigation
        'sidebar-menu' => __('Sidebar Menu', 'mostay'), // Sidebar Navigation
        'footer-menu' => __('Footer Menu', 'mostay') // Extra Navigation if needed (duplicate as many as you need!)
    ));
}

// Remove the <div> surrounding the dynamic navigation to cleanup markup
function my_wp_nav_menu_args($args = '')
{
    $args['container'] = false;
    return $args;
}

// Remove Injected classes, ID's and Page ID's from Navigation <li> items
function my_css_attributes_filter($var)
{
    return is_array($var) ? array() : '';
}

// Remove invalid rel attribute values in the categorylist
function remove_category_rel_from_category_list($thelist)
{
    return str_replace('rel="category tag"', 'rel="tag"', $thelist);
}


// If Dynamic Sidebar Exists
if (function_exists('register_sidebar'))
{
    // Define Sidebar Widget Area 1
    register_sidebar(array(
        'name' => __('Widget Area 1', 'mostay'),
        'description' => __('Description for this widget-area...', 'mostay'),
        'id' => 'widget-area-1',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));

    // Define Sidebar Widget Area 2
    register_sidebar(array(
        'name' => __('Widget Area 2', 'mostay'),
        'description' => __('Description for this widget-area...', 'mostay'),
        'id' => 'widget-area-2',
        'before_widget' => '<div id="%1$s" class="%2$s">',
        'after_widget' => '</div>',
        'before_title' => '<h3>',
        'after_title' => '</h3>'
    ));
}


// Pagination for paged posts, Page 1, Page 2, Page 3, with Next and Previous Links, No plugin
function mostaywp_pagination(){
    global $wp_query;
    $big = 999999999;
    echo paginate_links(array(
        'base' => str_replace($big, '%#%', get_pagenum_link($big)),
        'format' => '?paged=%#%',
        'current' => max(1, get_query_var('paged')),
        'total' => $wp_query->max_num_pages
    ));
}

// Custom Excerpts
function mostaywp_index($length) // Create 20 Word Callback for Index page Excerpts, call using mostaywp_excerpt('mostaywp_index');
{
    return 20;
}

// Create 40 Word Callback for Custom Post Excerpts, call using mostaywp_excerpt('mostaywp_custom_post');
function mostaywp_custom_post($length)
{
    return 40;
}

// Create the Custom Excerpts callback
function mostaywp_excerpt($length_callback = '', $more_callback = '')
{
    global $post;
    if (function_exists($length_callback)) {
        add_filter('excerpt_length', $length_callback);
    }
    if (function_exists($more_callback)) {
        add_filter('excerpt_more', $more_callback);
    }
    $output = get_the_excerpt();
    $output = apply_filters('wptexturize', $output);
    $output = apply_filters('convert_chars', $output);
    $output = '<p>' . $output . '</p>';
    echo $output;
}

// Custom View Article link to Post
function mostay_view_article($more)
{
    global $post;
    return '... <a class="view-article" href="' . get_permalink($post->ID) . '">' . __('View Article', 'mostay') . '</a>';
}

// Remove Admin bar
function remove_admin_bar()
{
    return false;
}

// Remove 'text/css' from our enqueued stylesheet
function mostay_style_remove($tag)
{
    return preg_replace('~\s+type=["\'][^"\']++["\']~', '', $tag);
}

// Remove thumbnail width and height dimensions that prevent fluid images in the_thumbnail
function remove_thumbnail_dimensions( $html )
{
    $html = preg_replace('/(width|height)=\"\d*\"\s/', "", $html);
    return $html;
}

// Custom Gravatar in Settings > Discussion
function mostaygravatar ($avatar_defaults)
{
    $myavatar = get_template_directory_uri() . '/img/gravatar.jpg';
    $avatar_defaults[$myavatar] = "Custom Gravatar";
    return $avatar_defaults;
}

// Threaded Comments
function enable_threaded_comments()
{
    if (!is_admin()) {
        if (is_singular() AND comments_open() AND (get_option('thread_comments') == 1)) {
            wp_enqueue_script('comment-reply');
        }
    }
}

// Custom Comments Callback
function mostaycomments($comment, $args, $depth)
{
    $GLOBALS['comment'] = $comment;
    extract($args, EXTR_SKIP);

    if ( 'div' == $args['style'] ) {
        $tag = 'div';
        $add_below = 'comment';
    } else {
        $tag = 'li';
        $add_below = 'div-comment';
    }
?>
    <!-- heads up: starting < for the html tag (li or div) in the next line: -->
    <<?php echo $tag ?> <?php comment_class(empty( $args['has_children'] ) ? '' : 'parent') ?> id="comment-<?php comment_ID() ?>">
    <?php if ( 'div' != $args['style'] ) : ?>
    <div id="div-comment-<?php comment_ID() ?>" class="comment-body">
    <?php endif; ?>
    <div class="comment-author vcard">
    <?php if ($args['avatar_size'] != 0) echo get_avatar( $comment, $args['180'] ); ?>
    <?php printf(__('<cite class="fn">%s</cite> <span class="says">says:</span>'), get_comment_author_link()) ?>
    </div>
<?php if ($comment->comment_approved == '0') : ?>
    <em class="comment-awaiting-moderation"><?php _e('Your comment is awaiting moderation.') ?></em>
    <br />
<?php endif; ?>

    <div class="comment-meta commentmetadata"><a href="<?php echo htmlspecialchars( get_comment_link( $comment->comment_ID ) ) ?>">
        <?php
            printf( __('%1$s at %2$s'), get_comment_date(),  get_comment_time()) ?></a><?php edit_comment_link(__('(Edit)'),'  ','' );
        ?>
    </div>

    <?php comment_text() ?>

    <div class="reply">
    <?php comment_reply_link(array_merge( $args, array('add_below' => $add_below, 'depth' => $depth, 'max_depth' => $args['max_depth']))) ?>
    </div>
    <?php if ( 'div' != $args['style'] ) : ?>
    </div>
    <?php endif; ?>
<?php }

/*------------------------------------*\
    Actions + Filters + ShortCodes
\*------------------------------------*/

// Add Actions
add_action('init', 'mostay_header_scripts'); // Add Custom Scripts to wp_head
add_action('wp_print_scripts', 'mostay_conditional_scripts'); // Add Conditional Page Scripts
add_action('get_header', 'enable_threaded_comments'); // Enable Threaded Comments
add_action('wp_enqueue_scripts', 'mostay_styles'); // Add Theme Stylesheet
add_action('init', 'register_mostay_menu'); // Add mostay Menu
add_action('init', 'mostaywp_pagination'); // Add our mostay Pagination
add_action('init', 'my_custom_posttypes' ); //Mostay Custon Posttypes
add_action('init', 'my_custom_taxonomies' ); //Mostay Custon Taxonomies
add_action( 'init', 'change_post_object_label' ); //Change post Name
add_action( 'admin_menu', 'change_post_menu_label' ); //Change post Name
// Remove Actions
remove_action('wp_head', 'feed_links_extra', 3); // Display the links to the extra feeds such as category feeds
remove_action('wp_head', 'feed_links', 2); // Display the links to the general feeds: Post and Comment Feed
remove_action('wp_head', 'rsd_link'); // Display the link to the Really Simple Discovery service endpoint, EditURI link
remove_action('wp_head', 'wlwmanifest_link'); // Display the link to the Windows Live Writer manifest file.
remove_action('wp_head', 'index_rel_link'); // Index link
remove_action('wp_head', 'parent_post_rel_link', 10, 0); // Prev link
remove_action('wp_head', 'start_post_rel_link', 10, 0); // Start link
remove_action('wp_head', 'adjacent_posts_rel_link', 10, 0); // Display relational links for the posts adjacent to the current post.
remove_action('wp_head', 'wp_generator'); // Display the XHTML generator that is generated on the wp_head hook, WP version
remove_action('wp_head', 'start_post_rel_link', 10, 0);
remove_action('wp_head', 'adjacent_posts_rel_link_wp_head', 10, 0);
remove_action('wp_head', 'rel_canonical');
remove_action('wp_head', 'wp_shortlink_wp_head', 10, 0);

// Add Filters
add_filter('avatar_defaults', 'mostaygravatar'); // Custom Gravatar in Settings > Discussion
add_filter('comments', 'mostaycomments'); // Custom Gravatar in Settings > Discussion
add_filter('widget_text', 'do_shortcode'); // Allow shortcodes in Dynamic Sidebar
add_filter('widget_text', 'shortcode_unautop'); // Remove <p> tags in Dynamic Sidebars (better!)
add_filter('wp_nav_menu_args', 'my_wp_nav_menu_args'); // Remove surrounding <div> from WP Navigation
// add_filter('nav_menu_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected classes (Commented out by default)
// add_filter('nav_menu_item_id', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> injected ID (Commented out by default)
// add_filter('page_css_class', 'my_css_attributes_filter', 100, 1); // Remove Navigation <li> Page ID's (Commented out by default)
add_filter('the_category', 'remove_category_rel_from_category_list'); // Remove invalid rel attribute
add_filter('the_excerpt', 'shortcode_unautop'); // Remove auto <p> tags in Excerpt (Manual Excerpts only)
add_filter('the_excerpt', 'do_shortcode'); // Allows Shortcodes to be executed in Excerpt (Manual Excerpts only)
add_filter('excerpt_more', 'mostay_view_article'); // Add 'View Article' button instead of [...] for Excerpts
add_filter('show_admin_bar', 'remove_admin_bar'); // Remove Admin bar
add_filter('style_loader_tag', 'mostay_style_remove'); // Remove 'text/css' from enqueued stylesheet
add_filter('post_thumbnail_html', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to thumbnails
add_filter('image_send_to_editor', 'remove_thumbnail_dimensions', 10); // Remove width and height dynamic attributes to post images
add_filter('posts_where','atom_search_where');
add_filter('posts_join', 'atom_search_join');
add_filter('posts_groupby', 'atom_search_groupby');
// Remove Filters
remove_filter('the_excerpt', 'wpautop'); // Remove <p> tags from Excerpt altogether


/*------------------------------------*\
    Custom Post Types
\*------------------------------------*/

function my_custom_posttypes() {
    // Productos Post Types
    $labels = array(
        'name'               => 'Productos',
        'singular_name'      => 'Producto',
        'menu_name'          => 'Productos',
        'name_admin_bar'     => 'Producto',
        'add_new'            => 'Agregar Nuevo',
        'add_new_item'       => 'Agregar Nuevo Producto',
        'new_item'           => 'Nuevo Producto',
        'edit_item'          => 'Editar Producto',
        'view_item'          => 'Ver Producto',
        'all_items'          => 'Todos los Productos',
        'search_items'       => 'Buscar Productos',
        'parent_item_colon'  => 'Parent Productos:',
        'not_found'          => 'No se Encontraron Productos.',
        'not_found_in_trash' => 'No se Encontraron Productos en papelera.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-cart',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'productos' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' )
        //'taxonomies'         => array( 'category', 'post_tag' )
    );
    register_post_type('producto', $args );

     // Nosotros Post Types
    $labels = array(
        'name'               => 'Servicios',
        'singular_name'      => 'Servicio',
        'menu_name'          => 'Servicios',
        'name_admin_bar'     => 'Servicios',
        'add_new'            => 'Agregar Nuevo',
        'add_new_item'       => 'Agregar Nuevo Servicio',
        'new_item'           => 'Nuevo Servicio',
        'edit_item'          => 'Editar Servicio',
        'view_item'          => 'Ver Servicio',
        'all_items'          => 'Todos los Servicios',
        'search_items'       => 'Buscar Servicios',
        'parent_item_colon'  => 'Parent Servicios:',
        'not_found'          => 'No se Encontraron Servicios .',
        'not_found_in_trash' => 'No se Encontraron Servicios en papelera.',
    );

    $args = array(
        'labels'             => $labels,
        'public'             => true,
        'publicly_queryable' => true,
        'show_ui'            => true,
        'show_in_menu'       => true,
        'menu_icon'          => 'dashicons-store',
        'query_var'          => true,
        'rewrite'            => array( 'slug' => 'taxs' ),
        'capability_type'    => 'post',
        'has_archive'        => true,
        'hierarchical'       => false,
        'menu_position'      => 5,
        'supports'           => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'         => array( 'category', 'post_tag' )
    );
    register_post_type('servicios', $args );
}




function my_rewrite_flush() {
    // First, we "add" the custom post type via the above written function.
    // Note: "add" is written with quotes, as CPTs don't get added to the DB,
    // They are only referenced in the post_type column with a post entry,
    // when you add a post of this CPT.
    my_custom_posttypes();

    // ATTENTION: This is *only* done during plugin activation hook in this example!
    // You should *NEVER EVER* do this on every page load!!
    flush_rewrite_rules();
}
register_activation_hook( __FILE__, 'my_rewrite_flush' );

//Changing Admin Menu Labels
function change_post_menu_label() {
    global $menu;
    global $submenu;
    $menu[5][0] = 'Direcciones';
    $submenu['edit.php'][5][0] = 'Direcciones';
    $submenu['edit.php'][10][0] = 'Agregar Nuevo';
    $submenu['edit.php'][15][0] = 'Categorias'; // Change name for categories
    $submenu['edit.php'][16][0] = 'Etiquetas'; // Change name for tags
    echo '';
}
function change_post_object_label() {
        global $wp_post_types;
        $labels = &$wp_post_types['post']->labels;
        $labels->name = 'Direcciones';
        $labels->singular_name = 'Direcciones';
        $labels->add_new = 'Agregar Nueva';
        $labels->add_new_item = 'Agregar Direccion';
        $labels->edit_item = 'Editar Direccion';
        $labels->new_item = 'New Direccion';
        $labels->view_item = 'Ver Direccion';
        $labels->search_items = 'Buscar Direccion';
        $labels->not_found = 'No se Encontraron Direcciones';
        $labels->not_found_in_trash = 'No Direccion found in Trash';
    }

flush_rewrite_rules();

/*function remove_menus () {
global $menu;
    $restricted = array(__('Mostay'));
    end ($menu);
    while (prev($menu)){
        $value = explode(' ',$menu[key($menu)][0]);
        if(in_array($value[0] != NULL?$value[0]:"" , $restricted)){unset($menu[key($menu)]);}
    }
}
add_action('admin_menu', 'remove_menus');*/
/*------------------------------------*\
         Custom Taxonomies
\*------------------------------------*/


function my_custom_taxonomies() {
    // Type of Product/Service taxonomy
    $labels = array(
        'name'              => 'Marcas',
        'singular_name'     => 'Marca',
        'search_items'      => 'Buscar Marcas',
        'all_items'         => 'Todas las Marcas',
        'parent_item'       => 'Parent Type of Marcas',
        'parent_item_colon' => 'Parent Type of Marcas:',
        'edit_item'         => 'Editar Marcas',
        'update_item'       => 'Actualizar Marcas',
        'add_new_item'      => 'Agregar Marcas',
        'new_item_name'     => 'Nueva Marca',
        'menu_name'         => 'Marcas',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'marcas' ),
    );

    register_taxonomy( 'marca', array( 'producto' ), $args );


     // Mood taxonomy
    $labels = array(
        'name'              => 'Categorias',
        'singular_name'     => 'Categoria',
        'search_items'      => 'Buscar Categorias',
        'all_items'         => 'Todas las Categorias',
        'parent_item'       => 'Parent Type of Categorias',
        'parent_item_colon' => 'Parent Type of Categorias:',
        'edit_item'         => 'Editar Categorias',
        'update_item'       => 'Actualizar Categorias',
        'add_new_item'      => 'Agregar Categorias',
        'new_item_name'     => 'Nueva Categoria',
        'menu_name'         => 'Categorias',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'categorias' ),
    );

    register_taxonomy( 'categoria', array( 'producto' ), $args );

    $labels = array(
        'name'              => 'Destacados',
        'singular_name'     => 'Destacado',
        'search_items'      => 'Buscar Destacados',
        'all_items'         => 'Todas los Destacados',
        'parent_item'       => 'Parent Type of Destacados',
        'parent_item_colon' => 'Parent Type of Destacados:',
        'edit_item'         => 'Editar Destacados',
        'update_item'       => 'Actualizar Destacados',
        'add_new_item'      => 'Agregar Destacados',
        'new_item_name'     => 'Nuevo Destacado',
        'menu_name'         => 'Destacados',
    );

    $args = array(
        'hierarchical'      => true,
        'labels'            => $labels,
        'show_ui'           => true,
        'show_admin_column' => true,
        'query_var'         => true,
        'rewrite'           => array( 'slug' => 'featureds' ),
    );

    register_taxonomy( 'featured', array( 'producto' ), $args );

}
    /********************************************************************************/
/**********************Search Category and Tax Function**********************************/
    /********************************************************************************/

// search all taxonomies, based on: http://projects.jesseheap.com/all-projects/wordpress-plugin-tag-search-in-wordpress-23

function atom_search_where($where){
  global $wpdb;
  if (is_search() && get_search_query())
    $where .= "OR ((t.name LIKE '%".get_search_query()."%' OR t.slug LIKE '%".get_search_query()."%') AND {$wpdb->posts}.post_status = 'publish')";
  return $where;
}

function atom_search_join($join){
  global $wpdb;
  if (is_search())
    $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
  return $join;
}

function atom_search_groupby($groupby){
  global $wpdb;

  // we need to group on post ID
  $groupby_id = "{$wpdb->posts}.ID";
  if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

  // groupby was empty, use ours
  if(!strlen(trim($groupby))) return $groupby_id;

  // wasn't empty, append ours
  return $groupby.", ".$groupby_id;
}



?>