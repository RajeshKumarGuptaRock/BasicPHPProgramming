<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function checkAnyDigit($str)
{
    $isFound = 0;
    $count = countString($str);

    for ($i = 0; $i < $count; $i++) {
        if ($str[$i] >= 0 && $str[$i] <= 9) {
            return 1;
        }
    }

    return 0;
}
$string = "1rrree23456";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$isFound = checkAnyDigit($string,);
echo "Given string have digit: " . ($isFound ? 'Yes' : 'No');
