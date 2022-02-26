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

//mix.js
//    ('resources/assets/js/jquery.validate.js',
//    'resources/assets/js/bootstrap.min.js',
//    'resources/assets/js/jquery.dataTables.min.js',
//    'resources/assets/js/dataTables.bootstrap4.min.js',
//    'resources/assets/js/dataTables.responsive.min.js',
//    'resources/assets/js/responsive.bootstrap4.min.js',
//    'resources/assets/js/dataTables.buttons.min.js',
//    'resources/assets/js/jszip.min.js',
//    'resources/assets/js/pdfmake.min.js',
//    'resources/assets/js/vfs_fonts.js',
//    'resources/assets/js/buttons.html5.min.js',
//    'resources/assets/js/buttons.print.min.js',
//    'resources/assets/js/custom/custom.js',
//    'resources/plugins/custom-login.js',
//    'resources/plugins/admin-custom.js',
//    'resources/plugins/admin-addplayers.js',
//], 'public/js/admin-index.js').autoload({
//    jquery: ['$', 'window.jQuery', 'jQuery', 'jquery']
//});

mix
.js('resources/assets/js/jquery.validate.js','public/js/jquery.validate.js')
.js('resources/assets/js/bootstrap.min.js' ,'public/js/bootstrap.min.js')
.js('resources/assets/js/jquery.dataTables.min.js','public/js/jquery.dataTables.min.js')
.js('resources/assets/js/dataTables.bootstrap4.min.js','public/js/dataTables.bootstrap4.min.js')
.js('resources/assets/js/dataTables.responsive.min.js','public/js/dataTables.responsive.min.js')
.js('resources/assets/js/responsive.bootstrap4.min.js','public/js/responsive.bootstrap4.min.js')
.js('resources/assets/js/dataTables.buttons.min.js','public/js/dataTables.buttons.min.js')
.js('resources/assets/js/jszip.min.js','public/js/jszip.min.js')
.js('resources/assets/js/pdfmake.min.js','public/js/pdfmake.min.js')
.js('resources/assets/js/vfs_fonts.js','public/js/vfs_fonts.js')
.js('resources/assets/js/buttons.html5.min.js','public/js/buttons.html5.min.js')
.js('resources/assets/js/buttons.print.min.js','public/js/buttons.print.min.js')
.js('resources/assets/js/custom/custom.js','public/js/custom/custom.js')
.js('resources/plugins/custom-login.js','public/js/custom/custom-login.js')
.js('resources/plugins/admin-custom.js','public/js/custom/admin-custom.js')
.js('resources/plugins/admin-addplayers.js','public/js/custom/admin-addplayers.js')

