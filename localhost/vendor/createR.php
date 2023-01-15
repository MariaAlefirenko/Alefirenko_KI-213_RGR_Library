<?php

require_once '../config/connect.php';

$name = $_POST['name'];
echo filter_var($name, FILTER_SANITIZE_STRING);
$birthdate = $_POST['birthdate'];
$address = $_POST['address'];
echo filter_var($name, FILTER_SANITIZE_STRING);
echo filter_var($name, FILTER_SANITIZE_SPECIAL_CHARS);
$phone = $_POST['phone'];
$email = $_POST['email'];
echo filter_var($email, FILTER_SANITIZE_EMAIL);
if(filter_var($email,FILTER_VALIDATE_EMAIL))
{
  echo 'TRUE';
}
else
{
  echo 'FALSE';
}



mysqli_query($connect,"INSERT INTO `readers` (`readers_id`, `name`, `birthdate`, `address`, `phone`, `email`) VALUES (NULL, '$name', '$birthdate', '$address', '$phone', '$email')");

header('Location: /index.php');