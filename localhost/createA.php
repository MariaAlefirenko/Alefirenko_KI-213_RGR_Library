<?php
require_once 'config/connect.php';

$author_id = $_GET['authors_id'];

$author = mysqli_query($connect, "SELECT * FROM `authors` WHERE `authors_id` = '$author_id'");

$author = mysqli_fetch_assoc($author);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/createA.php" method="post">
    <fieldset>
        <br>
        <legend><b>Add new author</b></legend>
        <p>Full name</p>
        <input type="text" name="name"> <br> <br>
        <button  type="submit">Add new author</button>
    </fieldset>
</form>
</body>
</html>