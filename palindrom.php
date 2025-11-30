<?php

//With built-in functions
// function isPalindrom($str)
// {
//     $str = strtolower(str_replace(' ', '', $str));
//     return $str === strrev($str);
// }

//WithOut built-in function
function isPalindrom($str)
{
    // Convert to lowercase and remove spaces manually (no str_replace or strtolower)
    $clean = '';
    //$len = strlen($str);
    $len = 0;
    while (isset($str[$len])) {
        $len++;
    }

    // Remove spaces & convert uppercase to lowercase manually
    for ($i = 0; $i < $len; $i++) {
        $ch = $str[$i];

        // Ignore spaces
        if ($ch === ' ') continue;

        // Convert A–Z to a–z manually
        if ($ch >= 'A' && $ch <= 'Z') {
            $ch = chr(ord($ch) + 32);
        }

        $clean .= $ch;
    }

    // Check palindrome by comparing characters from start & end
    $start = 0;

    //$end = strlen($clean) - 1;
    $end = 0;
    while (isset($str[$clean])) {
        $end++;
    }

    while ($start < $end) {
        if ($clean[$start] !== $clean[$end]) {
            return false;
        }
        $start++;
        $end--;
    }

    return true;
}

$string = "m a d a m";
echo "======= Output =======</br>";
echo "Original String:" . $string . "</br>";
$isPalindrom = isPalindrom($string);
echo "Is String Palindrom:" . ($isPalindrom ? 'Yes' : 'No');
