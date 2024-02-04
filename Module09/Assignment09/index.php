<?php
session_start();
$con = mysqli_connect("172.22.0.2", "dbuser", "dbpass","db");
$result = mysqli_query($con,
"SELECT * FROM calendar WHERE user_id =' " . $_SESSION["user_id"]."'");
?>

<html>
    <head>
        <title> Assignment09 Login Page</title>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <div>
    <?php if (isset($_SESSION['username'])): ?>
        <h1>Welcome <?= $_SESSION['username'] ?>. Click here to <a href="logout.php" title="Logout">Logout</a></h1>
        <h2>Kaden Marshall Assignment09</h2>
        
        <h3><?=date("d-m-y h:i:s");?></h3>
    <table>
        <tr>
            <th>ID</th>
            <th>User ID</th>
            <th>Title</Title></th>
            <th>Description</th>
            <th>Date</th>
        </tr>
            <?php foreach ($result as $row): ?>
            <tr>
                <td><?= $row["id"] ?></td>
                <td><?= $row["user_id"] ?></td>
                <td><?= $row["title"] ?></td>
                <td><?= $row["description"] ?></td>
                <td><?= $row["date"] ?></td>
            </tr>


            <?php endforeach; ?>
        <?php else: ?>
            <h1>Hello!<a href="login.php" title="login"> Log in</a> here</h1>
        <?php endif; ?>

        </table>


        </div>
</body>
</html>

