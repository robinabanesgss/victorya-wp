<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
     <meta charset="utf-8">
     <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
     <title><?php bloginfo('name'); ?> | <?php is_front_page() ? bloginfo('description') : wp_title(''); ?></title> 

     <!-- Links Here -->
     <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/dist/css/main.css">
</head>

<body>
     <!-- header -->
     <header>
          <div class="header">
               <div class="header__logo">
                    <a href="#">
                         <img src="<?php echo get_template_directory_uri(); ?>/dist/images/Logo.png" alt="">
                    </a>
               </div><!-- /.logo -->
               <nav>
                    <div class="header__nav-container">
                         <ul class="header__nav-menu">
                              <li><a href="#">Menu</a></li>
                              <li><a href="#">Package</a></li>
                              <li><a href="#">About Us</a></li>
                              <li><a href="#">Contact Us</a></li>
                         </ul>
                    </div>
               </nav><!-- end of nav -->
          </div>
     </header><!-- end of header -->
     <main>
