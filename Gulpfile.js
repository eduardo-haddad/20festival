'use strict';
 
var gulp = require('gulp');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var minify = require('gulp-minify');
 

/** Sass **/
gulp.task('sass', function () {
 return gulp.src('resources/assets/sass/**/*.scss')
  .pipe(sourcemaps.init())
  .pipe(sass().on('error', sass.logError))
  .pipe(sourcemaps.write('.'))
  .pipe(gulp.dest('public/css'));
});


/** Minify **/
gulp.task('compress', function() {
  gulp.src('resources/assets/js/**/*.js')
    .pipe(minify({
        ext:{
            src:'.original.js',
            min:'.min.js'
        },
        exclude: ['tasks'],
        ignoreFiles: ['.combo.js', '-min.js', '.min.js']
    }))
    .pipe(gulp.dest('public/js'))
});

/** Copy files **/
gulp.task('copy', function () {
    // gulp.src('node_modules/nprogress/nprogress.js')
    //     .pipe(gulp.dest('resources/assets/js'));
    // gulp.src('node_modules/nprogress/nprogress.css')
    //     .pipe(gulp.dest('public/css'));
    // gulp.src('node_modules/lightbox2/dist/js/lightbox.min.js')
    //     .pipe(gulp.dest('public/js'));
    // gulp.src('node_modules/lightbox2/dist/css/lightbox.min.css')
    //     .pipe(gulp.dest('public/css'));
    // gulp.src('node_modules/image-map-resizer/js/imageMapResizer.min.js')
    //     .pipe(gulp.dest('public/js'));
    // gulp.src('node_modules/slick-carousel/slick/slick.min.js')
    //     .pipe(gulp.dest('public/js'));
    // gulp.src('node_modules/slick-carousel/slick/slick.css')
    //     .pipe(gulp.dest('public/css'));
    // gulp.src('node_modules/slick-carousel/slick/slick-theme.css')
    //     .pipe(gulp.dest('public/css'));
});


/** Watch **/
gulp.task('watch', function () {
  gulp.watch('resources/assets/sass/**/*.scss', ['sass']);
  gulp.watch('resources/assets/js/**/*.js', ['compress']);
});
