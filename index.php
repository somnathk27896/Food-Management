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
<a href="emp.php">MANAGE EMPLOEES</a>
<a href="customer.php">MANAGE CUSTOMERS</a>

<?php echo $_SESSION["name"];//echo $_SESSION["id"];?><a href="admin_logout.php">logout</a>
</body>
</html>