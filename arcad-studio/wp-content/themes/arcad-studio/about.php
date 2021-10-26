<?php /*Template Name: About us */?>
<?php get_header()?>
    <main>
        <article class="article">
            <header class="article__header">
                <div class="container">
                    <h1 class="article__heading heading heading--size-large">Hamdi Bajraktari
                        <br>
                        <span class="color-yellow">Arcad</span> Studio
                    </h1>
                </div>
            </header>
            <div class="article__about-hero container">
                <img src="<?= get_stylesheet_directory_uri() ?>/img/about-background.jpg" width="1800" height="768" alt="">
            </div>
            <section class="webpage__about-block about-block about-block--columns">
                <div class="about-block__inner container" data-number="01.">
                    <header class="about-block__header" data-aos="fade">
                        <h2 class="about-block__heading heading">A few words About us</h2>
                    </header>
                    <div class="about-block__main">
                        <div class="about-block__text" data-aos="fade">
                            <p>Totally focused on tools to enhance and help your content shine. We have created this theme thinking only in options helpfully for the daily needs in a creative environment like an agency, a small studio.</p>
                            <p>As a result working with hundred of creatives all these past years, we are now delivering a theme that will be part of your toolset.</p>
                        </div>
                        <blockquote class="about-block__quote" data-aos="fade">I knew everything…been there, done that. She was in the moment,
                            <br>I was in the past. She was mindful. I was mindless.
                        </blockquote>
                    </div>
                </div>
            </section>
            <section class="webpage__about-block about-block">
                <div class="about-block__inner container" data-number="02.">
                    <header class="about-block__header" data-aos="fade">
                        <h2 class="about-block__heading heading">Our Team</h2>
                    </header>
                    <div class="about-block__main">
                        <ul class="about-block__team team-list row">
                            <li class="team-list__item col-12 col-md-6 col-lg-4" data-aos="fade" data-aos-delay="0">
                                <div class="card card--team h-100" tabindex="0">
                                    <div class="card__image h-100">
                                        <img class="h-100 team-img" src="<?= get_stylesheet_directory_uri() ?>/img/hamdi-profile-pictures.jpg" srcset="<?= get_stylesheet_directory_uri() ?>/img/hamdi-profile-pictures.jpg" width="350" height="530" alt="">
                                    </div>
                                    <div class="card__content">
                                        <h3 class="card__heading">Hamdi Bajraktari</h3>
                                        <div class="card__text">CEO / Founder</div>
                                        <div class="card__bottom">
                                            <!-- Social-->
                                            <ul class="card__social social">
                                                <li class="social__item">
                                                    <a class="social__link" href="https://www.facebook.com/hamdi.bajraktari.39" target="_blank">
                                                        <svg width="20" height="20" aria-label="facebook icon">
                                                            <use xlink:href="#facebook"></use>
                                                        </svg>
                                                        <span class="visually-hidden">facebook</span>
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </section>
            <section class="webpage__about-block about-block">
                <div class="about-block__inner container" data-number="03.">
                    <header class="about-block__header" data-aos="fade">
                        <h2 class="about-block__heading heading">Services</h2>
                    </header>
                    <div class="about-block__main services-provided">
                        <div class="row">
                            <div class="services-provided__column col-12 col-md" data-aos="fade">
                                <div class="services-provided__icon">
                                    <svg width="58" height="61">
                                        <use xlink:href="#apartment"></use>
                                    </svg>
                                </div>
                                <h3 class="services-provided__column-heading">Apartment</h3>
                                <div class="services-provided__column-text">Projects for many large domestic and foreign corporations, enProjects for many large domestic and foreign corporations, enterprises in many elds such as nance, banking, F&B, education, communication.terprises in many elds such as nance, banking, F&B, education, communication.</div>
                            </div>
                            <div class="services-provided__column col-12 col-md" data-aos="fade" data-aos-delay="200">
                                <div class="services-provided__icon">
                                    <svg width="52" height="61">
                                        <use xlink:href="#building"></use>
                                    </svg>
                                </div>
                                <h3 class="services-provided__column-heading">Building</h3>
                                <div class="services-provided__column-text">Founded in 2007, Sparch is specializing in providing innovative services such as websitFounded in 2007, Sparch is specializing in providing innovative services such as website design, brand identity and marketinge design, brand identity and marketing</div>
                            </div>
                            <div class="services-provided__column col-12 col-md" data-aos="fade" data-aos-delay="400">
                                <div class="services-provided__icon">
                                    <svg width="58" height="52">
                                        <use xlink:href="#roller"></use>
                                    </svg>
                                </div>
                                <h3 class="services-provided__column-heading">Interior</h3>
                                <div class="services-provided__column-text">Projects for many large domestic and foreign corporations, enProjects for many large domestic and foreign corporations, enterprises in many elds such as nance, banking, F&B, education, communication.terprises in many elds such as nance, banking, F&B, education, communication.</div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
        </article>
    </main>
   <?php get_footer(); ?>