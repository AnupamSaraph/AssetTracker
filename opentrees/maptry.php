
<!DOCTYPE html >
  <head>
    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <meta http-equiv="content-type" content="text/html; charset=UTF-8"/>
    <title>PHP/MySQL & Google Maps Example</title>
    <script type="text/javascript" src="http://maps.googleapis.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript">
    //<![CDATA[

    var customIcons = {
      restaurant: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_blue.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      },
      bar: {
        icon: 'http://labs.google.com/ridefinder/images/mm_20_red.png',
        shadow: 'http://labs.google.com/ridefinder/images/mm_20_shadow.png'
      }
    };

    function load() {
      var map = new google.maps.Map(document.getElementById("map"), {
        center: new google.maps.LatLng(18.5236,73.8478),
       
        zoom: 13,
        mapTypeId: 'roadmap'
      });
      var infoWindow = new google.maps.InfoWindow;

      // Change this depending on the name          var of your PHP file
      downloadUrl("genxml.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("tree");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("Treename");
          var age = markers[i].getAttribute("Age");
          var type = markers[i].getAttribute("Treetype");
          var City=markers[i].getAttribute("City");
          var State=markers[i].getAttribute("State");
          var Country=markers[i].getAttribute("Country");
          var Height=markers[i].getAttribute("Height");
          var Emailid=markers[i].getAttribute("Emailid");
			 var Area=markers[i].getAttribute("Area");
          var id1=markers[i].getAttribute("Treeid");
          
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("Latitude")),
              parseFloat(markers[i].getAttribute("Longitude")));
          var html = "<font color=blue><form name=f1 method=post action=editformdisplay.php?id1="+id1+"><table border=0 cellpadding=0 cellspacing=0><tr><th colspan=2>Tree Information</th></tr><b><font color=red size=2><tr><td>Name</td><td>" + name + "</b> </td><tr><td>Age</td><td>" + age+ "</td></tr><tr><td>Type</td><td>"+type+"</td></tr><tr><td>Area</td><td>"+Area+"</td></tr> <tr><td>City</td><td>"+City+"</td></tr><tr><td>State</td><td>"+State+"</td></tr><tr><td>Country</td><td>"+Country+"</td></tr><tr><td>Height</td><td>"+Height+"</td></tr><tr><td>EmailId</td><td>"+Emailid+"</td></tr><tr><td colspan=2><input type=submit value=Edit></td></tr></table></form>";
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon:"http://maps.gstatic.com/mapfiles/icon_green.png",
            shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
      
      
      downloadUrl("genxmltry.php", function(data) {
        var xml = data.responseXML;
        var markers = xml.documentElement.getElementsByTagName("tree");
        for (var i = 0; i < markers.length; i++) {
          var name = markers[i].getAttribute("Treename");
          var age = markers[i].getAttribute("Age");
          var type = markers[i].getAttribute("Treetype");
          var City=markers[i].getAttribute("City");
          var State=markers[i].getAttribute("State");
          var Country=markers[i].getAttribute("Country");
          var Height=markers[i].getAttribute("Height");
          var Emailid=markers[i].getAttribute("Emailid");
			 var Area=markers[i].getAttribute("Area");
          var id1=markers[i].getAttribute("Treeid");
          
          var point = new google.maps.LatLng(
              parseFloat(markers[i].getAttribute("Latitude")),
              parseFloat(markers[i].getAttribute("Longitude")));
          var html = "<font color=blue><form name=f1 method=post action=editformdisplay.php?id1="+id1+"><table border=0 cellpadding=0 cellspacing=0><tr><th colspan=2>Tree Information</th></tr><b><font color=red size=2><tr><td>Name</td><td>" + name + "</b> </td><tr><td>Age</td><td>" + age+ "</td></tr><tr><td>Type</td><td>"+type+"</td></tr><tr><td>Area</td><td>"+Area+"</td></tr> <tr><td>City</td><td>"+City+"</td></tr><tr><td>State</td><td>"+State+"</td></tr><tr><td>Country</td><td>"+Country+"</td></tr><tr><td>Height</td><td>"+Height+"</td></tr><tr><td>EmailId</td><td>"+Emailid+"</td></tr><tr><td colspan=2><input type=submit value=Edit></td></tr></table></form>";
          var icon = customIcons[type] || {};
          var marker = new google.maps.Marker({
            map: map,
            position: point,
            icon:"http://maps.google.com/mapfiles/ms/icons/blue-dot.png",
            shadow: icon.shadow
          });
          bindInfoWindow(marker, map, infoWindow, html);
        }
      });
        
      
      
      
      
    }

    function bindInfoWindow(marker, map, infoWindow, html) {
      google.maps.event.addListener(marker, 'click', function() {
        infoWindow.setContent(html);
        infoWindow.open(map, marker);
      });
    }

    function downloadUrl(url, callback) {
      var request = window.ActiveXObject ?
          new ActiveXObject('Microsoft.XMLHTTP') :
          new XMLHttpRequest;

      request.onreadystatechange = function() {
        if (request.readyState == 4) {
          request.onreadystatechange = doNothing;
          callback(request, request.status);
        }
      };

      request.open('GET',url,true);
      request.send(null);
    }

    function doNothing() {}

    //]]>

  </script>

  </head>

  <body onload="load()">
    <div id="map" style="width: 600px; height: 800px"></div>
  </body>

</html>
