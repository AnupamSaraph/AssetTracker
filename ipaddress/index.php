<!DOCTYPE html>
<html>
  <head>
<marquee bgcolor="#000000" behavior="alternate" height=50 width=1275><font color="#00FF00"><center><h2>OpenTrees.in</h2></center></font></marquee>
 <img src="<?php echo rand(1,3);?>.jpg" height="200" width="1275" alt="Random Image" /> 
 
 

    <meta name="viewport" content="initial-scale=1.0, user-scalable=no" />
    <style type="text/css">
    </style>
   

		
  </head> 	
  <body>
  <script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jquery/1.4.2/jquery.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/jqueryui/1.8.2/jquery-ui.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/ajax/libs/googleapis/0.0.4/googleapis.min.js"></script>
<script type="text/javascript" src="//ajax.googleapis.com/jsapi"></script>
<script type="text/javascript">
  google.load("identitytoolkit", "1", {packages: ["ac"], language:"en"});
</script>
<script type="text/javascript">
  $(function() {
    window.google.identitytoolkit.setConfig({
        developerKey: "AIzaSyCMZe4X39dNVuKqNQOJ-9LvUFZCHkuJNWo",
        companyName: "",
        callbackUrl: "http://localhost/ipaddress/home.php",
        realm: "",
        userStatusUrl: "https://localhost/ipaddress/index.php",
        loginUrl: "https://localhost/ipaddress/home.php",
        signupUrl: "https://localhost/ipaddress/index.php",
        homeUrl: "https://localhost/ipaddress/home.php",
        logoutUrl: "https://localhost/ipaddress/index.php",
        idps: ["Gmail", "GoogleApps", "Yahoo", "AOL"],
        tryFederatedFirst: true,
        useCachedUserStatus: false,
        useContextParam: true
    });
    $("#navbar").accountChooser();
  });
</script>
<!-- Insert the navbar element somewhere in the HTML page -->
<div id="navbar"></div>



  </body>

</html>