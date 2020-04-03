'use strict';

var gulp = require('gulp');
var sass = require('gulp-sass');

sass.compiler = require('node-sass');

gulp.task('sass', function () {
  return gulp.src('./landing-page/css/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(gulp.dest('./landing-page/css/'));
});

gulp.task('sass:watch', function () {
  gulp.watch('./landing-page/css/*.scss', gulp.series('sass'));
});
