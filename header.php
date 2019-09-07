<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="utf-8">
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php wp_title('•', true, 'right'); bloginfo('name'); ?></title>
    <?php wp_head();?>
  </head>
  <body <?php body_class(); ?>>
    <header>
      <div style="background-color:<?php echo get_theme_mod('bg-subheader'); ?>">
        <?php echo get_theme_mod('subheader_content'); ?>
      </div>

      <nav class="navbar navbar-dark bg-nav navbar-expand-md static-top">
        <div class="container">
          <h2 style="color:#000"><a href="/"><img src="<?php echo( get_header_image() ); ?>" alt="<?php echo( get_bloginfo( 'title' ) ); ?>" height="70px"/></a></h2>
           <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
             <span class="navbar-toggler-icon"></span>
           </button>
           <?php
             wp_nav_menu([
               'menu'            => 'top',
               'theme_location'  => 'top',
               'container'       => 'div',
               'container_id'    => 'bs4navbar',
               'container_class' => 'collapse navbar-collapse navbar-right',
               'menu_id'         => false,
               'menu_class'      => 'navbar-nav ml-auto', //mr-auto to left
               'depth'           => 2,
               'fallback_cb'     => 'bs4navwalker::fallback',
               'walker'          => new bs4navwalker()
             ]);
           ?>
       </div>
     </nav>
    </header>
