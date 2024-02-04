<?php
    require('functions.php');
?>
<html>
<link rel="stylesheet" href="style.css">
</head>
    <body>
        <h2>Kaden Marshall</h2>
        <table>
            <tr>
                <th>Player 1 Main Deck</th>
                <th>Player 1 Side Deck</th>
                <th>Player 2 Main Deck</th>
                <th>Player 2 Side Deck</th>
            </tr>
                <td><?= main_roll(); ?></td>
                <td><?= side_roll(),",", side_roll(),",", side_roll() ?></td>
                <td><?= main_roll(); ?></td>
                <td><?= side_roll(),",", side_roll(),",", side_roll() ?></td>

                