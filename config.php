<?php
define('HOST', "localhost");
define('USERNAME', "template_user");
define('PASSWORD', "NotPassword");
define('DATABASE_NAME', "crud_template");

$conn = mysqli_connect(HOST, USERNAME, PASSWORD, DATABASE_NAME);

if(!$conn){
  echo '<h1> CONNECTION ERROR... </h1>';
  echo '<p>'.mysqli_connect_error().'</p>';
}
?>