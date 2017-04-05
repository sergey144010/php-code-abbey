<?php
/**
 * Created by PhpStorm.
 * User: Sergey144010
 * Date: 05.04.2017
 * Time: 23:35
 */

/*
 * Задача №2
 */

$n = 31-1;
$sum = 0;

$str = '392 722 324 179 586 225 462 704 12 332 1223 720 425 567 1175 875 786 402 773 824 994 624 1012 541 1031 381 486 1232 778 1009 51';

$array = explode(' ',$str);
for($i=0; $i<=$n ;$i++){
    $sum = $sum+$array[$i];
};
echo $sum;