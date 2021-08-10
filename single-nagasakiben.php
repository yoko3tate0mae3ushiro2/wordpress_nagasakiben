<?php
/*
Template Name: Page Of Words
*/
?>

<?php get_header(); ?>
<?php 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <!-- https://www.webdesignleaves.com/pr/wp/wp_get_slug.html#h4_index_7 -->
        <small>読み方:　<?php echo $post->post_name ?></small> 
        <dl>
            <dt>意味：</dt><dd><?php the_content(); ?></dd>
            <dt>用例：</dt><dd><?php echo post_custom('用例'); ?></dd>
            <dt>登録日:</dt><dd><?php echo get_the_date(); ?></dd>
            <!-- https://developer.wordpress.org/reference/functions/the_modified_date/ -->
            <dt>最終更新日：</dt><dd><?php the_modified_date(); ?></dd>
        </dl>
        <?php    
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>

<?php
// $args = array(
//     'post_type'      => 'words',
//     'posts_per_page' => 10,
// );
// $loop = new WP_Query($args);
// while ( $loop->have_posts() ) {
//     $loop->the_post();
    ?>
    <!-- <div class="entry-content"> -->
        <?php 
        // the_title(); ?>
        <?php 
        // the_content(); ?>
        <!-- https://developer.wordpress.org/reference/functions/get_post_custom_keys/ -->
        <?php 
        // echo post_custom('用例'); ?>
        <?php 
        // echo get_post_meta(get_the_ID(), '用例', true); ?>
        <?php 
        // echo get_post_custom_keys( get_the_ID() ); 
        ?>
        <?php 
        // $meta = get_post_meta( get_the_ID() ); 
        ?>
        <?php
//             $mykey_values = get_post_custom_values( '用例' );
//             foreach ( $mykey_values as $key => $value ) {
//                 echo "$key  => $value ( '用例' )<br />"; 
//             }
// ?>
        <?php            
            // $custom_field_keys = get_post_custom_keys();
            // foreach ( $custom_field_keys as $key => $value ) {
            //     $valuet = trim($value);
            //     if ( '_' == $valuet{0} )
            //     continue;
            //     echo $key . " => " . $value . "<br />";
            // } 
            ?>
        <?php 
        // get_post_custom_values( $key, $post_id ); 
        ?>
    </div>
    <?php
// }
?>

カテゴリー：
<!-- https://developer.wordpress.org/reference/functions/get_the_category/ -->
<?php
$categories = get_the_category();
$separator = ' | ';
$output = '';
if ( ! empty( $categories ) ) {
    foreach( $categories as $category ) {
        $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}
?>
<hr>

タグ：
<!-- https://developer.wordpress.org/reference/functions/get_the_tags/ -->
<?php
$post_tags = get_the_tags();
$separator = ' | ';
$output = '';

if ( ! empty( $post_tags ) ) {
    foreach ( $post_tags as $tag ) {
        $output .= '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . __( $tag->name ) . '</a>' . $separator;
    }
    echo trim( $output, $separator );
}
?>
<hr>

<!-- https://codex.wordpress.org/Next_and_Previous_Links -->
前のページ：<?php previous_post_link(); ?>
<hr>    

後のページ：
<?php next_post_link(); ?>
<hr>

<h2>コメント・フィードバック</h2>
<?php
// If comments are open or we have at least one comment, load up the comment template.
if ( comments_open() || get_comments_number() ) :
    comments_template();
endif;
?>
<hr>

<?php comment_form(); ?>
<hr>
    
<?php get_footer(); ?>