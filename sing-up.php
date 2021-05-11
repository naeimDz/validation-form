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
	<!-- Main Style Css -->
    <link rel="stylesheet" href="css/style.css"/>
</head>
<?php 

require "php/validation_form.php";

?>
<body class="form-v4">
	<div class="page-content">
		<div class="form-v4-content">
			<div class="form-left">
				<h2>INFOMATION</h2>
				<p class="text-1">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Et molestie ac feugiat sed. Diam volutpat commodo.</p>
				<p class="text-2"><span>Eu ultrices:</span> Vitae auctor eu augue ut. Malesuada nunc vel risus commodo viverra. Praesent elementum facilisis leo vel.</p>
				<div class="form-left-last">
				<a href="sing-in.php" >
					<input type="submit" name="account" class="account" value="Have An Account">
				</a>
				</div>
			</div>
			<form class="form-detail" action="#" method="post" id="myform">
				<h2>REGISTER FORM</h2>
				<div class="form-group">
					<div class="form-row form-row-1">
						<label for="first_name">First Name </label>
						<input type="text" name="first_name" id="first_name" class="input-text" value="<?php echo $user; ?>">
						<?php  echo $msg_error_firstname ;   ?>
					</div>
					<div class="form-row form-row-1">
						<label for="last_name">Last Name</label>
						<input type="text" name="last_name" id="last_name" class="input-text" value="<?php echo $last_name; ?>">
						<?php  echo $msg_error_lastname ;   ?>
					</div>
				</div>
				<div class="form-row">
					<label for="your_email">Your Email</label>
					<input type="text" name="your_email" id="your_email" class="input-text" value="<?php echo $email; ?>" required>
					<?php  echo $msg_error_email ;   ?>
					
				</div>
				<div class="form-group">
					<div class="form-row form-row-1 ">
						<label for="password">Password</label>
						<input type="password" name="password" id="password" class="input-text" required>
						<?php  echo $msg_error_password ;   ?><?php  echo $msg_error_re_password ;?>
					</div>
					<div class="form-row form-row-1">
						<label for="comfirm-password">Comfirm Password</label>
						<input type="password" name="comfirm_password" id="comfirm_password" class="input-text" required>
						<?php  echo $msg_error_re_password ;   ?>
					</div>
				</div>
				<div class="form-checkbox">
					<label class="container">
						<p>I agree to the <a href="#" class="text">Terms and Conditions</a></p>
						<input type="checkbox" name="checkbox" checked required>
						<span class="checkmark"></span>
					</label>
					 <?php  echo $msg_error_checkbox ;   ?>
				</div>
				<div class="form-row-last">
					<input type="submit" name="register" class="register" value="Register">
				</div>
			</form>
		</div>
	</div>
	<script src="https://code.jquery.com/jquery-1.11.1.min.js"></script>
	 <script src="js/validation_form.js"></script>
	<script>

	</script>
</body>
</html>