<?php
require_once 'config/connect.php';

$book_id = $_GET['books_id'];

$book = mysqli_query($connect, "SELECT * FROM `books` WHERE `books_id` = '$book_id'");

$book = mysqli_fetch_assoc($book);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/updateB.php" method="post">
    <fieldset>
        <br>
        <legend><b>Update Book</b></legend>
        <input type="hidden" name="books_id" value="<?= $book['books_id'] ?>">
        <p>Title</p>
        <input type="text" name="title" value="<?= $book['title'] ?>">
        <p>Description</p>
        <textarea name="description"> <?= $book['description'] ?> </textarea>
        <p>Price</p>
        <input type="number" name="price" value="<?= $book['price'] ?>">
        <p>Number of copies</p>
        <input type="number" name="number_of_copies" value="<?= $book['number_of_copies'] ?>"> <br> <br>
        <button  type="submit">Update</button>
    </fieldset>
</form>

</body>
</html>