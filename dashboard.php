<?php 
	session_start();
		
	if(!isset($_SESSION['password']))
	{
		header('location:index.php');
		exit;
	}
	

?>

<!DOCTYPE html>
<html>
<head>
<title>Dashboard | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	<div class="container-dashboard">
		Welcome to the dashboard! 
		<br>
		<?php
		echo $_SESSION['password'];

		
		
		?>
		
		<a href="logout.php?logout=true" class="logout-link">Logout</a>
	</div>
</body>
</html>