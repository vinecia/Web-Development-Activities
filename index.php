<?php
  session_start();
?>

<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<meta name = "viewport" content = "width=device-width, initial-scale=1.0">
		<link rel="icon" href="images/logo.png">
		<title>Home | ParkU</title>
		<!-- Main Style Sheet -->
		<link rel = "stylesheet" href = "style.css">
		<!-- Other Styles -->
		<link rel = "stylesheet" href = "style2.css" type="text/css">
		<link href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700" rel="stylesheet" />
		<!-- Mapbox GL JS -->
		<script src="https://api.tiles.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.js"></script>
		<link
		href="https://api.tiles.mapbox.com/mapbox-gl-js/v2.3.1/mapbox-gl.css"
		rel="stylesheet"
		/>
		<!-- Geocoder plugin -->
		<script src="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.min.js"></script>
		<link
		rel="stylesheet"
		href="https://api.mapbox.com/mapbox-gl-js/plugins/mapbox-gl-geocoder/v4.7.0/mapbox-gl-geocoder.css"
		type="text/css"
		/>
		<!-- Turf.js plugin -->
		<script src="https://npmcdn.com/@turf/turf/turf.min.js"></script>

	</head>

	<body>
		<!--For Facebook Share Button-->
		<div id="fb-root"></div>
		<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v11.0" nonce="0AmOCaXO"></script>
		<div class = "container">
			<div class = "navbar">
				<a href="index.php"><img src = "images/logo.png" class="logo"></a>
				<h2>ParkU</h2>
				<nav>
					<ul id = "menuList">
						<li><a href="index.php">HOME</a></li>
						<li><a href="bookmarks.php">BOOKMARKS</a></li>
						<li><a href="myaccount.php">MY ACCOUNT</a></li>
					</ul>
				</nav>
				<img src = "images/menu.png" class="menu-icon" onclick="togglemenu()">
			</div>
			<div class="row">
					<div class = "col-1">
						<h2>Find the nearest<br>parking spot<br>for you now!</h2>
					</div>
					<div class = "col-2a">
						<div class="sidebar">
							<div class="heading">
								<h1>Car Parks in Manila</h1>
							</div>
							<div id="listings" class="listings"></div>
						</div>
						<div id="map" class="map"></div>
					</div>
			</div>
			<div class="twt_placeholder">
				<div class = "twitter">
					<a class="twitter-timeline" data-width="600" data-height="500" href="https://twitter.com/ManilaPIO?ref_src=twsrc%5Etfw">Tweets by ManilaPIO</a>
				</div>
			</div>
			<script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
			<div class="fb">
				<div class="fb-share-button" data-href="http://parku.orgfree.com/" data-layout="button" data-size="large">
					<a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2Fparku.orgfree.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a>
				</div>
			</div>

			<div id="footer">All Rights Reserved 2021 © Glenn Joshua & Divine Garcia</div>
		</div>
	<script>
		var menuList = document.getElementById("menuList");
		menuList.style.maxHeight = "0px";
			function togglemenu()
			{
				if (menuList.style.maxHeight == "0px")
				{
					menuList.style.maxHeight = "120px"
					menuList.style.width = "100%";
				}
				else
				{
					menuList.style.maxHeight = "0px"
				}
			}
	</script>
	<script>
	/* This will let you use the .remove() function later on */
	if (!('remove' in Element.prototype)) {
	Element.prototype.remove = function () {
	if (this.parentNode) {
	this.parentNode.removeChild(this);
	}
	};
	}

	mapboxgl.accessToken = 'pk.eyJ1IjoidmluZWNpYSIsImEiOiJja3F4eHRkNmcwMDJrMnZuMDIzZzgyNmk3In0.ogqtyI6NJ3IIOrFFabPjlg';

				/**
				 * Add the map to the page
				 */
				var map = new mapboxgl.Map({
					container: 'map',
					style: 'mapbox://styles/mapbox/light-v10',
					center: [120.984222, 14.599512],
					zoom: 11.5,
					scrollZoom: true
				});

	var stores = {
			"type": "FeatureCollection",
			"features": [
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.972444177567994, 14.6266513636428 ]
					},
						"properties": {
							"Name": "Bonto Parking Lot",
							"Address": "31 Juan Luna St, Tondo, Manila",
							"Latitude": 14.6266513636428,
							"Longitude": 120.97244417756799,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.966951013555004, 14.616685249094401 ]
					},
						"properties": {
							"Name": "Lex Car Park",
							"Address": "Pacheco St, 75 Zone 6, Manila, 1013 Metro Manila",
							"Latitude": 14.616685249094401,
							"Longitude": 120.966951013555,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.986918389824993, 14.6288231237991 ]
					},
						"properties": {
							"Name": "CGH Parking Lot",
							"Address": "Santa Cruz, Manila, Metro Manila",
							"Latitude": 14.6288231237991,
							"Longitude": 120.98691838982499,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.986068709367004, 14.620953969508401 ]
					},
						"properties": {
							"Name": "SM City San Lazaro Parking Exit",
							"Address": "Avida Towers San Lazaro, Santa Cruz, Manila, 1008, Metro Manila",
							"Latitude": 14.620953969508401,
							"Longitude": 120.986068709367,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.987525304437995, 14.622480842391401 ]
					},
						"properties": {
							"Name": "Chad's Parking Lot",
							"Address": "2153 Elias, Santa Cruz, Maynila, 1014 Kalakhang Maynila",
							"Latitude": 14.622480842391401,
							"Longitude": 120.98752530443799,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.973080736632994, 14.610970308324299 ]
					},
						"properties": {
							"Name": "Tutuban Tower Parking",
							"Address": "Tondo, Manila, Metro Manila",
							"Latitude": 14.610970308324299,
							"Longitude": 120.97308073663299,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.977693287692006, 14.6090909801996 ]
					},
						"properties": {
							"Name": "Dibz Parking",
							"Address": "1193 Benavidez St, Binondo, Manila, 1008 Metro Manila",
							"Latitude": 14.6090909801996,
							"Longitude": 120.97769328769201,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.990559877487996, 14.6100306462705 ]
					},
						"properties": {
							"Name": "Luis Parking Lots",
							"Address": "230 M F Jhocson St, Sampaloc, Manila, 1008",
							"Latitude": 14.6100306462705,
							"Longitude": 120.990559877488,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.994929662702006, 14.6126147072517 ]
					},
						"properties": {
							"Name": "Parking Space",
							"Address": "828 Carola, Sampaloc, Maynila, 1008 Kalakhang Maynila",
							"Latitude": 14.6126147072517,
							"Longitude": 120.99492966270201,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.973444885400994, 14.6060370377292 ]
					},
						"properties": {
							"Name": "Lucky Chinatown Parking",
							"Address": "293, Binondo, Manila, Metro Manila",
							"Latitude": 14.6060370377292, "Longitude": 120.97344488540099,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.976600841383004, 14.600751267771701 ]
					},
						"properties": {
							"Name": "Dasmariñas Parking",
							"Address": "1006 Dasmariñas St, Binondo, Manila, 1006 Metro Manila",
							"Latitude": 14.600751267771701,
							"Longitude": 120.976600841383,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.978178819377007, 14.5989893162408 ]
					},
						"properties": {
							"Name": "Escolta Parking Building",
							"Address": "220a Escolta St, Binondo, Manila, 1006 Metro Manila",
							"Latitude": 14.5989893162408,
							"Longitude": 120.97817881937701,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.983213699681997, 14.6006500750019 ]
					},
						"properties": {
							"Name": "JRB Parking Garage",
							"Address": "Quiapo, Manila, 1001 Metro Manila",
							"Latitude": 14.6006500750019,
							"Longitude": 120.983213699682,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.988020218193, 14.605467438281501 ]
					},
						"properties": {
							"Name": "Pay Parking",
							"Address": "1474 Recto Ave, Quiapo, Manila, 1001 Metro Manila",
							"Latitude": 14.605467438281501,
							"Longitude": 120.988020218193,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.998834884843006, 14.603640174977301 ]
					},
						"properties": { "Name": "Parking Lot",
						"Address": "San Miguel, Manila, 1008 Metro Manila",
						"Latitude": 14.603640174977301,
						"Longitude": 120.99883488484301,
						"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 121.019336258761996, 14.604113694679899 ]
					},
						"properties": {
							"Name": "SM City Sta. Mesa Parking Building",
							"Address": "Road 3, Lungsod Quezon, Kalakhang Maynila",
							"Latitude": 14.604113694679899,
							"Longitude": 121.019336258762,
							"Price": "40 PHP "
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 121.022009170521002, 14.5991550097703 ]
					},
					"properties": {
						"Name": "Mar & Gel Transport Services",
						"Address": "3520, 1016 V. Mapa Ext, Santa Mesa, Manila, Metro Manila",
						"Latitude": 14.5991550097703,
						"Longitude": 121.022009170521,
						"Price": ""
					}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.97154072619, 14.5964970909526 ]
					},
						"properties": {
							"Name": "Fort Santiago Parking",
							"Address": "Intramuros, Manila, 1002 Metro Manila",
							"Latitude": 14.5964970909526,
							"Longitude": 120.97154072619,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.973600662695006, 14.591845655733 ]
					},
						"properties": {
							"Name": "Intramuros Public Parking",
							"Address": "655, Intramuros, Manila, 1002, Metro Manila",
							"Latitude": 14.591845655733,
							"Longitude": 120.97360066269501,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.975145615073998, 14.5948358753754 ]
					},
						"properties": {
							"Name": "Pay Parking Cabildo Street Intramuros",
							"Address": "373, 1002 Cabildo St, Intramuros, Manila, 1002 Metro Manila",
							"Latitude": 14.5948358753754,
							"Longitude": 120.975145615074,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.983557022468005, 14.5916795312282 ]
					},
						"properties": {
							"Name": "SM City Manila Parking",
							"Address": "San Miguel, Manila, 1000 Metro Manila",
							"Latitude": 14.5916795312282,
							"Longitude": 120.98355702246801,
							"Price": "50 PHP"
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.97342900132, 14.583539276918501 ]
					},
						"properties": {
							"Name": "Hotel H2O Parking Area",
							"Address": "Ermita, Manila, 1000 Metro Manila",
							"Latitude": 14.583539276918501,
							"Longitude": 120.97342900132,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.985616958972003, 14.5870279941917 ]
					},
						"properties": {
							"Name": "U Park II",
							"Address": "Kalaw Ave, Ermita, Manila, 1000 Metro Manila",
							"Latitude": 14.5870279941917,
							"Longitude": 120.985616958972,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.987161911350995, 14.583539276918501 ]
					},
						"properties": {
							"Name": "PGH Pay Parking Area",
							"Address": "1344 Taft Ave, Ermita, Manila, 1007 Metro Manila",
							"Latitude": 14.583539276918501,
							"Longitude": 120.987161911351,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.980810440460999, 14.5744018983505 ]
					},
						"properties": {
							"Name": "Laurel Monument Parking Area",
							"Address": "517 Roxas Blvd, Malate, Manila, 1004 Metro Manila",
							"Latitude": 14.5744018983505,
							"Longitude": 120.980810440461,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.985101974846003, 14.575897131685901 ]
					},
						"properties": {
							"Name": "Public Pay parking",
							"Address": "166, 1004 Gen. Malvar St, Malate, Manila, Metro Manila",
							"Latitude": 14.575897131685901,
							"Longitude": 120.985101974846,
							"Price": "40 PHP/2 HOURS"
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.994543350493004, 14.5787214336349 ]
					},
						"properties": {
							"Name": "PARKING AREA ZONE",
							"Address": "1708 Angel Linao St, Paco, Manila, 1007 Metro Manila",
							"Latitude": 14.5787214336349,
							"Longitude": 120.994543350493,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 121.011881149407003, 14.5823763588782 ]
					},
						"properties": {
							"Name": "Parking Lot",
							"Address": "Santa Ana, Manila, Metro Manila",
							"Latitude": 14.5823763588782,
							"Longitude": 121.011881149407,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.988363540978995, 14.567424008653299 ]
					},
						"properties": {
							"Name": "Parking Lot",
							"Address": "Malate, Manila, 1004 Metro Manila",
							"Latitude": 14.567424008653299,
							"Longitude": 120.98836354097899,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.992483413987998, 14.5709129811144 ]
					},
						"properties": {
							"Name": "Beach House Parking",
							"Address": "2207-A, 1004 Fidel A.Reyes, Malate, Manila, Metro Manila",
							"Latitude": 14.5709129811144,
							"Longitude": 120.992483413988,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 120.996927224584994, 14.562862023151199 ]
					},
						"properties": {
							"Name": "CSB SDA Parking Annex",
							"Address": "Dominga Street, Malate, Manila, 1004 Metro Manila",
							"Latitude": 14.562862023151199,
							"Longitude": 120.99692722458499,
							"Price": ""
						}
				},
				{ "type": "Feature",
					"geometry": {
						"type": "Point",
						"coordinates": [ 121.003364929312994, 14.567246670550199 ]
					},
						"properties": {
							"Name": "MA Elisa Parking Lot",
							"Address": "740 P Ocampo SR St, Malate, Manila",
							"Latitude": 14.567246670550199,
							"Longitude": 121.00336492931299,
							"Price": ""
						}
				}
			]
		};

	/**
	* Assign a unique id to each store. You'll use this `id`
	* later to associate each point on the map with a listing
	* in the sidebar.
	*/
	stores.features.forEach(function (store, i) {
	store.properties.id = i;
	});

	/**
	* Wait until the map loads to make changes to the map.
	*/
	map.on('load', function (e) {
	/**
	* This is where your '.addLayer()' used to be, instead
	* add only the source without styling a layer
	*/
	map.addSource('places', {
	'type': 'geojson',
	'data': stores
	});

	/**
	* Create a new MapboxGeocoder instance.
	*/
	var geocoder = new MapboxGeocoder({
	accessToken: mapboxgl.accessToken,
	mapboxgl: mapboxgl,
	marker: true,
	bbox: [120.97854902855352, 14.555969965666526, 121.02710241830982, 14.639223981807916]
	});

	/**
	* Add all the things to the page:
	* - The location listings on the side of the page
	* - The search box (MapboxGeocoder) onto the map
	* - The markers onto the map
	*/
	buildLocationList(stores);
	map.addControl(geocoder, 'top-left');
	addMarkers();

	/**
	* Listen for when a geocoder result is returned. When one is returned:
	* - Calculate distances
	* - Sort stores by distance
	* - Rebuild the listings
	* - Adjust the map camera
	* - Open a popup for the closest store
	* - Highlight the listing for the closest store.
	*/
	geocoder.on('result', function (ev) {
	/* Get the coordinate of the search result */
	var searchResult = ev.result.geometry;

	/**
	* Calculate distances:
	* For each store, use turf.disance to calculate the distance
	* in miles between the searchResult and the store. Assign the
	* calculated value to a property called `distance`.
	*/
	var options = { units: 'miles' };
	stores.features.forEach(function (store) {
	Object.defineProperty(store.properties, 'distance', {
	value: turf.distance(searchResult, store.geometry, options),
	writable: true,
	enumerable: true,
	configurable: true
	});
	});

	/**
	* Sort stores by distance from closest to the `searchResult`
	* to furthest.
	*/
	stores.features.sort(function (a, b) {
	if (a.properties.distance > b.properties.distance) {
	return 1;
	}
	if (a.properties.distance < b.properties.distance) {
	return -1;
	}
	return 0; // a must be equal to b
	});

	/**
	* Rebuild the listings:
	* Remove the existing listings and build the location
	* list again using the newly sorted stores.
	*/
	var listings = document.getElementById('listings');
	while (listings.firstChild) {
	listings.removeChild(listings.firstChild);
	}
	buildLocationList(stores);

	/* Open a popup for the closest store. */
	createPopUp(stores.features[0]);

	/** Highlight the listing for the closest store. */
	var activeListing = document.getElementById(
	'listing-' + stores.features[0].properties.id
	);
	activeListing.classList.add('active');

	/**
	* Adjust the map camera:
	* Get a bbox that contains both the geocoder result and
	* the closest store. Fit the bounds to that bbox.
	*/
	var bbox = getBbox(stores, 0, searchResult);
	map.fitBounds(bbox, {
	padding: 100
	});
	});
	});

	/**
	* Using the coordinates (lng, lat) for
	* (1) the search result and
	* (2) the closest store
	* construct a bbox that will contain both points
	*/
	function getBbox(sortedStores, storeIdentifier, searchResult) {
	var lats = [
	sortedStores.features[storeIdentifier].geometry.coordinates[1],
	searchResult.coordinates[1]
	];
	var lons = [
	sortedStores.features[storeIdentifier].geometry.coordinates[0],
	searchResult.coordinates[0]
	];
	var sortedLons = lons.sort(function (a, b) {
	if (a > b) {
	return 1;
	}
	if (a.distance < b.distance) {
	return -1;
	}
	return 0;
	});
	var sortedLats = lats.sort(function (a, b) {
	if (a > b) {
	return 1;
	}
	if (a.distance < b.distance) {
	return -1;
	}
	return 0;
	});
	return [
	[sortedLons[0], sortedLats[0]],
	[sortedLons[1], sortedLats[1]]
	];
	}

	/**
	* Add a marker to the map for every store listing.
	**/
	function addMarkers() {
	/* For each feature in the GeoJSON object above: */
	stores.features.forEach(function (marker) {
	/* Create a div element for the marker. */
	var el = document.createElement('div');
	/* Assign a unique `id` to the marker. */
	el.id = 'marker-' + marker.properties.id;
	/* Assign the `marker` class to each marker for styling. */
	el.className = 'marker';

	/**
	* Create a marker using the div element
	* defined above and add it to the map.
	**/
	new mapboxgl.Marker(el, { offset: [0, -23] })
	.setLngLat(marker.geometry.coordinates)
	.addTo(map);

	/**
	* Listen to the element and when it is clicked, do three things:
	* 1. Fly to the point
	* 2. Close all other popups and display popup for clicked store
	* 3. Highlight listing in sidebar (and remove highlight for all other listings)
	**/
	el.addEventListener('click', function (e) {
	flyToStore(marker);
	createPopUp(marker);
	var activeItem = document.getElementsByClassName('active');
	e.stopPropagation();
	if (activeItem[0]) {
	activeItem[0].classList.remove('active');
	}
	var listing = document.getElementById(
	'listing-' + marker.properties.id
	);
	listing.classList.add('active');
	});
	});
	}

	/**
	* Add a listing for each store to the sidebar.
	**/
	function buildLocationList(data) {
	data.features.forEach(function (store, i) {
	/**
	* Create a shortcut for `store.properties`,
	* which will be used several times below.
	**/
	var prop = store.properties;

	/* Add a new listing section to the sidebar. */
	var listings = document.getElementById('listings');
	var listing = listings.appendChild(document.createElement('div'));
	/* Assign a unique `id` to the listing. */
	listing.id = 'listing-' + prop.id;
	/* Assign the `item` class to each listing for styling. */
	listing.className = 'item';

	/* Add the link to the individual listing created above. */
	var link = listing.appendChild(document.createElement('a'));
	link.href = '#';
	link.className = 'title';
	link.id = 'link-' + prop.id;
	link.innerHTML = prop.Name;

	/* Add details to the individual listing. */
	var details = listing.appendChild(document.createElement('div'));
	details.innerHTML =  prop.Address;
	if (prop.distance) {
	var roundedDistance = Math.round(prop.distance * 100) / 100;
	details.innerHTML +=
	'<p><strong>' + roundedDistance + ' miles away</strong></p>';
  /* Add an 'Add to Bookmarks' Button */
	//details.innerHTML += '</br><a href="bookmark-member.php?car_park='+prop.id+'">Add to Bookmarks</a>';
	}

	link.addEventListener('click', function (e) {
	for (var i = 0; i < data.features.length; i++) {
	if (this.id === 'link-' + data.features[i].properties.id) {
	var clickedListing = data.features[i];
	flyToStore(clickedListing);
	createPopUp(clickedListing);
	}
	}
	var activeItem = document.getElementsByClassName('active');
	if (activeItem[0]) {
	activeItem[0].classList.remove('active');
	}
	this.parentNode.classList.add('active');
	});
	});
	}

	/**
	* Use Mapbox GL JS's `flyTo` to move the camera smoothly
	* a given center point.
	**/
	function flyToStore(currentFeature) {
	map.flyTo({
	center: currentFeature.geometry.coordinates,
	zoom: 15
	});
	}

	/**
	* Create a Mapbox GL JS `Popup`.
	**/
	function createPopUp(currentFeature) {
	var popUps = document.getElementsByClassName('mapboxgl-popup');
	if (popUps[0]) popUps[0].remove();

	var popup = new mapboxgl.Popup({ closeOnClick: false })
	.setLngLat(currentFeature.geometry.coordinates)
	.setHTML(
	'<h3>'+currentFeature.properties.Name+'</h3>' +
	'<h4>' +
	currentFeature.properties.Address +
	'</h4>'
	)
	.addTo(map);
	}
	</script>
	</body>
</html>
