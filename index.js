const mapToken = 'pk.eyJ1IjoiYWR2ZW50aW4iLCJhIjoiY2tiaTBzeno3MGF0bjJ4bHM0M21wN3VrZiJ9.tuyVT0oaQ_Xt9OZc1c_5aQ';

const mapTile = L.tileLayer(
    `https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token=${mapToken}`,
    {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 17,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: mapToken,
    }
);
const map = L.map('map')
    .setView([55.75, 37.6167], 13)
    .addLayer(mapTile);


const mapCircle = L.circle([55.752, 37.62], {
    color: 'red',
    fillColor: '#f03',
    fillOpacity: 0.5,
    radius: 2500
});

mapCircle.getPerimeter = function () {
    return Math.round(2 * Math.PI * this.getRadius());
};
mapCircle.getArea = function () {
    return Math.round(Math.PI * Math.pow(this.getRadius(), 2));
};

const mapLayersGroup = L.layerGroup([mapCircle]).addTo(map)

map.pm.addControls({
    position: 'topleft',
});

const $perimeter = document.querySelector('.mapPerimeterJs');
$perimeter.innerHTML = mapCircle.getPerimeter();

const $area = document.querySelector('.mapAreaJs');
$area.innerHTML = mapCircle.getArea();

mapCircle.on('pm:edit', e => {
    $perimeter.innerHTML = e.target.getPerimeter();
    $area.innerHTML = e.target.getArea();
});