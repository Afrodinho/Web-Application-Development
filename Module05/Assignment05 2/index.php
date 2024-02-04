<?php
    session_start();
    require('functions.php');
    //print_r($_GET);
    //print_r($_POST);
    echo session_id();

    date_default_timezone_set('America/Chicago');
    echo '<p>' .date('l jS \of F Y h:i:s A'). '</p>';
?>
<html>
    </head>
        <link rel="stylesheet" href="style.css">
    </head>
<body> 
    
<?php 
    if(empty($_SESSION)) ?>
        <form action="/index.php" method="post">
            <input type = "submit" name = "BeginBame" value = "Begin">
        </form>
<?php 

else ?>
    
    <h2>Kaden Marshall</h2>

    <table>
        <tr>
            <th>Player 1 Main Deck</th>
            <th>Player 1 Side Deck</th>
            <th>Player 2 Main Deck</th>
            <th>Player 2 Side Deck</th>
        </tr>
            <td><?= main_roll('p1'); ?></td>
            <td><?= side_roll('p1'); ?></td>
            <td><?= main_roll('p2'); ?></td>
            <td><?= side_roll('p2');?></td>
        </tr>
    </table>
    <br/>
    <form action="/index.php" method="post";>
        <label for ="P1Bet">Player1 Bet</label>
            <input type="text" name= "P1Bet">
            <input type= "Submit" name="P1Hit" value="Hit">
            <input type= "Submit" name="P1Stand" value="Stand">
    </form>

    <form action="/index.php" method="post";>
        <label for ="P2Bet">Player2 Bet:</label>
            <input type="text" name="P2Bet">
            <input type= "Submit" name="P2Hit" value="Hit">
            <input type= "Submit" name="P2Stand" value="Stand">
    </form>

    <form action="/index.php" method="post";>
        <input type= "submit" name ="reset" value="Reset">
    </form>
    
</body>
</html>




<?php

   
<?php
        

    if(!empty($_POST['reset']))
    {
        reset_game();
    }
    elseif(!empty($_POST['P1Hit']))
    {
        echo '<h3>Player 1 Hit</h3>';
        echo '<h4>Bet:'.$_POST['P1Bet'].'</h4>';
    }
    elseif(!empty($_POST['P1Hit']))
    {
        echo '<h3>Player 2 Hit</h3>';
        echo '<h4>Bet:'.$_POST['P2Bet'].'</h4>';
    }    
    elseif(!empty($_POST['P1Stand']))
    {
        echo '<h3>Player 1 Stand</h3>';
    }
    elseif(!empty($_POST['P2Stand']))
    {
        echo '<h3>Player 2 Stand</h3>';
    }  



?>
    

            

