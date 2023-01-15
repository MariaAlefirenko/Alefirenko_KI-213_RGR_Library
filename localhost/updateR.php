<?php
require_once 'config/connect.php';

$reader_id = $_GET['readers_id'];

$reader = mysqli_query($connect, "SELECT * FROM `readers` WHERE `readers_id` = '$reader_id'");

$reader = mysqli_fetch_assoc($reader);
?>
<?php include("includes/header.php"); ?>

<form action="vendor/updateR.php" method="post">
    <fieldset>
        <br>
        <legend><b>Update Reader</b></legend>
        <input type="hidden" name="readers_id" value="<?= $reader['readers_id'] ?>">
        <p>Full Name</p>
        <input type="text" name="name" value="<?= $reader['name'] ?>">
        <p>Birthdate</p>
        <input type="date" name="birthdate" value="<?= $reader['birthdate'] ?>">
        <p>Address</p>
        <input type="text" name="address" value="<?= $reader['address'] ?>">
        <p>Phone</p>
        <input type="text" name="phone" value="<?= $reader['phone'] ?>">
        <p>Email</p>
        <input type="text" name="email" value="<?= $reader['email'] ?>"> <br> <br>
        <button  type="submit">Update</button>
    </fieldset>
</form>

</body>
</html>