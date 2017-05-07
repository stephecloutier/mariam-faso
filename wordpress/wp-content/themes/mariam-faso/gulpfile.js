/* stephe/mariam-faso
 *
 * /gulpfile.js - Gulp tasks
 *
 * coded by stephecloutier@gmail.com
 * started at 07/05/2017
 */

var gulp = require("gulp"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    csso = require("gulp-csso"),
    babel = require("gulp-babel"),
    sourcemaps = require("gulp-sourcemaps")

// --- Tasks for styles

    gulp.task("css", function() {
        gulp.src("src/sass/**/*.scss")
            .pipe(sourcemaps.init())
                .pipe(sass().on("error", sass.logError))
                .pipe(autoprefixer())
                //.pipe(csso())
            .pipe(sourcemaps.write())
            .pipe(gulp.dest("assets/css"))
   });

// --- Tasks for js

    gulp.task("js", function(){
        gulp.src("src/js/**/*.js")
            .pipe(babel())
            .pipe(gulp.dest("assets/js"))
    })


// --- Watch tasks

    gulp.task("watch", function(){
        gulp.watch("src/sass/**/*.scss", ["css"]);
        gulp.watch("src/js/**/*.js", ["js"]);
   });

// --- Aliases

    gulp.task("default", ["css", "js"]);
    gulp.task("work", ["default", "watch"]);
