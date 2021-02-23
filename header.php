<?php extract($args); ?>
<!DOCTYPE HTML>
<html>

<head>
    <title><?php echo $title ?></title>
    <meta name="description" content="<?php echo $excerpt; ?>"/>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <?php wp_head(); ?>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top ">
        <div class="container d-flex align-items-center">

            <?php if(!has_custom_logo()): ?>    
            <h1 class="logo me-auto">
                <a href="<?php echo get_site_url(); ?>"><?php echo $title; ?></a>
            </h1>
            <?php else: ?>
                <?php the_custom_logo(); ?>
            <?php endif; ?>
            
            <?php 
                wp_nav_menu( array(
                    'container' => "nav",
                    'container_class'=>"nav-menu d-none d-lg-block",
                    'location' => 'Primary'
                ));
            ?>
    
            <a href="#contact" class="get-started-btn scrollto">Get Started</a>
        </div>
    </header><!-- End Header -->        