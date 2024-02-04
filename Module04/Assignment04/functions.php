<?php

function roll($die_type, $num_rolls=1)
{
    $results = [];

    for ($i = 0; $i < $num_rolls; $i++)
    {
        $results[] = rand(1, 10);
    }
    
    return $results;
}

function roll2($die_type, $num_rolls=1)
{
    $result2 = [];

    for ($i = 0; $i < $num_rolls; $i++)
    {
        $result2[] = rand(-5, 5);
    }
    
    return $result2;
}

function main_roll()
{
    $roll= roll(10,2);
    rsort($roll);
    array_pop($roll);

    return array_sum($roll);
}

function side_roll()
{
    $roll2 = roll2(5,2);
    rsort($roll2);
    array_pop($roll2);

    return array_sum($roll2);
}
