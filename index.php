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
        <!-- https://developer.wordpress.org/reference/functions/the_permalink/ -->
        <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
        <!-- https://developer.wordpress.org/reference/functions/the_excerpt/ -->
        <?php the_excerpt(); ?>
        <small>【登録日】<?php echo get_the_date(); ?>&nbsp;  
        &nbsp;【カテゴリー】
            <!-- https://developer.wordpress.org/reference/functions/get_the_category/ -->
            <?php
            $categories = get_the_category();
            $separator = ' , ';
            $output = '';
            if ( ! empty( $categories ) ) {
                foreach( $categories as $category ) {
                    $output .= '<a href="' . esc_url( get_category_link( $category->term_id ) ) . '" alt="' . esc_attr( sprintf( __( 'View all posts in %s', 'textdomain' ), $category->name ) ) . '">' . esc_html( $category->name ) . '</a>' . $separator;
                }
                echo trim( $output, $separator );
            }
            ?>

        &nbsp;【タグ】
        <!-- https://developer.wordpress.org/reference/functions/get_the_tags/ -->
        <?php
        $post_tags = get_the_tags();
        $separator = ' , ';
        $output = '';

        if ( ! empty( $post_tags ) ) {
            foreach ( $post_tags as $tag ) {
                $output .= '<a href="' . esc_attr( get_tag_link( $tag->term_id ) ) . '">' . __( $tag->name ) . '</a>' . $separator;
            }
            echo trim( $output, $separator );
        }
        ?>
    
        </small>

    <?php    
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>
<hr>
<!-- https://developer.wordpress.org/reference/functions/previous_posts_link/ -->
<?php previous_posts_link(); ?>
<hr>
<!-- https://developer.wordpress.org/reference/functions/next_posts_link/ -->
<?php next_posts_link(); ?>
<hr>

<?php get_footer(); ?>