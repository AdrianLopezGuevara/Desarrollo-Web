const { src, dest, watch, parallel } = require("gulp");

/* CSS */
const sass = require("gulp-sass")(require("sass"));
const plumber = require("gulp-plumber");

/* Imagenes */
const cache = require("gulp-cache");
const imagemin = require("gulp-imagemin");
const webp = require("gulp-webp");

function css(done) {
    src("./src/scss/**/*.scss")
        .pipe(plumber())
        .pipe(sass())
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
