<!DOCTYPE html>

<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">    

        <!-- ===========================
        SITE TITLE
        =========================== -->
        <title>Himpunan Mahasiswa Informatika ITB</title><!-- This is what you see on your browser tab-->
        
        <link href="<?php bloginfo('stylesheet_url');?>" rel="stylesheet">
        <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
        <script src="http://code.jquery.com/jquery-latest.min.js"></script>
    
        <!-- Include all compiled plugins (below), or include individual files as needed -->
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
        
        <?php include_once( ABSPATH . 'wp-admin/includes/plugin.php' ); ?>
        <?php wp_enqueue_script("jquery"); ?>
        <?php wp_head(); ?>

    </head>
    <body id="page-top" data-spy="scroll" data-target=".navbar-fixed-top">
        