<?php 
	session_start();
	
	$result = '';
	
	function checkpassword($password) {
		$array = explode("\n", file_get_contents('10-million-password-list-top-1000.txt') );
		if ( in_array($password, $array) ) 
		{
			global $result;
			$result = "Bad Password";
		}
		else
		{
			global $result;
			$result = "Good Password";
		}
	}
	
	if(isset($_POST['submit']))
	{
		if(isset($_POST['password']) && $_POST['password'] !='')
		{
			$password = trim($_POST['password']);
			

			if($result == "Good Password")
			{
				$_SESSION['password'] = $password;
				
				header('location:dashboard.php');
				exit;
				
			}
			else {
			$errorMsg = "Bad Password";
			echo $errorMsg;
			};
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
<title>Login Page | PHP Login and logout example with session</title>
<link rel="stylesheet" href="style.css">
</head>

<body>
	
	<div class="container">
		<h1>PHP Login and Logout with Session</h1>
		<?php 
			if(isset($errorMsg))
			{
				echo "<div class='error-msg'>";
				echo $errorMsg;
				echo "</div>";
				unset($errorMsg);
			}
			
			if(isset($_GET['logout']))
			{
				echo "<div class='success-msg'>";
				echo "You have successfully logout";
				echo "</div>";
			}
		?>
		<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">
			<div class="field-container">
				<label>Email</label>
				<input type="email" name="email" required placeholder="Enter Your Email">
			</div>
			<div class="field-container">
				<label>Password</label>
				<input type="password" name="password" required placeholder="Enter Your Password">
			</div>
			<div class="field-container">
				<button type="submit" name="submit">Submit</button>
			</div>
			
		</form>
	</div>
</body>
</html>