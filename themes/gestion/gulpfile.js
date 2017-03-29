var gulp = require('gulp');
var less = require('gulp-less');
var path = require('path');
var autoprefixer = require('gulp-autoprefixer');
var sourcemaps = require('gulp-sourcemaps');
var merge = require('merge-stream');
var spritesmith = require('gulp.spritesmith');

gulp.task('sprite', function() {
  var spriteData = gulp.src('assets/sprite/*.png').pipe(spritesmith({
    imgName: 'sprite.png',
    cssName: 'sprite.less',
    imgPath: '../assets/sprite.png',
    imgOpts: {quality: 100}
  }));

  var imgStream = spriteData.img
    .pipe(gulp.dest('./assets'));
  var cssStream = spriteData.css
    .pipe(gulp.dest('./less'));

  return merge(imgStream, cssStream);
});

gulp.task('less', ['sprite'], function () {
  return gulp.src(['./less/style.less', './less/print.less'])
    .pipe(sourcemaps.init())
    .pipe(less({
      paths: [ path.join(__dirname, 'less', 'includes') ]
    }))
    .pipe(autoprefixer({
      browsers: ['last 2 versions']
    }))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('./css'));
});

// gulp.task('less-cn', function () {
//   return gulp.src('./less/pages/cn.less')
//     .pipe(less({
//       paths: [ path.join(__dirname, 'less', 'includes') ]
//     }))
//     .pipe(gulp.dest('./css'));
// });
