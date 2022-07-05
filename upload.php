<html>
<head>
	<meta charset="UTF-8" />
	<title>Home - Recipe Finder</title>
	<link rel="stylesheet" type="text/css" href="css/style.css" />
	<!--<link rel="stylesheet" type="text/css" href="../css/main.css">
	<link rel="stylesheet" type="text/css" href="../css/util.css">-->
	<!--[if IE 9]>
		<link rel="stylesheet" type="text/css" href="css/ie9.css" />
	<![endif]-->
	<!--[if IE 7]>
		<link rel="stylesheet" type="text/css" href="css/ie7.css" />
	<![endif]-->
	<!--[if IE 6]>
		<link rel="stylesheet" type="text/css" href="css/ie6.css" />
	<![endif]-->
	
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
   <link rel="stylesheet" href="assets/css/style-freedom.css">
</head>
<body>
	
	<?php
	error_reporting(0);
	session_start();
	if($_SESSION['user']=="user")

	{
		echo" WELCOME $_SESSION[name] ";
	}
		?>
		</span>
	<div id="page">
		<div id="header">
		<div>
			<a href="index.html"><img src="images/logo.gif" alt="Logo" /></a>
		</div>
		<ul>
			<li><a href="Login/login.php"><i class="fa fa-user"></i> Logout</a></li>
		
			
		</ul>
	</div>
		<div id="content">
		<div class="container-login100" style="background-color:#f3e1e9">
			<div class="wrap-login100 p-l-50 p-r-50 p-t-77 p-b-30">
				<form class="login100-form validate-form" method="POST" enctype="multipart/form-data"method="POST" enctype="multipart/form-data">
					<br>
					<h4>File:</h4> <br>
					<input type="file" name="f1" required   style="background-color: white"><br><br>
					<input type="submit" name="submit" value="Submit" class='btn btn-success'>
				</form>
			</div>
        </div>
		
		
			<?php
			set_time_limit(0);
			if(isset($_POST['submit']))
			{
				move_uploaded_file($_FILES['f1']['tmp_name'],"uploads/test.jpg");
				$img=$_FILES['f1']['name'];
				
				echo"<br>";

			echo "<script>
				window.location='eval.php';
			      </script>";
				
			}   
			?>
		
        </div>		
</body>
</html>