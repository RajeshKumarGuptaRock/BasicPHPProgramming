<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function reverseString($str)
{
    $reverseStr = "";
    $count = countString($str);
    for ($i = $count - 1; $i >= 0; $i--) {
        $reverseStr .= $str[$i];
    }
    return $reverseStr;
}
$string = "listen";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$reverseString = reverseString($string,);
echo "Reverse strings: " . $reverseString;
