<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF-8">
	<title>2/13/2013</title>
	<style type="text/css">
	body {
		background:#222;
		color:#00BAB5;
		font:0.8em/1.25em sans;
	}
	p {
		margin:0.25em 0;
	}
	.res {
		color:#00C2FF;
	}
	.enl {
		color:#28F428;
	}
	.secure {
		color:#F33;
	}
	.txt {
		color:#EEE;
	}
	#Visualization {
		float:right;
		height:350px;
		margin-bottom:1em;
		margin-left:1em;
		width:550px;
	}
	</style>
	<script src="http://www.google.com/jsapi"></script>
	<script>
		google.load('visualization', '1', {packages: ['corechart']});
		function drawVisualization() {
		// Create and populate the data table.
		var t = [
			['Type', 'Count'],
			['Destroy [180]', 180 * 75],
			['Capture [23]', 23 * 500],
			['Deploy [185]', 185 * 125],
			['Fully Power [19]', 20 * 250],
			['Link [17]', 17 * 313],
			['Control Field [4]', 4 * 1250]
		];
		var data = google.visualization.arrayToDataTable(t);
		var total = 0;
		for (var i = 1; i < t.length; i++) {
			total += t[i][1];
		}

		// Create and draw the visualization.
		new google.visualization.PieChart(document.getElementById('Visualization')).
			draw(data, {title:"How to get " + total + " points in 90 minutes or less"});
		}


		google.setOnLoadCallback(drawVisualization);
	</script>
</head>
<body>
	<div id="Visualization"></div>
	<p>7:32AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> captured Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:33AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:34AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:35AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:35AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:36AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L1 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> captured The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L4 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L4 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L4 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L4 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L5 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:37AM	<span class="res">jbaikge</span> deployed an L5 Resonator on The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> captured Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:39AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:40AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:40AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Alexandria, Virginia (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> captured Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:41AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed the Link Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA) to George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> deployed an L1 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:42AM	<span class="res">jbaikge</span> captured George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:43AM	<span class="res">jbaikge</span> deployed an L5 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:43AM	<span class="res">jbaikge</span> deployed an L5 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:43AM	<span class="res">jbaikge</span> deployed an L6 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:43AM	<span class="res">jbaikge</span> deployed an L6 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:43AM	<span class="res">jbaikge</span> deployed an L7 Resonator on George Washington Memorial (Main Access Path, Alexandria, VA)</p>
	<p>7:45AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:45AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:45AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:45AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Memorial (Access Rd, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on George Washington Memorial (Access Rd, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on George Washington Memorial (Access Rd, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> deployed an L5 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> captured George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> deployed an L5 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> deployed an L6 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> deployed an L6 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:46AM	<span class="res">jbaikge</span> deployed an L7 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:47AM	<span class="res">jbaikge</span> deployed an L2 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:47AM	<span class="res">jbaikge</span> deployed an L3 Resonator on George Washington Masonic Memo (101 Callahan Dr, Alexandria, VA)</p>
	<p>7:48AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:48AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Panoramic View of Alexandria (Main Access Path, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> captured king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L2 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L3 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L3 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L5 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L5 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L2 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L6 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:53AM	<span class="res">jbaikge</span> deployed an L6 Resonator on king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>7:54AM	<span class="res">jbaikge</span> linked king st metro (1902-1916 King Street, Alexandria, VA) to Alexandria (Alexandria Amtrak, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>7:59AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:00AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:00AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:06AM	<span class="res">jbaikge</span> captured Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:07AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:07AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:07AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:07AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:08AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:08AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:08AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Geodesic Dome - USPTO (1982-1998 Ballenger Avenue, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:17AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:18AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> captured Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:19AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:20AM	<span class="res">jbaikge</span> linked Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA) to king st metro (1902-1916 King Street, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:23AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> captured Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:24AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:25AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:25AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:25AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:25AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:25AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:26AM	<span class="res">jbaikge</span> linked Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA) to Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L2 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed the Link Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States) to The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:28AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> captured The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L3 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L3 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L4 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> deployed an L5 Resonator on The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> linked The Confederate Statue (201 S Washington St, Alexandria, VA) to Franklin and Armfield Slave Of (1321 Duke St, Alexandria, VA)</p>
	<p>8:29AM	<span class="res">jbaikge</span> created a Control Field @The Confederate Statue (201 S Washington St, Alexandria, VA) +57 MUs</p>
	<p>8:29AM	<span class="res">jbaikge</span> linked The Confederate Statue (201 S Washington St, Alexandria, VA) to Alfred Street Baptist Church (Duke St &amp; S Alfred St, Alexandria, VA)</p>
	<p>8:30AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:30AM	<span class="res">jbaikge</span> captured Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:30AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:30AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:31AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:31AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:31AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:31AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:31AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:32AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> captured alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L2 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L5 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L5 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L6 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:33AM	<span class="res">jbaikge</span> deployed an L6 Resonator on alexandria (N Washington St &amp; King St (Rt 7), Alexandria, VA)</p>
	<p>8:36AM	<span class="secure">[secure]</span> <span class="res">Dazo:</span> <span class="txt">@JB: Someone is set to shed the "slacker" moniker.</span></p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> captured The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:36AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L3 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L5 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L5 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> deployed an L6 Resonator on The Marshall House (480 King St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:37AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:38AM	<span class="secure">[secure]</span> <span class="res">jbaikge:</span> <span class="txt">RRRAAAAAAAAMMMMMMPPPPPPAAAAAGGGGGEEEEEEEE</span></p>
	<p>8:38AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:39AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L1 Resonator on The Ramsay House (221 King St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L1 Resonator on The Ramsay House (221 King St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Ramsay House (221 King St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Ramsay House (221 King St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on The Ramsay House (221 King St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> captured Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:40AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> captured Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Site of First Services of the (King St &amp; N Royal St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> linked Site of First Services of the (King St &amp; N Royal St, Alexandria, VA) to Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:41AM	<span class="res">jbaikge</span> linked Site of First Services of the (King St &amp; N Royal St, Alexandria, VA) to Gadsby’s Tavern (134 N Royal St, Alexandria, VA)</p>
	<p>8:43AM	<span class="res">jbaikge</span> created a Control Field @Gadsby’s Tavern (134 N Royal St, Alexandria, VA) +7 MUs</p>
	<p>8:43AM	<span class="res">jbaikge</span> linked Gadsby’s Tavern (134 N Royal St, Alexandria, VA) to Stabler-Leadbeater Apothecary (107 S Fairfax St, Alexandria, VA)</p>
	<p>8:44AM	<span class="res">jbaikge</span> linked Gadsby’s Tavern (134 N Royal St, Alexandria, VA) to Appomattox Statue, Christmas (699 Prince St, Alexandria, VA)</p>
	<p>8:45AM	<span class="res">jbaikge</span> linked Gadsby’s Tavern (134 N Royal St, Alexandria, VA) to Lloyd House (220 N Washington St, Alexandria, VA)</p>
	<p>8:45AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:45AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:45AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> captured Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:46AM	<span class="res">jbaikge</span> deployed an L4 Resonator on Washington’s Town House (508 Cameron St, Alexandria, VA)</p>
	<p>8:47AM	<span class="res">jbaikge</span> linked Washington’s Town House (508 Cameron St, Alexandria, VA) to Lloyd House (220 N Washington St, Alexandria, VA)</p>
	<p>8:47AM	<span class="res">jbaikge</span> created a Control Field @Washington’s Town House (508 Cameron St, Alexandria, VA) +20 MUs</p>
	<p>8:47AM	<span class="res">jbaikge</span> linked Washington’s Town House (508 Cameron St, Alexandria, VA) to Gadsby’s Tavern (134 N Royal St, Alexandria, VA)</p>
	<p>8:48AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:48AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:48AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:48AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> captured Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:49AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Lord Fairfax House (607 Cameron St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L1 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>8:50AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>8:50AM	<span class="res">jbaikge</span> captured Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:50AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Site of First Synagogue of Bet (206 N Washington St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:53AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> captured Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L3 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> captured Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:54AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:55AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:55AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:55AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Lee’s Boyhood Home (607 Oronoco St, Alexandria, VA)</p>
	<p>8:56AM	<span class="res">jbaikge</span> captured Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:56AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:56AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:56AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:56AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:57AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:57AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:57AM	<span class="res">jbaikge</span> deployed an L6 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:57AM	<span class="res">jbaikge</span> deployed an L7 Resonator on Lee-Fendall House (614 Oronoco St, Alexandria, VA)</p>
	<p>8:57AM	<span class="res">jbaikge</span> linked Lee-Fendall House (614 Oronoco St, Alexandria, VA) to Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA)</p>
	<p>8:58AM	<span class="res">jbaikge</span> linked Lee-Fendall House (614 Oronoco St, Alexandria, VA) to The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>8:58AM	<span class="res">jbaikge</span> linked Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA) to The George Washington Masonic (Main Access Path, Alexandria, VA)</p>
	<p>8:58AM	<span class="res">jbaikge</span> created a Control Field @Home of Edmund Jennings Lee (700-798 Oronoco St, Alexandria, VA) +10 MUs</p>
	<p>9:01AM	<span class="res">jbaikge</span> linked Local History Spec Collections (717 Queen Street, Alexandria, VA 22314, United States) to Lloyd House (220 N Washington St, Alexandria, VA)</p>
	<p>9:02AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>9:02AM	<span class="res">jbaikge</span> destroyed an L8 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>9:02AM	<span class="res">jbaikge</span> destroyed an L6 Resonator on US Post Office (200 North Washington Street, Alexandria, VA 22320, United States)</p>
	<p>9:04AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:04AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L7 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L3 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L4 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:05AM	<span class="res">jbaikge</span> destroyed an L5 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> captured Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L1 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L2 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:06AM	<span class="res">jbaikge</span> deployed an L5 Resonator on Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States)</p>
	<p>9:07AM	<span class="res">jbaikge</span> linked Friendship Firehouse (107 South Alfred Street, Alexandria, VA 22314, United States) to The Confederate Statue (201 S Washington St, Alexandria, VA)</p>
</body>
</html>
