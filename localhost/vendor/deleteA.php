<?php

require_once '../config/connect.php';

$author_id = $_GET['authors_id'];

mysqli_query($connect, "DELETE FROM `authors` WHERE `authors`.`authors_id` = '$author_id'");

header('Location: /authors.php');