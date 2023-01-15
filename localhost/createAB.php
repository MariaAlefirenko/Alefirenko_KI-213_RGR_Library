<?php
require_once 'config/connect.php';

$authors_book_id = $_GET['authors_books_id'];

$authors_book = mysqli_query($connect, "SELECT * FROM `authors_books` WHERE `authors_books_id` = '$authors_book_id'");

$authors_book = mysqli_fetch_assoc($authors_book);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/createAB.php" method="post">
    <fieldset>
        <br>
        <legend><b>Add new connection between author and book</b></legend>
        <p>Authors ID</p>
        <input type="number" name="authors_id">
        <p>Books ID</p>
        <input type="number" name="books_id"><br> <br>
        <button  type="submit">Add new connection</button>
    </fieldset>
</form>
</body>
</html>