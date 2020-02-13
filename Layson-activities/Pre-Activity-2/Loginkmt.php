<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>

<title>Login</title>
<style>

*{
text-align: center;
font-family: Century Gothic;
border-radius: 25px;
font-weight: bold;

}
.button{

background: white;
padding: 10px;
color: grey;
outline: none;
}

body {
	background-color: #E56399;
}

.text{

padding: 15px;
margin: 15px;
outline: none;
background-color: #0A2342;
}

.messages{

background-color: green;
color: white;
border-radius: 50px;
}

.mensahe{
background-color: red;
}


    </style>
</head>
<body>

<?php

if (isset($_SESSION['messages']) !=NULL) {

?>

<center><div class="messages"><h1> <?php echo $_SESSION['messages']; ?></h1></div></center>

<?php
}
?>

<form action="login-process.php" method="post" >

<h1>Login</h1>
<center>
<h2><form>

<input class="text" type="text" name="txtUsername" placeholder="Username" required> <br>
<input class="text" type="password" name="txtPass" placeholder="Password" required> <br>
    <input class="button" type="Submit" name="btnLogin" value="Submit" >
</h2></form>

</center>

</body>
</html>
