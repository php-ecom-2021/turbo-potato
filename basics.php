<?php
    //Create a variable to each of the following types:
    $integer = 3;
    $float = 3.14;
    $string = 'Some string';

    //Using the variables you just created, try to use concatenation
    //Make two examples one where you utilize single quotation ' and one where you use double quotation "
    $a = 'Hello';
    $b = " world";

    print $a . $b . ' ' . $integer;
    print "</br>";

    //Mess around with PHP's Dynamic casting feature
    print '3' + 3;
    print "</br>";

    print '1' - '11';
    print "</br>";

    print '1.1' + 1 - '-1';
    print "</br>";

    $abc = '1.1' + 0.2 - '0.6' * 14;
    print $abc;
    print "</br>";

    //learn how to use strpos to find the position of a string within another string
    $lookIn = 'Random';
    $lookFor = 'and';
    print strpos($lookIn, $lookFor);
    print "</br>";

    //Array
    //Create an array of numbers
    $arr_nums = array(1, 2, 3, 4, 5, 6, 7, 8, 9);
    //Create an array of strings
    $arr_str = array('a', 'b', 'c', 'd', 'e', 'f', 'g');
    //Create a mixed array containing each type you have used so far
    $arr_mix = array(1, 'a', 1.1, 'b', 2, 'c', 2.2);

    //print '<pre>';
    //    var_dump($arr_nums);
    //    print "</br>";
    //    var_dump($arr_str);
    //    print "</br>";
    //    var_dump($arr_mix);
    //    print "</br>";
    //print '</pre>';

    //Loops
    //Using one of the arrays you just created, try to manually navigate the array
    $next_arr_nums = current($arr_nums);
    $next_arr_nums = next($arr_nums);
    //current() - Return the current element in an array
    //end() - Set the internal pointer of an array to its last element
    //prev() - Rewind the internal array pointer
    //reset() - Set the internal pointer of an array to its first element
    //each() - Return the current key and value pair from an array and advance the array cursor

    //Create an array with number 50-105 using a for loop
    $arr_50_105 = [];
    for($i =50; $i<105; $i++){
        array_push($arr_50_105, $i);
    }
    //var_dump($arr_50_105);

    //Create an array only containing even numbers
    $arr_even = [];
    for($i =50; $i<105; $i++){
        if( $i % 2 === 0) {
            array_push($arr_even, $i);
        }
    }
    //var_dump($arr_even);

    $star_trek_members = [
        [
            'actor' => 'Walter Koenig',
            'name' => 'Pavel Chekov',
            'rank' => 'security officer.'
        ],
        [
            'actor' => 'Leonard Nimoy',
            'name' => 'Spock',
            'rank' => 'science officer.'
        ],
        [
            'actor' => 'William Shatner',
            'name' => 'James T. Kirk',
            'rank' => 'security officer'
        ],
        [
            'actor' => 'James Doohan',
            'name' => 'Montgomery Scott',
            'rank' => 'chief engineer.'
        ],
        [
            'actor' => 'Nichelle Nichols',
            'name' => 'Nyota Uhura',
            'rank' => 'communications / science officer.'
        ]
    ];

    for($i = 0; $i < count($star_trek_members); $i++){
        $member = $star_trek_members[$i];
        $member['id'] = $i;
        $star_trek_members[$i] = $member;

    }
    //var_dump($star_trek_members);

    for($i = 0; $i < count($star_trek_members); $i++){
        if(strpos($star_trek_members[$i]['rank'], 'officer')){
            echo $star_trek_members[$i]['name'];
            break;
        }
    }


