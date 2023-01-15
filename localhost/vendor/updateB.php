<?php

require_once '../config/connect.php';

$book_id = $_POST['books_id'];

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


mysqli_query($connect, "UPDATE `books` SET `title` = '$title', `description` = '$description', `price` = '$price', `number_of_copies` = '$number_of_copies'  WHERE `books`.`books_id` = '$book_id'");


header('Location: /books.php');