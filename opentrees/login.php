<html>
<head>

<title>Login.php</title>
<script type="text/javascript" >
function validateForm()
{
var x=document.frmRegister.txtusername.value;

if (x==null || x=="")
  {
  alert("Username is empty");
  return false;
  }
 var y=document.frmRegister.txtpassword.value;
if (y==null || y=="")
  {
  alert("Password is empty");
  return false;
  }
  
}
  
</script>
</head>
<body>
<form method="post" action="login_p.php" name="frmRegister" onsubmit="return validateForm()">
<table>

<td colspan="2">
<h3>Login Here</h3>
</td>

<tr>
<td>
Admin:
</td>

<td>
<input type="text" name="txtusername" maxlength="10" style="border-color:blue">
</td>

</tr>


<tr>
<td>
Password:
</td>

<td>
<input type="password" name="txtpassword" maxlength="16" style="border-color:blue">
</td>

</tr>


<tr>
<td colspan="2">
<input type="submit" name="Login" value="Login">
</td>
</tr>

<?php
if($_GET[error]=="yes")
{
	echo "<tr>	<td colspan=\"2\" align=\"center\">Sorry,username/Password is invalid..!!</td>	</tr>";
	
}
?>
</table>
  
  
</form>


</body>
</html>