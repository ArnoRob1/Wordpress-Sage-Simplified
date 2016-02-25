<?php

use Roots\Sage\Setup;
use Roots\Sage\Wrapper;

?>
<!doctype html>
<html <?php language_attributes(); ?>>

  <?php get_template_part('templates/head'); ?>
  
  <body <?php body_class(); ?>>

    <?php
      do_action('get_header');
      get_template_part('templates/header');
    ?>

    <div class="wrap container" role="document">

      <div class="content row">

        <main class="main col-sm-6">

          <?php include Wrapper\template_path(); ?>

        </main>

        <?php if (Setup\display_sidebar()) : ?>

          <aside class="sidebar">

            <?php include Wrapper\sidebar_path(); ?>

          </aside>

        <?php endif; ?>

      </div>

    </div>

    <?php
      do_action('get_footer');
      get_template_part('templates/footer');
      wp_footer();
    ?>
  </body>
</html>
