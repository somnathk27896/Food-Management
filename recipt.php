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
<body>

<a href="home.php">home</a>
&nbsp;
<a href="logout.php">logout</a>

</body>
</html>

<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"automobile");
$sql ="select id, username, addr, no, model, price, date from orders where username= '".$_SESSION['username']."'";
$res= mysqli_query($con,$sql);
$row = mysqli_fetch_array($res); 
echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";echo "<br>";
echo "<center>";

echo "Your Transaction id :" , $row['id'] ,"  ";  echo "<br>";
echo " Your Username  :" , $row['username'] , " " ;  echo "<br>";

echo " Your Address :" , $row['addr'] , " " ;  echo "<br>";
echo " Your Contact No. :" , $row['no'] , " " ;  echo "<br>";
echo " Your Car Model :" , $row['model'] , " " ;  echo "<br>";
echo " PriZe :" , $row['price'] , " " ;  echo "<br>";
echo " Date :" , $row['date'] , " " ;  echo "<br>";


?>

