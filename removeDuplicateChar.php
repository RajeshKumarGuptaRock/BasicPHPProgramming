<?php
function ShowDuplicateChar($str)
{
    //Step 1: Count string
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    // Step 2: Build frequency array using ASCII index
    $freq = [];
    $uniqueString = "";
    for ($i = 0; $i < $count; $i++) {
        $ch = $str[$i];

        if (!isset($freq[$ch])) {
            $freq[$ch] = 1;
            $uniqueString .= $ch;
        } else {
            $freq[$ch]++;
        }
    }

    return $uniqueString;
}
$string = "aswissppa";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$outputString = ShowDuplicateChar($string);
echo "Remove duplicate Char from String:" . $outputString;
