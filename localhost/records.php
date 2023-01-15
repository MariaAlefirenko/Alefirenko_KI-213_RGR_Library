 <?php include("includes/header.php"); ?>
 <h2> DATA FROM TABLE "RECORDS"</h2>
 <a class="a1" style="margin-left:58%;" href="createRec.php">Add new record</a>
<table style="margin-left:35%;">
    <tr>
        <th>Records ID</th>
        <th>Readers ID</th>
        <th>Books ID</th>
        <th>Date of issue</th>
        <th>Date of delivery</th>
    </tr>

    <?php
            $records = mysqli_query($connect, "SELECT * FROM `records`");
            $records = mysqli_fetch_all($records);
            foreach ($records as $record) {
                ?>
                <tr>
                    <td><?= $record[0] ?></td>
                    <td><?= $record[1] ?></td>
                    <td><?= $record[2] ?></td>
                    <td><?= $record[3] ?></td>
                    <td><?= $record[4] ?></td>
                    <td><a style="color: #29293d;" href="vendor/deleteRec.php?records_id=<?= $record[0] ?>">Delete</a></td>
                </tr>
                <?php
            }
            ?>
        </table>
    </body>
    </html>
