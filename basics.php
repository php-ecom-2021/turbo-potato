<?php
// Create a variable to each of the following types

$someInteger = rand($min = 1, $max = 259);
echo('The variable $someInteger ' . 'with the value of ' . $someInteger . ' is a ' . gettype($someInteger));

$someFloat = 10.365;
echo('<br>');
echo('The variable $someFloat ' . 'with the value of ' . $someFloat . ' is a ' . gettype($someFloat));

$someStirng = 'gitgud';
echo('<br>');
echo('The variable $someStirng ' . 'with the value of ' . $someStirng . ' is a ' . gettype($someStirng));

//Calculate the sum of '1.1' + 1 - '-1' and '1,1' + 0.2 - '0.6' * 14
$sum = '1.1' + 1 - '-1';
echo('<br>');
echo($sum);

$otherSum = '1,1' + 0.2 - '0.6' * 14;
echo('<br>');
echo($otherSum);

// Arrays
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arrOfStrings = ['some text', 'some more text', 'some more more text'];
$arrOfVariousTypes = ['text', 100, 1.1];
echo('<br>');
echo(next($arrOfVariousTypes));
echo('<br>');
echo(prev($arrOfVariousTypes));
echo('<br>');
echo(reset($arrOfVariousTypes));

// Create an array 50-105 usn a for loop
$arrFrom50to105 = [];
for ($i = 50; $i <= 105; $i++) {
    array_push($arrFrom50to105, $i);
}
echo('<br>');
var_dump($arrFrom50to105);

// Create an array only containing even numbers
$arrOfEvenNumbs = [];
for ($i = 50; $i <= 105; $i++) {
    if ($i % 2 != 1) {
        array_push($arrOfEvenNumbs, $i);
    }
}
echo('<br>');
echo('<br> Create an array only containing even numbers');
echo('<br>');
var_dump($arrOfEvenNumbs);

// Assign an id property using the for loop,
$star_trek_members = [
    [
        'actor' => 'Walter Koenig',
        'name' => 'Pavel Chekov',
        'rank' => 'security officer.',
    ], [
        'actor' => 'Leonard Nimoy',
        'name' => 'Spock',
        'rank' => 'science officer.',
    ], [
        'actor' => 'William Shatner',
        'name' => 'James T. Kirk',
        'rank' => 'security officer',
    ], [
        'actor' => 'James Doohan',
        'name' => 'Montgomery Scott',
        'rank' => 'chief engineer.',
    ], [
        'actor' => 'Nichelle Nichols',
        'name' => 'Nyota Uhura',
        'rank' => 'communications / science officer.',
    ]
];
echo('<br>');
echo('<br>');
echo('<pre>');
//var_dump($star_trek_members);
//$star_trek_members[0]['id'] = 1;
//var_dump($star_trek_members[0]);

$count = 1;
$newMembers = array_map(function($item) use ($count){
    $item['id'] = $count;
    $count++;
    return $item;
}, $star_trek_members);

for ($i = 0; $i < count($star_trek_members); $i++) {
    $member = $star_trek_members[$i];
    $member['id'] = $i;
    var_dump($member);
    $star_trek_members[$i]['id'] = $i;
    $star_trek_members[$i] = $member;
}
sleep(1);
var_dump($star_trek_members);
echo('</pre>');


// Fetch the actor's name property of the first officer
echo ('<pre>');
echo ('</pre>');
$member = reset($star_trek_members);
var_dump($member);


// Sort the array alphabetically based on the name property
$star_trek_members = [
    [
        'actor' => 'Walter Koenig',
        'name' => 'Pavel Chekov',
        'rank' => 'security officer.',
    ], [
        'actor' => 'Leonard Nimoy',
        'name' => 'Spock',
        'rank' => 'science officer.',
    ], [
        'actor' => 'William Shatner',
        'name' => 'James T. Kirk',
        'rank' => 'security officer',
    ], [
        'actor' => 'James Doohan',
        'name' => 'Montgomery Scott',
        'rank' => 'chief engineer.',
    ], [
        'actor' => 'Nichelle Nichols',
        'name' => 'Nyota Uhura',
        'rank' => 'communications / science officer.',
    ]
];

function cmp($a, $b)
{
    return strcmp($a['name'], $b['name']);
}

usort($star_trek_members, "cmp");

echo('<pre>');
var_dump($star_trek_members);
echo('</pre>');
?>