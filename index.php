<?php
session_start();
?>
<!DOCTYPE HTML>
<html> 
<head>
	<link rel="stylesheet" type="text/css" href="index.css">
</head>
<body>
	<div id="wrapper">
		<h3 id="validation">
			<?php 
				if(isset($_SESSION['errors']))
				{
					aecho $_SESSION['errors'];
				}
			 ?>
		</h3>
		<h4>Please enter your information:</h4>
		<div id="form">
			<form action="process.php" method="post">
				<input id="email" type="text" name="email"
				placeholder="email address"><br>
			</form>
		</div>
		<div id="form">
			<form action="process.php" method="post">
				<input id="first_name" type="text" name="first_name"
				placeholder="first name"><br>
			</form>
		</div>
		<div id="form">
			<form action="process.php" method="post">
				<input id="last_name" type="text" name="last_name"
				placeholder="last name"><br>
			</form>
		</div>
		<div id="form">
			<form action="process.php" method="post">
				<input id="password" type="text" name="password"
				placeholder="password"><br>
			</form>
		</div>
		<div id="form">
			<form action="process.php" method="post">
				<input id="confirm_password" type="text" name="confirm_password"
				placeholder="confirm_password"><br>
			</form>
		</div>
		<div id="form">
			<form action="process.php" method="post">
				<input id="birth_date" type="text" name="birth_date"
				placeholder="birth_date"><br>
			</form>
		</div>
	</div>
</body>
</html>
<?php
	unset($_SESSION['errors']);
?>