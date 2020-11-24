<?php get_header(); ?>
<main id="content" role="main">
<?php if ( have_posts() ) : ?>
<header class="header">
<h1 class="tag__title"><?php printf( esc_html__( 'Resultados: %s', 'generic' ), get_search_query() ); ?></h1>
</header>
<?php while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; ?>
<?php else : ?>
<article id="post-0" class="post no-results not-found">
<header class="header">
<h1 class="tag__title"><?php esc_html_e( 'No hay resultados', 'generic' ); ?></h1>
</header>
<div class="tag__title">
<p><?php esc_html_e( 'Lo sentimos, no hemos encontrado resultados para tu busqueda.', 'generic' ); ?></p>
</div>
</article>
<?php endif; ?>
</main>
<?php get_footer(); ?>