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
<head>

<style>
*{
margin:0px;
padding:0px;
}

a{
text-decoration:none;
font-family:calibri;
color:white;
}
a:hover{
color:yellow;
}

body 
{
    background-image: url("images/wt1.jpg");
    background-size:180%;
    background-repeat: no-repeat;
}

div#container{
width:100%;
text-color:white;
}

#container ul{
list-style:none;
color:white;
}
#container ul li {
background-color:brown;
width:337px;
border:1px solid white;
height:50px;
line-height:50px;
text-align:center;
float:left;
color:white;
font-size:22px;
}

#container ul li:hover{
background-color:red;
color:brown;
}
#container ul ul{
display:none;
}
#container ul li:hover > ul{
display:block;
text-color:black;
}
</style>
<meta charset="utf-8">
<title> Project </title>
</head>

<body><br>
<a class="active" href="home.php"><font size=5>&nbsp&nbsp&nbsp&nbsp &nbsp HOME &nbsp&nbsp&nbsp&nbsp&nbsp </font></a>
<center><b><font face=calibri size=6px color=white> * * *</font><font face=calibri size=6px color=red> * * *</font><font face=calibri size=6px color=white>
* * * F O O D &nbsp;&nbsp; L I S T * * *</font><font face=calibri size=6px color=red> * * *</font><font face=calibri size=6px color=white> * * *</font></b></center>
<br><div id="container"> 
<ul> 
<li> <a href="#"> Snacks </a>
<ul>
<li> <a href="dhokla.php"> Dhokla</a></li>
<li> <a href="idli.php"> Idli </a></li>
<li> <a href="kandepohe.php"> Kandhe Pohe</a></li>
<li> <a href="meduvada.php"> Medu Vada </a></li>
<li> <a href="misalpav.php"> Misal Pav</a></li>
<li> <a href="pavbhaji.php">Pav Bhaji</a></li>
<li> <a href="samosa.php"> Samosa </a></li>
<li> <a href="sheera.php"> Sheera</a></li>
<li> <a href="vadapav.php"> vadapav</a></li>
<li> <a href="masaladosa.php"> Masala Dosa</a></li>
</ul>
</li> 
<li> <a href="#"> Vegetarian food </a>
<ul>
<li> <a href="bhindi masala.php">Bhindi Masala</a></li>
<li> <a href="chana masala.php"> Chana Masala</a></li>
<li> <a href="dal tadka.php"> Dal Tadka</a></li>
<li> <a href="manchurian gravy.php"> Manchurian Gravy</a></li>
<li> <a href="palak paneer.php">Palak Paneer</a></li>
<li> <a href="paneer makhani.php"> Paneer Makhani </a></li>
<li> <a href="paneer tikka.php">Paneer Tikka</a></li>
<li> <a href="tava mashroom.php"> Tava Mushroom</a></li>
<li> <a href="veg kolhapuri.php"> Veg Kolhapuri</a></li>
<li> <a href="veg pulao.php"> Veg Pulao</a></li>
</ul>
</li>
<li> <a href="#"> Non-vegetarian food </a>
<ul>
<li> <a href="butter chicken.php">Butter Chicken</a></li>
<li> <a href="chicken sahana.php"> Chicken Sahana</a></li>
<li> <a href="barbequed fish.php">Barbequed Fish</a></li>
<li> <a href="chicken tikka.php">Chicken Tikka</a></li>
<li> <a href="crab curry.php">Crab Curry</a></li>
<li> <a href="fish kofta curry.php">Fish Kofta Curry</a></li>
<li> <a href="fish tikka.php"> Fish Tikka</a></li>
<li> <a href="methi murg.php">Methi Murg</a></li>
<li> <a href="prawns curry.php">Prawns Curry</a></li>
<li> <a href="mutton korma.php"> Mutton Korma</a></li>
</ul>
</li>
<li> <a href="dessert.php"> Desserts </a>
<ul>
<li> <a href="coconut.php">Cocunut Vadi</a></li>
<li> <a href="gajar.php"> Gajar Halwa</a></li>
<li> <a href="gulabjamun.php">Gulab Jamun</a></li>
<li> <a href="jalebi.php">Jalebi</a></li>
<li> <a href="kheer.php">Kheer</a></li>
<li> <a href="rasgulla.php">Rasgulla</a></li>
<li> <a href="rasmalai.php">Ras Malai</a></li>
<li> <a href="ravaladoo.php">Rava Ladoo</a></li>
</ul>
</li>
</ul>
</div>
</body>
</html>
