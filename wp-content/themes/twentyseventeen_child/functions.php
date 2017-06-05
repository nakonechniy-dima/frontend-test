<?php
//check locations
$locations = get_locale();
if ($locations != is_rtl()){
//move up add to cart form on single product page
remove_action( 'woocommerce_single_product_summary','woocommerce_template_single_add_to_cart', 30 );
add_action( 'woocommerce_single_product_summary','woocommerce_template_single_add_to_cart', 10 );


//move down raiting form on single product page
remove_action( 'woocommerce_single_product_summary','woocommerce_template_single_rating', 10 );
add_action( 'woocommerce_single_product_summary','woocommerce_template_single_rating', 30 );


//delete category block on single product page
remove_action( 'woocommerce_single_product_summary','woocommerce_template_single_meta', 40 );
}



//create custom post_type
function book_init(){
    register_post_type('book', array(
        'labels'             => array(
            'name'               => 'Books',
            'singular_name'      => 'Book',
            'add_new'            => 'Add new',
            'add_new_item'       => 'Add new book',
            'edit_item'          => 'Edit book',
            'new_item'           => 'New book',
            'view_item'          => 'View book',
            'search_items'       => 'Search book',
            'not_found'          =>  'book not found',
            'not_found_in_trash' => 'No book in cart',
            'parent_item_colon'  => '',
            'menu_name'          => 'Books'
        ),
        'public'               => true,
        'menu_icon'            => 'dashicons-book',
        'publicly_queryable'   => true,
        'show_ui'              => true,
        'show_in_menu'         => true,
        'query_var'            => true,
        'rewrite'              => true,
        'capability_type'      => 'post',
        'has_archive'          => true,
        'hierarchical'         => false,
        'menu_position'        => 5,
        'supports'             => array('title','editor','thumbnail')
    ) );
}
add_action('init', 'book_init');




//register new taxonomy
function create_taxonomy(){

    register_taxonomy('taxonomy', array('book'), array(
        'label'                 => '',
        'labels'                => array(
            'name'              => 'Genres',
            'singular_name'     => 'Genre',
            'search_items'      => 'Search Genres',
            'all_items'         => 'All Genres',
            'parent_item'       => 'Parent Genre',
            'parent_item_colon' => 'Parent Genre:',
            'edit_item'         => 'Edit Genre',
            'update_item'       => 'Update Genre',
            'add_new_item'      => 'Add New Genre',
            'new_item_name'     => 'New Genre Name',
            'menu_name'         => 'Genre',
        ),
        'description'           => 'This is Genre taxonomy',
        'public'                => true,
        'publicly_queryable'    => null,
        'show_in_nav_menus'     => true,
        'show_ui'               => true,
        'show_tagcloud'         => true,
        'show_in_rest'          => null,
        'rest_base'             => null,
        'hierarchical'          => false,
        'update_count_callback' => '',
        'rewrite'               => true,
        'meta_box_cb'           => null,
        'show_admin_column'     => true,
        '_builtin'              => false,
        'show_in_quick_edit'    => null,
    ) );
}
add_action('init', 'create_taxonomy');



//fix brackets on rtl
function rtl_brackets_fix($content){
    if(is_rtl()){
        $content = preg_replace('#<p>([^<]+)\)\s*</p>#','<p>$1)&#x200E;</p>',$content);
        $content = preg_replace('#<p>\s*\(([^<]+)</p>#','<p>&#x200E;($1</p>',$content);
    }
    return $content;
}
add_filter('the_content' , 'rtl_brackets_fix' ,100 ,1);