<?php
/**
 * simpleucall() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function hallo($a) {
	// do nothing...
}

function simpleucall() {
	for ($i = 0; $i < 1000000; $i++) 
		hallo("hallo");
}

// Run the test
simpleucall(7);
