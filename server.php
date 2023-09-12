<?php

$host = "localhost";
$username = "root";
$password ="";
$database = "json_to_mysql";
$connect = mysqli_connect($host,$username,$password,$database);


if ($_SERVER["REQUEST_METHOD"] == "POST") {
$name = mysqli_real_escape_string($connect, $_POST['fullName']);
$email = mysqli_real_escape_string($connect, $_POST['email']);
$phone = mysqli_real_escape_string($connect, $_POST['phone']);

mysqli_query($connect, "INSERT INTO form_data_to_mysql(name, email, phone) VALUES ('".$name."','".$email."','".$phone."')");

mysqli_close($connect);

}else {
  echo "Morate popuniti formu i poslati je.";
}

?>