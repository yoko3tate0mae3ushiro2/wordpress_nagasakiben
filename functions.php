<?php
// https://developer.wordpress.org/reference/functions/register_sidebar/
function otameshi_widgets_init() {
    register_sidebar( array(
        'name'          => __( 'sidebar-1', 'otameshi' ),
        'id'            => 'sidebar-1',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'otameshi' ),
        'before_widget' => '<p id="%1$s" class="widget %2$s">',
        'after_widget'  => '</p>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'otameshi_widgets_init' );
?>
<?php
// https://developer.wordpress.org/reference/functions/register_sidebar/
function otameshi_widgets_init2() {
    register_sidebar( array(
        'name'          => __( 'sidebar-2', 'otameshi' ),
        'id'            => 'sidebar-2',
        'description'   => __( 'Widgets in this area will be shown on all posts and pages.', 'otameshi' ),
        'before_widget' => '<p id="%1$s" class="widget %2$s">',
        'after_widget'  => '</p>',
        'before_title'  => '<h2 class="widgettitle">',
        'after_title'   => '</h2>',
    ) );
}
add_action( 'widgets_init', 'otameshi_widgets_init2' );
?>

<?php
// // Function to register the meta box
// function add_meta_boxes_callback( $post_type, $post ) {
//     add_meta_box( 'post_usage', '用途', 'output_my_meta_box', 'post' );
// }
// add_action( 'add_meta_boxes', 'add_meta_boxes_callback', 10, 2 );

// // Function to actually output the meta box
// function output_my_meta_box( $post ) {
//     echo '<input type="text" name="post_usage" value="' . $post->my_field . '" />';
// }

// // Function to save the field to the DB
// function wp_insert_post_data_filter( $data, $postarr ) {
//     $data['post_usage'] = $_POST['post_usage'];
//     return $data;
// }
// add_filter( 'wp_insert_post_data', 'wp_insert_post_data_filter', 10, 2 );
?>

<?php
/**
 * Adds a metabox to the right side of the screen under the â€œPublishâ€ box
 * https://wptheming.com/2010/08/custom-metabox-for-post-type/
 * https://developer.wordpress.org/reference/functions/add_meta_box/
 */
// function add_words_metaboxes() {
// 	add_meta_box(
// 		'words_metabox_id',
// 		esc_html__( 'Words MetaBox', 'nagasakiben' ),
// 		'words_render_metabox',
// 		'nagasakiben',
// 		'side',
// 		'default'
// 	);
// }
// add_action( 'add_meta_boxes', 'add_words_metaboxes' );

?>