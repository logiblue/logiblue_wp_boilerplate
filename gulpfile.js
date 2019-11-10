var gulp = require("gulp");
var sass = require("gulp-sass");
var browserSync = require("browser-sync").create();


// Variables
var paths = {
    styles: {
        src: "styles/**/*.scss",
        dest: "."
    }
};

// Define tasks after requiring dependencies
function style() {
    return gulp
        .src(paths.styles.src)
        .pipe(sass())
        .on("error", sass.logError)
        .pipe(gulp.dest(paths.styles.dest))
        .pipe(browserSync.stream());

}

exports.style = style;

function reload() {
    browserSync.reload();
}

function watch(){
    browserSync.init({
        proxy: "localhost/artware"
    });

    gulp.watch(paths.styles.src, style)
    gulp.watch('**/*.php').on('change', function () { //this watch inspects the php files for changes 
        browserSync.reload();
  });  
}
    
// Don't forget to expose the task!
exports.watch = watch


