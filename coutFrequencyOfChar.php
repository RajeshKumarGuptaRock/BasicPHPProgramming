<?php
function ShowFrequencyOfallChar($str)
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
    $outputString = "";
    foreach ($freq as $key => $value) {
        $outputString .= $key . " =" . $value . " , ";
    }
    return $outputString;
}
$string = "swiss";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$outputString = ShowFrequencyOfallChar($string);
echo "Show Frequency of all Char:" . $outputString;
