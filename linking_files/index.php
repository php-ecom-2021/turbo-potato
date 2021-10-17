<?php
require_once('functions.php');
$members = require_once('globals.php');

$name_arr = get_names($members);

echo('<pre>');
var_dump($name_arr);
echo('</pre>');

