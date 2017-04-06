ymaps.ready(init);
var mapContacts, placemarkContacts;

function init(){
    mapContacts = new ymaps.Map("map-contacts", {
        center: [59.917669, 30.288550],
        zoom: 17,
        controls: []
    }, {suppressMapOpenBlock: true});

    mapContacts.behaviors.disable('scrollZoom');

    placemarkContacts = new ymaps.Placemark([59.917669, 30.288550], {}, {
        iconLayout: 'default#image',
        iconImageHref: 'images/kompan-man.png',
        iconImageSize: [60, 82],
        iconImageOffset: [-30, -82]
    });

    mapContacts.geoObjects.add(placemarkContacts);
}
