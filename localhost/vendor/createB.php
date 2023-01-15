<?php

require_once '../config/connect.php';

$title = $_POST['title'];
echo filter_var($title, FILTER_SANITIZE_STRING);
echo filter_var($title, FILTER_SANITIZE_SPECIAL_CHARS);
$description = $_POST['description'];
echo filter_var($description, FILTER_SANITIZE_STRING);
echo filter_var($description, FILTER_SANITIZE_SPECIAL_CHARS);
$price = $_POST['price'];
echo filter_var($price, FILTER_SANITIZE_NUMBER_INT);
$number_of_copies = $_POST['number_of_copies'];
echo filter_var($number_of_copies, FILTER_SANITIZE_NUMBER_INT);


mysqli_query($connect,"INSERT INTO `books` (`books_id`, `title`, `description`, `price`, `number_of_copies`) VALUES (NULL, '$title', '$description', '$price', '$number_of_copies')");

header('Location: /books.php');