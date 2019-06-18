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

<?php echo $_SESSION["name"]; ?>
<a href="index.php">INDEX</a>

<a href="admin_logout.php">logout</a>
<form action="" method="post">
<input type="submit" name="add" value="add">

<?php
if(isset($_POST["add"]))
{
?>										
<script type="text/javascript">
window.location="add_emp.php";		
</script>
<?php
}
?>





<input type="submit" name="display" value="EMPLOYEES">
<input type="text" name="id1" value="id">

<input type="submit" name="delete" value="delete_emp">	
<input type="text" name="id" value="id">
<input type="submit" name="search" value="search">


</form>
<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"food");
if(isset($_POST["display"]))
{
$res= mysqli_query($con,"select * from employee");
	echo "<table border='1' align='center'>";
	echo "<tr>"; echo "<th>"; echo "emp_id"; echo "</th>";
	echo "<th>"; echo "emp_name"; echo "</th>";
	echo "<th>"; echo "emp_lastname";echo "</th>";
	echo "<th>"; echo "emp_mail";echo "</th>";
	echo "<th>"; echo "emp_contact";echo "</th>";
	echo "<th>"; echo "emp_gender";echo "</th>";
echo "</tr>";
while($row= mysqli_fetch_array($res))
{
	echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["name"]; echo "</td>";
	echo "<td>"; echo $row["lname"]; echo "</td>";
	echo "<td>"; echo $row["email"]; echo "</td>";
	echo "<td>"; echo $row["no."]; echo "</td>";
	echo "<td>"; echo $row["gender"]; echo "</td>";
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
	mysqli_query($con,"delete from employee where id='$_POST[id1]'");
}
?>





<?php
$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"food");
if(isset($_POST["search"]))
{
$res= mysqli_query($con,"select * from employee where id = '$_POST[id]'");
	echo "<table border='1' align='center'>";
	echo "<tr>"; echo "<th>"; echo "emp_id"; echo "</th>";
	echo "<th>"; echo "emp_name"; echo "</th>";
	echo "<th>"; echo "emp_lastname";echo "</th>";
	echo "<th>"; echo "emp_mail";echo "</th>";
	echo "<th>"; echo "emp_contact";echo "</th>";
	echo "<th>"; echo "emp_gender";echo "</th>"; echo "</tr>";
while($row= mysqli_fetch_array($res))
{
	echo "<tr>"; echo "<th>"; echo $row["id"]; echo "</td>";
	echo "<td>"; echo $row["name"]; echo "</td>";
	echo "<td>"; echo $row["lname"]; echo "</td>";
	echo "<td>"; echo $row["email"]; echo "</td>";
	echo "<td>"; echo $row["no."]; echo "</td>";
	echo "<td>"; echo $row["gender"]; echo "</td>";
 echo "</tr>";
}
	echo "</table>";
}
?>

</body>
</html>