<?php
$home = esc_url(home_url('/'));
?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>

<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="format-detection" content="telephone=no">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  
  <?php /*  #wpadminbar分の位置調整 */ ?>
  <?php if (is_user_logged_in()) : ?>
    <style type="text/css">
      body {
        min-height: calc(100vh - 32px) !important;
        min-height: calc(100dvh - 32px) !important;
      }

      .l-header,
      .p-header__nav {
        top: 32px !important;
      }

      @media screen and (max-width: 1024px) {
        body {
          min-height: calc(100vh - 32px) !important;
          min-height: calc(100dvh - 32px) !important;
        }

        .l-header,
        .p-header__nav {
          top: 32px !important;
        }
      }

      @media screen and (max-width: 782px) {
        body {
          min-height: calc(100vh - 46px) !important;
          min-height: calc(100dvh - 46px) !important;
        }

        .l-header,
        .p-header__nav {
          top: 46px !important;
        }
      }

      @media screen and (max-width: 600px) {
        #wpadminbar {
          position: fixed !important;
        }
      }
    </style>
  <?php endif; ?>

  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <?php wp_body_open(); ?>
  <header class="l-header p-header">
    <div class="p-header__inner l-inner">
      <p class="c-test js-test">header.php</p>
    </div>
  </header>