<?php

function countVowelsConsonent($str)
{
    $vowels = ['a', 'e', 'i', 'o', 'u'];
    $countVowels = 0;
    $countConsonants = 0;

    $str = strtolower($str);
    for ($i = 0; isset($str[$i]); $i++) {
        $ch = $str[$i];
        if (ctype_alpha($ch)) {
            if (in_array($ch, $vowels)) {
                $countVowels++;
            } else {
                $countConsonants++;
            }
        }
    }
    return [
        'vowels'      => $countVowels,
        'consonants'  => $countConsonants
    ];
}
$string = "Rajesh123";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$resultString = countVowelsConsonent($string);
echo "No of Vowels:" . $resultString['vowels'] . "</br>";
echo "No of Consonents:" . $resultString['consonants'];
