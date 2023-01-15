<?php

require_once '../config/connect.php';

$name = $_POST['name'];
echo filter_var($name, FILTER_SANITIZE_STRING);

mysqli_query($connect,"INSERT INTO `authors` (`authors_id`, `name`) VALUES (NULL, '$name')");

header('Location: /authors.php');