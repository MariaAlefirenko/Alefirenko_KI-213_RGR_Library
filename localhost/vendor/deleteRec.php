<?php

require_once '../config/connect.php';

$record_id = $_GET['records_id'];

mysqli_query($connect, "DELETE FROM `records` WHERE `records`.`records_id` = '$record_id'");

header('Location: /records.php');