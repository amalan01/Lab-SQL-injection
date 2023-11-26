<?php


$mysqli = new mysqli("localhost", "php_sqlilabs", "sqlilabs_password", "sqlilabs");
if ($mysqli->connect_errno) {
    die("Failed to connect to MySQL: " . $mysqli->connect_error);

$query = "SELECT * FROM signin WHERE username='" . 
         $_POST['username'] . "' AND password='" .
		 $_POST['password'] . "';";
$stms = mysqli_query($con, $query);
if ($stms === false){
  echo('ERROR during query execution: ');
  die(print_r(mysqli_error($con))); 
}
$row = mysqli_fetch_array($stms, MYSQLI_ASSOC);
if ($row){
  die('Logged in');
}
else{
  die('Wrong username or password');
}
?>
