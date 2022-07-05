<!DOCTYPE html>
<!-- Website template by freewebsitetemplates.com -->
<?php
include('database.php');

include("header.php");
error_reporting(0);
if($_REQUEST['a']=="error")
{
	?>
    <script>alert("USERNAME OR PASSWORD ERROR !!!!!")</script>
    <?php
}
if($_REQUEST['st']=="logout")
{
	
	session_start();
	$_SESSION['user'] ="";
	session_unset();
	session_destroy();
	
	header("location:index.php");
}
if($_REQUEST['a']=="1")
{
	session_start();
	session_unset();
	?>
	 <script>alert("Registration Sucessfully")</script>
	 <?php
	header("location:index.php");
}
if($_REQUEST['a']=="2")
{
	session_start();
	session_unset();
	?>
	 <script>alert("Registration Failed")</script>
	 <?php
	header("location:index.php");
}
if($_REQUEST['st']=="payment")
{
	?>
    <script>alert("Ordered Sucessfully")</script>
    <?php
}
if($_REQUEST['st']=="payment1")
{
	?>
    <script>alert("Payment Sucessfully")</script>
    <?php
}
if($_REQUEST['st']=="payment0")
{
	?>
    <script>alert("Failed !!!!")</script>
    <?php
}
?>





<html>
<body>
		<div id="content">
			<span class="background"></span>
			<div id="home">
				<ul>
					<li class="first">
						<a href="index.php"><img src="images/vegetables.jpg" alt="Image"/></a>
						<p>Recipe Finder</p>
					</li>
					<li>
						<a href="index.html"><img src="images/pastries.jpg" alt="Image"/></a>
						<p>Recipe Finder</p>
					</li>
				</ul>
				<div>
					<a href="index.php"><img src="images/strawberry-pastry.jpg" alt="Image" /></a>
					<h1><a href="index.php"><span>Secrets of</span> <br />Healthy eating</a></h1>
					<p>Supercook is a recipe search engine that lets you search by ingredients you have at home. Find thousands of recipes you can make right now </p>
				</div>
			</div>
			</div>
		

<?php
include("footer.php");
?>