<?php

require_once '../config/connect.php';

$reader_id = $_GET['readers_id'];

mysqli_query($connect, "DELETE FROM `readers` WHERE `readers`.`readers_id` = '$reader_id'");

header('Location: /index.php');