<!DOCTYPE html>
<html lang="en">
<head>
    <?php wp_head();?>
</head>
<body>
    
</body <?php body_class();?>>

<header class="sticky-top">
    <div class="head-buttons">
<button id="collapse" class="header-button">< </button>
<button class="header-button">CS Logistics Control Tower</button>
</div>
</header>
     
<div id="wrapper">
        <!-- Sidebar -->
        <div id="sidebar-wrapper">
        <img class="logo" src="<?php bloginfo('template_url'); ?>/images/hplogo.png"/>

        <?php wp_nav_menu(

        array(
        'theme_location' => 'side-menu',
        'container' => 'ul',
        'menu_class' => 'sidebar-nav',
        'add_li_class' => 'sidebar-brand',
        )
        );?>
</div>

