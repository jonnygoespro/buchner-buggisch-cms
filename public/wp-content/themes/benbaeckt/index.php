<?php
  $whitelist = array('127.0.0.1', '::1');
  $ids_array;

  if(in_array($_SERVER['REMOTE_ADDR'], $whitelist)){
      // Localhost
      $ids_array = [6, 8, 11, 25, 59, 33];
  } else {
      // Server
      $ids_array = [63, 67, 106, 77, 179, 84];  
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

      <?php
        if (have_posts() && !is_front_page()) {
            while (have_posts()) {
              the_post();
              the_title();
              the_content();
            }
          }
      ?>

      <?php if(is_front_page()): ?>

      <section id="hero">
        <div class="heroText">
          <?php 
            $hero_query = new WP_Query( array("p" => $ids_array[0]) );
            if ($hero_query->have_posts() ):
              while ($hero_query->have_posts() ): $hero_query->the_post(); 
          ?>
            <p><?php the_title(); ?></p>
            <?php the_content(); ?>
        </div>
        <?php the_post_thumbnail(); ?>
        <?php

              endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </section>

      <section id="motto">
        <?php 
            $motto_query = new WP_Query( array("p" => $ids_array[1]) );
            if ($motto_query->have_posts() ):
              while ($motto_query->have_posts() ): $motto_query->the_post(); 
          ?>
            <?php the_post_thumbnail(); ?>
            <div class="text">
              <p><?php the_title(); ?></p>
              <?php the_content(); ?>
              <div class="divider"></div>
            </div>
          <?php

              endwhile;
            endif;
            wp_reset_postdata();
          ?>
      </section>

      <div class="divider"></div>

      <section id="workshops">
        <?php 
            $workshop_header_query = new WP_Query( array("p" => $ids_array[2]) );
            if ($workshop_header_query->have_posts() ):
              while ($workshop_header_query->have_posts() ): $workshop_header_query->the_post(); 
          ?>
            <h2><?php the_title(); ?></h2>
          <?php
              endwhile;
            endif;
            wp_reset_postdata();
          ?>

        <div class="offer">

            <?php
            $workshop_query = new WP_Query( array("category_name" => "workshop", "order" => "ASC") );
            if ($workshop_query->have_posts() ):
              while ($workshop_query->have_posts() ): $workshop_query->the_post(); 
            ?>
              <button class="workshop" onclick="window.location.href = '<?php the_permalink(); ?>'">
              <div class="row">
                <h3><?php the_title(); ?></h3>
                <svg width="50" height="24" viewBox="0 0 50 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path d="M49.0607 13.0607C49.6464 12.4749 49.6464 11.5251 49.0607 10.9393L39.5147 1.3934C38.9289 0.807612 37.9792 0.807612 37.3934 1.3934C36.8076 1.97918 36.8076 2.92893 37.3934 3.51472L45.8787 12L37.3934 20.4853C36.8076 21.0711 36.8076 22.0208 37.3934 22.6066C37.9792 23.1924 38.9289 23.1924 39.5147 22.6066L49.0607 13.0607ZM0 13.5H48V10.5H0V13.5Z" fill="black"/>
                </svg>           </div>
                <?php the_content(); ?>
                <div class="overlay"></div>
                <?php the_post_thumbnail(); ?>
              </button>
            <?php
                endwhile;
              endif;
              wp_reset_postdata();
            ?>
        </div>
      </section>

      <section id="green">
        <?php 
            $green_query = new WP_Query( array("p" => $ids_array[3]) );
            if ($green_query->have_posts() ):
              while ($green_query->have_posts() ): $green_query->the_post(); 
        ?>
        <p><?php the_title(); ?></p>

        <?php the_post_thumbnail(); ?>

        <div class="text">
          <?php the_content(); ?>
          <p><?php echo get_post_custom_values("Zitatgeber")[0]; ?></p>
        </div>
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
      </section>

      <section id="jobs">
        <?php 
            $jobs_query = new WP_Query( array("page_id" => $ids_array[4], 'posts_per_page' => '1') );
            if ($jobs_query->have_posts() ):
              while ($jobs_query->have_posts() ): $jobs_query->the_post(); 
        ?>
        <div class="text">
            <h2><?php echo get_post_custom_values("Header")[0]; ?></h2>
            <p><?php echo get_post_custom_values("Baeckeransprache")[0]; ?><br><br><?php echo get_post_custom_values("Konditoransprache")[0]; ?><br><br><a href="<?php the_permalink(); ?>"><?php echo get_post_custom_values("bewerbungslink")[0]; ?></a><br><br></p><p><?php echo get_post_custom_values("Description")[0]; ?></p>
        </div>
        <?php the_post_thumbnail(); ?>
        <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
      </section>

      <section id="locations">
        <?php 
            $motto_query = new WP_Query( array("p" => $ids_array[5]) );
            if ($motto_query->have_posts() ):
              while ($motto_query->have_posts() ): $motto_query->the_post(); 
          ?>
            <?php the_post_thumbnail(); ?>
            <div class="text">
              <h2><?php the_title(); ?></h2>
              <?php the_content(); ?>
              <div class="divider"></div>
            </div>
          <?php

              endwhile;
            endif;
            wp_reset_postdata();
          ?>

        <div class="locations">
          <?php
            $standort_query = new WP_Query( array("category_name" => "standort", "order" => "ASC") );
            if ($standort_query->have_posts() ):
              while ($standort_query->have_posts() ): $standort_query->the_post(); 
          ?>

          <div class="location">
              <?php the_post_thumbnail(); ?>
              <p><?php echo get_post_custom_values("adresse")[0]; ?></p>
              <div class="openingHours">
                <p><?php echo get_post_custom_values("open")[0]; ?></p>
                <p><?php echo get_post_custom_values("unter der Woche")[0]; ?><br><?php echo get_post_custom_values("Am Wochenende")[0]; ?></p>
              </div>
          </div>
          <?php
            endwhile;
            endif;
            wp_reset_postdata();
        ?>
        </div>
      </section>
      <?php endif; ?>
    </main>
    <?php get_footer(); ?>
    <?php wp_footer(); ?>
  </body>
</html>
