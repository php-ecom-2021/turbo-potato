<?php
function get_names($members)
{
    $tempArr = [];
    foreach ($members as $membKey => $member) {
        array_push($tempArr, $member['name']);
    }
    return $tempArr;
}