<?php
	session_start();
if($_SESSION["username"]=="")
{
?>
<script type="text/javascript">
window.location="login.php";
</script>
<?php
}
?>
<html>
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
<align="left"><a href="logout.php">logout</align></a>
<form action="" method="post">
<table align="center">
<tr>
<td><input type="text" name="t1" value="<?php echo $_SESSION["username"];?>" required /></td><td><h3><b><font color="white">: USERNAME</td>
</tr>
<tr>
<td><input type="text" name="t2" required/></td><td><h3><b><font color="white">: ADDRESS</td>
</tr>
<tr>
<td><input type="text" name="t3" required pattern="^[0-9]+"/></td><td><h3><b><font color="white">: NUMBER<br></td>
</tr>
<tr>
<td><select name="t4">
    <option value="-1" selected>select..</option>
<optgroup label="SNACKS">
    <option>Dhokla</option>
    <option>Idli</option>
    <option>Kande pohe</option>
    <option>MenduWada</option>
    <option>Misal Paw</option>
    <option>PavBhaji</option>
    <option>Samosa</option>
    <option>Sheera</option>
    <option>WadaPaw</option>
    <option>MasalaDhosa</option>
</optgroup>
<optgroup label="VEG">
    <option>Bhindi Masala</option>
    <option>Chana MAsala</option>
    <option>Dal Tadka</option>
    <option>Manchurian Gravy</option>
    <option>Palak Paneer</option>
    <option>Paneer Makhani</option>
    <option>Paneer Tikka</option>
    <option>Tava Mushroom</option>
    <option>Veg Kolhapuri</option>
    <option>Veg Pulao</option>
</optgroup>
<optgroup label="NON-VEG">
    <option>Butter Chicken</option>
    <option>Chicken Sahana</option>
    <option>Barbequed Fish</option>
    <option>Chicken Tikka</option>
    <option>Crab Curry</option>
    <option>Fish Kofta Curry</option>
    <option>Fish Tikka</option>
    <option>Methi Murg</option>
    <option>Prawns Curry</option>
    <option>Mutton Korma</option>

</optgroup>
<optgroup label="Desserts">
    <option>Cocunut Vadi</option>
    <option>Gajar Halwa</option>
    <option>Gulab Jamun</option>
    <option>Jalebi</option>
    <option>Kheer</option>
    <option>Rasgulla</option>
    <option>Ras Malai</option>
    <option>Rava Ladoo</option>
</optgroup>
</select></td><td><h3><b><font color="white">: FOOD<br></td>
</tr>
<tr>
<td><input type="text" name="t5" required pattern="^[0-9]+"/></td><td><h3><b><font color="white">: PRIZE<br></td>
</tr>
<tr>
<td><input type="submit" name="submit" /><br></td>
</tr></font>
</table>
</form>
<?php
$link= mysqli_connect("localhost","root","");
mysqli_select_db($link,"food");
if(isset($_POST["submit"]))
{
	mysqli_query($link,"insert into orders values('','$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]',now())");


?>

<script type="text/javascript">
alert("ORDER PLACED");
window.location="recipt.php";
</script>

<?php

}
?>
</body>
</html>