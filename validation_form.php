<?php 
require "db.php";
session_start();
if(isset($_SESSION['userName'])) {
	header ("location: index.php");
}


/*
$errors = [];
$fields = ['first_name', 'address', 'your_email', 'password', 'comfirm_password'];
$optionalFields = ['last_name'];
$values = [];
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    foreach ($fields as $field) {
        if (empty($_POST[$field]) && !in_array($field, $optionalFields)) {
            $errors[] = $field;
        } else {
            $values[$field] = $_POST[$field];
        }
    }
*/

$msg_error_firstname = "";
$msg_error_lastname = "";
$msg_error_email = "";
$msg_error_password = "";
$msg_error_re_password = "";
$msg_error_checkbox ="";
$user="";
$last_name="";
$email="";
if (isset($_POST['register'])){


    $error=false;
    $user =$_POST["first_name"]; 
    $last_name = $_POST["last_name"];
    $email = $_POST["your_email"];
    $password = $_POST["password"];
    $re_password = $_POST["comfirm_password"];
    $query = "select * from user where firstName='$user' OR email='$email'";


	if ((empty($user))){
		$msg_error_firstname = "<label class='missing' for='first_name'>this field should't be left blanck</label>";
        $error=true;

	}
    else if ( strlen($user)<5){
        $msg_error_firstname = "<label class='missing' for='first_name'>this field should  be 5 achar ta ta least</label>";
        $error=true;

    }
    else if (mysqli_num_rows(mysqli_query($db,$query))>0){
        $msg_error_firstname= "<label class='missing' for='first_name'>user name  or email used before</label>";
        $error=true;
    }
	if (strlen($last_name) >0 && strlen($last_name) <5){
        $msg_error_lastname = "<label class='missing' for='last_name'>this field should  be 5 achar ta ta least</label>";
        $error=true;

    }
    if  ((empty($email))) {
		$msg_error_email = "<label class='missing' for='last_name'>this field should't be left blanck</label>";
        $error=true;

    }
	else if (!filter_var($email, FILTER_VALIDATE_EMAIL)) { 
        $msg_error_email  =   "<label class='missing' for='your_email'>Invalid format and please re-enter valid email</label>"; 
        $error=true;

    }    
    if ((empty($password)) ) {
        $msg_error_password = "<label class='missing' for='password'>this field should't be left blanck</label>";
        $error=true;
    }
    else if ($password != $re_password) {
        $msg_error_re_password = "<label class='missing' for='comfirm_password'>password not match</label>";
        $error=true;
    }
    if (!(isset($_POST["checkbox"]))){
        $msg_error_checkbox = "<label class='missing'>(*)you neded to read rules and accept</label>";
        $error=true;
    }
    if ( !$error ) {
		$query="insert into user (firstName,lastname,email,password) value ('$user','$last_name','$email','$password')";
		actiontodashboard($db, $query,$user);
    }
	}




function actiontodashboard($db, $qurr,$user){

		if(mysqli_query($db, $qurr)){
            $_SESSION["userName"]=$user;
            header ("location: index.php");
		}
		else {
			echo "something is wrong <br/>";

		}
	}
    
    
?>