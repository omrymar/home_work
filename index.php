<?php
require_once('results.php');

$dice_type = isset($_GET['d']) ? $_GET['d'] : 5;

$count = isset($_GET['count']) ? $_GET['count'] : 1;

$min = isset($_GET['min']) ? $_GET['min'] : 3;

 for ($i = 0; $i < $count; $i++){
   echo ret_res_big_min_2($dice_type,$min,$i);
   //echo ret_res_big_min($dice_type,$min);
 }
