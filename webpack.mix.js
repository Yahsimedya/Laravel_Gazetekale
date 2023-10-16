const mix = require('laravel-mix');
require('laravel-mix-purgecss');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel applications. By default, we are compiling the CSS
 | file for the application as well as bundling up all the JS files.
 |
 */

// mix.copy('node_modules/swiper/swiper-bundle.js','public/js');


mix.js('resources/js/app.js', 'public/js')

.combine([
        'public/frontend/assets/js/lazysizes.min.js',
        'public/frontend/assets/js/marquee.js',
        'public/frontend/assets/js/svg-turkiye-haritasi.js',
        'public/frontend/assets/js/lightbox-plus-jquery.min.js',
        'node_modules/swiper/swiper-bundle.js',
        'node_modules/slick-carousel/slick/slick.js',
        'public/frontend/assets/js/custom.js',
    ], 'public/frontend/assets/js/combine.js')
    .styles([
        'public/frontend/assets/css/style.css',
        // 'public/frontend/assets/css/weather-icons.css',
        // 'public/frontend/assets/css/magnific-popup.css',
        // 'public/frontend/assets/css/svg-turkiye-haritasi.css',
        // 'public/frontend/assets/css/lightbox.css',
        // 'public/frontend/assets/css/all.css',
        // // 'public/frontend/assets/css/brand.css',
        // 'public/frontend/assets/css/custom-red.css',
        // 'public/frontend/assets/css/example.css',
        // 'public/frontend/assets/css/fontawesome.css',
        // 'public/frontend/assets/css/main.css',
        // 'public/frontend/assets/css/marquee.css',
        // 'public/frontend/assets/css/regular.css',
        // 'public/frontend/assets/css/solid.css',
        // 'public/frontend/assets/css/v4-shims.css',
        // 'public/frontend/assets/css/weather-icons-wind.css',
        // 'public/frontend/assets/css/weather-icons.css',
        // 'node_modules/swiper/swiper-bundle.css',
        // 'node_modules/slick-carousel/slick/slick.scss',

    ], 'public/frontend/assets/css/combine.css').purgeCss()

.sourceMaps();

// mix.version()
//     .purgeCss({
//         enabled: true,
//         content: [
//             'resources/views/**/*.blade.php',
//             'resources/js/**/*.js',
//         ],
//     });