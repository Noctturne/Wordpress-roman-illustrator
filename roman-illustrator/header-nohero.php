<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

    <header class="site-header-no-hero">
        <nav class="navbar navigation navbar-light">
            <div class="container-fluid mx-0 px-0">
                <!-- LOGO -->
                <a href="<?php echo esc_url(site_url('/')) ?>">
                    <img class="navbar-brand" src="<?php echo get_stylesheet_directory_uri(); ?>/images/logo/Logotipo.png" alt="Logotipo">
                </a>
                <!-- MENÚ BUTTON -->
                <button id="hamb" class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="toggler-icon-black"><i class="fas fa-bars fa-sm"></i></span>
                </button>
                <!-- MENÚ -->
                    <?php
                        $args = array(
                            'theme_location' => 'main-menu',
                            'container_id' => 'navbarSupportedContent',
                            'container_class' => 'collapse navbar-collapse',
                            'menu_class' => 'nav navbar-nav'
                        );
                        wp_nav_menu($args);
                    ?>
                    <?php
                        $args = array(
                            'theme_location' => 'social-menu',
                            'container_id' => 'navbarSupportedContent',
                            'container_class' => 'collapse navbar-collapse social-menu',
                            'menu_class' => 'nav navbar-nav'
                        );
                        wp_nav_menu($args);
                    ?>
            </div>
        </nav>
    </header>
</body>