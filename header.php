<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php bloginfo('name'); ?></title>
    <?php wp_head(); ?>
</head>
<body>

<nav id="main-nav">
    <div class="container">
        <a href="<?php echo site_url() ?>" class="logo"><?php bloginfo('name') ?></a>
        <?php $args=array('them-location'=>'main-menu') ?>
        <?php wp_nav_menu($args); ?>
        <!-- <ul>
            <li><a href="#">Home</a></li>
            <li><a href="#">About</a></li>
        </ul> -->
    </div>
</nav>
