<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!------ Include the above in your HEAD tag ---------->
<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<!------ Include the above in your HEAD tag ---------->

</script><link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.4.0/css/font-awesome.min.css" rel='stylesheet' type='text/css'>
<script src="https://code.jquery.com/jquery-2.2.4.js"></script>

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="description" content="A front-end template that helps you build fast, modern mobile web apps.">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <title>MyTeeth Web </title>
    <meta name="mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="apple-mobile-web-app-status-bar-style" content="black">
    <meta name="apple-mobile-web-app-title" content="Material Design Lite">
    
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:regular,bold,italic,thin,light,bolditalic,black,medium&lang=en">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.cyan-light_blue.min.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/main.css">
    <link rel="stylesheet" href="<?php echo base_url();?>/assets/css/table.css">
    <script src="<?php echo base_url();?>/assets/js/table.js" type="text/javascript" charset="utf-8" async defer></script>
  </head>
  <body>
    <div class="demo-layout mdl-layout mdl-js-layout mdl-layout--fixed-drawer mdl-layout--fixed-header">
      <header class="demo-header mdl-layout__header mdl-color--grey-100 mdl-color-text--grey-600">
        <div class="mdl-layout__header-row">
         <!------ <span class="mdl-layout-title">MyTeeth Web</span>-->
<?php

  if (!isset($_SESSION['username'])) {
    echo'
          <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <a href="'.site_url('UserController/about').'">
              <li class="mdl-menu__item">About</li>
            </a>
            <a href="'.site_url('UserController/login').'">
              <li class="mdl-menu__item">Admin</li>
            </a>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="'.base_url().'/assets/img/logo.jpg" class="demo-avatar">
          <span class="mt-3">MyTeeth Web</span>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="'.site_url('UserController').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">home</i>Home</a>
          <a class="mdl-navigation__link" href="'.site_url('TandaController').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Data Tanda - Tanda</a>
          <a class="mdl-navigation__link" href="'.site_url('GejalaController').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Data Gejala</a>
          <a class="mdl-navigation__link" href="'.site_url('PenyakitController').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Data Penyakit</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>';
    }
    else{
      echo'
        <div class="mdl-layout-spacer"></div>
          <button class="mdl-button mdl-js-button mdl-js-ripple-effect mdl-button--icon" id="hdrbtn">
            <i class="material-icons">more_vert</i>
          </button>
          <ul class="mdl-menu mdl-js-menu mdl-js-ripple-effect mdl-menu--bottom-right" for="hdrbtn">
            <a href="'.site_url('UserController/about').'">
              <li class="mdl-menu__item">About</li>
            </a>
            <a href="'.site_url('UserController/logout').'">
              <li class="mdl-menu__item">Logout</li>
            </a>
          </ul>
        </div>
      </header>
      <div class="demo-drawer mdl-layout__drawer mdl-color--blue-grey-900 mdl-color-text--blue-grey-50">
        <header class="demo-drawer-header">
          <img src="https://image.ibb.co/mGn5np/user.jpg" class="demo-avatar">
          <span class="mt-3">MyTeeth Web</span>
        </header>
        <nav class="demo-navigation mdl-navigation mdl-color--blue-grey-800">
          <a class="mdl-navigation__link" href="'.site_url('TandaController/admin').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Edit Tanda - Tanda</a>
          <a class="mdl-navigation__link" href="'.site_url('GejalaController/admin').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Edit Gejala</a>
          <a class="mdl-navigation__link" href="'.site_url('PenyakitController/admin').'"><i class="mdl-color-text--blue-grey-400 material-icons" role="presentation">inbox</i>Edit Penyakit</a>
          <div class="mdl-layout-spacer"></div>
        </nav>
      </div>
      ';

    }
?>