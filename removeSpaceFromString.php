<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function removeSpaces($str)
{
    $updatedString = "";
    $count = countString($str);

    for ($i = 0; $i < $count; $i++) {
        if ($str[$i] != ' ') {
            $updatedString .= $str[$i];
        }
    }

    return $updatedString;
}
$string = " r a j e s h ";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$resultString = removeSpaces($string);
echo "Remove space from String:" . $resultString;
