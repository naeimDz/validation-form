<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Form-v4 by Colorlib</title>
	<!-- Mobile Specific Metas -->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
	<!-- Font-->
	<link rel="stylesheet" type="text/css" href="css/opensans-font.css">
	<link rel="stylesheet" type="text/css" href="fonts/line-awesome/css/line-awesome.min.css">
	<!-- Jquery -->
	<link rel="stylesheet" href="https://jqueryvalidation.org/files/demo/site-demos.css">
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<?php 
require "db.php";
session_start();
$message_error="";
		if(isset($_SESSION['userName'])) {
			header ("location: index.php");
		}
		if (isset($_POST["singIn"])){
		$user = $_POST["first_name"];
		$password = $_POST["password"];
			checkUserDb($user,$password,$db);
		}

	function checkUserDb ($user,$password,$db){
	$query = "select * from user where firstName='$user' && password='$password'";
	if (mysqli_num_rows(mysqli_query($db,$query))>0) {
		$_SESSION["userName"]=$user;
		header ("location: index.php");
		}
	else {
			
		$message_error= "<label class='missing'>name or password is wrong</label>";
	}
}



?>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				<div class="form-left-last">
					<a href="sing-up.php" >
					<input type="button" action="singIn" name="account" class="account" value="Sing-up">
					</a>
				</div>
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
				<h2>Welcome back</h2>

				<div class="form-row">
					<label for="your_email">name</label>
					<input type="text" name="first_name" id="your_email" class="input-text" >
				</div>
				<div class="form-row">
				<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" >
						<?php echo $message_error; ?>
				</div>
				
				<div class="form-checkbox">
					<label class="container"><p>Remmember me </p>
					  	<input type="checkbox" name="checkbox">
					  	<span class="checkmark"></span>
					</label>
				</div>
				<div class="form-row-last">
					<input type="submit" name="singIn" class="register" value="Sing-In">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/jquery.validate.min.js"></script>
	<script src="https://cdn.jsdelivr.net/jquery.validation/1.16.0/additional-methods.min.js"></script>
	<script>
	</script>
</body>
</html>