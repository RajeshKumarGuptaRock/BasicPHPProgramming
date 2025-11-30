<?php

function reverseString($str)
{
    // Count
    //$count = strlen($str);
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }

    $reverse = "";
    for ($i = $count - 1; $i >= 0; $i--) {
        $reverse .= $str[$i];
    }
    return $reverse;
}
$string = "Rajesh";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$reversString = reverseString($string);
echo "Reverse String:" . $reversString;
