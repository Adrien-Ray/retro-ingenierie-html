<!DOCTYPE html>
<html <?php language_attributes();?>>
<head>
      <meta charset="<?php bloginfo('charset'); ?>">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title><?php bloginfo('name'); ?></title>
      <meta name="description" content="<?php bloginfo('description'); ?>">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
      <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<?= get_custom_logo($blog_id) ?>

<body>
<main class="container-fluid">
  <nav class="navbar navbar-expand-lg navbar-light bg-light barfixed">
    <div class="container-fluid">
      <img src="wp-content/themes/retro-ingenierie-html/assets/icons/logo.png" alt="logo" class="logoimg"> <!-- LOGO ENTREPRISE -->
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
        <div class="navbar-nav">
          <a class="nav-link" href="#">Features</a>
          <a class="nav-link" href="#">Integration</a>
          <a class="nav-link" href="#">Pricing</a>
          <a class="nav-link" href="#">Compagny</a>
          <a class="nav-link" href="#">Blog</a>
          <a class="nav-link blueborder" href="#">Get a demo</a>
          <a class="nav-link" href="#"><img src="wp-content/themes/retro-ingenierie-html/assets/icons/user.png" alt="user" class="loginpng">Login</a>
        </div>
      </div>
    </div>
  </nav>