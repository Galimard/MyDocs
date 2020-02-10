<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
        @font-face {
            font-family: 'ProximaNova';
            src: url('../fonts/ProximaNova-Black.woff2') format('woff2');
            src: url('../fonts/ProximaNova-Black.woff') format('woff');
            font-weight: 900;
            font-style: normal;
        }
        /*--------------------------------------------------общие стили--------------------------------------------------*/
        * {
            /*outline: 1px solid red;*/
            -webkit-box-sizing: border-box;
            -moz-box-sizing: border-box;
            box-sizing: border-box;
        }

        html, body {
            font-size: 16px;
            font-family: 'ProximaNova', 'Arial', sans-serif;
        }

        body, p, h1, h2, h3, h4, h5, h6 {
            margin: 0;
        }

        select, button {
            border: none;
            -webkit-appearance: none;
            -moz-appearance: none;
            appearance: none;
            outline: none;
            background: none;
        }

        ul, li {
            padding: 0;
            margin: 0;
        }

        li {
            list-style: none;
        }

        a {
            text-decoration: none;
        }

        .visually-hidden:not(:focus):not(:active),
        input[type='checkbox'].visually-hidden,
        input[type='radio'].visually-hidden {
            position: absolute;
            width: 1px;
            height: 1px;
            margin: -1px;
            border: 0;
            padding: 0;
            white-space: nowrap;
            -webkit-clip-path: inset(100%);
            clip-path: inset(100%);
            clip: rect(0 0 0 0);
            overflow: hidden;
        }

        .template-shadow {
            max-width: 1600px;
            width: 100%;
            margin: 0 auto;
            box-shadow: 0 0 35px 3px rgba(0, 0, 0, 0.2);
            background: url("../images/square-bg.png") center center no-repeat;
        }

        .title {
            color: #e12457;
            font-size: 60px;
            font-weight: 700;
        }
        /*общие стили*/

        @media all and (max-width: )

        /*//type number скрыть стрелки*/
        input[type='number'] {
            -moz-appearance:textfield;
        }

        input::-webkit-outer-spin-button,
        input::-webkit-inner-spin-button {
            -webkit-appearance: none;
        }

        /*//бутстрап 5 колонок*/
        .col-xs-five,
        .col-sm-five,
        .col-md-five,
        .col-lg-five {
             position: relative;
             min-height: 1px;
             padding-right: 10px;
             padding-left: 10px;
         }

        .col-xs-five {
            width: 20%;
            float: left;
        }

        @media (min-width: 768px) {
            .col-sm-five {
                width: 20%;
                float: left;
            }
        }

        @media (min-width: 992px) {
            .col-md-five {
                width: 20%;
                float: left;
            }
        }

        @media (min-width: 1200px) {
            .col-lg-five {
                width: 20%;
                float: left;
            }
        }

        /*//выделение текста*/
          ::selection {
              background: #1592a4;
              color: #fff
          }
        ::-moz-selection {
            background: #1592a4;
            color: #fff
        }


        /*//отражение картинки*/
        div {
            transform: scale(-1, 1) /*— отражение по горизонтали;*/
            transform: scale(1, -1) /*— отражение по вертикали;*/
            transform: scale(-1, -1) /*— одновременное отражение по горизонтали и вертикали.*/
        }

        /*иконки у списка*/
            ul li {
                background: url("/bitrix/templates/starline/images/ico_7.svg") 0 17px no-repeat;
            }

            ul {
                list-style-image: url(images/book.gif); /* Путь к рисунку для установки маркера */
                list-style-position: inside; /* Маркер обтекается текстом */
            }

        /*//placeholder*/
          .header-form__search::-webkit-input-placeholder {
              color:  #b7b7b7;
              font-size: 0.9rem;
              font-weight: 400;
          }

        .header-form__search:-moz-placeholder {
            color:  #b7b7b7;
            font-size: 0.9rem;
            font-weight: 400;
        }

        .header-form__search::-moz-placeholder {
            color:  #b7b7b7;
            font-size: 0.9rem;
            font-weight: 400;
        }

        .header-form__search:-ms-input-placeholder {
            color:  #b7b7b7;
            font-size: 0.9rem;
            font-weight: 400;
        }

        .header-form__search:focus::-webkit-input-placeholder {
            opacity:0;
            -webkit-transition: opacity 0.5s;
            -moz-transition: opacity 0.5s;
            -ms-transition: opacity 0.5s;
            -o-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }

        .header-form__search:focus:-moz-placeholder {
            opacity:0;
            -webkit-transition: opacity 0.5s;
            -moz-transition: opacity 0.5s;
            -ms-transition: opacity 0.5s;
            -o-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }

        .header-form__search:focus::-moz-placeholder {
            opacity:0;
            -webkit-transition: opacity 0.5s;
            -moz-transition: opacity 0.5s;
            -ms-transition: opacity 0.5s;
            -o-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }

        .header-form__search:focus:-ms-input-placeholder {
            opacity:0;
            -webkit-transition: opacity 0.5s;
            -moz-transition: opacity 0.5s;
            -ms-transition: opacity 0.5s;
            -o-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }
        /*<span class="close js-close2"></span>*/
                /*крестик*/
            .close {
                position: absolute;
                right: 32px;
                top: 32px;
                width: 32px;
                height: 32px;
                opacity: 0.3;
            }
            .close:hover {
                cursor: pointer;
                opacity: 1;
                -webkit-transition: opacity 0.3s ease;
                -moz-transition: opacity 0.3s ease;
                -ms-transition: opacity 0.3s ease;
                -o-transition: opacity 0.3s ease;
                transition: opacity 0.3s ease;
            }
            .close::before, .close::after {
                position: absolute;
                left: 15px;
                content: ' ';
                height: 33px;
                width: 2px;
                background-color: #000000;
            }
            .close::before {
                transform: rotate(45deg);
            }
            .close::after {
                transform: rotate(-45deg);
            }
            /*крестик*/
        /*//крестик*/
          .popup-close {
              display: block;
              width: 16px;
              height: 16px;
              position: absolute;
              right: 10px;
              top: 16px;
          }

        .popup-close::before {
            content: '';
            display: inline-block;
            width: 1px;
            height: 100%;
            background: #a5a5a5;
            -webkit-transform: rotate(-45deg);
            -moz-transform: rotate(-45deg);
            -ms-transform: rotate(-45deg);
            -o-transform: rotate(-45deg);
            transform: rotate(-45deg);
            transform-origin: 0 0;
        }

        .popup-close::after {
            content: '';
            display: inline-block;
            width: 1px;
            height: 100%;
            background: #a5a5a5;
            -webkit-transform: rotate(45deg);
            -moz-transform: rotate(45deg);
            -ms-transform: rotate(45deg);
            -o-transform: rotate(45deg);
            transform: rotate(45deg) translate(7px, -8px);
            transform-origin: 0 0;
        }

        .popup-close:hover {
            cursor: pointer;
        }

        /*двойной бордер*/
        .border {
            box-shadow:
                    0 0 0 1px #FF4157,
                    0 0 0 4px rgba(255,65,87,0.30);
        }

        /*показать скроллбар на мобилке*/
        .vacancies .vacancies-section .vacancies-item .vacancies-item-description .vacancies-item-description-wrapper {
            overflow-x: auto;
        }

        ::-webkit-scrollbar {
            -webkit-appearance: none;
        }

        ::-webkit-scrollbar:vertical {
            width: 12px;
        }

        ::-webkit-scrollbar:horizontal {
            height: 12px;
        }

        ::-webkit-scrollbar-thumb {
            background-color: rgba(0, 0, 0, .5);
            border-radius: 10px;
            border: 2px solid #ffffff;
        }

        ::-webkit-scrollbar-track {
            border-radius: 10px;
            background-color: #ffffff;
        }

        /*селектор not*/
        .review-slider-item:not(.slick-current) {
            opacity: 0.2;
            transform: scale(0.8);
        }

        /*слайды, кроме текущего*/
        .review-slider-item:not(.slick-current) {
              opacity: 0.2;
              transform: scale(0.8);
          }
    </style>
</head>
<body>

<!--messengers-->
<div class="top-mess col-md-3">
    <a href="viber://chat?number=79025156584" class="top-mess__link top-mess__link--vb"><span class="visually-hidden">viber</span></a>
    <a href="viber://add?number=79025156584" class="top-mess__link top-mess__link--vb top-mess__link--vb-mob"><span class="visually-hidden">viber</span></a>
    <a href="https://web.whatsapp.com/send?phone=79025156584" class="top-mess__link top-mess__link--wt"><span class="visually-hidden">whatsapp</span></a>
    <a href="https://api.whatsapp.com/send?phone=79025156584" class="top-mess__link top-mess__link--wt top-mess__link--wt-mob"><span class="visually-hidden">whatsapp</span></a>
    <a href="tg://resolve?domain=valians2010" class="top-mess__link top-mess__link--tg"><span class="visually-hidden">telegram</span></a>
</div>
<style>
    .visually-hidden:not(:focus):not(:active),
    input[type='checkbox'].visually-hidden,
    input[type='radio'].visually-hidden {
        position: absolute;
        width: 1px;
        height: 1px;
        margin: -1px;
        border: 0;
        padding: 0;
        white-space: nowrap;
        -webkit-clip-path: inset(100%);
        clip-path: inset(100%);
        clip: rect(0 0 0 0);
        overflow: hidden;
    }
    .top-mess {
        display: flex;
        justify-content: space-between;
        align-items: center;
        width: 120px;
        padding: 32px 0 0 0;
        margin-right: -40px;
        margin-left: 55px;
    }
    .top-mess__link {
        display: block;
        width: 32px;
        height: 32px;
        border-radius: 50%;
    }
    /*fixed mobile*/
    .connect-block {
        position: fixed;
        right: 100px;
        bottom: 0;
        display: flex;
        justify-content: space-between;
        width: 85px;
        height: 70px;
        z-index: 100;
        /* outline: 1px solid red; */
    }
    .connect-block__item--w {
        background: url(/bitrix/templates/autokomfort-mobile/image/w.svg) center center no-repeat;
    }
</style>

<!--------------------------------------------------youtube------------------------------------------------>
<video id="my-video-display" controls poster="images/video.jpg">
    <source src="https://www.youtube.com/watch?v=TnY23KEkZPY" type="video/youtube" />
</video>
$('#my-video-display').mediaelementplayer();

<!--------------------------------------------------скрытые ссылки социалки------------------------------------------------>
<a href="#" class="footer-bottom-socials__link footer-bottom-socials__link--vk"><span class="visually-hidden">vkontakte</span></a>

<a href="javascript:void(0)" class="closeTips">&times;</a>


<!------------------------------------------------------разметка формы для валидатора---------------------------------------------------->
<form id="form-review" action="#" method="post" class="contacts-review__form">
    <div class="wrap">
        <span id="review-name" class="form-review__warning"></span>
        <label class="contacts-review__text">Name<span class="star">*</span><input type="text" name="name" class="contacts-review__input contacts-review__name" required></label>
    </div>
    <div class="wrap">
        <span class="form-review__warning"></span>
        <label class="contacts-review__text">Email<span class="star">*</span><input type="email" name="email" class="contacts-review__input contacts-review__email" required></label>
    </div>
    <div class="wrap">
        <span class="form-review__warning"></span>
        <label class="contacts-review__text">Phone<span class="star">*</span><input type="tel" name="tel" class="contacts-review__input contacts-review__tel" required></label>
    </div>
    <div class="wrap">
        <span class="form-review__warning"></span>
        <span class="contacts-review__text contacts-review__span">Message<span class="star">*</span></span><textarea class="contacts-review__textarea" name="textarea"></textarea>
    </div>
    <button type="submit" class="btn contacts-review__btn">Submit</button>
</form>


<!--===========================================скрипты======================================================-->
<script>
    /*cookie*/
    function setCookie(form) {
        var arrFileds = $(form).serializeArray();

        for (var i = 0; i < arrFileds.length; i++) {
            if(arrFileds[i]['value'].trim() != "") {
                $.cookie(arrFileds[i]['name'], arrFileds[i]['value']);

                // document.cookie = arrFileds[i]['name'] + "=" + arrFileds[i]['value'];
            }
        }
    }
    function getCookie(name) {
        var cookie = " " + document.cookie;
        var search = " " + name + "=";
        var setStr = false;
        var offset = 0;
        var end = 0;
        if (cookie.length > 0) {
            offset = cookie.indexOf(search);
            if (offset != -1) {
                offset += search.length;
                end = cookie.indexOf(";", offset)
                if (end == -1) {
                    end = cookie.length;
                }
                setStr = unescape(cookie.substring(offset, end));
            }
        }
        return(setStr);
    }
    function fillFileds() {
        //все поля, кроме селектов
        $('.cookie-js').each(function () {
            var name = $(this).attr('name');
            if($.cookie(name)) {
                $(this).val($.cookie(name));
                $(this).valid();
                $(this).keyup();
            }
            // console.log($.cookie(name));
        });

        //обработка селектов
        $('.cookie-select').each(function () {
            var name = $(this).attr('name');
            if($.cookie(name)) {
                // $(this).children('option[value='+'"'+$.cookie(name)+'"'+']').prop('selected', true);
                $(this).val($.cookie(name));
                $('.cart-form-delivery-self__select').addClass('valid');
                window.adressSelectisValid = $('.cart-form-delivery-self__select').valid();
                $(this).selectOrDie("update");
                $(this).keyup();
            }
        })

        if($.cookie('date') && $.cookie('cart_time')) {
            var cook = $.cookie('date') + ' ' + $.cookie('cart_time');
            $('.delivery-link--js').text(cook);
        }

        if($.cookie('date2') && $.cookie('cart_time2')) {
            var cook = $.cookie('date2') + ' ' + $.cookie('cart_time2');
            $('.delivery-link--js2').text(cook);
        }
    }
</script>

<script>
    //============================активная вкладка доставки===============================//
    $('.cart-form-delivery__item--js > a').on('click', function(e) {
        e.preventDefault();
        $('.cart-form-delivery__item--js > a').removeClass('active');
        $(this).addClass('active');
        $('.cart-form-delivery-content').removeClass('active');
        if($(e.target).is('.cart-form-delivery__link-cur'))  {
            $('.cart-form-delivery-curier').addClass('active');
        } else {
            $('.cart-form-delivery-self').addClass('active');
        }
    });
</script>

<script>
    /*---------------------------------количество персон-----------------------------------*/
    $('.cart-from-buttons__plus').on('click', function (event) {
        event.preventDefault();

        var number = Number($('.cart-from-buttons__number').text());
        var newNumber = number + 1;
        $('.cart-from-buttons__number').text(newNumber);
        if(newNumber > 1) {
            $('.cart-from-buttons__minus').addClass('active');
        } else {
            $('.cart-from-buttons__minus').removeClass('active');
        }
    });

    $('.cart-from-buttons__minus').on('click', function (event) {
        event.preventDefault();

        var number = Number($('.cart-from-buttons__number').text());
        var newNumber = number - 1;
        if(newNumber > 1) {
            $('.cart-from-buttons__number').text(newNumber);
            $('.cart-from-buttons__minus').addClass('active');
        } else {
            $('.cart-from-buttons__number').text(newNumber);
            $('.cart-from-buttons__minus').removeClass('active');
        }
    });
</script>

<script>
    //определение ширины скроллы
    function scrollbarWidth() {
        var documentWidth = parseInt(document.documentElement.clientWidth);
        var windowsWidth = parseInt(window.innerWidth);
        var scrollbarWidth = windowsWidth - documentWidth;
        return scrollbarWidth + 'px';
    }
</script>

<script>
    /*плавный скролл якоря на той странице, куда ведет якорь*/
    var myHash = location.hash; //получаем значение хеша
    location.hash = ''; //очищаем хеш
    if(myHash[1] != undefined){ //проверяем, есть ли в хеше какое-то значение
        $('html, body').animate({
            scrollTop: $(myHash).offset().top - 130
        }, 1000); //скроллим за полсекунды
    }
</script>

<script>
    /*-----------------------------------------------------datepicker--------------------------------------------------------*/
    $.datepicker.setDefaults( $.datepicker.regional[ "ru" ] );
    $( "#datepicker" ).datepicker({
        changeMonth: true,
        changeYear: true,
        defaultDate: "-20y",
        yearRange: "1920:2019"
    });
</script>

<script>
    /*-----------------------------------------------------range--------------------------------------------------------*/
    document.addEventListener("DOMContentLoaded", function() {
        var range = document.getElementById('range');

        noUiSlider.create(range, {
            tooltips: true,
            connect: [true, false],
            range: {
                'min': 1,
                'max': 10
            },
            start: [1],
            step: 1,
            pips: {
                mode: 'count',
                values: 10
            },
            format: {
                to: function (value) {
                    return parseInt(value);
                },
                from: function (value) {
                    return parseInt(value);
                }
            }
        });

        var pips = range.querySelectorAll('.noUi-value');

        function clickOnPip() {
            var value = Number(this.getAttribute('data-value'));
            var roundValue = Math.round(value);
            range.noUiSlider.set(roundValue);
        }

        for (var i = 0; i < pips.length; i++) {

            // For this example. Do this in CSS!
            pips[i].style.cursor = 'pointer';
            pips[i].addEventListener('click', clickOnPip);
        }

        var driver =document.getElementById('driver');

        var valuesRange = [
            2.45,
            2.3,
            1.55,
            1.4,
            1.0,
            0.95,
            0.9,
            0.85,
            0.8,
            0.75,
            0.7,
            0.65,
            0.6,
            0.55,
            0.5
        ];

        noUiSlider.create(driver, {
            start: [3],
            step: 1,
            connect: [true, false],
            pips: {
                mode: 'steps',
                filter: () => 1,
                density: 5,
                format: {
                    to: (val) => {
                        return valuesRange[val];
                    }
                }
            },
            range: {
                'min': 0,
                'max': 14
            }
        });

        var snapValues = [
            document.getElementById('driver-lower')
        ];

        driver.noUiSlider.on('update', function(values, handle) {
            snapValues[handle].innerHTML = valuesRange[+values[handle]];
        });

</script>

<script>
    /*-----------------------------------------------------Подсказки фио--------------------------------------------------------*/
    // Замените на свой API-ключ
    var token = "35dbc2e812e958872ba59b4ba2fdd95fe2d6cfd4";

    // Инициализирует подсказки по ФИО на указанном элементе
    function init($surname, $name, $patronymic) {
        var self = {};
        self.$surname = $surname;
        self.$name = $name;
        self.$patronymic = $patronymic;
        var fioParts = ["SURNAME", "NAME", "PATRONYMIC"];
        $.each([$surname, $name, $patronymic], function(index, $el) {
            var sgt = $el.suggestions({
                token: token,
                type: "NAME",
                triggerSelectOnSpace: false,
                hint: "",
                noCache: true,
                params: {
                    // каждому полю --- соответствующая подсказка
                    parts: [fioParts[index]]
                },
                onSearchStart: function(params) {
                    // если пол известен на основании других полей,
                    // используем его
                    var $el = $(this);
                    params.gender = isGenderKnown.call(self, $el) ? self.gender : "UNKNOWN";
                },
                onSelect: function(suggestion) {
                    // определяем пол по выбранной подсказке
                    self.gender = suggestion.data.gender;
                }
            });
        });
    }
    // Проверяет, известен ли пол на данный момент
    function isGenderKnown($el) {
        var self = this;
        var surname = self.$surname.val(),
            name = self.$name.val(),
            patronymic = self.$patronymic.val();
        if (($el.attr('id') == self.$surname.attr('id') && !name && !patronymic) ||
            ($el.attr('id') == self.$name.attr('id') && !surname && !patronymic) ||
            ($el.attr('id') == self.$patronymic.attr('id') && !surname && !name)) {
            return false;
        } else {
            return true;
        }
    }

    init($("#surname"), $("#name"), $("#patron"));

</script>

<script>
    //анимация заголовков
    $('.title').addClass('hidden').viewportChecker({
        classToAdd: 'visible animated slideInDown',
        offset: 100
    });
</script>

<script>
    //отложить действие оnkeyup
    function delay(callback, ms) {
        var timer = 0;
        return function() {
            var context = this, args = arguments;
            clearTimeout(timer);
            timer = setTimeout(function () {
                callback.apply(context, args);
            }, ms || 0);
        };
    }


    // Example usage:

    $('#input').keyup(delay(function (e) {
        console.log('Time elapsed!', this.value);
    }, 500));
</script>

<script>
    //появление блока в зоне видимости
    function come(elem) {
        var docViewTop = $(window).scrollTop(),
            docViewBottom = docViewTop + $(window).height(),
            elemTop = $(elem).offset().top,
            elemBottom = elemTop;

        return ((elemBottom <= docViewBottom) && (elemTop >= docViewTop));
    }
</script>


<!--    //============================кнопка Еще отзыв===============================//-->
<!--    //увеличивать высоту блока для добавления айтема-->
    <?$i = 1;?>
		<?foreach ($arResult["ITEMS"] as $arItem):?>
			<div class="site_review <?= $i <= 2 ? "active" : ""?>" data-index="<?echo $i++;?>">
    <div class="site_review__title">
        <div class="site_review__title--name"><?=$arItem["NAME"]?></div>
        <div class="site_review__title--date"><?=$arItem["DATE"]?></div>
    </div>
    <div class="site_review__text">
        <?=$arItem['FIELDS']['PREVIEW_TEXT']?>
    </div>
    </div>
    <?endforeach;?>

<script>
    $('.btn-more-js').on('click', function () {
        var arrReviewsActive = Number($('.site_review.active').length),
            arrReviews = Number($('.site_review').length),
            nextActiveReviewIndex = Number($('.site_review.active:last').attr('data-index')) + 1,
            nextReview = $('.site_review[data-index='+ nextActiveReviewIndex +']'),
            heightNextReview = nextReview.innerHeight() + 35, /*35-margin-bottom*/
            heigthReviewsWrap = $('.site_review_wrap').innerHeight();

        if (arrReviewsActive < arrReviews) {
            $(nextReview).addClass('active');
            $('.site_review_wrap').animate({height: heigthReviewsWrap + heightNextReview}, 500);
        }
        if ((arrReviewsActive + 1) == arrReviews) {
            $(this).addClass('disabled');
        }
    });
</script>

<script>
    //клик вне окна для закрытия
    jQuery(function($){
        $(document).mouseup(function (e){ // событие клика по веб-документу
            var div = $("#search"); // тут указываем ID элемента
            if (!div.is(e.target) // если клик был не по нашему блоку
                && div.has(e.target).length === 0) { // и не по его дочерним элементам
                $('#search-textbox').slideUp();
                $('.btn-search-open').removeClass('active');
            }
        });
    });
</script>

<!--//кнопка Скрыть текст-->
<!--https://codepen.io/Galimard/pen/MdYPex-->

<script>
    //кнопка наверх
    // .arrow-top {
    //     max-width: 1344px;
    //     margin: 0 auto;
    //     position: fixed;
    //     bottom: 20px;
    //     left: 50%;
    //     -webkit-transform: translateX(-50%);
    //     -moz-transform: translateX(-50%);
    //     -ms-transform: translateX(-50%);
    //     -o-transform: translateX(-50%);
    //     transform: translateX(-50%);
    //     opacity: 0;
    //     display: -webkit-box;
    //     display: -webkit-flex;
    //     display: -moz-box;
    //     display: -ms-flexbox;
    //     display: flex;
    //     -webkit-box-pack: end;
    //     -webkit-justify-content: flex-end;
    //     -moz-box-pack: end;
    //     -ms-flex-pack: end;
    //     justify-content: flex-end;
    //     visibility: hidden;
    //     z-index: 100;
    //     -webkit-transition: .3s ease;
    //     -o-transition: .3s ease;
    //     -moz-transition: .3s ease;
    //     transition: .3s ease;}
    // .arrow-top.active {
    //     opacity: 1;
    //     visibility: visible;
    // }
    $(window).on('scroll', function () {
        if($(this).scrollTop() > 300) {
            $('.arrow-top').addClass('active');
        } else {
            $('.arrow-top').removeClass('active');
        }
    });
    $('.arrow-top-button').on('click', function (e) {
        e.preventDefault();
        var headerOffset = $('.header--desktop').offset().top;

        $('html, body').animate({
            scrollTop: headerOffset
        }, 1000);
    });

</script>

<script>
    //скрипт по залипанию кнопки наверх перед блоком
    $(window).on('scroll', function () {
        var footerOffset = $('.footer').offset().top,
            currentOffset = $(this).scrollTop(),
            buttonOffset = $('.arrow-top-button').offset().top + 80;

        if($(this).scrollTop() > 300) {
            $('.arrow-top').addClass('active');

            if(buttonOffset > footerOffset) {
                if(!$('.arrow-top').hasClass('active--positioned')) $('.arrow-top').addClass('active--positioned');
            }

            if ($(document).outerHeight() - currentOffset - $('.footer').outerHeight() > $(window).outerHeight()) {
                $('.arrow-top').removeClass('active--positioned');
            }

        } else {
            $('.arrow-top').removeClass('active');
        }
    });
</script>

<script>
    //Медиазапрос на Javascript------------------------------------------------------------------------------------------------------------------(2)
    //@param mediaQueryString (String) - строка медиа-запроса как в CSS
    //@param action(function) - функция, которая выполняется при соблюдении условий медиа-запроса
    function media(mediaQueryString, action){
        'use strict';
        var handleMatchMedia = function (mediaQuery) {
            if (mediaQuery.matches) { //Попадает в запроc
                if (action  && typeof(action) === 'function') {
                    action();
                }
            }
        };
        var mql = window.matchMedia(mediaQueryString); //стандартный медиазапрос для смены режима просмотра
        handleMatchMedia(mql);
        mql.addListener(handleMatchMedia);

    }


    /* Usage:
    media('all and (min-width: 550px)', function(){
    });

         media('all and (max-width: 549px)', function(){
         $('.mobile-search-result__item a').addClass('clearfix');
      });
   */

    media('all and (min-width: 590px)', function() {
        $('.partners-slider__wrap').slick({
            infinite: true,
            slidesToShow: 4,
            slidesToScroll: 1,
            arrows: true,
            appendArrows: $('.partners-slider__arrows'),
            dots: false,
            responsive: [
                {
                    breakpoint: 720,
                    settings: {
                        slidesToShow: 3
                    }
                }
            ]
        });
    });

    media('all and (max-width: 589px)', function() {
        if($('.partners-slider__wrap').hasClass('slick-slider')) {
            $('.partners-slider__wrap').slick('unslick');
        }
    });
</script>

<script>
    // if a user has scrolled to the bottom of the page
    if($(window).scrollTop() == $(document).height() - $(window).height()){
        //do something
    }

    //или
    $(window).scroll(function() {
        if($(window).scrollTop() + $(window).height() == $(document).height()) {
            alert("bottom!");
        }
    });
</script>

<script>
    //validator
    $('#footer-callback-form').validate({
        errorPlacement: function(error, element) {
            //пустая, false
            return true; //чтобы не выводить подробных ошибок у каждого поля
        },
    },
        submitHandler: function (form) {
            if ($(form).valid()) {
                $.ajax({
                    type: $(form).attr('method'),
                    url: '/local/templates/alans/ajax/callback.php',
                    data: $(form).serialize(),
                    success: function (data) {
                        var hideSelectors = $('.form__fields, .agreement-checkbox');
                        $.each(hideSelectors, function () {
                            $(this).addClass('fully-hidden');
                        });
                        $('.thank-you').removeClass('fully-hidden');
                    },
                    error: function () {
                        var hideSelectors = $('.form__fields, .agreement-checkbox');
                        $.each(hideSelectors, function () {
                            $(this).addClass('fully-hidden');
                        });
                        $('.something-wrong').removeClass('fully-hidden');
                    }
                })
            }
        },
    });
    jQuery.validator.addMethod("correctEmail", function (value, element) {
        return this.optional(element) || /[a-z]+@[a-z]+\.[a-z]+/.test(value);
    }, 'Please enter a valid email address.');
    $.validator.addClassRules({
        'utl': {required: true, minlength: 18},
        'phone-input': {required: true, minlength: 18},
        'mail-input': {email: true,},
        'callback-form__email': {email: true,}
    });

    jQuery.extend(jQuery.validator.messages, {
        required: "This field is required.",
        remote: "Please fix this field.",
        email: "Please enter a valid email address.",
        url: "Please enter a valid URL.",
        date: "Please enter a valid date.",
        dateISO: "Please enter a valid date (ISO).",
        number: "Please enter a valid number.",
        digits: "Please enter only digits.",
        creditcard: "Please enter a valid credit card number.",
        equalTo: "Please enter the same value again.",
        accept: "Please enter a value with a valid extension.",
        maxlength: jQuery.validator.format("Please enter no more than {0} characters."),
        minlength: jQuery.validator.format("Please enter at least {0} characters."),
        rangelength: jQuery.validator.format("Please enter a value between {0} and {1} characters long."),
        range: jQuery.validator.format("Please enter a value between {0} and {1}."),
        max: jQuery.validator.format("Please enter a value less than or equal to {0}."),
        min: jQuery.validator.format("Please enter a value greater than or equal to {0}.")
    }); //месседжи валидатора

    //viewportchecker
    $('.services-slider2').addClass('hidden').viewportChecker({
        classToAdd: 'fp-viewing-anchor1',
        offset: 100
    });

    //fancybox
    $.fancybox({
        'href': "#age_question_popup",
        'padding': 0,
        'showCloseButton': false,
        'closeButton' :false
    });
    if($("#out-of-time").length) {
        $(".out-of-time").fancybox({
            showCloseButton: 'false',
            openEffect: 'none',
            closeEffect: 'none',
            padding: 0,
            closeBtn: false
        });

        $('.btn-modal-close').on('click', function () {
            $.fancybox.close();
        });
    }

    //url jquery
    var pathname = window.location.pathname; // Returns path only (/path/example.html)
    var url      = window.location.href;     // Returns full URL (https://example.com/path/example.html)
    var origin   = window.location.origin;   // Returns base URL (https://example.com)

    //nicescroll destroy разрушить
    $(".bx-filter-parameters-box-container").getNiceScroll().remove();

    //номер телефона замена 8 +7
    $(document).ready(function(){
        // $("#soa-property-3").mask("+7 (999) 999-99-99");
        // $("#soa-property-14").mask("+7 (999) 999-99-99");

        setMask($("#soa-property-3"), '0 (000) 000-00-00');
        setMask($("#soa-property-14"), '0 (000) 000-00-00');
    });

    function setMask($selector, value) {
        var options = {
            onKeyPress: function(cep, e, field, options){
                var mask='';
                if(cep.length){
                    if(cep[0] === '8') {
                        var currentPhone = $(field).val();
                        var newPhone = currentPhone.replace('8','+7');
                        $(field).val(newPhone);
                        mask = '+0 (000) 000-00-00' }
                    else {
                        mask = '+7 (000) 000-00-00';

                    }
                } else {
                    mask = '0 (000) 000-0000';
                };
                $($selector).mask(mask, options);
            },
        };
        $($selector).mask(value, options);
    };

    //nicescroll
    $(filterBlock).children('.clients-list').niceScroll({
        cursorcolor: "rgba(0, 0, 0, 0.3)",
        cursorwidth: "6px",
        autohidemode: false,
        railpadding: { top: 0, right: 2, left: 0, bottom: 0 }
    });

    //скролл меню при скролле
    var positions = [], //сюда сложим на загрузке страницы позиции наших "якорных" блоков, чтобы не считать их каждый раз. и сюда же положим ссылки на соответствующие a.scroll-to
        currentActive = null, //здесь будет храниться id текущего блока, чтобы не менять классы по 100 раз за одну прокрутку
        links = $('.scroll-to'); //сохраним массив всех a.scroll-to

    $(".anchor-delivery").each(function(){ //перебираем блоки, сохраняем позиции и ссылки на пункты меню
        positions.push({
            top: $(this).position().top - 100,
            a: links.filter('[href="#'+$(this).attr('id')+'"]')
        });
    });

    //делаем реверс массива, чтобы при скролле перебирать его с конца и выходить из цикла при нахождении
    //зачем нам проверять каждый блок, если прокрутка уже ниже последнего, верно?
    positions = positions.reverse();

    $(window).on('scroll',function() {

        var winTop = $(window).scrollTop();
        for(var i = 0; i < positions.length; i++){
            if(positions[i].top < winTop){ //если прокрутка страницы ниже нашего блока
                if(currentActive !== i){ //и если мы еще не добавили класс текущему блоку
                    currentActive = i;
                    links.filter('.active').removeClass('active'); //снимаем класс .active с текущего пункта меню
                    positions[i].a.addClass("active");
                }
                break; //выходим из цикла, не нужно проверять блоки, которые выше
            }
        }
    });

    /*--------------------------------------------------------------------validation form---------------------------------------------------------------------*/
    $('.form-check').validate({
        errorPlacement: function(error,element) {
            return true;
        },
        focusCleanup: true, //убирает сообщение об ошибке в активном поле
        focusInvalid: false, //ставит фокус на первое поле ввода
        onkeyup: function (element) {
            if($(element).valid()){
                $(element).css('color', '#199568');
            } else {
                $(element).css('color', '#d43f3a');
            }
        },
        submitHandler: function(form){
            $('.form-check__btn--js, .form-check-item--js, .form__policy').hide();
            $('.form-result--js, .form-check__btn-reset').show();
            $('.form-result__result').addClass('preloader');
            $('.form-check input').attr('readonly', true);
            setTimeout(function () {
                $('.form-result__result').removeClass('preloader').text('1');
                $('.form-result').removeClass('active');

                /*прописать условия для разных результатов*/
                $('.kbm1').addClass('active');
            }, 2000);
        }

    });

    $.validator.addMethod("correctEmail", function (value, element) {
        return this.optional(element) || /[a-z0-9]+@[a-z0-9]+\.[a-z]+/.test(value);
    }, 'Пожалуйста, введите корректный email');

    $('.form-order').validate({
        rules: {
            email: {
                correctEmail: true
            }
        },
        errorPlacement: function(error,element) {
            return true;
        },
        onclick: function (element) {
            if($(element).hasClass('form-check__checkbox') && $(element).is(":checked")) {
                $('.form-check-item--seria input, .form-check-item--number input').attr('readonly', true);
                $('.cost').text('630');
            } else {
                $('.cost').text('530');
                $('.form-check-item--seria input, .form-check-item--number input').attr('readonly', false);
            }
        },
        focusCleanup: true, //убирает сообщение об ошибке в активном поле
        focusInvalid: false, //ставит фокус на первое поле ввода
        onkeyup: function (element) {
            if($(element).valid()){
                $(element).css('color', '#199568');
            }
        },
        submitHandler: function(form){
            console.log('test');
        }

    });

    /*есть разметка формы для error placement*/
    $('.login-form').validate({
        rules: {
            form_name: {
                required: true
            },
            form_email: {
                required: true,
                email: true
            },
            form_tel: {
                required: true,
                digits: true
            },
            form_pswd1: {
                required: true,
                minlength: 6
            },
            form_pswd2: {
                required: true,
                minlength: 6,
                equalTo: "#form_pswd1"
            }
        },
        messages: {
            form_name: {
                required: "Поле Имя обязательное для заполнения"
            },
            form_email: {
                required: "Поле E-mail обязательное для заполнения",
                email: "Введите пожалуйста корректный e-mail"
            }
        },
        focusCleanup: false, //убирает сообщение об ошибке в активном поле
        focusInvalid: false, //ставит фокус на первое поле ввода
        invalidHandler: function(event, validator) { //добавить сообщение в блок
            $(".js-form-message").text("Исправьте, пожалуйста, все ошибки.");
        },
        onkeyup: function(element) { //убрать верхнее сообщение при фокусе
            $(".js-form-message").text("");
        },
        errorElement: "span",
        errorPlacement: function(error, element) {
            var $errorWrapper = $(element).closest('.wrap').find('.form-review__warning');
            error.appendTo( $errorWrapper );
        },
        onfocusout: function(element) {
            var $errorWrapper = $(element).closest('.wrap').find('.form-review__warning');
            if(Number($(element).val().length) === 0){
                $(element).removeClass('valid');
                $(element).removeClass('error');
                $($errorWrapper).empty();
            }
            if(Number($(element).val().length) > 0){
                $(element.closest('form')).valid();
            }
        },
        errorClass: "form-input_error",
        validClass: "form-input_success"
    });

    //ручной валидатор
    checkTelField($('.login-form-item__input--tel'));
    checkSmsCode($('.login-form-item__input--sms'));
    checkForm($('.login-form__btn--js'));
    function checkForm (btn) {

        $(btn).on('click', function (e) {
            e.preventDefault();

            if($('.login-form__sms').css('display') == "block") {
                if(!$('.login-form-item__input--sms').hasClass('valid')) {
                    $('.login-form-item__input--sms').addClass('error');
                    $('.login-form-item__input--sms').parent('.login-form-item').addClass("error");
                } else {
                    $('.login-form').fadeOut(200);
                    setTimeout(function () {
                        $('.login-yandex').fadeIn(200);
                    }, 300);

                }
            } else {
                if(!$('.login-form-item__input--tel').hasClass('valid')) {
                    $('.login-form-item__input--tel').addClass('error');
                    $('.login-form-item__input--tel').parent('.login-form-item').addClass("error");
                    $('.text-sms').text('Неверный номер телефона');
                }
            }

        });

    }

    function checkSmsCode (input) {

        input.keyup(function () {
            var count = Number($(this).val().length);

            if($(input).hasClass('error')) {
                $(input).removeClass('error');
                $(input).parent('.login-form-item').removeClass('error');
            }

            if (count == 4) {
                $(input).addClass('valid').removeClass('error');
                $(input).parent('.login-form-item').addClass("valid").removeClass('error');
            } else {
                if($(input).hasClass('valid')) {
                    $(input).addClass('error').removeClass('valid');
                    $(input).parent('.login-form-item').addClass("error").removeClass('valid');
                }
            }
        });

    }

    function checkTelField (input) {

        input.keyup(function () {
            var count = Number($(this).val().length);
            var sec = $('.timer');
            var secVal = parseInt(sec.text());

            if($(input).hasClass('error')) {
                $(input).removeClass('error');
                $(input).parent('.login-form-item').removeClass('error');
                $('.text-sms').text('Пришлём SMS с кодом для входа');
            }

            if (count == 16) {
                $(input).addClass('valid').removeClass('error');
                $(input).parent('.login-form-item').addClass("valid").removeClass('error');
                $('.text-sms').css('display', 'none');
                $('.login-form__sms').slideDown(400);

                var timer = setTimeout(function tick() {
                    if (secVal > 0) {
                        sec.text(--secVal);
                        timer = setTimeout(tick, 1000);
                    } else {
                        $('.text-more').css('display', 'none');
                        $('.send-more').css('display', 'inline-block');
                    }
                }, 1000);
            } else {
                if($(input).hasClass('valid')) {
                    $(input).addClass('error').removeClass('valid');
                    $(input).parent('.login-form-item').addClass("error").removeClass('valid');
                }
                $('.login-form__sms').slideUp(300);
                if($(input).hasClass('error')) {
                    $('.text-sms').css('display', 'block').text('Неверный номер телефона');
                }
            }
        });

    }


</script>

</body>
</html>