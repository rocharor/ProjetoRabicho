var gulp = require('gulp');
var stylus = require('gulp-stylus');

gulp.task('stylus', function () {
  gulp.src('../resources/assets/stylus/*.styl')
    .pipe(stylus({
      compress: false
    }))
    .pipe(gulp.dest('css/'))
});

gulp.task( 'default', function() {
    gulp.watch('../resources/assets/stylus/*.styl', ['stylus']);
});
