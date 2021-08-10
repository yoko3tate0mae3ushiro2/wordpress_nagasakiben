<?php
/*
Template Name: Page Of Posts
*/
?>

<?php get_header(); ?>
  
<?php
// ループ https://developer.wordpress.org/themes/basics/the-loop/#individual-post 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <?php echo post_custom('用例'); ?>
        <hr>
        <small><p>登録日:<?php echo get_the_date(); ?></p>
        <p>最終更新日：<?php the_modified_date(); ?></p></small>
        <!-- https://developer.wordpress.org/reference/functions/the_modified_date/ -->
        <?php    
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>
<hr>
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