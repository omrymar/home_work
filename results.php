<?php
/*
 У даному варіанті виводиться тільки число, яке задовольняє нижченаведеній умові.
 При цьому кількість рядків у яких виводяться цифри не зберігається.
  */
function ret_res_big_min($dice_type,$min){
 $change = rand(1,$dice_type);
  if ($change >= $min){
    echo "$change"."<br/>";
    echo "<br/>";
  }
}
/*
 Варіант, коли кількість рядків у яких виводяться змінні зберігається
 */
function ret_res_big_min_2($dice_type,$min,$i){
  $change = rand(1,$dice_type);
  if ($change >= $min){
    echo " $i. "." number = "." $change"."<br/>";
  }
  else {
    echo "$i."." no number "."<br/>";
  }
}