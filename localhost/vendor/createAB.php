<?php

require_once '../config/connect.php';

$max_authors_id= mysqli_query($connect, "SELECT (MAX)authors_id FROM `authors`");
$max_books_id= mysqli_query($connect, "SELECT (MAX)books_id FROM `books`");

$authors_id = $_POST['authors_id'];
echo filter_var($authors_id, FILTER_SANITIZE_NUMBER_INT);
$books_id = $_POST['books_id'];
echo filter_var($books_id, FILTER_SANITIZE_NUMBER_INT);

if(filter_var($authors_id,FILTER_VALIDATE_INT) && ($authors_id <= $max_authors_id) )
{
  echo 'TRUE';
}
else
{
  echo 'FALSE';
}

if(filter_var($books_id,FILTER_VALIDATE_INT) && ($books_id <= $max_books_id) )
{
  echo 'TRUE';
}
else
{
  echo 'FALSE';
}

mysqli_query($connect,"INSERT INTO `authors_books` (`authors_books_id`, `authors_id`, `books_id`) VALUES (NULL, '$authors_id', '$books_id')");

header('Location: /authors-books.php');