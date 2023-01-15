<?php
require_once 'config/connect.php';

$author_id = $_GET['authors_id'];

$author = mysqli_query($connect, "SELECT * FROM `authors` WHERE `authors_id` = '$author_id'");

$author = mysqli_fetch_assoc($author);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/updateA.php" method="post">
    <fieldset>
        <br>
        <legend><b>Update Author</b></legend>
        <input type="hidden" name="authors_id" value="<?= $author['authors_id'] ?>">
        <p>Full Name</p>
        <input type="text" name="name" value="<?= $author['name'] ?>"> <br> <br>
        <button  type="submit">Update</button>
    </fieldset>
</form>

</body>
</html>