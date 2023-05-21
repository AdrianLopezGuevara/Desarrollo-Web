const { src, dest, watch, parallel } = require("gulp");

/* CSS */
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");
const autoprefixer = require("autoprefixer");
const cssnano = require("cssnano");
const postcss = require("gulp-postcss");
const sourcemaps = require("gulp-sourcemaps");

/* Imagenes */
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");

/* JavaScript */
const terser = require("gulp-terser-js");

function css(done) {
    src("./src/scss/**/*.scss")
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass())
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(sourcemaps.write('.'))
        .pipe(dest("./build/css"));
    done();
}

function versionWebp(done) {
    const opc = {
        quality: 50,
    };
    src("./src/img/**/*")
        .pipe(webp(opc))
        .pipe(dest("./build/img"));

    done();
}

function imageMin(done) {
    const opc = {
        optimizationLevel: 3
    };
    src("./src/img/**/*")
        .pipe(cache(imagemin(opc)))
        .pipe(dest("./build/img"));
    done();
}

function js(done) {
    src("./src/js/**/*.js")
        .pipe(sourcemaps.init())
        .pipe(terser())
        .pipe(sourcemaps.write("."))
        .pipe(dest("./build/js"));
    done();
}

function dev(done) {
    watch("./src/scss/**/*.scss", css);
    watch("./src/js/**/*.js", js);
    done();
}

exports.css = css;
exports.js = js;
exports.versionWebp = versionWebp;
exports.imageMin = imageMin;
exports.dev = parallel(imageMin, versionWebp, js, dev);
