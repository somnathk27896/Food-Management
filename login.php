<?php
session_start();
?>
<html>
<head>
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

<body>
<a href="home.php">HOME</a>

<a href="register.php">REGISTER HERE</a>

<form name="form1" action="" method="post">
<fieldset><legend>Login</legend>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="282" border="1" align="center" bordercolor = "#000000">
<tr>
<td width="120"> USERNAME : </td>
<td width="146"><input type="text" name="t1" required/></td>
</tr>
<tr>
<td>PASSWORD :</td>
<td><input type="password" name="t2" required/></td>
</tr>
<tr>
<td height="46" colspan="2" align="center"><input type="submit" name="submit1" value="login" /></td>
</tr>
</table>
</fieldset>
</form>

<?php
if(isset($_POST["submit1"]))
{
$link=mysqli_connect("localhost", "root", "");
mysqli_select_db($link, "food");
$res=mysqli_query($link,"select * from register where username='$_POST[t1]' && password='$_POST[t2]'");
if($row = mysqli_fetch_array($res))
{
$_SESSION["username"]=$row["username"];
?>
<script type="text/javascript">
alert("SUCCESS");
window.location="menu.php";
</script>
<?php
}
else
{
?>
<script type="text/javascript">
alert("INCORRECT USERNAME OR PASSWORD");
</script>
<?php
}
}
?>
</body>
</html>
