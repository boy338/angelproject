const elixir = require('laravel-elixir');

require('laravel-elixir-vue');

require('laravel-elixir-image-resize');

/*
 |--------------------------------------------------------------------------
 | Elixir Asset Management
 |--------------------------------------------------------------------------
 |
 | Elixir provides a clean, fluent API for defining some basic Gulp tasks
 | for your Laravel application. By default, we are compiling the Sass
 | file for our application, as well as publishing vendor resources.
 |
 */

elixir(mix => {
    mix.copy('node_modules/bootstrap-sass/assets/fonts', 'public/fonts')
	   .copy('node_modules/font-awesome/fonts','public/fonts')
	   .sass('app.scss')
	   .webpack('app.js');

/*
	mix.imageresize({ width:120, height:120 }, { suffix: '-xs'});
	mix.imageresize({ width:180, height:180 }, { suffix: '-sm'});
	mix.imageresize({ width:800, height:600 }, { suffix: '-md'});
	mix.imageresize({ width:1200, height:800 }, { suffix: '-lg'});
*/

// Copy bootstrap and AdminLTE CSS files to public directory
    mix.copy('node_modules/admin-lte/bootstrap', 'public/backend/bootstrap');
    mix.copy('node_modules/admin-lte/dist', 'public/backend/admin-lte');
	mix.copy('node_modules/admin-lte/plugins', 'public/backend/plugins');

    // Font Awesome
    mix.copy('node_modules/font-awesome', 'public/backend/font-awesome');

	mix.browserSync({
        proxy: '192.168.56.102',
		files: 'resources/assets/sass/_myscss.scss',
		files: 'public/image/*',
        files: 'resources/views/*.php',
        files: 'resources/views/**/*.php',
    });
});
