<?php

session_start();

$_SESSION['username'] = "heaven420";
$_SESSION['password'] = "heaven420";


if (isset($_POST['btnLogin'])) {

if ($_POST['txtUsername'] == $_SESSION['username']) {

if($_POST['txtPass'] == $_SESSION['password']) {
$_SESSION['messages'] = "Login Succesful";


} else {

  $_SESSION['messages'] = "Incorrect Password";


}

} else {

$_SESSION['messages'] = "This account does not exist";
}
header("Location: Loginkmt.php");

}


?>
