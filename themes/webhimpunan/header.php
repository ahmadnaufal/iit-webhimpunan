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
        <!-- ===========================
         NAVBAR START
         =========================== -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <?php 
                // Fix menu overlap bug..
                if ( is_admin_bar_showing() ) echo '<div style="min-height: 28px;"></div>'; 
            ?>

            <div class="container">
                   
                <div class="navbar-header page-scroll">
                    <button type="button" id="menubutton" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                        
                    <a class="navbar-brand page-scroll" href="#hero">
                        <div class="brandicon">
                            <img src="<?php bloginfo('template_directory'); ?>/img/hmif1.png" alt="HMIF" style="float:none">
                                Home
                        </div> 
                    </a>
                </div>

                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav sf-menu navbar-right" id="navigation"><!--YOUR NAVIGATION ITEMS STRAT BELOW-->
                        <li class="dropdown">
                            <a class="page-scroll dropdown-toggle" data-toggle="dropdown" href="#profile">Profil  <span class="caret"></span></a>
                            <ul>
                                <li><a class="page-scroll" href="index.php/profil/#history">Sejarah</a></li>
                                <li><a class="page-scroll" href="index.php/profil/#structure">Struktur Organisasi</a></li>
                            </ul>
                        </li>

                        <li><a class="page-scroll" href="#news">Berita</a></li>
                        <li><a class="page-scroll" href="#event">Agenda</a></li>

                        <li class="dropdown">
                            <a class="page-scroll dropdown-toggle" href="#achieve">Prestasi <span class="caret"></span></a>
                            <ul>

                                <?php
                                    $prestasi = get_page_by_title( 'Prestasi' );
                                    $mypages = get_pages( array( 'child_of' => $prestasi->ID, 'sort_column' => 'post_date', 'sort_order' => 'desc' ) );

                                    foreach( $mypages as $page ) { 
                                        $link = "index.php/prestasi/#" . $page->ID; 
                                ?>

                                <li><a class="page-scroll" href="<?php echo $link; ?>"><?php echo $page->post_title; ?></h2></a></li>
                                <?php } ?>
                            </ul>
                        </li>

                        <li><a class="page-scroll" href="#gallery">Galeri</a></li>
                        <li><a class="page-scroll"href="#footer">Kontak</a></li>
                        
                    </ul>
                
                </div><!--.nav-collapse -->
            </div>
        </nav><!--navbar end-->        
        