<?php

$fileName = __DIR__.'/text.txt'; 

$fh = fopen($fileName, 'r');

$header = fgets($fh);

$formatedHeader = explode(',', $header);

$records = array();

while (($line = fgets($fh)) != false){
    $records[] = explode(',', $line);
}

return array('headers' => $formatedHeader, 'data'=> $records);
