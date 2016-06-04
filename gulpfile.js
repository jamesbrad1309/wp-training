// LOAD DEPENDENCIES
var config			= require('./config');				// config file
var gulp 			= require('gulp');					// load gulp
var $				= require('gulp-load-plugins')({	// load gulp plugins
						pattern: ['gulp-*', 'gulp.*', 'main-bower-files'],
						replaceString: /\bgulp[\-.]/
					});
var autoprefixer	= require('autoprefixer');			// load autoprefixer
var del				= require('del');					// load del plugin
var browserSync		= require('browser-sync');
var reload			= browserSync.reload;

// Font task
gulp.task('fontTask', function(){
	return gulp.src(config.FONT_DIR + '/**/*.+(ttf|eot|ttc|otf|woff|woff2|svg)')
	.pipe(gulp.dest('../' + config.THEME_NAME + '/' + config.FONT_DIR));
});

// Image task
gulp.task('imageTask', function(){
	return gulp.src(config.IMAGE_DIR + '/**/*.+(png|jpg|jpeg|gif|svg)')
	.pipe(gulp.dest('../' + config.THEME_NAME + '/' + config.IMAGE_DIR));
});

// JS task - vendor
gulp.task('vendorjs', function(){
	// console.log($.mainBowerFiles());

	return gulp.src($.mainBowerFiles())
	.pipe($.filter('**/*.js'))
	.pipe($.order([
		'jquery.js',
		'*'
	]))
	.pipe($.concat('vendor.js'))
	.pipe($.uglify())
	.pipe(gulp.dest('../' + config.THEME_NAME + '/' + config.JS_DIR));
});

// JS task - project JS
gulp.task('projectjs', function(){
	return gulp.src(config.JS_DIR + '/**/*.js')
	.pipe($.jshint())
	.pipe($.jshint.reporter('jshint-stylish'))
	.pipe($.jshint.reporter('fail'))
	.pipe($.uglify())
	.pipe(gulp.dest('../' + config.THEME_NAME + '/' + config.JS_DIR));
});

// CSS task - vendor CSS
gulp.task('vendorcss', function(){
	return gulp.src($.mainBowerFiles())
	.pipe($.filter(['**/*.scss', '**/*.css', '**/*.less']))
	.pipe($.order([
		'bootstrap.css',
		'*'
	]))
	.pipe($.sass())
	.pipe($.concat('vendor.css'))
	.pipe($.cssnano())
	.pipe(gulp.dest('../' + config.THEME_NAME + '/assets/css'));
});

// CSS task - project css
var processor = [autoprefixer({ 
	browsers: ['> 3%', 'last 2 versions', 'ie 9', 'ios 6', 'android 4'] 
	})
];

gulp.task('projectcss', function(){
 	return gulp.src(config.CSS_DIR + '/main.scss')
	.pipe($.sass())
	.pipe($.postcss(processor))
	.pipe($.cssnano())
	.pipe(gulp.dest('../' + config.THEME_NAME + '/assets/css'));
});

// Theme style.css
gulp.task('theme-style', function(){
	return gulp.src(config.CSS_DIR + '/style.scss')
	.pipe($.sass())
	.pipe(gulp.dest('../' + config.THEME_NAME));
});

// Php task
gulp.task('phpTask', function(){
	return gulp.src('**/*.php')
	.pipe($.changed('../' + config.THEME_NAME))
	.pipe(gulp.dest('../' + config.THEME_NAME));
});

// Clean task
gulp.task('clean', function(){
	del(['../' + config.THEME_NAME], { force: true });
});

// Build task
gulp.task('build', ['theme-style', 'fontTask', 'imageTask', 'vendorjs', 'vendorcss', 'projectjs', 'projectcss', 'phpTask']);

// Browser sync
gulp.task('browser-sync', ['build'], function(){
	var files = ['../' + config.THEME_NAME + '/**/*.*'];
	browserSync.init(files,{
		proxy: config.PROXY,
		notify: false
	});
});

// Watch
gulp.task('watch', ['browser-sync'], function(){
	gulp.watch(config.JS_DIR + '/**/*.js', ['vendorjs', 'projectjs']);
	gulp.watch(config.CSS_DIR + '/**/*.scss', ['vendorcss', 'projectcss', 'theme-style']);
	gulp.watch(config.FONT_DIR + '/*.*', ['fontTask']);
	gulp.watch(config.IMAGE_DIR + '/*.*', ['imageTask']);
	gulp.watch('**/*.php', ['phpTask']);
	gulp.watch('../' + config.THEME_NAME + '/**/*').on('change', function (file){
		$.livereload.changed(file.path);
	});
});

// Default
gulp.task('default', ['clean'], function(){
	gulp.start(['build', 'watch']);
});

