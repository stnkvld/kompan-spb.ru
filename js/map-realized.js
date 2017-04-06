ymaps.ready(init);
var mapRealized, placemarkRealized;

function init(){
    mapRealized = new ymaps.Map("map-realized", {
        center: [59.939095, 30.315868],
        zoom: 10,
        controls: []
    }, {suppressMapOpenBlock: true});

    mapRealized.behaviors.disable('scrollZoom');

    optionsForPlacemark = {
        iconLayout: 'default#image',
        iconImageHref: 'images/kompan-man-slave.png',
        iconImageSize: [40, 58],
        iconImageOffset: [-30, -82]
    };

    var coords = [
        [59.953214, 30.305789], [59.954782, 30.326423], [59.830816, 30.390213], [59.914006, 30.313029], [60.165205, 29.872037], [60.739939, 29.158694], [60.035149, 30.404658], [59.924727, 30.332523], [59.935863, 30.238622]
    ],
        myCollection = new ymaps.GeoObjectCollection();

    for (var i = 0; i < coords.length; i++) {
        myCollection.add(new ymaps.Placemark(coords[i], {}, optionsForPlacemark));
    }

    myCollection._collectionComponent._baseArrayComponent._children.forEach(function(item, i, arr) {
        item.events.add('mouseenter', function (e) {
            e.get('target').options.set('iconImageHref', 'images/kompan-man.png');
        }).add('mouseleave', function (e) {
            e.get('target').options.set('iconImageHref', 'images/kompan-man-slave.png');
        });
    });

    mapRealized.geoObjects.add(myCollection);
}
