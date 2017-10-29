<?php
/**
 * simpleudcall() test
 * @url https://github.com/php/php-src/blob/master/Zend/bench.php
 */

function simpleudcall() {
	for ($i = 0; $i < 1000000; $i++) 
		hallo("hallo");
}
	
function hallo($a) {
	// do nothing...
}

// Run the test
simpleudcall();
