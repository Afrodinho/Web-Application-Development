<?php
require('connection.php');

$result = mysqli_query($con, "SELECT * FROM person");
//print_r($result);

//foreach ($result as $row)
//{
//    echo " id = " . $row['id'] . "\n";
//    echo " fname = " . $row['fname'] . "\n";
//    echo " lname = " . $row['lname'] . "\n";
//    echo " hometown = " . $row['hometown'] . "\n";
// }

?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h2>Kaden Marshall</h2>
    <h3><?=date("F j, Y"); ?></h3>

    <table>
        <tr>
            <th>ID</th>
            <th>Fname</th>
            <th>Lname</th>
            <th>Hometown</th>
        </tr>
        <?php foreach ($result as $row): ?>
        <tr>
            <td><?= $row["id"] ?></td>
            <td><?= $row["fname"] ?></td>
            <td><?= $row["lname"] ?></td>
            <td><?= $row["hometown"] ?></td>
        </tr>
        <?php endforeach; ?>
    </table>
</body>
</html>

