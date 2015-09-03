//variables
var gulp            = require('gulp'),
    sass            = require('gulp-sass'),
    postcss         = require('gulp-postcss'),
    autoprefixer    = require('autoprefixer-core'),
    csswring        = require('csswring'),
    sourcemaps      = require('gulp-sourcemaps');
    

//default task

gulp.task('default',['watch']);

//stylesheet
gulp.task('build-css',function(){
    var processors = [autoprefixer({browsers:['last 2 version']}),csswring];
    var build_processors = [csswring];
    return gulp.src('_scss\\style.scss')
    .pipe(sourcemaps.init())
    .pipe(sass())
    .pipe(postcss(processors))
    .pipe(sourcemaps.write())
    .pipe(gulp.dest('c:\\Users\\dklotz\\Documents\\TIC\\'));
});


//watch
gulp.task('watch',function(){
    gulp.watch('_scss/**/*.scss', ['build-css']);
});