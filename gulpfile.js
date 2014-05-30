var gulp    = require('gulp'),
    watch   = require('gulp-watch'),
    concat  = require('gulp-concat'),
    uglify  = require('gulp-uglify'),
    compass = require('gulp-compass'),
    gulpIf  = require('gulp-if'),
    args    = require('yargs').argv;

// Sass/Compass Compiling of CSS
gulp.task('compass', function() {
    gulp.src("./public/assets/src/sass/**/*.scss")
    .pipe(compass({
        config_file: './config.rb',
        css: "./public/assets/css",
        sass: "./public/assets/src/sass"
    }));
});

var min = args.min === 'production';

gulp.task('scripts', function() {
    gulp.src([

    ])
    .pipe(concat("base.min.js"))
    .pipe(gulpIf(min, uglify()))
    .pipe(gulp.dest("./assets/js"));

    // Some basic components that don't need to be included in the main base script
    gulp.src(["./bower_components/modernizr/modernizr.js"])
        .pipe(concat("modernizr.min.js"))
        .pipe(gulpIf(min, uglify()))
        .pipe(gulp.dest("./assets/js"));
});

gulp.task('watch', function () {
    gulp.watch("./public/assets/src/sass/**/*.scss", ['compass']);
    //gulp.watch("./assets/src/js/**/*.js", ['scripts']);
    //gulp.watch("./bower_components/**/*.js", ['scripts']);
});

gulp.task('default', ['watch']);
