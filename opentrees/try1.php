<html>
<head>
Edit Tree Information
</head>
<body>

<?php

session_start();
$_SESSION['id1']=$_GET['id1'];

$con=mysql_connect("localhost","root","kunalniks");
mysql_select_db("opendb",$con);
$query1="select * from tree where Treeid=".$_SESSION["id1"];
$result=mysql_query($query1);
$r=mysql_fetch_array($result);

echo $query1;




?>

<form name="f1" action="formedit.php" method="post">
<table border="1">
<tr><td>Tree Name:</td><td><input type=text name=tname value="<?php echo $r[1];?>"></td></tr>
<tr><td>Tree Type:</td><td><input type=text name=ttype value="<?php echo $r[2];?>"></td></tr>
<tr><td>Age:</td><td><input type=text name=tage value="<?php echo $r[3];?>"></td></tr>
<tr><td>Area:</td><td><input type=text name=tarea value="<?php echo $r[14];?>"></td></tr>
<tr><td>City:</td><td><input type=text name=tcity value="<?php echo $r[10];?>"></td></tr>
<tr><td>State:</td><td><input type=text name=tstate value="<?php echo $r[11];?>"></td></tr>
<tr><td>Country:</td><td><input type=text name=tcountry value="<?php echo $r[12];?>"></td></tr>
<tr><td>Height:</td><td><input type=text name=theight value="<?php echo $r[9];?>"></td></tr>
<tr>
<td>Verify:</td>
<td><select name="veri">
<option value="1">Verified</option>
<option value="0">Not Verified</option>
</select>
</td>
</tr>
<tr>
<td>Cancelled:</td>
<td><select name="canc">

<option value="0">Not Cancelled</option>
<option value="1">Cancelled</option>
</select>
</td>
</tr>
<tr><td colspan="2"><input type=submit value=submit></form></td></tr>
</table>
</body>
</body>
</html>
