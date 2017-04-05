ymaps.ready(init);
var mapRealized, placemarkRealized;

function init(){

    mapRealized = new ymaps.Map("map-realized", {
        center: [55.75, 37.71],
        zoom: 11,
        controls: []
    }, {suppressMapOpenBlock: true});

    optionsForPlacemark = {
        iconLayout: 'default#image',
        iconImageHref: 'images/kompan-man-slave.png',
        iconImageSize: [40, 58],
        iconImageOffset: [-30, -82]
    };

    var coords = [
        [55.75, 37.50], [55.75, 37.71], [55.70, 37.70]
    ],
        myCollection = new ymaps.GeoObjectCollection();

    for (var i = 0; i < coords.length; i++) {
        myCollection.add(new ymaps.Placemark(coords[i], {}, optionsForPlacemark));
    }

    mapRealized.geoObjects.add(myCollection);
}
