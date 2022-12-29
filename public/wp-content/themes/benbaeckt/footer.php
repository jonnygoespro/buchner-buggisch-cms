<footer>
        <?php 
            $motto_query = new WP_Query( array("p" => 48) );
            if ($motto_query->have_posts() ):
              while ($motto_query->have_posts() ): $motto_query->the_post(); 
          ?>
      <div class="divider"></div>
      <div class="sitemap">
        <div class="column">
          <h3>Connect</h3>
          <ul>
            <li><a href="https://www.instagram.com/" target="_blank">Instagram</a></li>
            <li><a href="https://de-de.facebook.com/" target="_blank">Facebook</a></li>
          </ul>
        </div>

        <div class="column">
          <h3>Get in Touch</h3>
          <ul>
            <li><p><?php echo get_post_custom_values("telefon")[0]; ?></p></li>
            <li><p><?php echo get_post_custom_values("email")[0]; ?></p></li>
          </ul>
        </div>

        <div class="column">
          <h3>Sitemap</h3>
          <ul>
            <li><a href="#workshops">Workshops</a></li>
            <li><a href="#green">Go Green</a></li>
            <li><a href="#locations">Locations</a></li>
            <li><a href="#jobs">Join Us</a></li>
          </ul>
        </div>

        <div class="column">
          <h3>Workshops</h3>
          <ul>
            <li><a href="">Brot</a></li>
            <li><a href="">Croissants</a></li>
            <li><a href="">Schokolade</a></li>
          </ul>
        </div>
      </div>

      <div class="info">
        <p>Creators: Alexander Buchner, Jonas Buggisch</p>
        <p>Bildquellen: <a href="https://unsplash.com/s/photos/bakery" target="_blank">https://unsplash.com/s/photos/bakery</a></p>
      </div>
    </footer>
    <div class="footerImg">
        <?php the_post_thumbnail(); ?>
    </div>
    <?php
        endwhile;
        endif;
        wp_reset_postdata();
    ?>      