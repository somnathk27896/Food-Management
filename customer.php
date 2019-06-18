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
<center>
<img src="images/navin.jpg" width=70% height=30%>
<center>
<style>
body 
{
    background-image: url("images/jpg");
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

<body>
<big><big><big><big>WELCOME</big></big></big></big><br />

<?php echo $_SESSION["name"];//echo $_SESSION["id"];?>
<a href="index.php">INDEX</a>

<a href="admin_logout.php">logout</a>
<form action="" method="post">
<input type="submit" name="display" value="CUSTOMERS">
<input type="submit" name="orders" value="ORDERS">
<input type="text" name="id" value="order_id">
<input type="submit" name="delete" value="delete_order">	
<input type="text" name="username" value="username">
<input type="submit" name="search" value="search">


</form>
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"food");
if(isset($_POST["display"]))
{
$res= mysqli_query($con,"select * from register");
	echo "<table border='1' align='center'>";
	echo "<tr>"; echo "<th>"; echo "costumer_id"; echo "</th>";
	echo "<th>"; echo "costumer_fname"; echo "</th>";
	echo "<th>"; echo "costumer_lname";echo "</th>";
	echo "<th>"; echo "costumer_username";echo "</th>";

	echo "<th>"; echo "costumer_email";echo "</th>";
	echo "<th>"; echo "costumer_gender";echo "</th>"; echo "</tr>";
while($row= mysqli_fetch_array($res))
{
	echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["fname"]; echo "</td>";
	echo "<td>"; echo $row["lname"]; echo "</td>";
	echo "<td>"; echo $row["username"]; echo "</td>";
	echo "<td>"; echo $row["email"]; echo "</td>";
	echo "<td>"; echo $row["gender"]; echo "</td>"; echo "</tr>";
}
	echo "</table>";
}
?>
<?php
if(isset($_POST["orders"]))
{
$res= mysqli_query($con,"select * from orders");
	echo "<table border='1' align='center'>";
	echo "<tr>"; echo "<th>"; echo "order_id"; echo "</th>";
	echo "<th>"; echo "username"; echo "</th>";
	echo "<th>"; echo "address";echo "</th>";
	echo "<th>"; echo "contact";echo "</th>";
	echo "<th>"; echo "food";echo "</th>"; 
	echo "<th>"; echo "prize";echo "</th>";
	echo "<th>"; echo "order_time";echo "</th>";

echo "</tr>";
while($row= mysqli_fetch_array($res))
{
	echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["username"]; echo "</td>";
	echo "<td>"; echo $row["address"]; echo "</td>";
	echo "<td>"; echo $row["no."]; echo "</td>";
	echo "<td>"; echo $row["food"]; echo "</td>";
	echo "<th>"; echo $row["prize"]; echo "</th>";
	echo "<th>"; echo $row["order_time"];echo "</th>";

 echo "</tr>";
}
	echo "</table>";
}

?>




<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"food");
if(isset($_POST["delete"]))
{
	mysqli_query($con,"delete from orders where id='$_POST[id]'");
}
?>





<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"food");
if(isset($_POST["search"]))
{
$res= mysqli_query($con,"select * from orders where username = '$_POST[username]'");
	echo "<table border='1' align='center'>";
	echo "<tr>"; echo "<th>"; echo "order_id"; echo "</th>";
	echo "<th>"; echo "username"; echo "</th>";
	echo "<th>"; echo "address";echo "</th>";
	echo "<th>"; echo "contact";echo "</th>";
	echo "<th>"; echo "food";echo "</th>"; 
	echo "<th>"; echo "prize";echo "</th>";
	echo "<th>"; echo "order_time";echo "</th>";

echo "</tr>";
while($row= mysqli_fetch_array($res))
{
	echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["username"]; echo "</td>";
	echo "<td>"; echo $row["address"]; echo "</td>";
	echo "<td>"; echo $row["no."]; echo "</td>";
	echo "<td>"; echo $row["food"]; echo "</td>";
	echo "<th>"; echo $row["prize"]; echo "</th>";
	echo "<th>"; echo $row["order_time"];echo "</th>";

 echo "</tr>";
}
	echo "</table>";
}
?>

</form>
</body>
</html>