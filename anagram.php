<?php
function sortString($str)
{
    // Step 1: count string length manually
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }

    // Convert string to character array manually
    $chars = [];
    for ($i = 0; $i < $count; $i++) {
        $chars[$i] = $str[$i];
    }

    // Step 2: Bubble Sort manually
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - $i - 1; $j++) {
            if ($chars[$j] > $chars[$j + 1]) {
                // swap
                $temp = $chars[$j];
                $chars[$j] = $chars[$j + 1];
                $chars[$j + 1] = $temp;
            }
        }
    }

    // Convert array back to string manually
    $sorted = "";
    for ($i = 0; $i < $count; $i++) {
        $sorted .= $chars[$i];
    }

    return $sorted;
}
function checkAnagram($fStr, $sStr)
{
    //Step 1: Sort string
    $firstSortedStr = sortString($fStr);
    $secondSortedStr =  sortString($sStr);

    return (strcmp($firstSortedStr, $secondSortedStr) === 0);
}
$firstString = "listen";
$secondString = "silent";
echo "======= Output =======</br>";
echo "First String:" . $firstString . "</br>";
echo "Second String:" . $secondString . "</br>";
$isAnagram = checkAnagram($firstString, $secondString);
echo "Are both strings Anagram? : " . ($isAnagram ? "Yes" : "No");
