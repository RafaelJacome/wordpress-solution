<?php
/*
* Template name: About me
*/
get_header();
?>
<main class="about-template">
    <section>
        <div class="columns is-vcentered">
            <div class="column is-4 picture">
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/jacome3.jpg" alt="picture">
            </div>
            <div class="column is-8 info">
                <small>Web Developer</small>
                <h1>Rafael Jacome</h1>
                <p>Experienced developer with over 7 years of experience in wordpess. Excellent reputation for resolving
                problems and improving customer satisfaction.
                <br>
                <br>
                Enthusiastic front-end eager to contribute to team success through hard work, attention to detail and
                excellent organizational skills. Clear understanding of problems and training in autodidact skills. Motivated
                to learn, grow and excel in tech and leave the comfort zone.</p>

                <div class="is-flex">
                <a href="<?= get_stylesheet_directory_uri(); ?>/dist/assets/Rafael Ernesto_Jácome_Resume.pdf" class="btn" download><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="cloud-download-alt" class="svg-inline--fa fa-cloud-download-alt fa-w-20" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512"><path fill="currentColor" d="M537.6 226.6c4.1-10.7 6.4-22.4 6.4-34.6 0-53-43-96-96-96-19.7 0-38.1 6-53.3 16.2C367 64.2 315.3 32 256 32c-88.4 0-160 71.6-160 160 0 2.7.1 5.4.2 8.1C40.2 219.8 0 273.2 0 336c0 79.5 64.5 144 144 144h368c70.7 0 128-57.3 128-128 0-61.9-44-113.6-102.4-125.4zm-132.9 88.7L299.3 420.7c-6.2 6.2-16.4 6.2-22.6 0L171.3 315.3c-10.1-10.1-2.9-27.3 11.3-27.3H248V176c0-8.8 7.2-16 16-16h48c8.8 0 16 7.2 16 16v112h65.4c14.2 0 21.4 17.2 11.3 27.3z"></path></svg>Download CV</a>
                <a href="https://www.linkedin.com/in/jacomerejh/" class="btn" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="linkedin-in" class="svg-inline--fa fa-linkedin-in fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M100.28 448H7.4V148.9h92.88zM53.79 108.1C24.09 108.1 0 83.5 0 53.8a53.79 53.79 0 0 1 107.58 0c0 29.7-24.1 54.3-53.79 54.3zM447.9 448h-92.68V302.4c0-34.7-.7-79.2-48.29-79.2-48.29 0-55.69 37.7-55.69 76.7V448h-92.78V148.9h89.08v40.8h1.3c12.4-23.5 42.69-48.3 87.88-48.3 94 0 111.28 61.9 111.28 142.3V448z"></path></svg> linkedin</a>
                <a href="https://www.instagram.com/jacomerejh/?hl=es-la" class="btn" target="_blank"><svg aria-hidden="true" focusable="false" data-prefix="fab" data-icon="instagram" class="svg-inline--fa fa-instagram fa-w-14" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512"><path fill="currentColor" d="M224.1 141c-63.6 0-114.9 51.3-114.9 114.9s51.3 114.9 114.9 114.9S339 319.5 339 255.9 287.7 141 224.1 141zm0 189.6c-41.1 0-74.7-33.5-74.7-74.7s33.5-74.7 74.7-74.7 74.7 33.5 74.7 74.7-33.6 74.7-74.7 74.7zm146.4-194.3c0 14.9-12 26.8-26.8 26.8-14.9 0-26.8-12-26.8-26.8s12-26.8 26.8-26.8 26.8 12 26.8 26.8zm76.1 27.2c-1.7-35.9-9.9-67.7-36.2-93.9-26.2-26.2-58-34.4-93.9-36.2-37-2.1-147.9-2.1-184.9 0-35.8 1.7-67.6 9.9-93.9 36.1s-34.4 58-36.2 93.9c-2.1 37-2.1 147.9 0 184.9 1.7 35.9 9.9 67.7 36.2 93.9s58 34.4 93.9 36.2c37 2.1 147.9 2.1 184.9 0 35.9-1.7 67.7-9.9 93.9-36.2 26.2-26.2 34.4-58 36.2-93.9 2.1-37 2.1-147.8 0-184.8zM398.8 388c-7.8 19.6-22.9 34.7-42.6 42.6-29.5 11.7-99.5 9-132.1 9s-102.7 2.6-132.1-9c-19.6-7.8-34.7-22.9-42.6-42.6-11.7-29.5-9-99.5-9-132.1s-2.6-102.7 9-132.1c7.8-19.6 22.9-34.7 42.6-42.6 29.5-11.7 99.5-9 132.1-9s102.7-2.6 132.1 9c19.6 7.8 34.7 22.9 42.6 42.6 11.7 29.5 9 99.5 9 132.1s2.7 102.7-9 132.1z"></path></svg>Instagram</a>
                </div>
            </div>
        </div>
    </section>
    <section class="skill-section">
        <h2>Skill</h2>
        <div class="columns is-multiline is-mobile  is-vcentered">
            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/git.png" alt="git"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/html.png" alt="html"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/sass.jpg" alt="sass"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/js.png" alt="js"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/webpack.png" alt="webpack"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/gulp.jpg" alt="gulp"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/react.png" alt="react"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/php.svg" alt="php"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/wordpress.png" alt="wordpress"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/acf.png" alt="ACF"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/woocommerce.svg" alt="woocommerce"></div>

            <div class="column is-4-mobile is-3-tablet is-2-desktop"><img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/skills-logos/tailwindcss-pre.jpg" alt="tailwindcss"></div>
            
        </div>
    </section>
    <section class="portfolio-section">
        <h2>Portfolio</h2>
        <div class="columns is-multiline">
            <div class="column is-half">
                <a href="https://www.toyota.com.sv" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/toyota.png" alt="toyota">
                </a>
            </div>
            <div class="column is-half">
                <a href="https://chevrolet.com.sv" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/chevrolet.png" alt="chevrolet">
                </a>
            </div>
            <div class="column is-half">
                <a href="https://buxostudios.com/" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/buxoestudios.png" alt="buxoestudios">
                </a>
            </div>
            <div class="column is-half">
                <a href="http://founderschristian.org/" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/founders.png" alt="founderschristian">
                </a> 
            </div>
            <div class="column is-half">
                <a href="https://vivaldibienesraices.com/" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/vivaldi.png" alt="founderschristian">
                </a> 
            </div>
            <div class="column is-half">
                <a href="https://asesuisa.com/" target="_blank">
                    <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/portfolio/sura.png" alt="founderschristian">
                </a> 
            </div>
        </div>
    </section>
    <section class="pet-section">
        <div class="columns is-vcentered">
            <div class="column is-half">
                <h2>Personal QA Team & Security</h2>
            </div>
            <div class="column is-half">
                <img src="<?= get_stylesheet_directory_uri(); ?>/dist/images/pets.jpg" alt="Pets" class="is-rounded">
            </div>
            
        </div>
    </section>
</main>

<?php get_footer(); ?>