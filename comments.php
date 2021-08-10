


<?php
// https://developer.wordpress.org/reference/classes/wp_comment_query/
//Get only the approved comments
// $args = array(
//     'status' => 'approve'
// );
 
// // The comment Query
// $comments_query = new WP_Comment_Query;
// $comments = $comments_query->query( $args );
 
// // Comment Loop
// if ( $comments ) {
//  foreach ( $comments as $comment ) {
//  echo '<p>' . $comment->comment_content . '</p>';
//  echo comment_author( $comment_ID ); 
//  }
// } else {
//  echo 'No comments found.';
// }



?>

<?php 
if( comments_open() ){ 
    if( have_comments() ){ 
        wp_list_comments();
    }
} ?>