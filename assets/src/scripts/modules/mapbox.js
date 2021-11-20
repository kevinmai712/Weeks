var mapboxgl = require('mapbox-gl/dist/mapbox-gl.js');


class HeadroomNavi {
	constructor() {
		this.init();
	}

	init() {
		mapboxgl.accessToken = 'pk.eyJ1IjoiYWtyYW12cyIsImEiOiJjanI4OTA5dDEwNDZ6NDlsaWcwb3I1MjVsIn0.7F0hCwQXOVAeRUhS1OSGtg';
		// eslint-disable-next-line no-undef
		var mapboxClient = mapboxSdk({ accessToken: mapboxgl.accessToken });
		mapboxClient.geocoding.forwardGeocode({
		    query: 'Dallas, Texas',
		    autocomplete: false,
		    limit: 1
		})
		    .send()
		    .then(function (response) {
		        if (response && response.body && response.body.features && response.body.features.length) {
		            var feature = response.body.features[0];

		            var map = new mapboxgl.Map({
		                container: 'map',
		                style: 'mapbox://styles/mapbox/light-v9',
		                center: feature.center,
		                zoom: 10
		            });
		            new mapboxgl.Marker()
		                .setLngLat(feature.center)
		                .addTo(map);
		        }
		    });

				var popup = new mapboxgl.Popup({closeOnClick: false})
			    .setLngLat([32.7767, 96.7970])
			    .setHTML('<p>Plumbit HQ!</p>')
			    .addTo(map);

	}
}

export default HeadroomNavi;
