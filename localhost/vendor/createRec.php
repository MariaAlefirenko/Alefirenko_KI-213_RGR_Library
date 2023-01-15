<?php

require_once '../config/connect.php';

$max_readers_id= mysqli_query($connect, "SELECT (MAX)readers_id FROM `readers`");
$max_books_id= mysqli_query($connect, "SELECT (MAX)books_id FROM `books`");

$readers_id = $_POST['readers_id'];
echo filter_var($readers_id, FILTER_SANITIZE_NUMBER_INT);
$books_id = $_POST['books_id'];
echo filter_var($books_id, FILTER_SANITIZE_NUMBER_INT);
$date_of_issue = $_POST['date_of_issue'];
$date_of_delivery = $_POST['date_of_delivery'];

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


mysqli_query($connect,"INSERT INTO `records` (`records_id`,`readers_id`, `books_id`, `date_of_issue`, `date_of_delivery`) VALUES (NULL, '$readers_id', '$books_id', '$date_of_issue', '$date_of_delivery')");

header('Location: /records.php');
?>