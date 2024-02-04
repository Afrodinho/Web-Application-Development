<?php
    require('functions.php');
    //print_r($_GET);
    //print_r($_POST);

    date_default_timezone_set('America/Chicago');
    echo '<p>' .date('l jS \of F Y h:i:s A'). '</p>';
?>
<html>
    </head>
        <title> Play Blackjack </title>
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
                </tr>
            </table>
            <form action="/index.php" method="post">
                <label for ="P1Bet">Player1 Bet:</label>
                    <input type="text" name= "P1Bet">
                    <input type= "Submit" name="P1Hit" value="Hit">
                    <input type= "Submit" name="P1Stand" value="Stand">
            </form>

            <form action="/index.php" method="post">
                <label for ="P2Bet">Player2 Bet:</label>
                    <input type="text" name="P2Bet">
                    <input type= "Submit" name="P2Hit" value="Hit">
                    <input type= "Submit" name="P2Stand" value="Stand">
            </form>

            <form action="/index.php" method="post">
                <input type= "submit" name ="reset" value="Reset">
            </form>

    </html>
