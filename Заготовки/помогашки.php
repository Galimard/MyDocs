<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
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

        @font-face {
            font-family: 'ProximaNova';
            src: url('../fonts/ProximaNova-Black.woff2') format('woff2');
            src: url('../fonts/ProximaNova-Black.woff') format('woff');
            font-weight: 900;
            font-style: normal;
        }

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

        .header-form__search:focus::-webkit-input-placeholder,
        .cart-from__textarea:focus::-webkit-input-placeholder{
            opacity:0;
            -webkit-transition: opacity 0.5s;
            -moz-transition: opacity 0.5s;
            -ms-transition: opacity 0.5s;
            -o-transition: opacity 0.5s;
            transition: opacity 0.5s;
        }

        .header-form__search:focus:-moz-placeholder,
        .cart-from__textarea:focus:-moz-placeholder {
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
    </style>
</head>
<body>

<!--------------------------------------------------скрытые ссылки социалки------------------------------------------------>
<a href="#" class="footer-bottom-socials__link footer-bottom-socials__link--vk"><span class="visually-hidden">vkontakte</span></a>


<!--===========================================скрипты======================================================-->
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
         media('all and (max-width: 550px)', function(){
         $('.mobile-search-result__item a').addClass('clearfix');
      });
   */
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
</script>

</body>
</html>