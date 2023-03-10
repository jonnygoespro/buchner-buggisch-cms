<?php
  $whitelist = array('127.0.0.1', '::1');
  $ids_array;

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
      // Localhost
      $ids_array = [65];
  } else {
      // Server
      $ids_array = [185];  
  }
?>


<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS Endabgabe</title>
    <link rel='stylesheet' href='<?php echo get_template_directory_uri();?>/style.css'>
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo get_template_directory_uri();?>/favicons/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="<?php echo get_template_directory_uri();?>/favicons/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="<?php echo get_template_directory_uri();?>/favicons/favicon-16x16.png">
    <link rel="manifest" href="<?php echo get_template_directory_uri();?>/favicons/site.webmanifest">
    <link rel="mask-icon" href="<?php echo get_template_directory_uri();?>/favicons/safari-pinned-tab.svg" color="#5bbad5">
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri();?>/favicons/favicon.ico">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri();?>/favicons/browserconfig.xml">
    <meta name="theme-color" content="#ffffff">
    <?php wp_head(); ?>
  </head>
  <body>
    <?php wp_body_open(); ?>
    <?php get_header(); ?>

    <main>
        <section id="job-hero">
            <?php 
            $hero_query = new WP_Query( array("p" => $ids_array[0]) );
            if ($hero_query->have_posts() ):
              while ($hero_query->have_posts() ): $hero_query->the_post(); 
          ?>
            <?php the_post_thumbnail(); ?>
          <?php

              endwhile;
            endif;
            wp_reset_postdata();
          ?>
        </section>
        <section id="job-content">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div>
                <h2><?php echo get_post_custom_values("Header left")[0]; ?></h2>
                <p><?php echo get_post_custom_values("Body left")[0]; ?></p>
            </div>
            <div class="formular"><?php the_content(); ?></div>
            <?php endwhile; ?>
            <?php endif; ?>
        </section>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>