<?php

session_start();

$txtUsername = $_SESSION['email']
$txtPass = $_SESSION['password']


if (isset($_SESSION['btnLogin'])) {

if ($_SESSION['txtUsername'] == $_SESSION['username']) {

if($_SESSION['txtPass'] == $_SESSION['password']) {
$_SESSION['messages'] = "Login Succesful";


} else {

  $_SESSION['messages'] = "Incorrect Password";


}

} else {

$_SESSION['messages'] = "This account does not exist";
}

header("Location: Registration.php");

}


?>
