const csso = require('gulp-csso');
const gulp = require('gulp');
const sass = require('gulp-sass');
const terser = require('gulp-terser')

gulp.task('styles', function() {
  return gulp.src('./scss/main.scss')
    .pipe(sass({
      outputStyle: 'nested',
      precision: 10,
      includePaths: ['.'],
      onError: console.error.bind(console, 'Sass error:')
    }))
    .pipe(csso())
    .pipe(gulp.dest('./web/css'))
});

gulp.task('scripts', function() {
  return gulp.src('./app.js')
    .pipe(terser())
    .pipe(gulp.dest('./web/js'))
});