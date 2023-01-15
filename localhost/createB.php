<?php
require_once 'config/connect.php';

$book_id = $_GET['books_id'];

$book = mysqli_query($connect, "SELECT * FROM `books` WHERE `books_id` = '$book_id'");

$book = mysqli_fetch_assoc($book);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/createB.php" method="post">
    <fieldset>
        <br>
        <legend><b>Add new book</b></legend>
        <p>Title</p>
        <input type="text" name="title">
        <p>Description</p>
        <textarea name="description"></textarea>
        <p>Price</p>
        <input type="number" name="price">
        <p>Number of copies</p>
        <input type="number" name="number_of_copies"> <br> <br>
        <button  type="submit">Add new book</button>
    </fieldset>
</form>
</body>
</html>