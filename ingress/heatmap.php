<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
	<title>Heatmaps</title>
	<style type="text/css">
		html { height: 100% }
		body { height: 100%; margin: 0px; padding: 0px }
		#Heatmap { height: 100% }
	</style>
	<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&amp;sensor=false&amp;libraries=visualization"></script>
	<script>
	var map, pointarray, heatmap;

	var destroyedData = [
<?php echo rtrim(file_get_contents(__DIR__ . "/destroyed.js"), "\n,"); ?>

	];

	function initialize() {
		var mapOptions = {
			zoom: 13,
			center: new google.maps.LatLng(38.774546, -77.433523),
			mapTypeId: google.maps.MapTypeId.ROADMAP
		};

		map = new google.maps.Map(document.getElementById('Heatmap'), mapOptions);

		var pointArray = new google.maps.MVCArray(destroyedData);

		heatmap = new google.maps.visualization.HeatmapLayer({
			data: pointArray,
			gradient: [
				'rgba(0, 255, 255, 0)',
				'rgba(0, 255, 255, 1)',
				'rgba(0, 191, 255, 1)',
				'rgba(0, 127, 255, 1)',
				'rgba(0, 63, 255, 1)',
				'rgba(0, 0, 255, 1)',
				'rgba(0, 0, 223, 1)',
				'rgba(0, 0, 191, 1)',
				'rgba(0, 0, 159, 1)',
				'rgba(0, 0, 127, 1)',
				'rgba(63, 0, 91, 1)',
				'rgba(127, 0, 63, 1)',
				'rgba(191, 0, 31, 1)',
				'rgba(255, 0, 0, 1)'
			],
			radius: 20
		});

		heatmap.setMap(map);
	}

	google.maps.event.addDomListener(window, 'load', initialize);
</script>
</head>
<body>
	<div id="Heatmap"></div>
</body>
</html>
