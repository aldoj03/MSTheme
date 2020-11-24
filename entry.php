<article class=" <?php echo  is_single() ?    'post__card__single' :'post__card' ?> " id="post-<?php the_ID(); ?>" <?php post_class(); ?>>
   <?php if( !is_single() ): ?>
    <a href="<?php the_permalink(); ?>" title="<?php the_title_attribute(); ?>" rel="bookmark">
   <?php  endif; ?>
        <?php   is_single() ?       the_post_thumbnail() : the_post_thumbnail('post-home-size')?>  
        <div class="post__card__content">
        <?php  if( is_single()):?>  

        <ul class="tags__container">
                <?php $posttags = get_the_tags();
                if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<li><a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a></li>'; 
                }
                } ?>  
            </ul>
            <?php endif;?>  

           <h3><?php the_title(); ?></h3>
            <!-- <h3>Adaptarnos al cambio está en nuestro ADN</h3> -->
            <div class="post__card__user__container">
                <div class="post__card__user__img">
                    <img src="<?php echo get_stylesheet_directory_uri(); ?>/img/mercantil_user.png" alt="">
                </div>
                <span>Equipo Mercantil</span>
            </div>
            <div class="post__card__user__extract"><?php echo  is_single() ?    get_the_content() :  get_the_excerpt()  ?></div>
        <?php  if( !is_single()):?>  

            <ul class="tags__container">
                <?php $posttags = get_the_tags();
                if ($posttags) {
                foreach($posttags as $tag) {
                    echo '<li><a href="'.get_tag_link($tag->term_id).'">#'.$tag->name.'</a></li>'; 
                }
                } ?>  
            </ul>
            <?php endif;?>

        </div>
        <?php if( !is_single() ): ?>
        </a>
   <?php  endif; ?>
    </article>