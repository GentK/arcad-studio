<?php get_header()?>
    <main>
      <section class="webpage__hero hero">
        <div class="hero__inner">
          <div class="hero__image">
            <img src="<?= get_stylesheet_directory_uri() ?>/img/home-background.jpg" srcset="<?= get_stylesheet_directory_uri() ?>/img/home-background.jpg" width="1904" height="1081" alt="">
          </div>
          <div class="hero__content">
            <div class="container">
              <h2 class="hero__heading heading">Arcad<span class="color-yellow">Architecture</span> Studio</h2>
              <div class="hero__text">Founded in 2007, Larson is specializing in providing innovative services such as website design, brand identity and marketing</div>
            </div>
          </div>
        </div>
      </section>
      <section class="webpage__featured-projects featured-projects">
        <header class="featured-projects__header container" data-aos="fade">
          <h2 class="featured-projects__heading heading">Latest projects</h2>
          <a class="featured-projects__more more" href="<?php echo home_url() ?>/projects">View all projects
<svg width="20" height="20">
              <use xlink:href="#chevron-right"></use>
            </svg>
          </a>
        </header>
        <div class="featured-projects__inner container">
          <div class="row">
              <?php
              $args = array(
                  'post_type'   => 'post',
                  'posts_per_page' => 6
              );
              $products = new WP_Query( $args );

              if ( $products->have_posts() ) :
              ?>
              <?php while( $products->have_posts() ) : $products->the_post() ?>
            <div class="featured-projects__item col-12 col-lg-4" data-aos="fade">
              <a href="<?=the_permalink();?>">
              <div class="preview-card h-100" tabindex="0">
                <div class="preview-card__image h-100">
                  <img src="<?= the_post_thumbnail_url(); ?>" srcset="<?= the_post_thumbnail_url(); ?>" width="600" height="573" alt="">
                </div>
                <div class="preview-card__content">
                  <h3 class="preview-card__heading preview-card__heading--large"><?= the_title();?>
                  </h3>
                  <div class="preview-card__text"><?= the_excerpt();?></div>
                  <p class="preview-card__btn" href="<?=the_permalink();?>">See project</p>
                </div>
              </div>
                </a>
            </div>
              <?php endwhile ?>
              <?php endif ?>
          </div>
        </div>
      </section>
      <div class="webpage__statistics statistics" data-aos="fade">
        <div class="container">
          <div class="row">
            <div class="statistics__item col-12 col-sm">
              <div class="statistics__item-value">
                <span class="__js_number" data-end-value="20">0</span>
              </div>
              <div class="statistics__item-text">Years
                <br>working
              </div>
            </div>
            <div class="statistics__item col-12 col-sm">
              <div class="statistics__item-value">
                <span class="__js_number" data-end-value="7">0</span>
              </div>
              <div class="statistics__item-text">Talanted
                <br>managers
              </div>
            </div>
            <div class="statistics__item col-12 col-lg">
              <div class="statistics__item-value">
                <span class="__js_number" data-end-value="100">0</span>
              </div>
              <div class="statistics__item-text">Complitly
                <br>projects
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Partners-->
<!--      <section class="webpage__partners partners">-->
<!--        <div class="partners__inner container">-->
<!--          <ul class="partners__list">-->
<!--            <li class="partners__item" data-aos="fade" data-aos-delay="0">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/img/acibadem1.jpg" srcset="img/picture/partners/1@2x.png 2x" width="150" height="100">-->
<!--            </li>-->
<!--            <li class="partners__item" data-aos="fade" data-aos-delay="200">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/img/goodjobgame1.jpeg" srcset="img/picture/partners/2@2x.png 2x" width="150" height="100">-->
<!--            </li>-->
<!--            <li class="partners__item" data-aos="fade" data-aos-delay="400">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/img/este1.jpg" srcset="img/picture/partners/3@2x.png 2x" width="150px" height="100px">-->
<!--            </li>-->
<!--            <li class="partners__item" data-aos="fade" data-aos-delay="600">-->
<!--              <img src="--><?//= get_stylesheet_directory_uri() ?><!--/img/home-background.jpg" srcset="img/picture/partners/4@2x.png 2x" width="150" height="100">-->
<!--            </li>-->
<!--          </ul>-->
<!--        </div>-->
<!--      </section>-->
    </main>
      <?php echo get_footer()?>
