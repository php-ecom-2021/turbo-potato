<?php
$numberOfCats = 12;
$x = 12.5;
$paws = 4;
$y = "cats";
echo "this many cats: " . $numberOfCats . " has this many paws: " . ($numberOfCats*$paws);
echo "<br>";

echo 'this are my ' . $y;
echo "<br>";

$var = "true";
settype($var, 'bool');
var_dump($var); // true

$var = "false";
settype($var, 'bool');
var_dump($var); // true as well!

$var = "";
settype($var, 'bool');
var_dump($var); // false
echo "<br>";
$mystring = 'abc';
$findme   = 'd';
$pos = strpos($mystring, $findme);
if ($pos === false) {
    echo "The string '$findme' was not found in the string '$mystring'";
} else {
    echo "The string '$findme' was found in the string '$mystring'";
    echo " and exists at position $pos";
}
echo "<br>";

$numberArr = array(1,2,3,4,5);
$catsArr = array("Tom", "Kitty", "Charlie" ,"Milo");
echo "I love my cat " . $catsArr[0];
echo "<br>";

echo $numberArr[2];

echo "<br>";
echo current($catsArr);
next($catsArr);
next($catsArr);
echo "<br>";
echo current($catsArr);
reset($catsArr);
echo "<br>";
echo current($catsArr);
//$mode = next($catsArr);
//$mode = prev($catsArr);
//$mode = end($catsArr);
echo "<br>";
echo "<br>";
echo "Create an array with number 50-105 using a for loop";
echo "<br>";
$numArr = array();
for ($i =50; $i <= 105; $i++ ){
    $numArr[] = "number $i";
};

print_r($numArr);

echo "<br>";
echo "<br>";

$star_trek_members = [
    [
        'actor' => 'Walter Koenig',
        'name' => 'Pavel Chekov',
        'rank' => 'security officer.',
    ],[
        'actor' => 'Leonard Nimoy',
        'name' => 'Spock',
        'rank' => 'science officer.',
    ],[
        'actor' => 'William Shatner',
        'name' => 'James T. Kirk',
        'rank' => 'security officer',
    ],[
        'actor' => 'James Doohan',
        'name' => 'Montgomery Scott',
        'rank' => 'chief engineer.',
    ],[
        'actor' => 'Nichelle Nichols',
        'name' => 'Nyota Uhura',
        'rank' => 'communications / science officer.',
    ]
];

echo "<br/>";
for ($i = 0; $i < count($star_trek_members); $i++){
    $star_trek_members[$i]["id"] = $i + 1;
    print_r($star_trek_members[$i]);
    echo "<br/>";
};

for ($i = 0; $i < count($star_trek_members); $i++){
    if (strpos($star_trek_members [$i]["rank"], "hief")){
        print_r($star_trek_members[$i]["name"]);
    }else echo $star_trek_members[$i]["name"] . " is not chief";
    echo "<br/>";
};




