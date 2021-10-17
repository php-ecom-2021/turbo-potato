<?php
// var_dump the contents of $_SERVER, $_GET and $_POST

// GET contain all Query Parameters
// POST contain all POST parameters
// SERVER contains everything related to the request

//echo('<pre>');
//var_dump($_SERVER);
//var_dump($_GET);
//var_dump($_POST);
//echo('</pre>');

// Use the template as a starting point and add conditions to handle the POST action
echo('<pre>');
var_dump($_POST);
echo('</pre>');