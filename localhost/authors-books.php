 <?php include("includes/header.php"); ?>
 <h2> DATA FROM TABLE "AUTHORS->BOOKS"</h2>
 <a class="a1" style="margin-left: 39.25%" href="createAB.php">Add new connection between "author" and "book"</a>
<table style="margin-left: 39%">
    <tr>
        <th>Authors->Books ID</th>
        <th>Authors ID</th>
        <th>Books ID</th>
    </tr>

    <?php
            $authors_books = mysqli_query($connect, "SELECT * FROM `authors_books`");
            $authors_books = mysqli_fetch_all($authors_books);
            foreach ($authors_books as $authors_book) {
                ?>
                <tr>
                    <td><?= $authors_book[0] ?></td>
                    <td><?= $authors_book[1] ?></td>
                    <td><?= $authors_book[2] ?></td>
                    <td><a style="color: #29293d;" href="vendor/deleteAB.php?authors_books_id=<?= $authors_book[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
