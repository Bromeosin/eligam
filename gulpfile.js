var gulp = require('gulp');

var sass = require('gulp-sass');

gulp.task('default', function() {
  gulp.src('assets/css/styles.scss')
  .pipe(sass({style: 'expanded'}))
  .pipe(gulp.dest(''))
});
