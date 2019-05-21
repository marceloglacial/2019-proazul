<!DOCTYPE html>
<html lang="en">

<head>
    <noscript>
        <div class="alert alert-danger" role="alert">
            You need to enable JavaScript to run this app.
        </div>
    </noscript>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="robots" content="index, follow">

    <!-- Viewport for responsive web design -->
    <meta name="viewport" content="width=device-width, initial-scale=1, viewport-fit=cover">

    <!-- INFO -->
    <title><?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?></title>
    <meta name="description" content="<?php echo get_bloginfo( 'description' ); ?>" />
    <meta name="keywords" content="<?php echo get_bloginfo( 'name' ); ?>" />

    <!-- Recommended favicon format -->
    <link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon.png">

    <!-- Apple Touch Icon (at least 200x200px) -->
    <link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/tile.png">

    <!-- To run web application in full-screen -->
    <meta name="apple-mobile-web-app-capable" content="yes">

    <!-- Status Bar Style (see Supported Meta Tags below for available values) -->
    <meta name="apple-mobile-web-app-status-bar-style" content="black">

    <!-- Microsoft Tiles -->
    <meta name="msapplication-config" content="<?php echo get_template_directory_uri(); ?>/browserconfig.xml" />

    <!-- SOCIAL -->
    <meta property="og:type" content="website">
    <meta property="og:url" content="htt://ecomar.pt">
    <meta property="og:title" content="<?php echo get_bloginfo( 'name' ); ?>">
    <meta property="og:image" content="<?php echo get_template_directory_uri(); ?>/tile-wide.png">
    <meta property="og:description"
        content="<?php echo get_bloginfo( 'description' ); ?>">
    <meta property="og:site_name"
        content="<?php echo get_bloginfo( 'name' ); ?> - <?php echo get_bloginfo( 'description' ); ?>">
    <meta property="og:locale" content="en_US">

    <!-- STYLES -->
    <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/assets/css/main.min.css?version=2.2">
    <?php wp_head() ?>
</head>

<body>