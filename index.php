<?php 
require ("auth.php");

if(isset($_POST['logout'])){
	unset($_SESSION['userName']);
	header("Location: sing-in.php");

}

?>


<h1><?php echo $_SESSION["userName"]; ?></h1>
<form method="post">
<button type="submit" name="logout">logOut</button>
</form>
<p><a class="btn btn-primary" href="logout.php?id=<?php echo $_SESSION['userName']; ?>">تسجيل الخروج</a></p>
