//подключение модуля галпа
var gulp = require('gulp'),
       concat = require('gulp-concat'), //объединение файлов
       prefix = require('gulp-autoprefixer'), //авто префиксы
       cleanCss = require('gulp-clean-css'), //минимизация файлов css
       uglify = require('gulp-uglify'), //минимизация js
       del = require('del'), //очищение папок от файлов
       browserSync = require('browser-sync').create(); //обновление браузера НЕ УСТАНОВИЛСЯ

var cssFiles = [ //файлы в том порядке, в котором должны быть добавлены в общий файл
  './src/css/main.css',
  './src/css/media.css'
];

//таск на стили
function styles() {
    //'./src/css/**/*.css'
    return gulp.src(cssFiles)

        .pipe(concat('style.css'))
        .pipe(prefix({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cleanCss({
            level: 2 //уровень сжатия файла (0, 1, 2)
        }))
        .pipe(gulp.dest('./build/css'))
        .pipe(browserSync.stream());
}

var jsFiles = [ //файлы в том порядке, в котором должны быть добавлены в общий файл
    './src/js/script.js',
    './src/js/main.js'
];

//таск на скрипты
function scripts() {
    return gulp.src(jsFiles)

        .pipe(concat('lib.js'))
        .pipe(uglify({
            toplevel: true //максимальный уровень минификации
        }))
        .pipe(gulp.dest('./build/js'))
        .pipe(browserSync.stream());
}

//удалить все в указанной папке
function clean() {
    return del(['build/*'])
}

//отслеживание файлов и обновление браузера
function watch() {
    browserSync.init({ //запуск локального сервера
        server: {
            baseDir: "./"
        }
    });
    //отслеживание css файлов
    gulp.watch('./src/css/**/*.css', styles); //корневая директория/папка/папка/любое количество папко/любое название с расширением цсс
    gulp.watch('./src/js/**/*.js', scripts);
    gulp.watch('./*.html').on('change', browserSync.reload);
}

gulp.task('styles', styles); //название таска, функция
gulp.task('scripts', scripts);
gulp.task('watch', watch); //отслеживание изменений
gulp.task('build', gulp.series(clean, gulp.parallel(styles, scripts))); //очищение папки билт, добавление криптов и стилей
gulp.task('dev', gulp.series('build', 'watch'));