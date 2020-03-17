<script>
ymaps.ready(function () {

    /*----------------------------------- floor -1 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        // Директория с тайлами.
        TILES_PATH = 'assets/img/tiles/map0',
        /* Для того чтобы вычислить координаты левого нижнего и правого верхнего углов прямоугольной координатной
         * области, нам необходимо знать максимальный зум, ширину и высоту изображения в пикселях на максимальном зуме.
         */
        MAX_ZOOM = 4,
        PIC_WIDTH = 2589,
        PIC_HEIGHT = 1941;
    /*PIC_WIDTH = 2589,*/
    /*PIC_HEIGHT = 1941;*/

    /**
     * Конструктор, создающий собственный слой.
     */
    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
            // Если есть необходимость показать собственное изображение в местах неподгрузившихся тайлов,
            // раскомментируйте эту строчку и укажите ссылку на изображение.
            // notFoundTile: 'url'
        });
        // Указываем доступный диапазон масштабов для данного слоя.
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        // Добавляем свои копирайты.
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('©');
        };
        return layer;
    };
    // Добавляем в хранилище слоев свой конструктор.
    ymaps.layer.storage.add(LAYER_NAME, Layer);

    /**
     * Создадим новый тип карты.
     * MAP_TYPE_NAME - имя нового типа.
     * LAYER_NAME - ключ в хранилище слоев или функция конструктор.
     */
    var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
    // Сохраняем тип в хранилище типов.
    ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

    // Вычисляем размер всех тайлов на максимальном зуме.
    var worldSize = Math.pow(2, MAX_ZOOM) * 256,
        /**
         * Создаем карту, указав свой новый тип карты.
         */
        map = new ymaps.Map('map0', {
            center: [0, 0],
            zoom: 1,
            controls: ['zoomControl'],
            type: MAP_TYPE_NAME
        }, {

            // Задаем в качестве проекции Декартову. При данном расчёте центр изображения будет лежать в координатах [0, 0].
            projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
            // Устанавливаем область просмотра карты так, чтобы пользователь не смог выйти за пределы изображения.
            restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]]

            // При данном расчёте, в координатах [0, 0] будет находиться левый нижний угол изображения,
            // правый верхний будет находиться в координатах [PIC_HEIGHT, PIC_WIDTH].
            // projection: new ymaps.projection.Cartesian([[PIC_HEIGHT - worldSize, 0], [PIC_HEIGHT, worldSize]], [false, false]),
            // restrictMapArea: [[0, 0], [PIC_HEIGHT, PIC_WIDTH]]
        });

    // Создаём макет содержимого.

    /*    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;">$[properties.iconContent]</div>'
        ),
	point = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [0, 0]
            },
            properties: {
                iconContent: '3',
              	balloonContentBody: '<img src="assets/img/comp/1.jpg">',
            }
        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'assets/img/point-ico.png',
            iconImageSize: [25, 36],
            iconImageOffset: [-4, -24],
            iconContentOffset: [6, 4],
			iconContentLayout: MyIconContentLayout
        }),

	map.geoObjects.add(point); */

    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;">$[properties.iconContent]</div>'
    ),
        point = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [159, 881]
            },
            properties: {
                iconContent: '3',
                balloonContentBody: '<img src="assets/img/comp/1.jpg">',
            }
        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'assets/img/point-ico.png',
            iconImageSize: [25, 36],
            iconImageOffset: [-4, -24],
            iconContentOffset: [6, 4],
            iconContentLayout: MyIconContentLayout
        }),

        map.geoObjects.add(point);
    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;">$[properties.iconContent]</div>'
    ),
        point = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [0, 392]
            },
            properties: {
                iconContent: '1',
                balloonContentBody: '<img src="assets/img/comp/1.jpg">',
            }
        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'assets/img/point-ico.png',
            iconImageSize: [25, 36],
            iconImageOffset: [-4, -24],
            iconContentOffset: [6, 4],
            iconContentLayout: MyIconContentLayout
        }),

        map.geoObjects.add(point);
    // Создаём макет содержимого.
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;">$[properties.iconContent]</div>'
    ),
        point = new ymaps.GeoObject({
            geometry: {
                type: "Point",
                coordinates: [214, 790]
            },
            properties: {
                iconContent: '2',
                balloonContentBody: 'Помещение свободно',
            }
        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: 'assets/img/point-ico.png',
            iconImageSize: [25, 36],
            iconImageOffset: [-4, -24],
            iconContentOffset: [6, 4],
            iconContentLayout: MyIconContentLayout
        }),

        map.geoObjects.add(point);

    /* point elevator */
    point = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [-25, 763]
        },
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'assets/img/elevator-point.png',
        iconImageSize: [25, 36],
    }),

        map.geoObjects.add(point);
    /* end point elevator */

    /* point up */
    point = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [-21, 789]
        },
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'assets/img/up-point.png',
        iconImageSize: [25, 36],
    }),

        map.geoObjects.add(point);
    /* end point up */

    /* stairs-point */
    point = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [-25, 819]
        },
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'assets/img/stairs-point.png',
        iconImageSize: [25, 36],
    }),

        map.geoObjects.add(point);
    /* end stairs-point */

    /* escalator-point */
    point = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [38, 920]
        },
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'assets/img/escalator-point.png',
        iconImageSize: [25, 36],
    }),

        map.geoObjects.add(point);
    /* end escalator-point */

    /* enter-point */
    point = new ymaps.GeoObject({
        geometry: {
            type: "Point",
            coordinates: [37, 963]
        },
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: 'assets/img/enter-point.png',
        iconImageSize: [25, 36],
    }),

        map.geoObjects.add(point);
    /* end enter-point */





});


/**************second**************/
var balloons = [];
ymaps.ready(function () {


    /*----------------------------------- floor 0 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        TILES_PATH = '/assets/img/tiles/map0',

        MAX_ZOOM = 4,
        PIC_WIDTH = 2560,
        PIC_HEIGHT = 1792;

    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
        });
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('В©');
        };
        return layer;
    };
    ymaps.layer.storage.add(LAYER_NAME, Layer);

    var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
    ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

    var worldSize = Math.pow(2, MAX_ZOOM) * 256,

        map = new ymaps.Map('map0', {
                center: [0, 0],
                zoom: 1,
                controls: ['zoomControl'],
                type: MAP_TYPE_NAME
            },
            {
                projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
                restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]] //ограничения области просмотра карты
            }
        );


    /*------------- point start --------------------------------------------*/
    MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
        '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;"></div>'
        // '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;">$[properties.iconContent]</div>'
    ),

        <? while(key($ar_pav) < 26){ ?>

    point = new ymaps.GeoObject({
    geometry: {
    type: "Point",
    coordinates: [<?=$ar_pav[key($ar_pav)]?>]
    },
    properties: {
        iconContent: '<?=key($ar_pav)?>',
        balloonContentBody: "<?=print_content(key($ar_pav))?>",
    }
    }, {
        iconLayout: 'default#imageWithContent',
        iconImageHref: '/assets/img/-1.svg',
        iconImageSize: [27, 38],
        iconImageOffset: [-4, -24],
        iconContentOffset: [8, 8],
        iconContentLayout: MyIconContentLayout
    });

    //собираем балуны и их айди, чтобы в поиске сработал клик
    balloons.push([<?=key($ar_pav)?>, point]);

    map.geoObjects.add(point);

    //наведение на балун
    point.events.add('mouseenter', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/-1hover.svg');
    });
    point.events.add('mouseleave', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/-1.svg');
    });

	<? next($ar_pav);
    }
    ?>

	/*----- point end ----------------------------------------------------*/

	/* point elevator */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 690]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/elevator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point elevator */

	/* point up */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 780]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/up-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point up */

	/* stairs-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 810]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/stairs-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end stairs-point */

/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [20, 998]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */

	/* enter-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [60, 1003]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/enter-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end enter-point */


	/*----------------------------------- end floor 0 -----------------------------------*/

/*----------------------------------- floor 1 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        TILES_PATH = '/assets/img/tiles/map1',

        MAX_ZOOM = 4,
        PIC_WIDTH = 2560,
        PIC_HEIGHT = 1792;

    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
        });
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('В©');
    };
    return layer;
    };
    ymaps.layer.storage.add(LAYER_NAME, Layer);

    var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
    ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

    var worldSize = Math.pow(2, MAX_ZOOM) * 256,

    map = new ymaps.Map('map1', {
            center: [0, 0],
            zoom: 1,
            controls: ['zoomControl'],
            type: MAP_TYPE_NAME
        }, {

            projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
            restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]]
        });


	/*------------- point start --------------------------------------------*/
	MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;"></div>'
    ),

    <? while(key($ar_pav) < 79){ ?>

        point = new ymaps.GeoObject({
        geometry: {
        type: "Point",
        coordinates: [<?=$ar_pav[key($ar_pav)]?>]
        },
        properties: {
            iconContent: '<?=key($ar_pav)?>',
            balloonContentBody: "<?=print_content(key($ar_pav))?>",
        }
        }, {
            iconLayout: 'default#imageWithContent',
            iconImageHref: '/assets/img/1.svg',
            iconImageSize: [27, 38],
            iconImageOffset: [-4, -24],
            iconContentOffset: [8, 8],
            iconContentLayout: MyIconContentLayout
        });

        balloons.push([<?=key($ar_pav)?>, point]);

        map.geoObjects.add(point);

        //наведение на балун
        point.events.add('mouseenter', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/1hover.svg');
    });
    point.events.add('mouseleave', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/1.svg');
    });

	<? next($ar_pav);
    }
    ?>

	/*----- point end ----------------------------------------------------*/


	/* point elevator */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 760]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/elevator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point elevator */

	/* point up */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-40, 850]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/up-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point up */

	/* stairs-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 820]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/stairs-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end stairs-point */

	/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [80, 730]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */

	/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [55, 790]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */

	/* enter-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [34, 1003]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/enter-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end enter-point */

	/* wc-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [210, 470]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/wc-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end wc-point */

	/* ico-mother-room */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [210, 510]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/ico-mother-room.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end ico-mother-room */

	/* disabled-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [240, 453]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/disabled-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end disabled-point */


	/* enter-point2 */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-60, 219]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/enter-point2.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end enter-point2 */


	/*----------------------------------- end floor 1 -----------------------------------*/


/*----------------------------------- floor 2 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        TILES_PATH = '/assets/img/tiles/map2',

        MAX_ZOOM = 4,
        PIC_WIDTH = 2560,
        PIC_HEIGHT = 1792;

    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
        });
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('В©');
        };
        return layer;
        };
        ymaps.layer.storage.add(LAYER_NAME, Layer);

        var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
        ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

        var worldSize = Math.pow(2, MAX_ZOOM) * 256,

        map = new ymaps.Map('map2', {
            center: [0, 0],
            zoom: 1,
            controls: ['zoomControl'],
            type: MAP_TYPE_NAME
        }, {

            projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
            restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]]
        });


	/*------------- point start --------------------------------------------*/
	MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;"></div>'
        ),

        <? while(key($ar_pav) < 121){ ?>

            point = new ymaps.GeoObject({
            geometry: {
            type: "Point",
            coordinates: [<?=$ar_pav[key($ar_pav)]?>]
            },
            properties: {
                iconContent: '<?=key($ar_pav)?>',
                balloonContentBody: "<?=print_content(key($ar_pav))?>",
            }
            }, {
                iconLayout: 'default#imageWithContent',
                iconImageHref: '/assets/img/2.svg',
                iconImageSize: [27, 38],
                iconImageOffset: [-4, -24],
                iconContentOffset: [8, 8],
                iconContentLayout: MyIconContentLayout
            });

            balloons.push([<?=key($ar_pav)?>, point]);

            map.geoObjects.add(point);

            //наведение на балун
            point.events.add('mouseenter', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/2hover.svg');
    });
    point.events.add('mouseleave', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/2.svg');
    });

	<? next($ar_pav);
    }
    ?>

	/*----- point end ----------------------------------------------------*/


/* point elevator */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-40, 813]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/elevator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point elevator */

	/* stairs-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-40, 870]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/stairs-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end stairs-point */

	/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [72, 784]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */

	/*----------------------------------- end floor 2 -----------------------------------*/

/*----------------------------------- floor 3 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        TILES_PATH = '/assets/img/tiles/map3',

        MAX_ZOOM = 4,
        PIC_WIDTH = 2560,
        PIC_HEIGHT = 1792;

    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
        });
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('В©');
            };
            return layer;
            };
            ymaps.layer.storage.add(LAYER_NAME, Layer);

            var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
            ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

            var worldSize = Math.pow(2, MAX_ZOOM) * 256,

            map = new ymaps.Map('map3', {
            center: [0, 0],
            zoom: 1,
            controls: ['zoomControl'],
            type: MAP_TYPE_NAME
        }, {

            projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
            restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]]
        });


	/*------------- point start --------------------------------------------*/
	MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;"></div>'
            ),

            <? while(key($ar_pav) < 163){ ?>

                point = new ymaps.GeoObject({
                geometry: {
                type: "Point",
                coordinates: [<?=$ar_pav[key($ar_pav)]?>]
                },
                properties: {
                    iconContent: '<?=key($ar_pav)?>',
                    balloonContentBody: "<?=print_content(key($ar_pav))?>",
                }
                }, {
                    iconLayout: 'default#imageWithContent',
                    iconImageHref: '/assets/img/3.svg',
                    iconImageSize: [27, 38],
                    iconImageOffset: [-4, -24],
                    iconContentOffset: [8, 8],
                    iconContentLayout: MyIconContentLayout
                });

                balloons.push([<?=key($ar_pav)?>, point]);

                map.geoObjects.add(point);

                //наведение на балун
                point.events.add('mouseenter', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/3hover.svg');
    });
    point.events.add('mouseleave', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/3.svg');
    });

	<? next($ar_pav);
    }
    ?>

	/*----- point end ----------------------------------------------------*/

/* point elevator */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-40, 813]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/elevator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point elevator */

	/* stairs-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [-40, 870]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/stairs-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end stairs-point */

	/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [72, 784]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */


	/*----------------------------------- end floor 3 -----------------------------------*/


/*----------------------------------- floor 4 -----------------------------------*/

    var LAYER_NAME = 'user#layer',
        MAP_TYPE_NAME = 'user#customMap',
        TILES_PATH = '/assets/img/tiles/map4',

        MAX_ZOOM = 4,
        PIC_WIDTH = 2560,
        PIC_HEIGHT = 1792;

    var Layer = function () {
        var layer = new ymaps.Layer(TILES_PATH + '/%z/tile-%x-%y.png', {
        });
        layer.getZoomRange = function () {
            return ymaps.vow.resolve([0, 4]);
        };
        layer.getCopyrights = function () {
            return ymaps.vow.resolve('В©');
                };
                return layer;
                };
                ymaps.layer.storage.add(LAYER_NAME, Layer);

                var mapType = new ymaps.MapType(MAP_TYPE_NAME, [LAYER_NAME]);
                ymaps.mapType.storage.add(MAP_TYPE_NAME, mapType);

                var worldSize = Math.pow(2, MAX_ZOOM) * 256,

                map = new ymaps.Map('map4', {
            center: [0, 0],
            zoom: 1,
            controls: ['zoomControl'],
            type: MAP_TYPE_NAME
        }, {

            projection: new ymaps.projection.Cartesian([[PIC_HEIGHT / 2 - worldSize, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, worldSize - PIC_WIDTH / 2]], [false, false]),
            restrictMapArea: [[-PIC_HEIGHT / 2, -PIC_WIDTH / 2], [PIC_HEIGHT / 2, PIC_WIDTH / 2]]
        });


	/*------------- point start --------------------------------------------*/
	MyIconContentLayout = ymaps.templateLayoutFactory.createClass(
            '<div style="color: #FFFFFF; text-align: center!important; width: 100%; margin: auto;"></div>'
                ),

                <? while(key($ar_pav) < 189){ ?>

                    point = new ymaps.GeoObject({
                    geometry: {
                    type: "Point",
                    coordinates: [<?=$ar_pav[key($ar_pav)]?>]
                    },
                    properties: {
                        iconContent: '<?=key($ar_pav)?>',
                        balloonContentBody: "<?=print_content(key($ar_pav))?>",
                    }
                    }, {
                        iconLayout: 'default#imageWithContent',
                        iconImageHref: '/assets/img/4.svg',
                        iconImageSize: [27, 38],
                        iconImageOffset: [-4, -24],
                        iconContentOffset: [8, 8],
                        iconContentLayout: MyIconContentLayout
                    });

                    balloons.push([<?=key($ar_pav)?>, point]);

                    map.geoObjects.add(point);

                    //наведение на балун
                    point.events.add('mouseenter', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/4hover.svg');
    });
    point.events.add('mouseleave', function (e) {
        var target = e.get('target');
        target.options.set('iconImageHref', '/assets/img/4.svg');
    });

	<? next($ar_pav);
    }
    ?>

	/*----- point end ----------------------------------------------------*/

	/* point elevator */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [20, 827]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/elevator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end point elevator */

	/* stairs-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [20, 888]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/stairs-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end stairs-point */

	/* escalator-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [142, 837]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/escalator-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end escalator-point */

	/* wc-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [273, 543]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/wc-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end wc-point */

	/* copter-point */
	// point = new ymaps.GeoObject({
    //         geometry: {
    //             type: "Point",
    //             coordinates: [199, 989]
    //         },
    //     }, {
    //         iconLayout: 'default#imageWithContent',
    //         iconImageHref: '/assets/img/copter-point.png',
    //         iconImageSize: [25, 36],
    //     }),

    // map.geoObjects.add(point);
	/* end copter-point */




	/*----------------------------------- end floor 4 -----------------------------------*/



});
</script>