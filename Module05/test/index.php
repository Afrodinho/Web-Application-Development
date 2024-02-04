<?php
    require('functions.php');
    require('game_logic.php');
    //print_r($_POST);
?>

<html>
    <head>
        <link rel="stylesheet" href="style.css">
    </head>
<body>
    <h2>Richard Naik</h2>
    <h3><?=date("F j, Y");?></h3>
    <table>
        <tr>
            <th>Player 1 Main Deck</th>
            <th>Player 1 Side Deck</th>
            <th>Player 2 Main Deck</th>
            <th>Player 2 Side Deck</th>
        </tr>
        <tr>
            <td><?= get_main('p1'); ?></td>
            <td><?= get_side('p1'); ?></td>
            <td><?= get_main('p2'); ?></td>
            <td><?= get_side('p2'); ?></td>
        </tr>
    </table>
    <br/>
    <form action="/index.php" method="post">
        <label for="p1_bet">Player 1 Bet:</label>
        <input type="text" name="p1_bet">
        <input type="submit" name="p1_hit" value="Hit">
        <input type="submit" name="p1_stand" value="Stand">
    </form>
    
    <form action="/index.php" method="post">
        <label for="p2_bet">Player 2 Bet:</label>
        <input type="text" name="p2_bet">
        <input type="submit" name="p2_hit" value="Hit">
        <input type="submit" name="p2_stand" value="Stand">
    </form>
    
    <form action="/index.php" method="post">
        <input type="submit" name="reset" value="Reset">
    </form>
</body>
</html>