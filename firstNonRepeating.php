<?php
function findNonRepeatingChar($str)
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

    // Step 3: Find the first character whose frequency is 1
    for ($i = 0; $i < $count; $i++) {
        $ch = $str[$i];
        if ($freq[$ch] === 1) {
            return $ch;
        }
    }
}
$string = "swiss";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$firstNonRepeatingChar = findNonRepeatingChar($string);
echo "First Non Repeating Char:" . $firstNonRepeatingChar;
