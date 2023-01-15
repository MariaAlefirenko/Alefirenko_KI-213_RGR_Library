<?php

require_once '../config/connect.php';

$reader_id = $_POST['readers_id'];

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



mysqli_query($connect, "UPDATE `readers` SET `name` = '$name', `birthdate` = '$birthdate', `address` = '$address', `phone` = '$phone', `email` = '$email'  WHERE `readers`.`readers_id` = '$reader_id'");


header('Location: /index.php');