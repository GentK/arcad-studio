<?php get_header()?>
<main>
    <article class="article article--news article--p0 post-sb-page">
        <div class="post-sb-page__main-pic post-sb-page__main-pic--inner">
            <img src="<?= get_stylesheet_directory_uri()?>/img/single-backround-pictures.jpg" srcset="<?= get_stylesheet_directory_uri(); ?>/img/single-backround-pictures.jpg">
            <div class="post-sb-page__title">
                <h1 class="post-sb-page__heading">
                    <br>
                    <span class="text-shadow"><?php echo the_title()?></span>
                </h1>
            </div>
        </div>
        <div class="post-sb-page__wrapper">
            <!-- Post-->
            <section class="post-sb post-sb--full">
                <div class="article__main article__main--width-small container">
                    <?php echo the_content(); ?>
                </div>
            </section>
        </div>
    </article>
</main
<?php get_footer(); ?>
