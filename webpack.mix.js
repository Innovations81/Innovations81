const mix = require('laravel-mix');

mix.copy('resources/plugins/fontawesome-free/webfonts', 'public/webfonts');
mix.copy('resources/assets/fonts/', 'public/fonts');
mix.copy('resources/assets/images/', 'public/img');

mix.styles([
    'resources/assets/css/bootstrap.min.css',
    'resources/assets/css/font-awesome.css',
    'resources/assets/css/responsive.dataTables.min.css',
    'resources/assets/css/style.css',
], 'public/css/admin.css');

mix.js([
    'resources/assets/js/jquery.min.js',
    'resources/assets/js/jquery.validate.js',
    'resources/assets/js/bootstrap.min.js',
    'resources/assets/js/jquery.dataTables.min.js',
    'resources/assets/js/dataTables.bootstrap4.min.js',
    'resources/assets/js/dataTables.responsive.min.js',
    'resources/assets/js/responsive.bootstrap4.min.js',
    'resources/assets/js/dataTables.buttons.min.js',
    'resources/assets/js/jszip.min.js',
    'resources/assets/js/pdfmake.min.js',
    'resources/assets/js/vfs_fonts.js',
    'resources/assets/js/buttons.html5.min.js',
    'resources/assets/js/buttons.print.min.js',
    'resources/assets/js/custom/custom.js',
    'resources/plugins/custom-login.js',
    'resources/plugins/admin-custom.js',
    'resources/plugins/admin-addplayers.js',
], 'public/js/admin-index.js').autoload({
    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery']
});