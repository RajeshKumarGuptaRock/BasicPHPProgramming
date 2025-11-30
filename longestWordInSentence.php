<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function findLongestWord($str)
{
    $longestWord = "";
    $currentWord = "";
    $count = countString($str);

    for ($i = 0; $i < $count; $i++) {
        if (isset($str[$i]) && $str[$i] != ' ') {
            $currentWord .= $str[$i];
        } else {
            if (countString($currentWord) > countString($longestWord)) {
                $longestWord = $currentWord;
            }
            $currentWord = "";
        }
    }

    return $longestWord;
}
$string = "rajesh is a boy";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$lognWord = findLongestWord($string,);
echo "Longest Word in the sentence: " . $lognWord;
