<?php
/**
 *Sample Input 2
 * Sample Output
 * 2 x 1 = 2
 * 2 x 2 = 4
 * 2 x 3 = 6
 * 2 x 4 = 8
 * 2 x 5 = 10
 * 2 x 6 = 12
 * 2 x 7 = 14
 * 2 x 8 = 16
 * 2 x 9 = 18
 * 2 x 10 = 20
 */
$n =3;
for($i=0;$i<10;$i++){
    echo $n." x ".($i+1)." = ".($n*($i+1))."\n";
}