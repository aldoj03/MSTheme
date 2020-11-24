<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width" />
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-170778031-1"></script>
<script>
window.dataLayer = window.dataLayer || [];
function gtag(){dataLayer.push(arguments);}
gtag('js', new Date());
gtag('config', 'UA-170778031-1');
</script>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
<div id="wrapper" class="hfeed">
<header id="header" role="banner">
    <div id="branding">
        <a href="<?php echo site_url() ?>/">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mercatil_logo_header.png" alt="">
        </a>
    </div>
    <nav id="menu" role="navigation">
        <button type="button" class="menu-toggle">
            <span class="menu-icon">&#9776;</span>
            <span class="menu-text screen-reader-text"><?php esc_html_e( ' Menu', 'generic' ); ?></span>
        </button>
        <div class="menu__responsive__container">
            <div class="mask-body-oscure"></div>
            <div class="menu__responsive__content">
                <button type="button" class="menu-toggle__close menu-toggle">
                    <span class="menu-icon">&#x2715;</span>
                    <span class="menu-text screen-reader-text"><?php esc_html_e( ' Menu', 'generic' ); ?></span>
                </button>
                <?php wp_nav_menu( array( 'theme_location' => 'main-menu' ) ); ?>
                <div class="buttons__container buttons__container--responsive">
                    <a href="https://www.mercantilseguros.com/polizas/index.html" class="btn-menu-responsive-rounded" >Usar Mi Póliza</a>
                    <a href="https://www3.mercantilseguros.com/w/GenAfiliacionParam/Login.jsp?codApp=PORTASEGUR" class="btn-menu-responsive-rounded">Login</a>
                </div>
            </div>
        </div>
    </nav>
    <div class="buttons__container">
        <a href="https://www.mercantilseguros.com/polizas/index.html" class="poliza__button">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/poliza_logo.png" alt="">Usar<br>Mi Póliza</a>
        <a href="https://www3.mercantilseguros.com/w/GenAfiliacionParam/Login.jsp?codApp=PORTASEGUR"  class="login__button"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/login_logo.png" alt="">Login</a>
    </div>
</header>
<div id="container">