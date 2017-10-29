<?php
/**
 * ary3() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function ary3($n) {
  for ($i=0; $i<$n; $i++) {
    $X[$i] = $i + 1;
    $Y[$i] = 0;
  }
  for ($k=0; $k<1000; $k++) {
    for ($i=$n-1; $i>=0; $i--) {
      $Y[$i] += $X[$i];
    }
  }
  $last = $n-1;
  print "$Y[0] $Y[$last]\n";
}

// Run the test
ary3(2000);
