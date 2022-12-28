<!DOCTYPE html>
<html lang="de">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>CMS Endabgabe</title>
    <script type="module" crossorigin src='<?php echo get_template_directory_uri();?>/main.js' defer></script>
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
    <header>
      <a href="#" class="logo">BEN<br>BAECKT</a>
      <div class="mainnav">

        <div class="burger" id="burger">
          <div class="line"></div>
          <div class="line"></div>
        </div>

        <ul>
          <li><a href="#workshops">Workshops</a></li>
          <li><a href="#green">Go Green</a></li>
          <li><a href="#jobs">Join Us</a></li>
          <li><a href="#locations">Locations</a></li>
        </ul>

        <div class="additional">
          <div class="info">
            <p>Connect</p>
            <div class="divider"></div>
            <a href="https://www.instagram.com/" target="_blank">Instagram</a>
            <a href="https://de-de.facebook.com/" target="_blank">Facebook</a>
          </div>

          <div class="info">
            <p>Get int Touch</p>
            <div class="divider"></div>
            <p>+31 415926535</p>
            <p>benbaeckt@fakemail.de</p>
          </div>

        </div>
      </div>
    </header>

    <section id="hero">
      <div class="heroText">
        <p>For The</p>
        <p>Love of Bread</p>
      </div>
    </section>

    <section id="motto">
      <img src="<?php echo get_template_directory_uri();?>/images/teig_740px.jpg" alt="Hände beim Backen mit Teig" sizes="740px"
      srcset="<?php echo get_template_directory_uri();?>/images/teig_740px.jpg 740w,
      <?php echo get_template_directory_uri();?>/images/teig_1400px.jpg 1400w,
      <?php echo get_template_directory_uri();?>/images/teig_2800px.jpg 2800w" />
                    
      <div class="text">
        <p>Das Handwerk des Bäckers ist wie eine Kunst, es erfordert Geduld, Präzision und Leidenschaft. Doch am Ende lohnt sich die Mühe, denn wer den Duft frisch gebackenen Brots einmal eingeatmet hat, der weiß, dass es kaum etwas Schöneres gibt.</p>
        <p>Nach diesem Motto arbeitet und lebt die Familie Baeckmann schon seit über 100 Jahren.</p>
        <div class="divider"></div>
      </div>
    </section>

    <div class="divider"></div>

    <section id="workshops">
      <h2>Workshops</h2>

      <div class="offer">
        <button class="workshop">
          <div class="row">
            <h3>Brot</h3>
            <svg width="50" height="24" viewBox="0 0 50 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M49.0607 13.0607C49.6464 12.4749 49.6464 11.5251 49.0607 10.9393L39.5147 1.3934C38.9289 0.807612 37.9792 0.807612 37.3934 1.3934C36.8076 1.97918 36.8076 2.92893 37.3934 3.51472L45.8787 12L37.3934 20.4853C36.8076 21.0711 36.8076 22.0208 37.3934 22.6066C37.9792 23.1924 38.9289 23.1924 39.5147 22.6066L49.0607 13.0607ZM0 13.5H48V10.5H0V13.5Z" fill="black"/>
            </svg>           </div>
          <p>Alles über das Handwerk des Sauerteigs</p>
        </button>

        <button class="workshop">
          <div class="row">
            <h3>Croissants</h3>
            <svg width="50" height="24" viewBox="0 0 50 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M49.0607 13.0607C49.6464 12.4749 49.6464 11.5251 49.0607 10.9393L39.5147 1.3934C38.9289 0.807612 37.9792 0.807612 37.3934 1.3934C36.8076 1.97918 36.8076 2.92893 37.3934 3.51472L45.8787 12L37.3934 20.4853C36.8076 21.0711 36.8076 22.0208 37.3934 22.6066C37.9792 23.1924 38.9289 23.1924 39.5147 22.6066L49.0607 13.0607ZM0 13.5H48V10.5H0V13.5Z" fill="black"/>
            </svg>           </div>
          <p>Die französische Kunst der Patisserie</p>
        </button>

        <button class="workshop">
          <div class="row">
            <h3>Schokolade</h3>
            <svg width="50" height="24" viewBox="0 0 50 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M49.0607 13.0607C49.6464 12.4749 49.6464 11.5251 49.0607 10.9393L39.5147 1.3934C38.9289 0.807612 37.9792 0.807612 37.3934 1.3934C36.8076 1.97918 36.8076 2.92893 37.3934 3.51472L45.8787 12L37.3934 20.4853C36.8076 21.0711 36.8076 22.0208 37.3934 22.6066C37.9792 23.1924 38.9289 23.1924 39.5147 22.6066L49.0607 13.0607ZM0 13.5H48V10.5H0V13.5Z" fill="black"/>
            </svg>  
          </div>
          <p>Pralinen, Kuchen, Muffins zum dahin schmelzen</p>
        </button>
      </div>
    </section>

    <section id="green">
      <p>“Als Bäcker ist es mir wichtig, nachhaltig zu arbeiten und einen Beitrag zum Schutz unserer Umwelt zu leisten. Deshalb setze ich auf biologische Zutaten, die ohne den Einsatz von Pestiziden und synthetischen Düngemitteln angebaut werden.”</p>

      <img src="<?php echo get_template_directory_uri();?>/images/hand_mit_gruen_740px.jpg" alt="Hände die Erde mit einer Pflanze hält" sizes="740px"
      srcset="<?php echo get_template_directory_uri();?>/images/hand_mit_gruen_740px.jpg 740w,
      <?php echo get_template_directory_uri();?>/images/hand_mit_gruen_1400px.jpg 1400w,
      <?php echo get_template_directory_uri();?>/images/hand_mit_gruen_2800px.jpg 2800w" />

      <div class="text">
        <p>“Um nachhaltig zu arbeiten, setze ich auch auf erneuerbare Energien in meiner Bäckerei. Dazu kaufe ich Ökostrom und nutze Photovoltaikanlagen”</p>
        <p>-Ben Baeckman, Inhaber</p>
      </div>
    </section>

    <section id="jobs">
      <div class="text">
          <h2>Wir suchen zwei neue Back-Helden!</h2>
          <p>Du bist Bäcker*in und hast Backen zu deiner Superpower erklärt?<br><br>Du bist Konditor*in und lässt mit deinen süßen Kreationen jedes Herz höher schlagen?<br><br><a href="">Dann bewirb dich hier</a><br><br>Wir freuen uns auf deine köstlichen Ideen und die Chance, dich als neues Mitglied unseres Teams willkommen zu heißen!"</p>
      </div>
      <img src="<?php echo get_template_directory_uri();?>/images/back_prozedur_740px.png" alt="3 Bilder, die die Prozedur des Backens zeigen" sizes="740px"
      srcset="<?php echo get_template_directory_uri();?>/images/back_prozedur_740px.png 740w,
      <?php echo get_template_directory_uri();?>/images/back_prozedur_1400px.png 1400w,
      <?php echo get_template_directory_uri();?>/images/back_prozedur_2800px.png 2800w" />
    </section>

    <section id="locations">
      <h2>Standorte</h2>

      <div class="locations">
        <div class="location">

          <img src="<?php echo get_template_directory_uri();?>/images/standort1_740px.jpg" alt="Bild des ersten Standorts" sizes="740px"
          srcset="<?php echo get_template_directory_uri();?>/images/standort1_740px.jpg 740w,
          <?php echo get_template_directory_uri();?>/images/standort1_1400px.jpg 1400w,
          <?php echo get_template_directory_uri();?>/images/standort1_2800px.jpg 2800w" />
            <p>Sterneckstraße 1, 5020 Salzburg</p>
            <div class="openingHours">
              <p>Öffnungszeiten</p>
              <p>Mo-Fr: 08:00 - 17:00<br>Sa & So: 07:00 - 15:00</p>
            </div>
        </div>

        <div class="location">
          <img src="<?php echo get_template_directory_uri();?>/images/standort2_740px.jpg" alt="Bild des zweiten Standorts" sizes="740px"
          srcset="<?php echo get_template_directory_uri();?>/images/standort2_740px.jpg 740w,
          <?php echo get_template_directory_uri();?>/images/standort2_1400px.jpg 1400w,
          <?php echo get_template_directory_uri();?>/images/standort2_2800px.jpg 2800w" />
          <p>Sterneckstraße 2, 5020 Salzburg</p>
          <div class="openingHours">
            <p>Öffnungszeiten</p>
            <p>Mo-Fr: 08:00 - 17:00<br>Sa & So: 07:00 - 15:00</p>
          </div>
        </div>

        <div class="location">
          <img src="<?php echo get_template_directory_uri();?>/images/standort3_740px.jpg" alt="Bild des dritten Standorts" sizes="740px"
          srcset="<?php echo get_template_directory_uri();?>/images/standort3_740px.jpg 740w,
          <?php echo get_template_directory_uri();?>/images/standort3_1400px.jpg 1400w,
          <?php echo get_template_directory_uri();?>/images/standort3_2800px.jpg 2800w" />
          <p>Sterneckstraße 3, 5020 Salzburg</p>
          <div class="openingHours">
            <p>Öffnungszeiten</p>
            <p>Mo-Fr: 08:00 - 17:00<br>Sa & So: 07:00 - 15:00</p>
          </div>
        </div>
      </div>
    </section>

    <footer>      
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
            <li><p>+31 415926535</p></li>
            <li><p>benbaeckt@fakemail.de</p></li>
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
    <img class="footerImg" src="<?php echo get_template_directory_uri();?>/images/brot_740px.jpg" alt="Hände die ein Brot halten" sizes="740px"
    srcset="<?php echo get_template_directory_uri();?>/images/brot_740px.jpg 740w,
    <?php echo get_template_directory_uri();?>/images/brot_1400px.jpg 1400w,
    <?php echo get_template_directory_uri();?>/images/brot_2800px.jpg 2800w" />
    <?php wp_footer(); ?>
  </body>
</html>
