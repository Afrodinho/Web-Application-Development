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