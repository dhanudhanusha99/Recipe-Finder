
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

 <link rel="stylesheet" href="bootstrap.min.css">
<br><br>
<!-- <center>
<a href='' class='btn btn-danger'>PROCESS</a>
</center> -->
<br><br>
<?php
set_time_limit(0);
error_reporting(0);
// include("eval.css");

#ini_set('max_execution_time', 400);
include("database.php");
		
		


$python=`python eval.py`;

$myFile = "out.txt";
$fh = fopen($myFile, 'r');
$items = fread($fh, filesize($myFile));
fclose($fh);
$items=trim($items);

if($items=="nodata")
{
	echo"<center><h4>No Data Found</h4></center>";
}
//$items = $_REQUEST['items'];
// echo $items;
$arr =  explode("#",$items);
$arr = array_unique($arr);
// echo "Items detected : " , $arr[i];

$c=count($arr);

foreach($arr as $i =>$key) {

   $j++;

}


//$j=sizeof($arr);
//$j--;
#echo $j;
$i=0; $abc=''; $xyz='';

// // echo $c;
// for($i=0;$i<=$c;$i++){
// 	$xyz=$xyz.$arr[$i] ;
// }
// $d=strlen($xyz);
$l=0;
for($m=0;$m<$c;$m++){
	$l=$l+strlen($arr[$m]);
}

$val=$l+($c-2);

$k=0;

if($c==2){
while($i<$j)
{
	 echo $arr[$i]. ' '; 
	
	
		if($arr[$i]!="")
		{

			if($abc=="")
			{
				
					$abc=$abc."ingre_items LIKE '$arr[$i]'";
			}
					
		}
	$i++;
}
}
else if($c>2){
while($i<$j)
{
	  echo $arr[$i]." "; 
	
	
		if($arr[$i]!="")
		{
			if($abc=="")
			{

			 	$k=$i+1;
			// 	//  ingre_items REGEXP 'tomato' and ingre_items REGEXP 'onion' ORDER BY CHAR_LENGTH(ingre_items) limit 2
			 	$abc=$abc." ingre_items REGEXP '$arr[$i]' AND ingre_items REGEXP '$arr[$k]' ";
				if($k==$j){
					$k='';
				}
			// 	//  $xyz=$xyz."ingre_items LIKE '$arr[0]','$arr[1]'";
			// 	// $abc=$abc." ingre_items LIKE '$arr[0]'" AND $abc."ingre_items LIKE '$arr[1]' ";
			
			 }
			}
		
			// else{
				
			// 	$abc=$abc." AND ingre_items LIKE '%$arr[$i]%'  ";

			// }
		
	
$i++;
}
}
//$abc=$abc." ingre_items ='xyz' ";

$sql = "SELECT * FROM recipe_list  WHERE $abc AND CHAR_LENGTH(ingre_items)=$val";
// echo $sql;
$resultArr = array();
// $sql = "SELECT * FROM recipe_list WHERE ingredients LIKE '%$arr[$i]%'  ";
$result = $con->query($sql);

if ($result->num_rows > 0) 
{
    while($row = $result->fetch_assoc()) {
		// <tr><td><img src='../admin/tbl_recipe_list/uploads/$row[photo]' width='100%' /><br></td></tr>
		
		
		
		echo"<table width='90%' align='center'> 
		<tr><th>Detected items</th></tr>
		
		<tr><th><h2>$row[name]</h2></th></tr>
		<tr><td><b>Description</b><br>$row[description]</td></tr>
	
		<tr><td><b>Ingredients</b><br>$row[ingredients]</td></tr>
			<tr><td><b>Directions</b><br>$row[directions]</td></tr>
		</table> <br><br>";
		
		
		
        
    }
}



?>


