//подключение модуля галпа
var gulp = require('gulp'),
       sass = require('gulp-sass'), //Подключаем Sass пакет
       rename      = require('gulp-rename'), // Подключаем библиотеку для переименования файлов
       imagemin    = require('gulp-imagemin'), // Подключаем библиотеку для работы с изображениями
       pngquant    = require('imagemin-pngquant'), // Подключаем библиотеку для работы с png
       cache       = require('gulp-cache'), // Подключаем библиотеку кеширования
       pug = require('gulp-pug'),
       tinypng = require('gulp-tinypng-compress'), //Сжатие картинок на сайте tinypng, 500 в месяц
       ttf2woff = require('gulp-ttf2woff'), //Конвертация шрифров в woff
       ttf2woff2 = require('gulp-ttf2woff2'), //Конвертация шрифров в woff2
       svgmin = require('gulp-svgmin'), // Подключаем библиотеку для очистки svg от мусора
       svgstore = require('gulp-svgstore'), //Сборка SVG-спрайтов
       spritesmith = require('gulp.spritesmith'), //Сборка растровых спрайтов
       postcss = require('gulp-postcss'), //Подключение postcss
       mqpacker = require('css-mqpacker'), //Оптимизация медиа-запросов
       concat = require('gulp-concat'), //объединение файлов
       prefix = require('gulp-autoprefixer'), //авто префиксы
       cssnano = require('gulp-cssnano'), //Сжатие CSS-файлов
       uglify = require('gulp-uglify'), //минимизация js
       del = require('del'), //очищение папок от файлов
       browserSync = require('browser-sync'); //обновление браузера НЕ УСТАНОВИЛСЯ

/*---------------------------------Сборка спрайтов SVG-------------------*/
gulp.task('svg-sprites', function(callback) {
    return gulp.src(path.svg.input)
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(svgmin())
        .pipe(svgstore({
            inlineSvg: true
        }))
        .pipe(rename('symbols.svg'))
        .pipe(gulp.dest(path.svg.output));
});

/*-------------------- Формирование растрового спрайта -------------------*/
gulp.task('picture-sprites', function (callback) {
    var spriteData =  gulp.src(path.sprites.input)
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(spritesmith({
            imgName: settings.picSpriteName,
            cssName: 'sprite.' + settings.cssFormat,
            algorithm: 'binary-tree',
            padding: 10,
            cssFormat: settings.cssFormat,
            cssVarMap: function(sprite) {
                sprite.name = 's-' + sprite.name;
            }
        }));
    spriteData.img.pipe(gulp.dest(path.sprites.output));
    spriteData.css.pipe(gulp.dest(path.sprites.css));
    callback();
});

/*-----------------------Конвертация шрифтов woff и woff2-----------------*/
gulp.task('woff', function(callback) {
    return gulp.src(path.fonts.input)
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(ttf2woff())
        .pipe(gulp.dest(path.fonts.output));
});
gulp.task('woff2', function(callback) {
    return gulp.src(path.fonts.input)
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(ttf2woff2())
        .pipe(gulp.dest(path.fonts.output));
});

gulp.task('fonts', gulp.series('woff', 'woff2'));

/*--------------------Сжатие растровых картинок----------------------------*/
gulp.task('compress-pictures-images', function(callback) {
    return gulp.src('app/images/**/*.+(jpg|jpeg|png)')
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(tinypngcompress({
            log: true,
            sigFile: settings.sigFile,
            key: settings.key
        }))
        .pipe(gulp.dest(path.images.outputImages));
});

gulp.task('compress-pictures-userdata', function(callback) {
    return gulp.src('app/userdata/**/*.+(jpg|jpeg|png)')
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(tinypngcompress({
            log: true,
            sigFile: settings.sigFile,
            key: settings.key
        }))
        .pipe(gulp.dest(path.images.outputUserdata));
});

gulp.task('compress-images', gulp.series('compress-pictures-images', 'compress-pictures-userdata'));


var cssFiles = [ //файлы в том порядке, в котором должны быть добавлены в общий файл
  './src/css/main.css',
  './src/css/media.css'
];

// альтернатива 'app/libs/*.css'

/*---------------------------------Сборка библиотек стилей в один файл-------------------*/
function styles() {
    //'./src/css/**/*.css'
    return gulp.src(cssFiles)

        .pipe(concat('libs.min.css'))
        .pipe(prefix({
            browsers: ['last 2 versions'],
            cascade: false
        }))
        .pipe(cssnano())
        .pipe(gulp.dest('dist/css/'))
        .pipe(browserSync.stream());
}

var jsFiles = [ //файлы в том порядке, в котором должны быть добавлены в общий файл
    'app/js/script.js',
    'app/js/main.js'
];

// альтернатива 'app/js/libs/*.js'

/*------------------Сборка библиотек скриптов в один файл---------------------*/
function scripts() {
    return gulp.src(jsFiles)

        .pipe(concat('lib.min.js'))
        .pipe(uglify({
            toplevel: true //максимальный уровень минификации
        }))
        .pipe(gulp.dest('dist/js/'))
        .pipe(browserSync({ stream: true }));
}

/*------------------------------------Компиляция Sass---------------------*/
gulp.task('sass', function(){
    var processors = [
        autoprefixer({ browsers: ['last 1 version'] }),
        mqpacker({
            sort: false
        })
    ];
    return gulp.src('app/sass/**/*.sass') // Берем все sass файлы из папки sass и дочерних, если таковые будут
        .pipe(sass())
        .pipe(postcss(processors))
        .pipe(gulp.dest('app/css'))
        .pipe(browserSync.reload({stream: true})) // Обновляем CSS на странице при изменении
});

/*------------------------------------Компиляция PUG---------------------*/
gulp.task('pug', function() {
    return gulp.src('app/**/*.pug')
        .pipe(plumber({
            errorHandler: notify.onError()
        }))
        .pipe(pug({
            pretty: true
        }))
        .pipe(gulp.dest('app/')
        .pipe(reload({ stream: true })); //И перезагрузим сервер
});

//удалить все в указанной папке
function clean() {
    return del(['build/*'])
}

/*------------------------------------Запуск сервера, наблюдение за файлами---------------------*/
gulp.task('server', gulp.series('js-libs', 'css-libs', 'sass', 'pug', 'js', function serverActivate(callback) { // Создаем таск browser-sync
    browserSync.init({ //запуск локального сервера
        server: {
            baseDir: "./"
        },
        notify: false // Отключаем уведомления
    });
    gulp.watch(['app/pr.common.blocks/**/*.+(sass|scss)','app/pr.desktop.blocks/**/*.+(sass|scss)','app/pr.library.blocks/**/*.+(sass|scss)','app/pr.mobile.blocks/**/*.+(sass|scss)','app/pr.main.styles/**/*.+(sass|scss)'], gulp.series('sass'));
    gulp.watch('app/**/*.pug', gulp.series('pug'));
    gulp.watch('app/main.src.js', gulp.series('js'));
    browserSync.watch('app/**/*.*').on('change', browserSync.reload);
}));

gulp.task('default', gulp.series('server'));

//отслеживание файлов и обновление браузера
// function watch() {
//     browserSync.init({ //запуск локального сервера
//         server: {
//             baseDir: "./"
//         },
//         notify: false // Отключаем уведомления
//     });
//     //отслеживание css файлов
//     gulp.watch('./src/css/**/*.css', styles); //корневая директория/папка/папка/любое количество папко/любое название с расширением цсс
//     gulp.watch('./src/js/**/*.js', scripts);
//     gulp.watch('./*.html').on('change', browserSync.reload);
// }
//
// gulp.task('styles', styles); //название таска, функция
// gulp.task('scripts', scripts);
// gulp.task('watch', watch); //отслеживание изменений
// gulp.task('build', gulp.series(clean, gulp.parallel(styles, scripts))); //очищение папки билт, добавление криптов и стилей
// gulp.task('dev', gulp.series('build', 'watch'));