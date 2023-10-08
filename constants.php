<?php

//Constants

//const STATUS_PAID = 'paid';

//echo PHP_VERSION;
//echo __LINE__;



//Variable variables
$foo = 'bar';
$$foo = 'baz';

echo nl2br($foo . $bar . "\r\n");
echo nl2br($foo . $$foo. "\r\n");




?>