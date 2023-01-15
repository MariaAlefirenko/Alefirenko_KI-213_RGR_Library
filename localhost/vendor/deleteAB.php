<?php

require_once '../config/connect.php';

$authors_book_id = $_GET['authors_books_id'];

mysqli_query($connect, "DELETE FROM `authors_books` WHERE `authors_books`.`authors_books_id` = '$authors_book_id'");

header('Location: /authors-books.php');