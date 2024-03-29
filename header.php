<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php
          /*
     * Print the <title> tag based on what is being viewed.
     * We filter the output of wp_title() a bit -- see
     * twentyten_filter_wp_title() in functions.php.
     */
          wp_title('|', true, 'right');

          ?></title>
  <link rel="profile" href="http://gmpg.org/xfn/11" />
  <link rel="icon" href="<?php bloginfo('stylesheet_directory'); ?>/images/favicon.png" type="image/x-icon">
  <link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
  <?php wp_head(); ?>
  <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=G-7JF1WCZMDL"></script>
  <script>
    window.dataLayer = window.dataLayer || [];

    function gtag() {
      dataLayer.push(arguments);
    }
    gtag('js', new Date());

    gtag('config', 'G-7JF1WCZMDL');
  </script>
</head>

<body <?php body_class(); ?>>

  <header class="header" id="header">
    <nav>

      <div class="container">
        <div class="row">
          <div class="col-sm-3 ">
            <ul>
              <li>
                <a href="<?php echo home_url(); ?>" class="branding"><?php bloginfo('name'); ?></a>
              </li>
            </ul>
          </div>
          <div class="col-sm-9">
            <div id="navigation_menu">
              <ul>
                <?php chilly_nav('primary'); ?>
              </ul>
            </div>
          </div>

        </div>
        <a href="#" id="menu_button">Menu</a>
      </div>

    </nav>
  </header>



  <div class="container">

    <div id="main">