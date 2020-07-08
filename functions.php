<?php 

function neauron() {
    wp_enqueue_style('animate', get_template_directory_uri() .'/assets/css/animate.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('font-awesome', get_template_directory_uri() .'/assets/fonts/font-awesome/css/font-awesome.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('owl-carousel', get_template_directory_uri() .'/assets/css/owl.carousel.min.css', array(), '1.0', 'all' );
    wp_enqueue_style('bootsnav', get_template_directory_uri() .'/assets/css/bootsnav.css', array(), '1.0', 'all' );
    wp_enqueue_style('bootstrap', get_template_directory_uri() .'/assets/bootstrap/css/bootstrap.min.css', array(), '1.0', 'all' );

    wp_enqueue_style('neauron-style', get_stylesheet_uri() );

    wp_enqueue_script('bootsrap', get_template_directory_uri() .'/assets/bootstrap/js/bootstrap.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('bootsnav', get_template_directory_uri() .'/assets/js/bootsnav.js', array('jquery'), '1.0', true );
    wp_enqueue_script('owl-carousel', get_template_directory_uri() .'/assets/js/owl.carousel.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('wow', get_template_directory_uri() .'/assets/js/wow.min.js', array('jquery'), '1.0', true );
    wp_enqueue_script('ajaxchimp-config', get_template_directory_uri() .'/assets/js/ajaxchimp.js', array('jquery'), '1.0', true );
    wp_enqueue_script('neauron-script', get_template_directory_uri() .'/assets/js/script.js', array('jquery'), '1.0', true );
}
add_action('wp_enqueue_scripts', 'neauron');

function neauron_theme_supports(){
    //loading theme textdomain
    load_theme_textdomain( 'neauron-rronline', get_template_directory() . '/languages' );

    // Generate automated feed links on head
    add_theme_support( 'automatic-feed-links' );

    // adding support for automatic title tag
    add_theme_support( 'title-tag' );

    // Enabling Post thumbnails support 
    add_theme_support( 'post-thumbnails' );

    add_image_size( 'neauron-blog-thumb', 740, 520, true );


    // This theme uses wp_nav_menu() in one location.
		register_nav_menus(
			array(
				'menu-1' => esc_html__( 'Primary', 'neauron-rronline' ),
			)
        );


        add_theme_support(
			'html5',
			array(
				'search-form',
				'comment-form',
				'comment-list',
				'gallery',
				'caption',
				'style',
				'script',
			)
        );
        // Add theme support for selective refresh for widgets.
        add_theme_support( 'customize-selective-refresh-widgets' );
        //custom logo support
        add_theme_support(
			'custom-logo',
			array(
				'height'      => 250,
				'width'       => 250,
				'flex-width'  => true,
				'flex-height' => true,
			)
		);
}
add_action('after_setup_theme', 'neauron_theme_supports');

add_filter('widget_text', 'do_shortcode');

// Registering Custom POst 
add_action ('init', 'neauron_theme_custom_post' );
function neauron_theme_custom_post(){
    register_post_type( 'slide',
        array(
            'labels' => array(
                'name' => __( 'slides' ),
                'singular_name' => __( 'slide' )
            ),
            'supports' => array('title', 'editor', 'custom-fields', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );
    register_post_type( 'feature',
        array(
            'labels' => array(
                'name' => __( 'features' ),
                'singular_name' => __( 'features' )
            ),
            'supports' => array('title', 'editor', '', 'thumbnail', 'page-attributes'),
            'public' => false,
            'show_ui' => true
        )
    );

    register_post_type( 'work',
        array(
            'labels' => array(
                'name' => __( 'works' ),
                'singular_name' => __( 'work' )
            ),
            'supports' => array('title', 'editor', 'thumbnail', 'page-attributes'),
            'public' => true
        )
    );

    
}

// Registering Widget
function neauron_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'footer one', 'sakib' ),
			'id'            => 'footer-1',
			'description'   => esc_html__( 'Add footer one widgets here.', 'sakib' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'footer two', 'sakib' ),
			'id'            => 'footer-2',
			'description'   => esc_html__( 'Add footer two widgets here.', 'sakib' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
    );
    
    register_sidebar(
		array(
			'name'          => esc_html__( 'footer three', 'sakib' ),
			'id'            => 'footer-3',
			'description'   => esc_html__( 'Add footer three widgets here.', 'sakib' ),
			'before_widget' => '<div id="%1$s" class="widget %2$s">',
			'after_widget'  => '</div>',
			'before_title'  => '<h3 class="widget-title">',
			'after_title'   => '</h3>',
		)
	);
}
add_action( 'widgets_init', 'neauron_widgets_init' );


function thumbpost_list_shortcode($atts){
    extract( shortcode_atts( array(
        'count' => 3,
    ), $atts) );
     
    $q = new WP_Query(
        array('posts_per_page' => $count, 'post_type' => 'post')
        );      
         
    $list = '<ul>';
    while($q->have_posts()) : $q->the_post();
        $idd = get_the_ID();
        $list .= '
        <li>
            '.get_the_post_thumbnail($idd, 'thumbnail').'
            <p><a href="'.get_permalink().'">'.get_the_title().'</a></p>
            <span>'.get_the_date('d F Y', $idd).'</span>
            
        </li>
        ';        
    endwhile;
    $list.= '</ul>';
    wp_reset_query();
    return $list;
}
add_shortcode('thumb_posts', 'thumbpost_list_shortcode');  

// Including CS-Framework
require get_template_directory() . '/inc/CS-Framework/cs-framework.php';

/**
 * Returns true if a blog has more than 1 category.
 *
 * @return bool
 */
function neauron_categorized_blog() {
	$category_count = get_transient( 'neauron_categories' );

	if ( false === $category_count ) {
		// Create an array of all the categories that are attached to posts.
		$categories = get_categories(
			array(
				'fields'     => 'ids',
				'hide_empty' => 1,
				// We only need to know if there is more than one category.
				'number'     => 2,
			)
		);

		// Count the number of categories that are attached to the posts.
		$category_count = count( $categories );

		set_transient( 'neauron_categories', $category_count );
	}

	// Allow viewing case of 0 or 1 categories in post preview.
	if ( is_preview() ) {
		return true;
	}

	return $category_count > 1;
}



if ( ! function_exists( 'neauron_entry_footer' ) ) :
	/**
	 * Prints HTML with meta information for the categories, tags and comments.
	 */
	function neauron_entry_footer() {

		/* translators: Used between list items, there is a space after the comma. */
		$separate_meta = __( ', ', 'neauron' );

		// Get Categories for posts.
		$categories_list = get_the_category_list( $separate_meta );

		

		// We don't want to output .entry-footer if it will be empty, so make sure its not.
		if ( ( neauron_categorized_blog() && $categories_list ) || get_edit_post_link() ) {

			echo '<footer class="entry-footer">';

			if ( 'post' === get_post_type() ) {
				if ( ( $categories_list && neauron_categorized_blog() ) ) {
					echo '<span class="cat-tags-links">';

						// Make sure there's more than one category before displaying.
					if ( $categories_list && neauron_categorized_blog() ) {
						echo '<span class="cat-links">' . $categories_list . '</span>';
					}

					echo '</span>';
				}
			}

			echo '</footer> <!-- .entry-footer -->';
		}
	}
endif;
