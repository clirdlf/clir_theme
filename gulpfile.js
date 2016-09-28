// Base Paths
var basePaths = {
  bower: './bower_components/',
  node: './node_modules',
  dev: './src'
};

// browser-sync watch files
// Automatically reloads page when files are changed
var browserSyncWatchFiles = [
  './style.css',
  './css/*.min.css',
  './js/*.min.js',
  './**/*.{png,jpg,gif}',
  './**/*.php'
];

// browser-sync options
// See https://www.browsersync.io/docs/options/
var browserSyncOptions = {
  proxy: "localhost:8888/wordpress",
  notify: false,
  port: 8888,
  injectChanges: true
};

// Dependencies
var gulp        = require('gulp');
var browserSync = require('browser-sync');
var sass        = require('gulp-sass');
var prefix      = require('gulp-autoprefixer');
var cp          = require('child_process');
var sourcemaps  = require('gulp-sourcemaps');

var dev_url     = "localhost:8888/wordpress"

gulp.task('browser-sync', function() {
  browserSync.init(browserSyncWatchFiles, browserSyncOptions);
});

gulp.task('sass', function() {
  return gulp.src('_sass/main.scss')
    .pipe(sass({
      onError: browserSync.notify,
      outputStyle: 'compressed'
    }))
    .pipe(gulp.dest('stylesheets'))
    .pipe(prefix(['last 15 versions', '> 1%', 'ie 8', 'ie 7'], { cascade: true }))
    .pipe(browserSync.reload({stream:true}))
    .pipe(gulp.dest('stylesheets'));
});

gulp.task('watch', function() {
  gulp.watch('_sass/*.scss', ['sass']);
});

gulp.task('dist', function() {
  gulp.src(['!sass', '!bower_components', '!node_modules', '!src', '!dist', '!gulpfile', '!packgage.json', '*'])
  .pipe(gulp.dest('dist/'))
});

gulp.task('default', ['browser-sync', 'watch']);

