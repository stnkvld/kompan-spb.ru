ymaps.ready(init);
var myMap, myPlacemark;

function init(){
    myMap = new ymaps.Map("map", {
        center: [59.917669, 30.288550],
        zoom: 17,
        controls: []
    }, {suppressMapOpenBlock: true});

    myPlacemark = new ymaps.Placemark([59.917669, 30.288550], {}, {
        iconLayout: 'default#image',
        iconImageHref: 'images/kompan-man.png',
        iconImageSize: [60, 82],
        iconImageOffset: [-30, -82]
    });

    myMap.geoObjects.add(myPlacemark);
}
