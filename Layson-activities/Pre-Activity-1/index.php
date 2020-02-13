<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Contact Page</title>

<style>
	
*{
	font-family: Century Gothic;
	font-size: 20px;
	width: 300px;

}

</style>

</head>
<body>
<form action="process.php" method="get" name="frmContact"> 
	<input type="name" name="txtName" placeholder="Username" required><br>
	<input type="email" name="txtEmail" placeholder="Email" required>
	<br><input type="password" name="txtPass" placeholder="Password" required>
	<br><input type="contact" name="txtContact" placeholder="Contact" required>
	<br><input type="message" name="txtMsg" placeholder="Message" required>
	<br><input type="submit" value="Submit" name="btnSubmit">
    <input type="reset" value="Clear" name="btnClear">
</form>








</body>
</html>










<?php
/* Web-developer: Heaven Layson

Date-Written: January 28 2020
page: index.php
description: home page
*/
/*
   $var = '<em>Heaven Layson</em>';

echo  '<h1> Hello '.$var.' </h1>';
print('<h2> This is your first time!!</h2>');

$value =10;


if ($value % 2 == 0) {

echo 'this is an even number';

}  else {

echo 'this is an odd number';	

}


$array = array('car', 'house', 'money', 'love');


for($ctr =0 ; $ctr<4; $ctr++) {

echo 'Wish List: ' . $array[$ctr] . '<br>';

}

$cities = array('Tumana', 'Malanday', 'Fortune', 'Dela Pena', 'Parang', 'Concepcion');

echo '<select>';
     for($ctr =0; $ctr <6; $ctr++) {
     	echo '<option>' .$cities[$ctr]. '</option>';
     } 
      echo '</select>';

$arrayName = array('Red' => 'Apple', 'Orange' => 'Carrot', 'Green' => 'WaterMelon');

echo '<select>';
foreach($arrayName as $key => $value)  {
echo '<option value='.$key.'>' .$value. '</option>';

}  
echo '</select>';   
*/
?> 
