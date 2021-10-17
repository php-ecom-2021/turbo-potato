<?php
// Create an array of numbers
echo("<h4>Create an array of numbers. Create an array of strings. Create a mixed array containing each type you have used so far</h4>");
$arrOfVariousTypes = ['text', 100, 1.1];
$arr = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arrOfStrings = ['some text', 'some more text', 'some more more text'];

// Using one of the arrays you just created, try to manually navigate the array using: next(), prev().
// Remember to reset()
echo('Result of next(): ' . next($arrOfVariousTypes));
echo('<br>');
echo('Result of prev(): ' . prev($arrOfVariousTypes));
echo('<br>');
echo('Result of reset(): ' . reset($arrOfVariousTypes));

// Create an array 50-105 using a for loop
echo("<h4>Create an array with number 50-105 using a for loop</h4>");
$arrFrom50to105 = [];
for ($i = 50; $i <= 105; $i++) {
    array_push($arrFrom50to105, $i);
}
echo('<pre>');
var_dump($arrFrom50to105);
echo('</pre>');

// Create an array only containing even numbers
echo("<h4>Create an array only containing even numbers</h4>");
$arrOfEvenNumbs = [];
for ($i = 50; $i <= 105; $i++) {
    if ($i % 2 != 1) {
        array_push($arrOfEvenNumbs, $i);
    }
}
echo('<pre>');
var_dump($arrOfEvenNumbs);
echo('</pre>');

// star_trek assignment
echo("<h4>star_trek assignment</h4>");

// Assign an id property using the for loop
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
$count = count($star_trek_members);
for ($i = 0; $i < $count; $i++) {
    $member = $star_trek_members[$i];
    $member['id'] = $i;
    $star_trek_members[$i] = $member;
}
echo('<pre>');
var_dump($star_trek_members);
echo('</pre>');

// Fetch the actor's name property of the first officer
echo("<h4>Fetch the actor's name property of the first officer</h4>");
$count = count($star_trek_members);
for ($i = 0; $i < $count; $i++) {
    $member = $star_trek_members[$i];
    $rank = $member['rank'];

    if (str_contains($rank, 'officer')) {
        echo($member['name']);
        break;
    }
}

// Sort the array alphabetically based on the name property
echo("<h4>Sort the array alphabetically based on the name property</h4>");
function array_sort($array)
{
    $new_arr = [];
    $sortable_arr = [];

    if (count($array) > 0) {
        foreach ($array as $arrKey => $member) {
            if (is_array($member)) {
                foreach ($member as $membKey => $name) {
                    if ($membKey == 'name') {
                        $sortable_arr[$arrKey] = $name;
                    }
                }
            }
        }

        // sort associative arrays in ascending order, according to the value
        asort($sortable_arr);
        foreach ($sortable_arr as $sortArrKey => $member) {
            $new_arr[$sortArrKey] = $array[$sortArrKey];
        }
    }
    echo('<pre>');
    var_dump($new_arr);
    echo('</pre>');
}


array_sort($star_trek_members);

echo("<h4>Using the switch statement assign a shirt_color property to each member based on the following criteria security red, science blue and engineer yellow</h4>");
// Using the switch statement assign a shirt_color property to each member based on the following criteria security red, science blue and engineer yellow
$count = count($star_trek_members);
for ($i = 0; $i < $count; $i++) {
    $member = $star_trek_members[$i];
    $rank = $member['rank'];

    switch ($rank) {
        case str_contains($rank, 'security'):
            $member['shirt_color'] = 'red';
            $star_trek_members[$i] = $member;
            break;
        case str_contains($rank, 'science'):
            $member['shirt_color'] = 'blue';
            $star_trek_members[$i] = $member;
            break;
        case str_contains($rank, 'engineer'):
            $member['shirt_color'] = 'yellow';
            $star_trek_members[$i] = $member;
            break;
    }
}

echo('<pre>');
var_dump($star_trek_members);
echo('</pre>');
