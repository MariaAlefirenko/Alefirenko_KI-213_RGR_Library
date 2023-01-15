<?php

require_once '../config/connect.php';

$book_id = $_GET['books_id'];

mysqli_query($connect, "DELETE FROM `books` WHERE `books`.`books_id` = '$book_id'");

header('Location: /books.php');