<?php get_header(); ?>
<main id="content" role="main">
<header class="header">
<h1 class="tag__title"><?php single_term_title(); ?></h1>
<div class="archive-meta"><?php if ( '' != the_archive_description() ) { echo esc_html( the_archive_description() ); } ?></div>
</header>
<section class="posts__container">

<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
<?php get_template_part( 'entry' ); ?>
<?php endwhile; endif; ?>
</div>
</main>
<?php get_footer(); ?>