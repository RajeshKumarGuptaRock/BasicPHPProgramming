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

    for ($i = 0; $i < $count; $i++) {
        $ch = $str[$i];

        if (!isset($freq[$ch])) {
            $freq[$ch] = 1;
        } else {
            $freq[$ch]++;
        }
    }
    // Step 3:Find duplicate characters
    $duplicate = "";
    $first = true;
    foreach ($freq as $key => $value) {
        if ($value > 1) {
            if (!$first) {
                $duplicate .= ",";
            }
            $duplicate .= $key;
            $first = false;
        }
    }
    return $duplicate;
}
$string = "aswissppa";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$outputString = ShowDuplicateChar($string);
echo "Show duplicate Char from String:" . $outputString;
