<?php
$host="localhost";
$FirstName="ups";
$LastName="ups";
$con=mysql_connect($host,$FirstName,$LastName);
if (!$con)
{
die('Could not connect'.mysql_error());
}
else
{
echo "connected";
}
mysql_select_db("opendb",$con);
echo $_POST['h1'];
echo $_POST['h2'];
$query="INSERT INTO tree(Treeid,Treename,TreeType,Age,Verify,Cancelled,Adminid,Latitude,Longitude) VALUES ('','$_POST[tname]','$_POST[ttype]','$_POST[tage]',0,0,0,'$_POST[h1]','$_POST[h2]')";
echo $query;
mysql_query("$query");
mysql_close("$con");
header('location:home_1.php');
?>
