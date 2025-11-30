<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function findMostOccurChar($str)
{
    $freq = [];
    $count = countString($str);

    for ($i = 0; $i < $count; $i++) {
        $ch = $str[$i];

        if (!isset($freq[$ch])) {
            $freq[$ch] = 1;
        } else {
            $freq[$ch]++;
        }
    }

    //Find most occuring char
    $maxChar = '';
    $maxCount = 0;

    foreach ($freq as $char => $cnt) {
        if ($cnt > $maxCount) {
            $maxCount = $cnt;
            $maxChar = $char;
        }
    }

    return $maxChar;
}
$string = "dadaameeae";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$resultString = findMostOccurChar($string);
echo "Most Occurred String:" . $resultString;
