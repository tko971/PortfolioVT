<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width">
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
  <div id="wrapper" class="hfeed">
    <header id="header" role="banner">
      <div id="branding">
        <div id="site-title" itemprop="publisher" itemscope itemtype="https://schema.org/Organization"></div>
        <?php
        if(is_home()||is_front_page()){
          $path = "";
        }else{
          $path = site_url();
        } 
        ?>
        <nav id="menu" class="main-navigation" role="navigation" itemscope itemtype="https://schema.org/SiteNavigationElement">
          <ul class="liensmenu">
            <li><a href="<?php echo $path;?>#presentation">Profil</a></li>
            <li><a href="<?php echo $path;?>#competences">Compétence</a></li>
            <li><a href="<?php echo $path;?>#projetsrealises">Portfolio</a></li>
            <li><a href="<?php echo $path;?>#contact">Contact</a></li>
          </ul>
        </nav>
    </header>
  </div>
<div id="container">
<main id="content" role="main">
