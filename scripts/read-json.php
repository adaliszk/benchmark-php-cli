<?php

$content = file_get_contents('data/lipsum.json');
$json = json_decode($content);

print_r($json);
