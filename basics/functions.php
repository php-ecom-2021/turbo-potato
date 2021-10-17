<?php
// Create a function adding two numbers and returning the result
echo("<h4>Create a function adding two numbers and returning the result</h4>");
function addNumbers($first, $second)
{
    return $first + $second;
}

$result = addNumbers(20, 20);
echo($result);

// Create a function returning the full name seperated by a single space with the following input variables
echo("<h4>Create a function returning the full name seperated by a single space with the following input variables</h4>");
function getFullname($first_name, $middle_name, $last_name)
{
    return $first_name . ' ' . $middle_name . ' ' . $last_name;
}

$full_name = getFullname('Edin', 'Edo', 'Mesanovic');
echo($full_name);

// Using func_get_args create a function that requires no arguments
echo("<h4>Using func_get_args create a function that requires no arguments</h4>");
function no_func_arg()
{
    $arg_list = func_get_args();
    $count = count($arg_list);
    if ($count == 1) {
        return true;
    } else if ($count >= 2) {
        if (gettype($arg_list[0]) == 'string' && gettype($arg_list[1]) == 'string') {
            return $arg_list[0] . ' ' . $arg_list[1];
        } else if (gettype($arg_list[0]) == 'integer' && gettype($arg_list[1]) == 'integer') {
            return $arg_list[0] + $arg_list[1];
        }
    }
}

$one_argument = no_func_arg('edo');
echo($one_argument);
echo('<br>');

//$two_arguments = no_func_arg('Edin', 'Mesanovic');
$two_arguments = no_func_arg(33, 33);
echo($two_arguments);
