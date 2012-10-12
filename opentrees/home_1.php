
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en">
<head>
	<meta name="viewport" content="width=620">

<body>
    <form action="#" method="POST">
		<section id="wrapper">
		<meta name="viewport" content="width=620" />
		<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>
		<article>
			<p>90/
				Finding your location: <span id="status">checking...</span></p>
		<script type="text/javascript">

			var latlng;
			var map;

			function success(position) 
			{    	  
				latlng = new google.maps.LatLng(position.coords.latitude, position.coords.longitude); 
//alert(position.coords.latitude);
				var s = document.querySelector('#status');

				if (s.className == 'success') 
				{
					// not sure why we're hitting this twice in FF, I think it's to do with a cached result coming back    
					return;
				}

				s.innerHTML = "found you!";
				s.className = 'success';

				var mapcanvas = document.createElement('div');
				mapcanvas.id = 'mapcanvas';
				mapcanvas.style.height = '628px';
				mapcanvas.style.width = '1124px';

				document.querySelector('article').appendChild(mapcanvas);
								
				var myOptions = {
					zoom: 15,
					center: latlng,
					mapTypeId: google.maps.MapTypeId.ROADMAP
				};
				
				map= new google.maps.Map(document.getElementById("mapcanvas"), myOptions);
							
				var marker = new google.maps.Marker({
					position: latlng,
					map: map,
					title: "You are here! (at least within a " + position.coords.accuracy + " meter radius)"
				});        

				var marker;
				var infowindow;
				 
				 google.maps.event.addListener(map, 'click', function(event) {
			
					marker = new google.maps.Marker({
					position: event.latLng,
					map: map,
					title: "Add trees Here....!!"
				});
				
				
					google.maps.event.addListener(marker, 'click', function() {
						//alert(marker.position.toString());
						infowindow = new google.maps.InfoWindow({
							maxHeight: 400,  //Doesn't work
				         maxWidth: 400,   //Doesn't work
        			      width: 300,      //Doesn't work
        	            height: 300  
							});		
infowindow.setContent("<body bgcolor=yellow><center><h3>Tree Information</h3></center><br><form name=\"f1\" action=\"form.php\" method=\"post\">Tree Name:<input type=text name=tname><br><br>Tree Type:&nbsp;&nbsp;<input type=text name=ttype><br><br>Age: &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type=text name=tage><br><br>Area:<br/><input type=text name=tarea><br><br>City:<br/><input type=text name=tcity><br><br>State:<br/><input type=text name=tstate><br><br>Country:<br/><input type=text name=tcountry><br><br>Height:<br/><input type=text name=theight><br><input type=\"hidden\" name=h1 value="+marker.position.lat().toString()+"> <input type=\"hidden\" name=h2 value="+marker.position.lng().toString()+"> <br><br><input type=submit value=submit></form></body> ");
					  infowindow.open(map, this);
						
					});
				
				});		
			}
		
	function error(msg) {
				var s = document.querySelector('#status');
				s.innerHTML = typeof msg == 'string' ? msg : "failed";
				s.className = 'fail';

			}

			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(success, error);
			} else {
				error('not supported');
			}
	</script>
	</section>
</form>
</body>
</html>
