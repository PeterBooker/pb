var gulp = require('gulp');
var es   = require('event-stream');
var $    = require('gulp-load-plugins')();



var sassPaths = [
  'node_modules/foundation-sites/scss',
  //'node_modules/motion-ui/src',
  //'node_modules/font-awesome/scss',
  'node_modules/sass-burger'
];

//var pkg = require('./package.json');
var banner = [
  '/**',
  ' * Theme Name: PB',
  ' * Theme URI: https://www.peterbooker.com',
  ' * Author: Peter Booker',
  ' * Author URI: https://www.peterbooker.com',
  ' * Description: Personal Theme for Peter Booker',
  ' * Version: 1.0.0',
  ' * License: MIT',
  ' * License URI: https://opensource.org/licenses/MIT',
  '**/'
].join('\n');

gulp.task('update', function () {

  return es.merge(
    gulp.src(['node_modules/foundation-sites/dist/js/foundation.min.js']).pipe(gulp.dest('assets/js/')),
    //gulp.src(['node_modules/motion-ui/dist/motion-ui.min.js']).pipe(gulp.dest('assets/js/')),
    );

});

gulp.task('sass', function() {

  return gulp.src('theme/assets/scss/**.scss')
      .pipe($.sass({
            includePaths: sassPaths
          })
          .on('error', $.sass.logError))
      .pipe($.autoprefixer({
        browsers: ['last 2 versions', 'ie >= 9', 'android >= 4.4', 'ios >= 7']
      }))
      .pipe(gulp.dest('theme/assets/css'));

});

gulp.task('cssmin', ['sass'], function() {

  return gulp.src('theme/assets/css/app.css')
      .pipe($.cssmin())
      .pipe($.header(banner))
      .pipe($.rename('style.css'))
      .pipe(gulp.dest('theme/'));

});

gulp.task('default', ['sass', 'cssmin'], function() {

  gulp.watch(['theme/assets/scss/**/*.scss'], ['sass', 'cssmin']);

});