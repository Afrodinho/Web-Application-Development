<?php

    if(!empty($_POST['reset']))
    {
        reset_game();
    }
    elseif(!empty($_POST['p1_hit']))
    {
        echo '<h3>Player 1 Hit</h3>';
        echo '<h4>Bet:'.$_POST['p1_bet'].'</h4>';
    }
    elseif(!empty($_POST['p2_hit']))
    {
        echo '<h3>Player 2 Hit</h3>';
        echo '<h4>Bet:'.$_POST['p2_bet'].'</h4>';
    }    
    elseif(!empty($_POST['p1_stand']))
    {
        echo '<h3>Player 1 Stand</h3>';
    }
    elseif(!empty($_POST['p2_stand']))
    {
        echo '<h3>Player 2 Stand</h3>';
    }  