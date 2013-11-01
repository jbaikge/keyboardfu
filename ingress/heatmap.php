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
				"rgba("+0x00+", "+0x00+", "+0x00+", 0)",
				"rgba("+0x0E+", "+0x0D+", "+0x0E+", 1)",
				"rgba("+0x1D+", "+0x18+", "+0x1D+", 1)",
				"rgba("+0x28+", "+0x21+", "+0x2C+", 1)",
				"rgba("+0x2B+", "+0x28+", "+0x3A+", 1)",
				"rgba("+0x2D+", "+0x35+", "+0x49+", 1)",
				"rgba("+0x2F+", "+0x4E+", "+0x58+", 1)",
				"rgba("+0x2F+", "+0x66+", "+0x5B+", 1)",
				"rgba("+0x2D+", "+0x75+", "+0x45+", 1)",
				"rgba("+0x34+", "+0x84+", "+0x28+", 1)",
				"rgba("+0x64+", "+0x92+", "+0x21+", 1)",
				"rgba("+0xA1+", "+0x9B+", "+0x18+", 1)",
				"rgba("+0xB0+", "+0x5E+", "+0x0D+", 1)",
				"rgba("+0xBF+", "+0x07+", "+0x00+", 1)"
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
