 <?php include("includes/header.php"); ?>
 <h2> DATA FROM TABLE "AUTHORS"</h2>
 <a class="a1" style="margin-left: 56.5%" href="createA.php">Add new author</a>
<table style="margin-left: 36%">
    <tr>
        <th>Authors ID</th>
        <th>Full Name</th>
    </tr>

    <?php
            $authors = mysqli_query($connect, "SELECT * FROM `authors`");
            $authors = mysqli_fetch_all($authors);
            foreach ($authors as $author) {
                ?>
                <tr>
                    <td><?= $author[0] ?></td>
                    <td><?= $author[1] ?></td>
                    <td><a href="updateA.php?authors_id=<?= $author[0] ?>">Update</a></td>
                    <td><a style="color: #29293d;" href="vendor/deleteA.php?authors_id=<?= $author[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
