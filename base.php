<?php use Roots\Worth\Setup; ?>
<?php use Roots\Worth\Wrapper; ?>

<!doctype html>
<html <?php language_attributes(); ?>>

<link rel="stylesheet" href="<?php echo Roots\Worth\Assets\bower_components_path('sweetalert2/dist/sweetalert2.min.css') ?>">

<?php get_template_part('templates/head'); ?>

<body <?php body_class(); ?>>

    <!--[if IE]>
      <div class="alert alert-warning">
        <?php _e('You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.', 'worth'); ?>
      </div>
      <![endif]-->

      <?php do_action('get_header') ?>
      <?php get_template_part('templates/header') ?>

      <div class="wrap" role="document">
        <?php include Wrapper\template_path(); ?>
      </div>

      <?php do_action('get_footer') ?>
      <?php get_template_part('templates/footer') ?>

      <script src="<?php echo Roots\Worth\Assets\bower_components_path('jquery/dist/jquery.min.js') ?>"></script>

      <script src="<?php echo Roots\Worth\Assets\bower_components_path('tether/dist/js/tether.js') ?>"></script>

      <script src="<?php echo Roots\Worth\Assets\bower_components_path('bootstrap/dist/js/bootstrap.min.js') ?>"></script>

      <script src="<?php echo Roots\Worth\Assets\bower_components_path('sweetalert2/dist/sweetalert2.min.js') ?>"></script>

      <script src="<?php echo Roots\Worth\Assets\asset_path('scripts/all.js') ?>"></script>

      <script src="https://maps.googleapis.com/maps/api/js?key=[KEY]&callback=initMap"
      async defer></script>

      <!--<?php wp_footer() ?>-->
    </body>
    </html>
