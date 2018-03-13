<?php
/**
 * Theme header
 *
 * Displays all of the <head> section, set body extra classes and contain header template
 *
 * @package ackerman
 */
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <?php wp_head(); ?>
</head>

<?php
  /* Add additional classes to the body if we are on specific pages */
  if( is_home() || is_page( 'some-page' ) ):
    $body_classes = array('some-class');
  endif;
?>

<body <?php body_class( $body_classes ); ?>>
