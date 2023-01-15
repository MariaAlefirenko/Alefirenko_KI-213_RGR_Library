 <?php include("includes/header.php"); ?>
 <h2> DATA FROM TABLE "BOOKS"</h2>
 <a class="a1" href="createB.php">Add new book</a>
<table>
    <tr>
        <th>Books ID</th>
        <th>Title</th>
        <th>Description</th>
        <th>Price</th>
        <th>Number of copies</th>
    </tr>

    <?php
            $books = mysqli_query($connect, "SELECT * FROM `books`");
            $books = mysqli_fetch_all($books);
            foreach ($books as $book) {
                ?>
                <tr>
                    <td><?= $book[0] ?></td>
                    <td><?= $book[1] ?></td>
                    <td><?= $book[2] ?></td>
                    <td><?= $book[3] ?></td>
                    <td><?= $book[4] ?></td>
                    <td><a href="updateB.php?books_id=<?= $book[0] ?>">Update</a></td>
                    <td><a style="color: #29293d;" href="vendor/deleteB.php?books_id=<?= $book[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
