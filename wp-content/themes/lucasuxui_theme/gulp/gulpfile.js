// Gulp.js configuration
var themename = "base";

var // Gulp and plugins
  gulp          = require("gulp"),
  autoprefixer  = require("gulp-autoprefixer"),
  sass          = require("gulp-sass"),
  changed       = require("gulp-changed"),
  concat        = require("gulp-concat"),
  uglify        = require("gulp-uglify"),
  imagemin      = require("gulp-imagemin"),
  sourcemaps    = require("gulp-sourcemaps"),
  lineec        = require("gulp-line-ending-corrector"),
  browserSync   = require("browser-sync").create(),
  reload        = browserSync.reload;
var root    = "../",
  scss      = root + "assets/scss/",
  scssDIST  = root + "dist/css/",
  js        = root + "assets/js/",
  jsDIST    = root + "dist/js/",
  fontsSRC     = root + "assets/fonts/",
  fontsDIST = root + "dist/fonts/";

var phpWatchFiles = root + "**/*.php",
  styleWatchFiles = root + "**/*.scss";

var jsSRC = [
  js + "jquery.js",
  js + "bootstrap.min.js",
  js + "main.js"
];

var imgSRC  = root + "assets/images/",
    imgDEST = root + "dist/images/";

function css() {
  return gulp
    .src(scss + "style.scss")
    .pipe(sourcemaps.init({ loadMaps: true, largeFile: true }))
    .pipe(
      sass({
        outputStyle: "compressed"
      }).on("error", sass.logError)
    )
    .pipe(concat("style.min.css"))
    .pipe(autoprefixer("last 2 versions"))
    .pipe(sourcemaps.write())
    .pipe(lineec())
    .pipe(gulp.dest(scssDIST));
}

function javascript() {
  return gulp
    .src(jsSRC)
    .pipe(concat("main.min.js"))
    .pipe(uglify())
    .pipe(lineec())
    .pipe(gulp.dest(jsDIST));
}

function imgmin() {
  return gulp
    .src(imgSRC + '**/*.{png,gif,jpg}')
    .pipe(changed(imgDEST))
    .pipe(
      imagemin([
        imagemin.gifsicle({ interlaced: true }),
        imagemin.jpegtran({ progressive: true }),
        imagemin.optipng({ optimizationLevel: 5 })
      ])
    )
    .pipe(gulp.dest(imgDEST));
}
function fonts() {
  return gulp
    .src(fontsSRC + '**/*.{ttf,woff,eot,svg}')
    .pipe(gulp.dest(fontsDIST));
}
function watch() {
  browserSync.init({
    open: "external",
    proxy: "http://localhost/wordpress-template"
  });
  gulp.watch(styleWatchFiles, css);
  gulp.watch(jsSRC, javascript);
  gulp.watch(imgSRC, imgmin);
  gulp.watch(fontsSRC, fonts);
  gulp
    .watch([phpWatchFiles, jsDIST + "main.min.js", scssDIST + "style.min.css"])
    .on("change", reload);
}

exports.css = css;
exports.javascript = javascript;
exports.watch = watch;
exports.imgmin = imgmin;
exports.fonts = fonts;

var build = gulp.parallel(javascript, css, imgmin, fonts, watch);
gulp.task("default", build);
