<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="preconnect" href="https://fonts.gstatic.com" />
    <link
      href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://fonts.googleapis.com/css2?family=Tangerine:wght@700&display=swap"
      rel="stylesheet"
    />

   <?php
   wp_head();
   ?>

  
   
  </head>
  <body>
    <article class="page-wrap">
      <!-- header -->
      <a href="<?php echo get_option('siteurl'); ?> " style='text-decoration: none'>
      <div class="topLogo">
        <h1 id="siteName">New England Mermaid</h1>
        <!-- <div class="gradiant"></div>   -->
      </div>
      </a>

      <header class="header">
        <div class="headerNav">
          <ul>
            <li>
              <div class="dropdown">
                <a href="<?php echo get_option('siteurl'); ?>"> <button class="dropbtn">Home</button></a>
              </div>
            </li>
            <div class="dropdown">
              <a href="<?php echo get_option('siteurl'); ?>/about/"> <button class="dropbtn">About Me</button></a>
              <div class="dropdown-content">
                <a href="<?php echo get_option('siteurl'); ?>/about/">
                  <img id="aboutDoor" src="<?php echo get_template_directory_uri(); ?>/assets/images/front-door.jpg" alt="Enter"
                /></a>
              </div>
            </div>
            <li>
              <div class="dropdown">
                <button class="dropbtn">Blogs</button>
                <div class="dropdown-content">
                  <a class="dropLink" href="<?php echo get_option('siteurl'); ?>/category/geeking-out-with-deb/">Geeking out with Deb</a>
                  <a class="dropLink" href="<?php echo get_option('siteurl'); ?>/category/ocean-musings/">Ocean Musings</a>
                  <a class="dropLink" style="font-style: italic; color: gray"
                    >More Coming Soon</a
                  >
                </div>
              </div>
            </li>
            <li>
              <div class="dropdown">
              <a href="<?php echo get_option('siteurl'); ?>/contact/">
                <button class="dropbtn">Contact</button>
              </div>
              </a>
            </li>
            <li>
              <div class="dropdown">
             
                <button class="dropbtn">Subscribe</button>
                <div class="dropdown-content" id="widget-dropdown">
                <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
                <div id="secondary-sidebar" class="new-widget-area">
                <?php dynamic_sidebar( 'new-widget-area' ); ?>
                </div>
                <?php endif; ?>
                </div>
              </div>
              </a>
            </li>
          </ul>
        </div>

        <!-- Top Navigation Menu -->
        <div class="topnav">
          <a href="<?php echo get_option('siteurl'); ?>" class="#active">New England Mermaid</a>
          <!-- Navigation links (hidden by default) -->
          <div id="myLinks">
            <a href="<?php echo get_option('siteurl'); ?>/about/">About Me</a>
            <a id='blogOption'>Blogs</a>
            <div id="blogLinks">
              <a href="<?php echo get_option('siteurl'); ?>/category/geeking-out-with-deb/"> Geeking out with Deb</a>
              <a href="<?php echo get_option('siteurl'); ?>/category/ocean-musings/"> Ocean Musings</a>
              <a style="font-style: italic; color: #D3D3D3"
                    >More Coming Soon</a>
            </div>
            <a href="<?php echo get_option('siteurl'); ?>/contact/">Contact</a>
            <div id='hamburger-widget'>
              <?php if ( is_active_sidebar( 'new-widget-area' ) ) : ?>
              <div id="secondary-sidebar" class="new-widget-area">
              <?php dynamic_sidebar( 'new-widget-area' ); ?>
              </div>
            </div>
            <?php endif; ?>
          </div>
          <!-- "Hamburger menu" / "Bar icon" to toggle the navigation links -->
          <a class="icon" id='hamburger'>
            <i class="fa fa-bars"></i>
          </a>
        </div>
      </header>