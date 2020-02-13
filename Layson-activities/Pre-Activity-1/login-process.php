<?php 
session_start();

$_SESSION['username'] = "heaven360";
$_SESSION['password'] = "heaven360";

if (isset($_POST['btnLogin'])) {

	if ($_POST['txtUsername'] == $_SESSION['username']){

		if ($_POST['txtPass'] == $_SESSION['password']){

			$_SESSION['message'] = "Login successfully";
			header("Location:LoginForm.php?");

		}   else{

			$_SESSION['message2'] = "Incorrect password";
		
		}
	}  else{
		$_SESSION['message2'] = "This account does not exist";
	}

}




?>