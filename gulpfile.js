/* Dependencias */

var gulp = require('gulp'),
  livereload = require('gulp-livereload'),
  connect = require('gulp-connect'),
  plumber = require('gulp-plumber'),
  notify = require('gulp-notify'),
  historyApiFallback = require('connect-history-api-fallback'),
  concat = require('gulp-concat'),
  //jshint = require('gulp-jshint'),
  uglify = require('gulp-uglify'),
  stylus = require('gulp-stylus');

var path = {
  stylus: './*.styl',
  js: 'js/*.js',
  css: './',
  php: './*.php'
}

path.watch = {
  stylus: './*.styl',
  js: 'js/*.js',
  php: './*.php'
}

var plumberErrorHandler = { errorHandler: notify.onError({
  title: 'Gulp',
  message: 'Error: <%= error.message %>'
  })
};

gulp.task('default', ['css', 'js', 'php', 'watch'])


gulp.task('css', function(){
  gulp.src(path.stylus)
    .pipe(plumber(plumberErrorHandler))
    .pipe(stylus({
        'include css': true,
        compress: true
    }))
    .pipe(gulp.dest(path.css))
    .pipe(livereload());
});

gulp.task('js', function(){
  gulp.src(path.js)
    .pipe(livereload());
});

gulp.task('php', function(){
  gulp.src(path.php)
    .pipe(livereload());
});


gulp.task('watch', function(){
  livereload.listen();
  gulp.watch(path.watch.stylus, ['css']);
  gulp.watch(path.watch.js, ['js']);
  gulp.watch(path.watch.php, ['php']);
});