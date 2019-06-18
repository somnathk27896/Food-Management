<?php
	session_start();
if($_SESSION["name"]=="")
{
?>
<script type="text/javascript">
window.location="admin_login.php";
</script>
<?php
}
?>


<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<form name="form1" action="" method="post" >
<table align="center" border="0">
<tr>
<td>EMPLOYEE NAME</td>
<td><input type="text" name="t1" required /></td>
</tr>
<tr>
<td>EMPLOYEE LAST NAME</td>
<td><input type="text" name="t2" required/></td>
</tr>
<tr>
<td>EMAIL</td>
<td><input type="text" name="t3" required/></td>
</tr>
<tr>
<td>CONTACT NO.</td>
<td><input type="text" name="t4" required/></td>
</tr>
<tr>
<td>GENDER</td>
<td><input type="radio" name="r1" value="male" required/>male<input type="radio" name="r1" value="female" required/>female</td>
</tr>
<tr>
<td colspan="2" align="center">
<input type="submit" name="submit1" value="submit" />
</td>
</tr>
</form>
</table>
<?php
if(isset($_POST["submit1"]))
{
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "food");
$count=0;  //comment this
$res=mysqli_query($link, "select * from employee where email='$_POST[t3]'");
$count=mysqli_num_rows($res);  			
									
if($count>0)							
{										
?>										
<script type="text/javascript">
alert("email ALREADY EXIST");
</script>
<?php

}
else
{
mysqli_query($link, "insert into employee values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[r1]')");
?>
<script type="text/javascript">
alert("EMPLOYEE REGISTERED SUCCESSFULLY");
window.location="emp.php";		

</script>
<?php
}
}


?></p>
</body>
</html>
