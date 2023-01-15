<?php

require_once '../config/connect.php';

$author_id = $_POST['authors_id'];
$name = $_POST['name'];
echo filter_var($name, FILTER_SANITIZE_STRING);


mysqli_query($connect, "UPDATE `authors` SET `name` = '$name'  WHERE `authors`.`authors_id` = '$author_id'");


header('Location: /authors.php');