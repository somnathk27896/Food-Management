<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
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


<body bgcolor="#999999"><p>
<a href="home.php">HOME</a>

<a href="login.php">LOGIN HERE</a>


<form name="form1" action="" method="post" >
<table align="center" border="0" bgcolor="#CCCCCC">
<tr>
<td>FIRST NAME</td>
<td><input type="text" name="t1" required pattern="^[A-Za-z]+"/></td>
</tr>
<tr>
<td>LAST NAME</td>
<td><input type="text" name="t2" required pattern="^[A-Za-z]+"/></td>
</tr>
<tr>
<td>E MAIL:</td>
<td><input type="text" name="email" required/></td>
</tr>

<tr>
<td>USERNAME</td>
<td><input type="text" name="t3" required pattern="^[A-Za-z0-9]+"/></td>
</tr>
<tr>
<td>PASSWORD</td>
<td><input type="password" name="t4" required/></td>
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
$count=0;  
$res=mysqli_query($link, "select * from register where username='$_POST[t3]'");
$count=mysqli_num_rows($res);  			
									
if($count>0)							
{										
?>										
<script type="text/javascript">
alert("USERNAME ALREADY EXIST");		
</script>
<?php

}
else
{
mysqli_query($link, "insert into register values('','$_POST[t1]','$_POST[t2]','$_POST[email]','$_POST[t3]','$_POST[t4]','$_POST[r1]')");
?>
<script type="text/javascript">
alert("RECORD INSERTED SUCCESSFULLY");
window.location="login.php";

</script>
<?php
}
}


?></p>
</body>
</html>
