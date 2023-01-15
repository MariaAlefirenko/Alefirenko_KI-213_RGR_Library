<?php
require_once 'config/connect.php';

$reader_id = $_GET['readers_id'];

$reader = mysqli_query($connect, "SELECT * FROM `readers` WHERE `readers_id` = '$reader_id'");

$reader = mysqli_fetch_assoc($reader);

?>
<?php include("includes/header.php"); ?>

<form action="vendor/createR.php" method="post">
    <fieldset>
        <br>
        <legend><b>Add new reader</b></legend>
        <p>Full Name</p>
        <input type="text" name="name">
        <p>Birthdate</p>
        <input type="date" name="birthdate">
        <p>Address</p>
        <input type="text" name="address">
        <p>Phone</p>
        <input type="text" name="phone"> 
        <p>Email</p>
        <input type="text" name="email"><br> <br>
        <button  type="submit">Add new reader</button>
    </fieldset>
</form>
</body>
</html>