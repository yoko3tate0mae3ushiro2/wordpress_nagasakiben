<?php get_header(); ?>
  
<?php
// ループ https://developer.wordpress.org/themes/basics/the-loop/#individual-post 
if ( have_posts() ) : 
    while ( have_posts() ) : the_post(); ?>
        <h1><?php the_title(); ?></h1>
        <?php the_content(); ?>
        <hr>
        <p>初回掲載日：<?php echo get_the_date(); ?></p>
        <p>最終更新日：<?php the_modified_date(); ?></p>
        <!-- https://developer.wordpress.org/reference/functions/the_modified_date/ -->
        </dl>
    <?php    
    endwhile; 
else: 
    _e( 'Sorry, no pages matched your criteria.', 'textdomain' ); 
endif; 
?>

<?php get_footer(); ?>