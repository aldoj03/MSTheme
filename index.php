<?php get_header(); ?>
<main id="content" role="main">

<section class="baner__blog">
    <div class="banner__img__container">
        <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/banner__img.png" alt="">
    </div>
    <div class="banner__content__container">
        <h3>Historias sobre cómo sentirnos seguros y seguir impulsandonos en este mundo nuevo</h3>
        <p>Suscríbete a nuestra exclusiva lista de correo y recibe las historias más inspiradoras del equipo de Mercantil Seguros</p>
        <form class="banner__input__container">
            <input type="email" name="email" id="" placeholder="E-mail">
            <input type="submit" value="Suscribirse">
        </form>
    </div>
</section>

<section class="search__section">
        <h3>Busca en nuestras historias</h3>
        <div class="input__search__container">
        <?php
            if ( is_active_sidebar( 'Buscar Historias' ) ) : ?>
                <div id="header-widget-area" class="chw-widget-area widget-area" role="complementary">
                <?php dynamic_sidebar( 'buscar-historias' ); ?>
                </div>
                
            <?php endif; ?>
        </div>
</section>

<section class="blog__section">

    <div class="blog__section__title__container">
        <h3>¿Te interesa alguno de estos temas?</h3>
        <div class="blog__section__buttons__container">
            <button data-cat="salud">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/icono_salud_boton_blog.png" alt="">
            Salud</button>
            <button data-cat="vida">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_icono_boton_vida.png" alt="">
            Vida</button>
            <button data-cat="institucional">
            <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/blog_icono_boton_institucional.png" alt="">
            Institucional</button>
        </div>
    </div>
</section>
<section class="posts__container" id="posts__container" data-page="1" >  
<?php global $wp_query;  query_posts('posts_per_page=-1'); ?>
<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</section>
</main>
<?php get_footer(); ?>