<html>
<head>
<meta charset="utf-8">
</head>
<body>
<?php 
	include 'db.php';	

	$sql3 = "SELECT word FROM words";
	$run3 = mysqli_query($conn,$sql3);
						
	while ($row3 = mysqli_fetch_array($run3)){
		$w = $row3[0];
			echo $w;
		}

?>

</body>
</html>
