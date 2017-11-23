<?=$this->load->view(branded_view('cp/header'), array('head_files' => '<link rel="stylesheet" href="' . base_url() . 'assets/leaflet/leaflet.css" /><link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.css"><link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-markercluster/v0.4.0/MarkerCluster.Default.css"><link rel="stylesheet" href="https://api.tiles.mapbox.com/mapbox.js/plugins/leaflet-locatecontrol/v0.43.0/L.Control.Locate.css"><script type="text/javascript" src="' . base_url() . 'assets/leaflet/leaflet.js"></script>'));?>
<style type="text/css">
	#map {
		display: block;
		height: 480px;
		/* max-height: 320px; */
		overflow: hidden;
	}

.content-wrapper .chart {
  margin: 25px 0 50px;
  background: #fff;
  border: 1px solid #DFE3EB;
  padding: 5px 5px;
  border-radius: 5px;
  box-shadow: inset 0 1px 0 #ededed;
}

.leaflet-container .leaflet-control-attribution {
  background: #fff;
  background: rgba(255, 255, 255, 0.7);
  margin: 0;
display: none!important;
}

</style>				




    <div class="content-wrapper">
<div class="chart clearfix" style="height: auto;">
					
									<div class="row-fluid">
									<div id="map"></div>
									</div><!--/row-fluid-->
				

</div><!--/chart-->
</div><!--/content-wrapper-->
<!-- Jitesh -->

<script type="text/javascript">
	var customers = JSON.parse('<?php echo addslashes(json_encode($customers)); ?>');
	var map = L.map('map').setView([34.2186286,-119.160848], 2);

	L.tileLayer( 'https://' + '{s}.tiles.mapbox.com/' + 'v3/{id}/{z}/{x}/{y}.png', {
		maxZoom: 18,
		attribution: 'Map data &copy; <a href="http://openstreetmap.org/"> OpenStreetMap </a> contributors, ' +
		'<a href="http://creativecommons.org/"> CC-BY-SA </a>, ' +
		'Imagery © <a href="http://mapbox.com">Mapbox</a>',
		id: 'examples.map-i875mjb7'
	}).addTo(map);
	 
	function buildMap(customers) {
		var len = customers.length;
		for(var i=0;i<len;i++) {
			var c = customers[i];
			if(c.lat && c.lng) {
				L.marker([c.lat, c.lng], null).addTo(map).bindPopup('<b>' + c.first_name + ' ' + c.last_name + '</b><br>' + c.company + '<br>' + c.address_1 + '<br>' + c.address_2 + '<br>' + c.city + '<br>' + c.state + '<br>' + c.country);
			}
		}
	}
	 
	$( document ).ready(function() {
		buildMap(customers);
	});

</script>
<?=$this->load->view(branded_view('cp/footer'));?>