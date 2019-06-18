<?php
	session_start();
?>
<html>
<head>
<title>Admin Login</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />

<center>
<img src="images/navin.jpg" width=70% height=30%>
<center>
<style>
body 
{
    background-image: url("images/wall.jpg");
    background-position:center;
    background-size:100% 100%;
    background-repeat:no-repeat;

}
ul 
{
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    background-color:brown;
}

li 
{
    float: left;
	width:25%;
}

li a ,a:link , a:visited 
{
    background-color:brown;
    display: block;
    color: white;
    border-radius:50px;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    display: inline-block;
    font-family:courier;
}

li a:hover , a:active
{
    background-color: #111;
}

a{
text-decoration:none;
font-family:calibri;
}
a:hover{
color:red;
}

font
{
font-family:calibri;
}

fieldset{
background-color:#ccc;
opacity:0.9;
border: 3px solid brown;
border-radius:35px;
}

p{
text-align:justify;
}

</style>

</head>


<body>

<form name="form1" action="" method="post">
<table align="center">
<tr><td><b><font color="#33FF00">NAME:---</td><td><input type="text" name = "name" required/></td></tr><br />
<tr><td><b><font color="#33FF00">PASSWORD:---</td><td><input type="password" name="pass" required/></td></tr><br />
<tr><td colspan="2" align="center"><input type="submit" name="submit"  value="login"/></td></tr>
</table>
</form>
<?php
if(isset($_POST["submit"]))
{
$con=mysqli_connect("localhost","root","","food"); //mysql_connect("localhost","root","");
mysqli_select_db($con,"food");					 //mysql_select_db("db");
$res = mysqli_query($con,"select * from admin where name ='$_POST[name]' && password = '$_POST[pass]'");								 						//$res = mysql_query("select * from login where username ='$_POST[user]' && password = '$_POST[pass]'");
if($row = mysqli_fetch_array($res))
{
$_SESSION["name"]=$row["name"];
?>
<script type="text/javascript">
window.location="index.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("INCORRECT ADMIN");
</script>
<?php
}
}
?>
</body>
</html>