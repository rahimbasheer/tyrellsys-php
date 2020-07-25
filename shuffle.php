<?php

header('Access-Control-Allow-Origin: *');

$player_card = array();
$deck = array(
    'AD', '2D', '3D', '4D', '5D', '6D', '7D', '8D', '9D', 'TD', 'JD', 'QD', 'KD',
    'AC', '2C', '3C', '4C', '5C', '6C', '7C', '8C', '9C', 'TC', 'JC', 'QC', 'KC',
    'AH', '2H', '3H', '4H', '5H', '6H', '7H', '8H', '9H', 'TH', 'JH', 'QH', 'KH',
    'AS', '2S', '3S', '4S', '5S', '6S', '7S', '8S', '9S', 'TS', 'JS', 'QS', 'KS'
);

shuffle($deck);

$people  =   $_POST['people'];
$card    =   0;
$row     =   "";
for ($k=0; $k < $people; $k++) {
    for ($i=0; $i < 13; $i++) { 
        $row.= $deck[$card].",";  
        $card++;
    }
    $player_card[$k] = rtrim($row,',');
    $row ="";
}
echo json_encode($player_card);

?>