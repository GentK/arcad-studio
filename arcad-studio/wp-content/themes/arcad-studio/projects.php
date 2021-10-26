<?php /*Template Name: Project */?>
<?php get_header()?>
    <main>
        <article class="article">
            <header class="article__header">
                <div class="container">
                    <h1 class="article__heading heading heading--size-large">Projects</h1>
                </div>
            </header>
            <div class="featured-projects__inner container">
                <div class="row">
                    <?php
                    $args = array(
                        'post_type'   => 'post',
                        'posts_per_page' => -1
                    );
                    $products = new WP_Query( $args );

                    if ( $products->have_posts() ) :
                        ?>
                        <?php while( $products->have_posts() ) : $products->the_post() ?>
                        <div class="featured-projects__item col-12 col-lg-4" data-aos="fade">
                            <a href="<?=the_permalink();?>">
                            <div class="preview-card h-100" tabindex="0">
                                <div class="preview-card__image h-100">
                                    <img class="h-100" src="<?= the_post_thumbnail_url(); ?>" srcset="<?= the_post_thumbnail_url(); ?>" width="600" height="573" alt="">
                                </div>
                                <div class="preview-card__content">
                                    <h3 class="preview-card__heading preview-card__heading--large"><?= the_title();?>
                                    </h3>
                                    <div class="preview-card__text"><?= the_excerpt();?></div>
                                </div>
                            </div>
                            </a>
                        </div>
                    <?php endwhile ?>
                    <?php endif ?>
                </div>
            </div>
        </article>
    </main>
    <?php get_footer(); ?>
