<!DOCTYPE html>
<?php
include('database.php');
include('header.php');
?>
<html>
<body>
	<div class="container">
		<div id="row" style="margin-top:100px;">
		<?php
				$sel="select * from dite_catagory";
				$result=mysqli_query($con,$sel);
				$check=mysqli_num_rows($result)>0;
				if($check)
				{
					while($row=mysqli_fetch_array($result))
					{
			?>
					<div class='col-md-6 text-center'>
						<a href="recipes.php?cat=<?php echo $row['id']; ?>"><img src="../admin-temp/images/<?php echo "$row[image]";?>" width='200px' alt="Image" /></a>
							<h2><a href="index.php"><?php echo $row['name']; ?></a></h2>
							
							<h2><a href='planc.php?id=<?php echo $row['id']; ?>'class='btn btn-danger'>VIEW NOW</a></h3>
					
					
					</div>
				<?php
					}
				}
				else
				{
					echo "no found";
					
				}
			?>
		</div>
	</div>
</body>
</html>
<?php
include('footer.php');
?>