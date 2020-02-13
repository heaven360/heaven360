<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
<html>
<head>

<title>Create an Account</title>
<style>

*{
text-align: center;
font-family: Century Gothic;
border-radius: 25px;
font-weight: bold;
outline: none;
background-color: #A663CC;

}
.button{

background: #ECE2D0;
padding: 20px;
color: grey;
}

body {
	background-color: white;
}

.text{

padding: 15px;
margin: 15px;
outline: none;
background-color: #ECE2D0;
width: 150%;
}

.messages{

background-color: green;
color: white;
border-radius: 50px;
}

.mensahe{
background-color: red;
}

select{
	padding: 15px;
	margin: 15px;
	outline: none;
	width: 165%;

}

.details {
	margin-right: 50%;
	position: absolute;
	left: 250px;
}

.details2 {
	margin-left: 50%;
	position: absolute;
	left: 250px;
	margin-bottom: 10%;

}

.button {
    bottom: 10px;
    left: 50%;
    margin-left: -104.5px;
    transition: all 0.5s;
    cursor: pointer;
    margin: 5px;
}

.Btns {
	position: absolute;
	margin: 800px;
}

.wow {
	background-color: #ECE2D0;
}

.ews {
	background-color: #ECE2D0;
}


    </style>
</head>
<body>

<?php

if (isset($_SESSION['messages'])) {

?>

<center><div class="messages"><h1> <?php echo $_SESSION['messages']; ?></h1></div></center>

<?php
}
?>



<form action="login-process.php" method="post" >

<h1>Create an Account</h1>
<center>
<h2><form>
<div class="details">	
<h2>Account Details</h2>
<h3>Username</h3>
<input class="text" type="text" name="txtUsername" required> <br>
<h3>Email</h3>
<input class="text" type="email" name="txtEmail" required> <br>
<h3>Password</h3>
<input class="text" type="password" name="txtPass" required> <br>
<h3>Confirm Password</h3>
<input class="text" type="password" name="txtRePass" required> <br>
</div>
<div class="details2">
<h2>Profile Details</h2>
<h3>Name</h3>
<input class="text" type="name" name="txtName" required> <br>
<h3>Address</h3>
<input class="text" type="address" name="txtAddress" required> <br>
<br>
<h3>Gender</h3>
<select class="wow">
	<option class="ews">Male</option>
	<option class="ews">Female</option>
</select>
</br>
<h3>Birthday</h3>
<input class="text" type="date" name="txtBirthday" required> <br>
</div>
<div class="Btns">
	   <input class="button" type="Submit" name="btnSubmit" value="COMPLETE SIGN UP">
	   <input class="button" type="reset" name="btnClear" value="RESET">
</div>


</h2></form>

</center>

</body>
</html>