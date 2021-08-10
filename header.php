<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=RocknRoll+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons"
      rel="stylesheet">
  <link rel="stylesheet" href="css/hamburgermenu.css">
    <link href="<?php bloginfo('stylesheet_url'); ?>" rel = "stylesheet">
    <title>長崎弁、別館</title>
</head>
<body>
    <header>    
        <!-- https://developer.wordpress.org/reference/functions/get_bloginfo/ -->
        <div class="site-title"><a href="<?php echo get_bloginfo( 'url' ); ?>"><?php echo get_bloginfo( 'name' ); ?></a></div>
      <nav>
        <form method="POST" action="<?php echo esc_url( home_url( '/' ) ); ?>"  class="search-form">
        <label class="screen-reader-text" for="s"><?php _x( 'Search for:', 'label' ); ?></label>
        <input type="text" class="search-box" value="<?php echo get_search_query(); ?>" name="s" id="s">
        <input type="submit" class="search-btn" id="searchsubmit" value="<?php echo esc_attr_x( 'Search', 'submit button' ); ?>">
      </form>
      </nav>
    </header>
    <main>