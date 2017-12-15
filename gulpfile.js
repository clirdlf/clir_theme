require('dotenv').config();

var gulp = require('gulp');
var browserSync = require('browser-sync');
var sass = require('gulp-sass');
var prefix = require('gulp-autoprefixer');
var cp = require('child_process');
var sourcemaps = require('gulp-sourcemaps');
var include = require('gulp-include');
//@see https://www.npmjs.com/package/gulp-uglify
var uglify = require('gulp-uglify');
var pump = require('pump');

// @see https://gist.github.com/LoyEgor/e9dba0725b3ddbb8d1a68c91ca5452b5
var imagemin = require('gulp-imagemin');
var imageminPngquant = require('imagemin-pngquant');
var imageminZopfli = require('imagemin-zopfli');
var imageminMozjpeg = require('imagemin-mozjpeg'); //need to run 'brew install libpng'
var imageminGiflossy = require('imagemin-giflossy');

/**
 * Browser sync for WP theme
 */
gulp.task('browser-sync', function() {
    var files = [
        '**/*.php',
        '**/*.{png,jpg,gif}',
        '**/**/*.css',
        './js/*.js'
    ];
  console.log('proxy' + process.env.DEV_URL);

    browserSync.init(files, {
      // Read here http://www.browsersync.io/docs/options/
      proxy: process.env.DEV_URL,
      port: process.env.DEV_PORT,
      injectChanges: true
    });
});

/**
 * Compile JS files from js/scripts.js using gulp-include
 */
gulp.task('scripts', function() {
    pump([
        gulp.src(['./src/scripts.js']),
        include(),
        gulp.dest('./src/build/'),
    ]);
});

gulp.task('compress', function(cb) {
    pump([
            gulp.src('src/build/*.js'),
            uglify(),
            gulp.dest('js')
        ],
        cb
    );
});

gulp.task('imagemin', function(){
  return gulp.src(['stylesheets/**/*.{gif,png,jpg}'])
        .pipe(imagemin([
            //png
            imageminPngquant({
                speed: 1,
                quality: 98 //lossy settings
            }),
            imageminZopfli({
                more: true
            }),
            //gif
            // imagemin.gifsicle({
            //     interlaced: true,
            //     optimizationLevel: 3
            // }),
            //gif very light lossy, use only one of gifsicle or Giflossy
            imageminGiflossy({
                optimizationLevel: 3,
                optimize: 3, //keep-empty: Preserve empty transparent frames
                lossy: 2
            }),
            //svg
            imagemin.svgo({
                plugins: [{
                    removeViewBox: false
                }]
            }),
            //jpg lossless
            imagemin.jpegtran({
                progressive: true
            }),
            //jpg very light lossy, use vs jpegtran
            imageminMozjpeg({
                quality: 90
            })
        ]));
        // .pipe(gulp.dest('lib'));
});

/**
 * Compile files from _scss into css (for live injecting)
 */
gulp.task('sass', function() {
    return gulp.src('_sass/main.scss')
        .pipe(sass({
            onError: browserSync.notify,
            outputStyle: 'compressed'
        }))
        .pipe(gulp.dest('stylesheets'))
        .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], {
            cascade: true
        }))
        .pipe(gulp.dest('stylesheets'))
        .pipe(browserSync.stream({match: '**/*.css'}));
        // .pipe(browserSync.reload({
            // stream: true
        // }))
        // .pipe(gulp.dest('stylesheets'));
});

gulp.task('watch', function() {
    gulp.watch('_sass/*.scss', ['sass']);
    gulp.watch('src/*.js', ['scripts', 'compress']);
    gulp.watch('stylesheets/**/*.{gif,png,jpg}', ['imagemin']);
});

gulp.task('default', ['browser-sync', 'watch']);
