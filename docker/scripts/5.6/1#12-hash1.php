<?php
/**
 * hash1() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function hash1($n) {
  for ($i = 1; $i <= $n; $i++) {
    $X[dechex($i)] = $i;
  }
  $c = 0;
  for ($i = $n; $i > 0; $i--) {
    if ($X[dechex($i)]) { $c++; }
  }
  print "$c\n";
}

// Run the test
hash1(50000);
