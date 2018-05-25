<?php

error_reporting(1);

$mimeAllowed = array(
    'image/gif',
    'image/png',
    'application/pdf',
    'text/plain'
);


$check = 'text/plain';
$test = in_array($check, $mimeAllowed);
var_dump($test);



?>