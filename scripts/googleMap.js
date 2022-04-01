function initialize() {

	var myLatlng = new google.maps.LatLng(-23.2630002, -47.3002618);
	var mapOptions = {
		zoom: 14,
		center: myLatlng,
		panControl: false,
		mapTypeId: google.maps.MapTypeId.ROADMAP,
		mapTypeControlOptions: {
			mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
		}
	}

	var contentString = '<h5>Sala 03 Arquitetura</h5>' +
		'<p>Praça Padre Miguel, 23 - Centro, Itu - SP, 13300-169</p>'
	var infowindow = new google.maps.InfoWindow({
		content: contentString,
		maxWidth: 700
	});


	var map = new google.maps.Map(document.getElementById("map"), mapOptions);


	var image = 'assets/site/images/teste2.png';
	var marcadorPersonalizado = new google.maps.Marker({
		position: myLatlng,
		map: map,
		icon: image,
		title: 'Sala 03 Arquitetura',
		animation: google.maps.Animation.DROP
	});


	google.maps.event.addListener(marcadorPersonalizado, 'click', function () {
		infowindow.open(map, marcadorPersonalizado);
	});


	var styles = [{
			stylers: [{
					hue: "#ccc"
				},
				{
					saturation: -100
				},
				{
					lightness: 10
				},
				{
					gamma: 0
				}
			]
		},
		{
			featureType: "road",
			elementType: "geometry",
			stylers: [{
					lightness: 100
				},
				{
					visibility: "simplified"
				}
			]
		},
		{
			featureType: "road",
			elementType: "labels"
		}
	];

	var styledMap = new google.maps.StyledMapType(styles, {
		name: "Mapa Style"
	});

	map.mapTypes.set('map_style', styledMap);
	map.setMapTypeId('map_style');

}

function loadScript() {
	var script = document.createElement("script");
	script.type = "text/javascript";
	script.src =
		"https://maps.googleapis.com/maps/api/js?key=AIzaSyDmjkEri5pEh98mYRj8Jq9b4XqK3LoU_6w&sensor=true&callback=initialize";
	document.body.appendChild(script);
}

window.onload = loadScript;
