<?php

// Create a variable to each of the following types integer, float and string
echo("<h4>Create a variable to each of the following types integer, float and string</h4>");
$someInteger = rand($min = 1, $max = 259);
echo('The variable $someInteger ' . 'with the value of ' . $someInteger . ' is a ' . gettype($someInteger));

echo('<br>');
$someFloat = 10.365;
echo('The variable $someFloat ' . 'with the value of ' . $someFloat . ' is a ' . gettype($someFloat));

echo('<br>');
$someStirng = 'gitgud';
echo('The variable $someStirng ' . 'with the value of ' . $someStirng . ' is a ' . gettype($someStirng));

// Using the variables you just created try to use concatenation (.)
echo("<h4>Using the variables you just created try to use concatenation (.)</h4>");
$concat = $someInteger . $someFloat . $someStirng;
echo($concat);

// Make two examples one where you utilize single quotation ' and one where you use double quotation "
$single = 'some text';
$double = "some more text";

// Mess arround with PHP's Dynamic casting feature
echo("<h4>Add a number and a string. Subtract two strings. Calculate the sum of '1.1' + 1 - '-1' and '1,1' + 0.2 - '0.6' * 14;</h4>");
$sum = '1.1' + 1 - '-1';
echo($sum);

echo('<br>');
$otherSum = '1.1' + 0.2 - '0.6' * 14;
echo($otherSum);

// Learn how to use strpos to find the position of a string within another
echo("<h4>learn how to use strpos to find the position of a string within another</h4>");
$tempStr = 'gitgud';
$find = 'gud';

$pos = strpos($tempStr, $find);
echo(substr($tempStr, $pos));
