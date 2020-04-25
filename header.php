<!DOCTYPE html>
<html lang="en">

  <?php wp_head();?>

  <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>JC Software - Full Stack Application Development</title>
      <meta name="description" content="software developer with over 5 years of experience who has worked with and enjoys exploring various technologies, languages, and environments. I can develop professional web, desktop, and mobile applications, as well as websites that can help power your business or idea.">
      <meta name="keywords" content="JC Software keywords">
      <link rel="shortcut icon" type="image/x-icon" href="<?php echo get_template_directory_uri(); ?>/img/logoV2.png">
      <meta name="google-site-verification" content="RvlS5rLTKMnj57v1k870zny4s4iISFI6K3oVKWF5DIY" />
      <meta name="viewport" content="width=device-width, initial-scale=1">

      <!-- JQUERY -->
      <script type="text/javascript" src="http://code.jquery.com/jquery-1.11.0.min.js"></script>
      <script type="text/javascript" src="http://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>

      <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/hover.css">
      <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
      <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
      <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700" rel="stylesheet">

      <!-- RESPONSIVE NAVBAR -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/responsive_navbar.js" charset="utf-8"></script>
      <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/responsive_navbar.css">

      <!-- JS -->
      <script src="<?php echo get_template_directory_uri(); ?>/js/main_page.js" charset="utf-8"></script>

      <!-- SLICK CAROUSEL -->
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick.css"/>
      <link rel="stylesheet" type="text/css" href="<?php echo get_template_directory_uri(); ?>/slick/slick-theme.css"/>
      <script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/slick/slick.min.js"></script>

  </head>

  <header>
    <nav class="fixed-top">
      <div class="brand-container">
        <a class="brand" href="<?php echo get_home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/img/logoV2.png"></a>
        <button class="hb-button" name="button"><i class="fa fa-bars"></i></button>
      </div>
      <ul class="left">
        <li><a class="hvr-grow" href="#home">Home</a></li>
        <li><a class="hvr-grow" href="#about">About Me</a></li>
        <li><a class="hvr-grow" href="#services">Services</a></li>
      </ul>
      <ul class="right">
        <li class="nav-social-media"><a class="hvr-grow" href="https://www.linkedin.com/in/jordan-cohen-b54294111/"><i class="fab fa-linkedin-in"></i></a><a class="hvr-grow" href="http://github.com/Jordan2551"><i class="fab fa-github"></i></a></li>
        <li><a class="hvr-grow" href="#">Resources</a></li>
        <li><a class="hvr-grow" href="#contact">Contact</a></li>
        <li><a class="hvr-grow" href="#recent-work">Recent Work</a></li>
      </ul>
    </nav>
  </header>

  <body>
