<?php /*Template Name: Contact */?>
<?php get_header()?>

    <main>
        <article class="article">
            <header class="article__header">
                <div class="container">
                    <h1 class="article__heading heading heading--size-large">Contact</h1>
                </div>
            </header>
            <div class="article__map map">
                <iframe src="https://maps.google.com/maps?q=Prizren&t=&z=15&ie=UTF8&iwloc=&output=embed" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                <div class="map__inner container">
                    <div class="contact-block">
                        <div class="contact-block__heading">Prizren, <span class="color-yellow">Kosovo</span>
                        </div>
                        <address class="contact-block__address">Rruga (Adresa)</address>
                        <div class="contact-block__phone">
                            <a href="tel:+9903449564050">+383 (48) 304 416</a>
                        </div>
                        <div class="contact-block__item">
                            <div class="contact-block__item-hint">Email:</div>
                            <div class="contact-block__item-val">
                                <a href="mailto:info@sparch.co">hamdibajraktari@gmail.com</a>
                            </div>
                        </div>
                        <div class="contact-block__item">
                            <div class="contact-block__item-hint">Follow us:</div>
                            <div class="contact-block__item-val">
                                <!-- Social-->
                                <ul class="contact-block__social social--contact social">
                                    <li class="social__item">
                                        <a class="social__link" href="https://www.facebook.com/hamdi.bajraktari.39" target="_blank">
                                            <svg width="20" height="20" aria-label="facebook icon">
                                                <use xlink:href="#facebook"></use>
                                            </svg>
                                            <span class="visually-hidden">facebook</span>
                                        </a>
                                    </li>
                                    <li class="social__item">
                                        <a class="social__link" href="https://instagram.com/hamdibajraktari?utm_medium=copy_link" target="_blank">
                                            <svg width="20" height="20" aria-label="instagram icon">
                                                <use xlink:href="#instagram"></use>
                                            </svg>
                                            <span class="visually-hidden">instagram</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <div class="contact-block__item">
                            <div class="contact-block__item-hint">Work Hours:</div>
                            <div class="contact-block__item-val">Monday - Friday : 08h00 - 17h30</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="article__main container">
                <section class="article__feedback feedback">
                    <h2 class="feedback__heading heading" data-aos="fade">Let's grab a coffee and jump on
                        <br>conversation <span class="color-yellow">chat with us.</span>
                    </h2>
                    <?= do_shortcode('[contact-form-7 id="90" title="Contact form 1"]')?>
                </section>
            </div>
        </article>
    </main>
<?php get_footer(); ?>