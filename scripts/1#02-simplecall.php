<?php
/**
 * simplecall() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function simplecall() {
	for ($i = 0; $i < 1000000; $i++) 
		strlen("hallo");
}

// Run the test
simplecall(7);
