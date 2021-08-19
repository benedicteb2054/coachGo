const mix = require('laravel-mix');

/*
 |--------------------------------------------------------------------------
 | Mix Asset Management
 |--------------------------------------------------------------------------
 |
 | Mix provides a clean, fluent API for defining some Webpack build steps
 | for your Laravel application. By default, we are compiling the Sass
 | file for the application as well as bundling up all the JS files.
 |
 */

    mix.sass('resources/assets/sass/style.scss', 'public/css');

    mix.scripts([
	    'resources/assets/plugins/jQuery/jquery-3.5.1.min.js',
	    'resources/assets/plugins/moment/moment.js',
	    'resources/assets/plugins/bootstrap/js/bootstrap.bundle.js',
        'resources/assets/plugins/jquery.eislideshow.js',
	    'resources/assets/plugins/datatables/jquery.dataTables.js',
	    'resources/assets/plugins/datatables/dataTables.bootstrap.js',
		'resources/assets/plugins/datatables/buttons/dataTables.buttons.js',
		'resources/assets/plugins/datatables/buttons/buttons.bootstrap.min.js',
		'resources/assets/plugins/datatables/buttons/jszip.min.js',
		'resources/assets/plugins/datatables/buttons/pdfmake.min.js',
		'resources/assets/plugins/datatables/buttons/vfs_fonts.js',
		'resources/assets/plugins/datatables/buttons/buttons.html5.js',
		'resources/assets/plugins/datatables/buttons/buttons.print.js',
	'resources/assets/plugins/validator/validator.min.js',
	    'resources/assets/plugins/select2/select2.full.js',
	    'resources/assets/plugins/summernote/summernote.min.js',
	    'resources/assets/plugins/iCheck/icheck.min.js',
	    'resources/assets/plugins/fontawesome-iconpicker/iconpicker.min.js',
	    'resources/assets/plugins/bootstrap-select/bootstrap-select.js',
	    'resources/assets/plugins/datepicker/bootstrap-datepicker.js',
	    'resources/assets/plugins/datetimepicker/bootstrap-datetimepicker.min.js',
	    'resources/assets/plugins/colorpicker/bootstrap-colorpicker.min.js',
	    'resources/assets/plugins/dragNdrop/RowSorter.js',
	    'resources/assets/plugins/jquery-confirm/js/jquery-confirm.js',
	    'resources/assets/plugins/notie/notie.js',
        'resources/assets/plugins/perfect-scroll/perfect-scrollbar.js',
        // 'public/assets/plugins/global/plugins.bundle.js',
        'public/assets/js/scripts.bundle.js'
	], 'public/js/vendor-mix.js')
