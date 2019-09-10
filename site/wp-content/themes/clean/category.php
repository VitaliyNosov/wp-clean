<?php
get_header();
?>

<?php if( get_theme_mod('clean_home_category') ): ?>
    <div id="fh5co-portfolio">

        <?php if ( have_posts() ) : $i = 1; while ( have_posts() ) : the_post(); ?>

            <?php get_template_part('template-parts/content', 'preview'); ?>

            <!-- Дабы не дублировать код мы создали файл 'preview' в 'template-parts' и теперь 
            будем использовать его там где на нужно,
            в нем используется нужная нам разметка. -->

            <?php $i++; endwhile; ?>
            <?php the_posts_pagination( array(
                'end_size' => 1,
                'mid_size' => 1,
                'type' => 'list',
            ) ); ?>
        <?php else: ?>
            <!-- no posts found -->
        <?php endif; ?>
        <?php wp_reset_postdata(); ?>

    </div>
    <div class="clearfix"></div>
<?php endif; ?>

<?php
get_footer();
