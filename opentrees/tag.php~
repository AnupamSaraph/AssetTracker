<!DOCTYPE html>
<html dir="ltr" lang="en-US"><head><!-- Created by Artisteer v4.0.0.58475 -->
    <meta charset="utf-8">
    <title>Home</title>
    <meta name="viewport" content="initial-scale = 1.0, maximum-scale = 1.0, user-scalable = no, width = device-width">

    <!--[if lt IE 9]><script src="http://html5shiv.googlecode.com/svn/trunk/html5.js"></script><![endif]-->
    <link rel="stylesheet" href="style.css" media="screen">
    <!--[if lte IE 7]><link rel="stylesheet" href="style.ie7.css" media="screen" /><![endif]-->
    <link rel="stylesheet" href="style.responsive.css" media="all">


    <script src="jquery.js"></script>
    <script src="script.js"></script>
    <script src="script.responsive.js"></script>



<style>.art-content .art-postcontent-0 .layout-item-0 { margin-right: 10px;margin-left: 10px;  }
.art-content .art-postcontent-0 .layout-item-1 { padding-top: 0px;  }
.ie7 .post .layout-cell {border:none !important; padding:0 !important; }
.ie6 .post .layout-cell {border:none !important; padding:0 !important; }

</style></head>
<body>
<div id="art-main">
<nav class="art-nav clearfix">
    <ul class="art-hmenu">
		<li><a href="home.php" >Home</a></li>
		<li><a href="tag.php" class="active">Tag Trees</a></li>
		
		<li><a href="search.php">Search Tree</a></li>
		
		<li><a href="verify.php">Verify</a></li>
		<li><a href="download.php" >Download</a></li>
		<li><a href="contacts.html" >Contacts</a></li>
	</ul> 
</nav>
<div class="art-sheet clearfix">
<header class="art-header clearfix">


    <div class="art-shapes">
<h1 class="art-headline" data-left="19.86%">
    <a href="#">We can Track Anything....!!!!!</a>
</h1>

<div class="art-textblock art-object1325806422" data-left="0%">
        <div class="art-object1325806422-text"></div>
    
</div>
            </div>

                
                    
</header>
<div class="art-layout-wrapper clearfix">
                <div class="art-content-layout">
                    <div class="art-content-layout-row">
                        <div class="art-layout-cell art-sidebar1 clearfix"><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Welcome</h3>
        </div>
        <div class="art-blockcontent"><p>OpenTrees is an Online Trees tracking and managing system which uses google MAP and Geo Server API's to tracking and managing the Application.</p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Follow us</h3>
        </div>
        <div class="art-blockcontent"><p style="text-align: left;"><img width="51" height="51" alt="" src="images/1309425445_social_rss_button_orange-3-2-2.png">&nbsp;&nbsp;<img width="51" height="51" alt="" src="images/1309425470_social_twitter_button_blue-2.png">&nbsp;&nbsp;<a href="http://www.facebook.com/OpenTreesin"><img width="51" height="51" alt="" src="images/1309425464_social_facebook_button_blue-3-2.png"></a><img width="51" height="51" alt="" src="images/1309425690_social_skype_button_blue-2.png"><br></p></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Latest projects</h3>
        </div>
        <div class="art-blockcontent"><ul>
<li><a href="#">Trees Tracking using RFID</a></li>
<li><a href="#">OPEN GEO-MAP</a></li>
<li><a href="#">OPEN NEWS</a></li>
<li><a href="#">OPEN RESULTS</a></li>
<li><a href="#">OPEN LAWS</a></li>
</ul></div>
</div><div class="art-block clearfix">
        <div class="art-blockheader">
            <h3 class="t">Ask a question</h3>
        </div>
        <div class="art-blockcontent"><div style="background-color:#ebf7c6; padding: 10px; font-weight: bold; color: #7F9801;">
<p>&nbsp;Name<br>
<input value="" size="23"></p>
<p>&nbsp;Email<br>
<input value="" size="23"></p>
<p>&nbsp;Question<br>
<textarea rows="6" cols="25"></textarea></p>
<p><a href="#" class="art-button">Submit</a></p>
</div></div>
</div></div>
                        <div class="art-layout-cell art-content clearfix"><article class="art-post art-article">
                                
                                                
                <div class="art-postcontent art-postcontent-0 clearfix"><div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    <div class="art-layout-cell" style="width: 100%" >
        <p>Track your Trees Online.</p>
<!-- Map Code Start--> 

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
				mapcanvas.style.height = '650px';
				mapcanvas.style.width = '650px';

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









<!-- End Code-->       





    </div>
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
    
    </div>
</div>
</div>
<div class="art-content-layout-wrapper layout-item-0">
<div class="art-content-layout">
    <div class="art-content-layout-row">
   
    </div>
</div>
</div>
</div>
                                
                </article></div>
                    </div>
                </div>
            </div>
    </div>
<footer class="art-footer clearfix">
  <div class="art-footer-inner">
<div style="position:relative;display:inline-block;padding-left:74px;padding-right:74px"><a title="RSS" class="art-rss-tag-icon" style="position: absolute; bottom: -10px; left: -6px; line-height: 32px;" href="#"></a>
<p><a href="#">About Us</a>&nbsp;&nbsp; | &nbsp;&nbsp;<a href="#">Contact Us</a>&nbsp;&nbsp; Icons by <a href="http://www.yootheme.com/icons">YOOtheme</a></p>
<br>
<p>Copyright © 2011. All Rights Reserved.</p>
<br></div>
    <p class="art-page-footer">
        <span id="art-footnote-links"><a href="http://www.artisteer.com/" target="_blank">Web Template</a> created with Artisteer.</span>
    </p>
  </div>
</footer>

</div>


</body></html>
