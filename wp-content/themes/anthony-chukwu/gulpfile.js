// Defining requirements
var gulp = require("gulp");
var plumber = require("gulp-plumber");
var sass = require('gulp-sass')(require('sass'));
var rename = require("gulp-rename");
var concat = require("gulp-concat");
var imagemin = require("gulp-imagemin");
var ignore = require("gulp-ignore");
var sourcemaps = require("gulp-sourcemaps");
var del = require("del");
var cleanCSS = require("gulp-clean-css");
var autoprefixer = require("gulp-autoprefixer");
var spritesmith = require("gulp.spritesmith");
//var changed = require('gulp-changed');
var merge = require("merge-stream");
var streamqueue = require("streamqueue");
var uglify = (uglify = require("gulp-uglify-es").default);
var strip = require("gulp-strip-comments");
const purgecss = require("gulp-purgecss");
const path = require("path");
const whitelister = require("purgecss-whitelister");
// Configuration file to keep your code DRY
var cfg = require("./gulpconfig.json");
var paths = cfg.paths;


// Run:
// gulp styles
// Compiles SCSS files in CSS and minify it
gulp.task("styles", function (done) {
  cfg.files_styles.forEach(function (style) {
    var filenameTxt = "\033[36m" + style.name + "\033[30m";

    console.log("Processing '" + filenameTxt + "\033[36m.scss\033[30m'...");

    var sassStream = gulp
      .src(style.scss)
      .pipe(sourcemaps.init({ loadMaps: true }))
      .pipe(
        plumber({
          errorHandler: function (err) {
            console.log(err);
            this.emit("end");
          },
        })
      )
      .pipe(sass({ errLogToConsole: true }))
      .pipe(
        autoprefixer({
          overrideBrowserslist: [">0.25%", "not ie 11", "not op_mini all"],
        })
      )
      .pipe(sourcemaps.write("./"))
      .pipe(gulp.dest(paths.css))
      .pipe(rename(style.name + ".css"));

    if (style.css.length) {
      // console.log('  ...Adding plugins css...', '\n    \'\033[34m'+ style.css.join('\'\n    \'') +'\033[30m\'');

      var cssStream = gulp
        .src(style.css)
        .pipe(
          cleanCSS({
            compatibility: "*",
            rebaseTo: paths.css,
          })
        )
        .pipe(concat(style.name + "-plugins.css"));

      console.log(
        "  ...Minifying '" + filenameTxt + "\033[36m.css\033[30m'..."
      );
    }

    streamqueue({ objectMode: true }, sassStream)
      .pipe(concat(style.name + ".css"))
      .pipe(gulp.dest(paths.css))
      .on("end", function () {
        gulp
          .src(paths.css + "/" + style.name + ".css")
          .pipe(sourcemaps.init({ loadMaps: true }))
          .pipe(
            cleanCSS({
              compatibility: "*",
              level: {
                1: {
                  specialComments: "none",
                },
              },
            })
          )
          .pipe(
            plumber({
              errorHandler: function (err) {
                console.log(err);
                this.emit("end");
              },
            })
          )
          .pipe(rename({ suffix: ".min" }))
          .pipe(sourcemaps.write("./"))
          .pipe(gulp.dest(paths.css))
          .on("end", function () {
            // Maybe delete src css and map files?
          });
      });

    // console.log('  \033[32mDone\033[30m \''+ filenameTxt +'\033[36m.min.css\033[30m\'\n');
  });

  done();
});

// Run:
// gulp scripts.
// Uglifies and concat all JS files into one
gulp.task("scripts", function (done) {
  cfg.files_scripts.forEach(function (script) {
    var filenameTxt = "\033[36m" + script.name + "\033[30m";

    /*console.log('Creating \''+ filenameTxt +'\033[36m.js\033[30m\'...');

        gulp.src( scripts, { allowEmpty: true } )
            .pipe( concat( 'scripts-'+ filename +'.js' ) )
            .pipe( gulp.dest( paths.js ) );

        console.log('\033[32mDone\033[30m '+ filenameTxt +'\033[36m.js\033[30m\'\n');*/

    // console.log('Creating and minifying \'\033[36mscripts-'+ filenameTxt +'\033[36m.js\033[30m\'...');

    gulp
      .src(script.files, { allowEmpty: false })
      .pipe(strip())
      .pipe(uglify())
      .pipe(concat("" + script.name + ".min.js"))
      .pipe(gulp.dest(paths.js));

    console.log(
      "  \033[32mDone\033[30m '\033[36mscripts-" +
      filenameTxt +
      "\033[36m.min.js\033[30m'\n"
    );
  });

  done();
});


// Run:
// gulp watch
// Starts watcher. Watcher runs gulp sass task on changes
gulp.task("watch-mws", function () {
  gulp.watch(`./src/scss/**/*.scss`, gulp.series("styles"));
  gulp.watch(
    [`./src/js/*.js`],
    gulp.series("scripts")
  );
});

// Run:
// gulp watch
// Starts watcher with browser-sync. Browser-sync reloads page automatically on your browser
gulp.task("stuff", gulp.parallel("scripts", "styles"));
gulp.task("watch", gulp.parallel("watch-mws", "stuff"));
