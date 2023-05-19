const { src, dest, watch, series } = require('gulp');
const postcss = require('gulp-postcss');
// const sharpResponsive = require("gulp-sharp-responsive");

const cssnano = require('cssnano');
const terser = require('gulp-terser');
const autoprefixer = require('autoprefixer');
//const browsersync = require('browser-sync').create();
const sass = require('gulp-sass')(require('sass'));

// Sass Task
function scssTask(){
    return src('src/scss/*.scss', {sourcemaps : true})
    .pipe(sass())
    .pipe(postcss([autoprefixer(), cssnano()]))
    .pipe(dest('src/css', {sourcemaps: '.'}));
}

function cssTask(){
    return src('src/css/*.css', {sourcemaps : true})
    .pipe(dest('./', {sourcemaps: '.'}));
}

// Js Task
function jsTask(){
    return src('src/js/**/*.js', {sourcemaps : true})
    .pipe(terser())
    .pipe(dest('Assets/js', {sourcemaps: '.'}));

}



// Brosersync Tasks
/*function browsersyncServe(cb){
    browsersync.init({
        server: {
            baseDir: '.'
        }
    });
    cb();


}
*/
function browsersyncReload(cb){
    browsersync.reload();
    cb();
}

//Sharp Responsive Task

//const img = () => src("src/assets/images/**/*.{jpg,png}")
/*  .pipe(sharpResponsive({
    formats: [
      { width: 440, jpegOptions: { quality: 70, progressive: true }, rename: { suffix: "-sm" } },
      { width: 740, jpegOptions: { quality: 70, progressive: true }, rename: { suffix: "-md" } },
      { width: 1024, jpegOptions: { quality: 70, progressive: true }, rename: { suffix: "-lg" } },
      { width: 1800, jpegOptions: { quality: 70, progressive: true }, rename: { suffix: "-xl" } },
    ]
  }))
  .pipe(dest("dist/images"));
 */ 

// Watch Task
function watchTask(){
    //watch('*html', browsersyncReload);
    watch(['*html, wp-content/themes/kow22/src/scss/**/*.scss', 'wp-content/themes/kow22/src/js/**/*.js']), series(scssTask, jsTask 
        //browsersyncReload
        );

}

// Default Gulp Task
exports.default = series(
    scssTask,
    cssTask,
    jsTask,
   // img,
    //browsersyncServe,    
    watchTask
)