<?php
require_once 'config/connect.php';

$record_id = $_GET['records_id'];

$record = mysqli_query($connect, "SELECT * FROM `records` WHERE `records_id` = '$record_id'");

$record = mysqli_fetch_assoc($record);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/createRec.php" method="post">
    <fieldset>
        <br>
        <legend><b>Add new record</b></legend>
        <p>Readers ID</p>
        <input type="number" name="readers_id">
        <p>Books ID</p>
        <input type="number" name="books_id">
        <p>Date of issue</p>
        <input type="date" name="date_of_issue">
        <p>Date of delivery</p>
        <input type="date" name="date_of_delivery"> <br> <br>
        <button  type="submit">Add new record</button>
    </fieldset>
</form>
</body>
</html>