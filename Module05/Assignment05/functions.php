<?php

function main_roll($player)
{
    $deck = '';

    for ($i=0; $i < 1; $i++)
    {
        $card = rand(1, 10);
        $deck .= "$card";
    }
    
    return $deck;
}


function side_roll()
{
    $deck = '';

    for ($i=0; $i < 3; $i++)
    {
        $card = rand(-5,5);
        $deck .= "$card,";
        
    }
    
    return $deck;
}

function reset_game()
{
    echo '<h3>Reset</h3';
}
