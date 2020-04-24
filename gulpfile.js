var gulp = require('gulp');
var sass = require('gulp-sass');

gulp.task('hello', function() {
    console.log('Hello Zell');
  });

  gulp.task('sass', function(){
    return gulp.src('scss/main.scss')
      .pipe(sass()) // Using gulp-sass
      .pipe(gulp.dest('web/css'))
  });