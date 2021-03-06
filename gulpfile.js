// =============================================================
// 1. Configuration
// =============================================================

// 1.1 - Gulp Packages
// ------------------------------
const projectConfig = require('./package.json');
const gulp = require('gulp'),
    browserSync = require('browser-sync'),
    del = require('del'),
    autoprefixer = require('gulp-autoprefixer'),
    imagemin = require('gulp-imagemin'),
    handlebars = require('gulp-compile-handlebars'),
    rename = require('gulp-rename'),
    sass = require('gulp-sass'),
    sourcemaps = require('gulp-sourcemaps'),
    babel = require('gulp-babel'),
    uglify = require('gulp-uglify'),
    util = require('gulp-util'),
    fs = require('fs'),
    purgecss = require('gulp-purgecss')
    gClean = require('gulp-clean');


// 1.2 - Global Paths
// ------------------------------
const all = '**/*.*',
    folders = '**/*'


// ==============================================================
// 2. Functions
// ==============================================================

// 2.1 - Clean folder
// ------------------------------
function clean(path) {
    return del(path);
};


// 2.2 - Complie SASS
// ------------------------------
function styles(src, dest) {
    return gulp
        .src(src)
        .pipe(sourcemaps.init())
        .pipe(sass({
            outputStyle: 'compressed'
        }))
        .on('error', sass.logError)
        .pipe(autoprefixer())
        // .pipe(sourcemaps.write('./maps'))
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(dest))
};
gulp.task('frontend:purgecss', () => {
    return gulp.src(frontend.dist + '**/*.css')
        .pipe(purgecss({
            content: [frontend.dist + '**/*.html']
        }))
        .pipe(gulp.dest(frontend.dist))
})


// 2.3 - Minimize Scripts
// ------------------------------
function scripts(src, dist) {
    return (
        gulp
        .src(src, {
            sourcemaps: true
        })
        .pipe(babel({
            presets: ['@babel/env']
        }))
        .pipe(uglify())
        .pipe(rename({
            suffix: '.min'
        }))
        .pipe(gulp.dest(dist))
    );
};


// 2.4 - Optmize images
// ------------------------------
function images(src, dest) {
    return (
        gulp
        .src(src)
        .pipe(imagemin({
            interlaced: true,
            progressive: true,
            optimizationLevel: 5,
            svgoPlugins: [
                {
                    removeViewBox: true
                }
            ]
        }))
        .pipe(gulp.dest(dest))
    )
};


// 2.5 - Complie templates
// ------------------------------
function templates(templates, partials, dest) {
    var templateData = {},
        options = {
            ignorePartials: true,
            batch: [partials]
        }
    return gulp.src(templates)
        .pipe(handlebars(templateData, options))
        .pipe(rename(function (path) {
            path.extname = '.html';
        }))
        .pipe(gulp.dest(dest))
};

// 2.6 - Copy
// ------------------------------
function copy(src, dest) {
    return gulp.src(src)
        .pipe(gulp.dest(dest));
};


// 2.7 - Start server
// ------------------------------
function liveServer(path) {
    let options;

    if (path == 'frontend') {
        options = {
            server: {
                baseDir: frontend.dist
            }
        }
        gulp.watch(frontend.src).on('change', gulp.series('frontend:develop', liveReload));

    } else {
        options = {
            proxy: backend.proxy
        }
        gulp.watch(backend.src).on('change', gulp.series('backend:develop', liveReload));
    }
    browserSync.init(options);
};


// 2.8 - Reload page
// ------------------------------
function liveReload() {
    browserSync.reload();
};


// =============================================================
// 3. Front-end
// =============================================================

// 3.1 - Paths
// ------------------------------
const frontend = new function () {
    this.root = 'front-end/';
    this.all = this.root + all;
    this.src = this.root + 'src/';
    this.dist = this.root + 'dist/';
    this.assets = this.src + 'assets/' + folders;
    this.vendors = this.src + 'vendors/' + folders;
    this.styles = this.src + 'styles/**/*.scss';
    this.scripts = this.src + 'scripts/**/*.js';
    this.images = this.src + 'images/' + folders;
    this.templates = this.src + 'templates/*.html';
    this.partials = this.src + 'templates/partials';
};

// 3.2 - Assets
// ------------------------------
gulp.task('frontend:assets', () => copy(frontend.assets, frontend.dist));

// 3.3 - Vendors
// ------------------------------
gulp.task('frontend:vendors', () => copy(frontend.vendors, frontend.dist + 'assets/'));

// 3.4 - Styles
// ------------------------------
gulp.task('frontend:styles', () => styles(frontend.styles, frontend.dist + 'assets/css/'));

// 3.5 - Scripts
// ------------------------------
gulp.task('frontend:scripts', () => scripts(frontend.scripts, frontend.dist + '/assets/js/'));

// 3.6 - Images
// ------------------------------
gulp.task('frontend:images', () => images(frontend.images, frontend.dist + 'assets/img/'));

// 3.7 - Templates
// ------------------------------
gulp.task('frontend:templates', () => templates(frontend.templates, frontend.partials, frontend.dist));

// 3.8 - HTML
// ------------------------------
gulp.task('frontend:html', () => html(frontend.dist + '/**/*.html', frontend.dist));

// 3.9 - Clean build files
// ------------------------------
gulp.task('frontend:clean', () => clean(frontend.dist));

// 3.10 - Build
// ------------------------------
gulp.task('frontend:build',
    gulp.series(
        'frontend:clean',
        'frontend:assets',
        'frontend:vendors',
        'frontend:styles',
        'frontend:scripts',
        'frontend:images',
        'frontend:templates',
        'frontend:purgecss'
    )
);

// 3.11 - Develop
// ------------------------------
gulp.task('frontend:develop',
    gulp.series(
        'frontend:clean',
        'frontend:styles',
        'frontend:assets',
        'frontend:vendors',
        'frontend:scripts',
        () => copy(frontend.images, frontend.dist + 'assets/img/'),
        'frontend:templates',
        'frontend:purgecss'
    )
);

// 3.12 - Start Server
// ------------------------------
gulp.task('frontend:server', gulp.series('frontend:develop', () => liveServer('frontend')));
gulp.task('frontend:start', gulp.series('frontend:server'));



// =============================================================
// 4. Back-end
// =============================================================

// 4.1 - Backend paths
const backend = new function () {
    this.root = 'back-end/';
    this.src = this.root + 'src/';
    this.dist = this.root + 'dist/themes/' + projectConfig.name;
    this.proxy = 'http://localhost:8000';
};

// 4.3 - Backed Install 
// ------------------------------
function backendRename() {
    return gulp.src(backend.src + '*.html')
        .pipe(rename(function (path) {
            path.extname = ".php";
        }))
        .pipe(gulp.dest(backend.src))
};

function backendCleanHtml() {
    return gulp.src(backend.src + '*.html')
        .pipe(gClean({
            read: false
        }))
};


gulp.task('backend:install', gulp.series(
    'frontend:build',
    () => clean(backend.dist),
    () => copy(frontend.dist + '/**/*.*', backend.src),
    () => backendRename(),
    () => backendCleanHtml(),
    () => copy(backend.src + '/**/*.*', backend.dist),
));

// 4.5 - Start Backend
// ------------------------------
gulp.task('backend:start', (done) => {
    if (!fs.existsSync(backend.dist)) {
        // return gulp.series('backend:install', () => liveServer('backend'))(done);
        return gulp.series(() => liveServer('backend'))(done);
    } else {
        return gulp.series(() => liveServer('backend'))(done);
    }
});

// 4.6 - Start Develop
// ------------------------------
gulp.task('backend:develop', gulp.series(
    () => clean(backend.dist),
    () => copy(backend.src + '/**/*.*', backend.dist),
));

// 4.7 - Clean build files
// ------------------------------
gulp.task('backend:clean', () => clean(backend.dist));
