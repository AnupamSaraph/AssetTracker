<?php  




//require("phpsqlajax_dbinfo.php");
$username="root";
$password="kunalniks";
 

// Start XML file, create parent node

$dom = new DOMDocument("1.0");

$node = $dom->createElement("markers");
$parnode = $dom->appendChild($node); 

// Opens a connection to a MySQL server

/*$connection=mysql_connect ("localhost", $username, $password);
if (!$connection) {  die('Not connected : ' . mysql_error());}
else{echo "connected";}
echo $username; 
*/
$con=mysql_connect ("localhost", $username, $password);
// Set the active MySQL database

mysql_select_db("opendb", $con);

// Select all the rows in the markers table

$query = "SELECT * FROM tree WHERE Cancelled=0 and Verify=0";
$result = mysql_query($query);
if (!$result) {  
  die('Invalid query: ' . mysql_error());
} 

header("Content-type: text/xml"); 

// Iterate through the rows, adding XML nodes for each

while ($row = @mysql_fetch_assoc($result)){  
  // ADD TO XML DOCUMENT NODE  
  $node = $dom->createElement("tree");  
  $newnode = $parnode->appendChild($node);   
  $newnode->setAttribute("Treename",$row['Treename']);
  $newnode->setAttribute("Age", $row['Age']);  
  $newnode->setAttribute("Latitude", $row['Latitude']);  
  $newnode->setAttribute("Longitude", $row['Longitude']);  
  $newnode->setAttribute("Treetype", $row['Treetype']);
  $newnode->setAttribute("City", $row['City']);
  $newnode->setAttribute("State", $row['State']);
  $newnode->setAttribute("Country", $row['Country']);
  $newnode->setAttribute("Height", $row['Height']);
  $newnode->setAttribute("Emailid", $row['Emailid']);
  $newnode->setAttribute("Area", $row['Area']);
  $newnode->setAttribute("Treeid", $row['Treeid']);
  
} 

echo $dom->saveXML();

?>
