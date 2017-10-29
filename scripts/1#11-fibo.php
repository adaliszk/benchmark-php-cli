<?php
/**
 * fibo() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function fibo_r($n){
    return(($n < 2) ? 1 : fibo_r($n - 2) + fibo_r($n - 1));
}
function fibo($n) {
  $r = fibo_r($n);
  print "$r\n";
}

// Run the test
fibo(30);
