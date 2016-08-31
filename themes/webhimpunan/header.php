<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    

        <!-- ===========================
        SITE TITLE
        =========================== -->
        <title><?php wp_title('|', true, 'right'); ?><?php bloginfo('name'); ?></title><!-- This is what you see on your browser tab-->
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top" <?php body_class(); ?>>
        <!-- ===========================
         NAVBAR START
         =========================== -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">

            <div class="container">
                   
                <div class="navbar-header page-scroll">
                    <button type="button" id="menubutton" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <a class="navbar-brand page-scroll" href="<?php bloginfo('url') ?>">
                        <div class="brandicon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/hmif1.png" alt="HMIF" style="float:none">
                                <span class="collapse-on-mobile"><?php bloginfo('name') ?></span>
                        </div> 
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    
                    <?php 

                        $args = array(
                            'menu' => 'header-menu',
                            'menu_class' => 'nav navbar-nav sf-menu navbar-right',
                            'menu_id' => 'navigation',
                            'container' => 'false'
                        );
                        wp_nav_menu($args);
                     ?>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><!--navbar end-->        
        