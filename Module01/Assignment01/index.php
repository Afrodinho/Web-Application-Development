<?php

echo '<h1>Kaden Marshall</h1>';

$min=1;
$max=100;

echo '<p>' .rand( $min,$max). '</p>';

date_default_timezone_set('America/Chicago');
echo '<p>' .date('l jS \of F Y h:i:s A'). '</p>';

echo '<p>' ."My birthday is October 22nd". '</p>';


