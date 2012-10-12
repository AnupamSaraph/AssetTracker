<?php
session_start();


	$name=$_POST['tname'];
	$type=$_POST['ttype'];
	$age=$_POST['tage'];
	$height=$_POST['theight'];
$area=$_POST['tarea'];
$city=$_POST['tcity'];
$country=$_POST['tcountry'];
$state=$_POST['tstate'];
$veri=$_POST['veri'];
$canc=$_POST['canc'];
	$query3="UPDATE tree SET Treename='$name'
,Treetype='$type',City='$city',Country='$country',State='$state',Area='$area',Age=$age,Height=$height,Verify=$veri,Cancelled=$canc where Treeid=".$_SESSION['id1'];
	
$con=mysql_connect("localhost","root","kunalniks");
mysql_select_db("opendb",$con);
		

if(mysql_query($query3))
	{
		header('location:home.php');
	}
	else { 
	
	echo "$query3";
	}

?>
