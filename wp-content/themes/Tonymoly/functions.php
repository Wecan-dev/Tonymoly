<?php 
the_post_thumbnail();
the_post_thumbnail('thumbnail');       // Thumbnail (por defecto 150px x 150px max)
the_post_thumbnail('medium');          // Media resolución (por defecto 300px x 300px max)
the_post_thumbnail('large');           // Alta resolución (por defecto 640px x 640px max)
the_post_thumbnail('full');            // Resolución original de la imagen (sin modificar)

add_theme_support( 'post-thumbnails' );
the_post_thumbnail( array(100,100) ); 


/*******truncar cantidad de palabras******/
function excerpt($limit) {
	$excerpt = explode(' ', get_the_excerpt(), $limit);
	if (count($excerpt)>=$limit) {
		array_pop($excerpt);
		$excerpt = implode(" ",$excerpt).'...';
	} else {
		$excerpt = implode(" ",$excerpt);
	}
	$excerpt = preg_replace('`[[^]]*]`','',$excerpt);
	return $excerpt;
}
/*******truncar cantidad de palabras******/

function my_theme_setup() {
	add_theme_support( 'woocommerce' );
}
add_action( 'after_setup_theme', 'my_theme_setup' );

// Minimum CSS to remove +/- default buttons on input field type number
add_action( 'wp_head' , 'custom_quantity_fields_css' );
function custom_quantity_fields_css(){
    ?>
    <style>
        .quantity input::-webkit-outer-spin-button,
        .quantity input::-webkit-inner-spin-button {
            display: none;
            margin: 0;
        }
        .quantity input.qty {
            appearance: textfield;
            -webkit-appearance: none;
            -moz-appearance: textfield;
        }
    </style>
    <?php
}

// agregar botones negativos y positivos en input type number Quantity de woocommerce
add_action( 'wp_footer' , 'custom_quantity_fields_script' );
function custom_quantity_fields_script(){
    ?>
    <script type='text/javascript'>
        jQuery( function( $ ) {
            if ( ! String.prototype.getDecimals ) {
                String.prototype.getDecimals = function() {
                    var num = this,
                    match = ('' + num).match(/(?:\.(\d+))?(?:[eE]([+-]?\d+))?$/);
                    if ( ! match ) {
                        return 0;
                    }
                    return Math.max( 0, ( match[1] ? match[1].length : 0 ) - ( match[2] ? +match[2] : 0 ) );
                }
            }
        // Quantity "plus" and "minus" buttons
        $( document.body ).on( 'click', '.plus, .minus', function() {
            var $qty        = $( this ).closest( '.quantity' ).find( '.qty'),
            currentVal  = parseFloat( $qty.val() ),
            max         = parseFloat( $qty.attr( 'max' ) ),
            min         = parseFloat( $qty.attr( 'min' ) ),
            step        = $qty.attr( 'step' );

            // Format values
            if ( ! currentVal || currentVal === '' || currentVal === 'NaN' ) currentVal = 0;
            if ( max === '' || max === 'NaN' ) max = '';
            if ( min === '' || min === 'NaN' ) min = 0;
            if ( step === 'any' || step === '' || step === undefined || parseFloat( step ) === 'NaN' ) step = 1;

            // Change the value
            if ( $( this ).is( '.plus' ) ) {
                if ( max && ( currentVal >= max ) ) {
                    $qty.val( max );
                } else {
                    $qty.val( ( currentVal + parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            } else {
                if ( min && ( currentVal <= min ) ) {
                    $qty.val( min );
                } else if ( currentVal > 0 ) {
                    $qty.val( ( currentVal - parseFloat( step )).toFixed( step.getDecimals() ) );
                }
            }

            // Trigger change event
            $qty.trigger( 'change' );
        });
    });
</script>
<?php
}


// Ir a una página diferente de gracias
 
add_action( 'template_redirect', 'wc_custom_redirect_after_purchase' ); 
 
function wc_custom_redirect_after_purchase() {
    global $wp;
 
    if ( is_checkout() && ! empty( $wp->query_vars['order-received'] ) ) {
        wp_redirect( 'http://localhost/Tonymoly/gracias/' ); // Cambiar por vuestra URL
        exit;
    }
}


// Register Custom Post Type
function tonytv() {

    $labels = array(
        'name'                  => _x( 'Tony Tv', 'Post Type General Name', 'apk' ),
        'singular_name'         => _x( 'Tony Tv', 'Post Type Singular Name', 'apk' ),
        'menu_name'             => __( 'Tony Tv', 'apk' ),
        'name_admin_bar'        => __( 'Tony Tv', 'apk' ),
        'archives'              => __( 'Item Archives', 'apk' ),
        'attributes'            => __( 'Item Attributes', 'apk' ),
        'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
        'all_items'             => __( 'All Items', 'apk' ),
        'add_new_item'          => __( 'Add New Item', 'apk' ),
        'add_new'               => __( 'Add New', 'apk' ),
        'new_item'              => __( 'New Item', 'apk' ),
        'edit_item'             => __( 'Edit Item', 'apk' ),
        'update_item'           => __( 'Update Item', 'apk' ),
        'view_item'             => __( 'View Item', 'apk' ),
        'view_items'            => __( 'View Items', 'apk' ),
        'search_items'          => __( 'Search Item', 'apk' ),
        'not_found'             => __( 'Not found', 'apk' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
        'featured_image'        => __( 'Featured Image', 'apk' ),
        'set_featured_image'    => __( 'Set featured image', 'apk' ),
        'remove_featured_image' => __( 'Remove featured image', 'apk' ),
        'use_featured_image'    => __( 'Use as featured image', 'apk' ),
        'insert_into_item'      => __( 'Insert into item', 'apk' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
        'items_list'            => __( 'Items list', 'apk' ),
        'items_list_navigation' => __( 'Items list navigation', 'apk' ),
        'filter_items_list'     => __( 'Filter items list', 'apk' ),
    );
    $args = array(
        'label'                 => __( 'Tony Tv', 'apk' ),
        'description'           => __( 'Tony Tv Description', 'apk' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-image',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'tonytv', $args );

}
add_action( 'init', 'tonytv', 0 );



// Register Custom Post Type
function concursos() {

    $labels = array(
        'name'                  => _x( 'Concursos', 'Post Type General Name', 'apk' ),
        'singular_name'         => _x( 'Concursos', 'Post Type Singular Name', 'apk' ),
        'menu_name'             => __( 'Concursos', 'apk' ),
        'name_admin_bar'        => __( 'Concursos', 'apk' ),
        'archives'              => __( 'Item Archives', 'apk' ),
        'attributes'            => __( 'Item Attributes', 'apk' ),
        'parent_item_colon'     => __( 'Parent Item:', 'apk' ),
        'all_items'             => __( 'All Items', 'apk' ),
        'add_new_item'          => __( 'Add New Item', 'apk' ),
        'add_new'               => __( 'Add New', 'apk' ),
        'new_item'              => __( 'New Item', 'apk' ),
        'edit_item'             => __( 'Edit Item', 'apk' ),
        'update_item'           => __( 'Update Item', 'apk' ),
        'view_item'             => __( 'View Item', 'apk' ),
        'view_items'            => __( 'View Items', 'apk' ),
        'search_items'          => __( 'Search Item', 'apk' ),
        'not_found'             => __( 'Not found', 'apk' ),
        'not_found_in_trash'    => __( 'Not found in Trash', 'apk' ),
        'featured_image'        => __( 'Featured Image', 'apk' ),
        'set_featured_image'    => __( 'Set featured image', 'apk' ),
        'remove_featured_image' => __( 'Remove featured image', 'apk' ),
        'use_featured_image'    => __( 'Use as featured image', 'apk' ),
        'insert_into_item'      => __( 'Insert into item', 'apk' ),
        'uploaded_to_this_item' => __( 'Uploaded to this item', 'apk' ),
        'items_list'            => __( 'Items list', 'apk' ),
        'items_list_navigation' => __( 'Items list navigation', 'apk' ),
        'filter_items_list'     => __( 'Filter items list', 'apk' ),
    );
    $args = array(
        'label'                 => __( 'Tony Tv', 'apk' ),
        'description'           => __( 'Tony Tv Description', 'apk' ),
        'labels'                => $labels,
        'supports'              => array( 'title', 'editor', 'thumbnail' ),
        'taxonomies'            => array(  ),
        'hierarchical'          => false,
        'public'                => true,
        'show_ui'               => true,
        'show_in_menu'          => true,
        'menu_position'         => 5,
        'menu_icon'             => 'dashicons-format-image',
        'show_in_admin_bar'     => true,
        'show_in_nav_menus'     => true,
        'can_export'            => true,
        'has_archive'           => true,
        'exclude_from_search'   => false,
        'publicly_queryable'    => true,
        'capability_type'       => 'page',
    );
    register_post_type( 'concursos', $args );

}
add_action( 'init', 'concursos', 0 );
