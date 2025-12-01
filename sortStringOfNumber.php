<?php

function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function sortString($str)
{
    // Step 1: Get string length
    $len = countString($str);

    // Step 2: Convert string to array manually
    $arr = [];
    for ($i = 0; $i < $len; $i++) {
        $arr[$i] = $str[$i];
    }

    // Step 3: Manual Bubble Sort
    for ($i = 0; $i < $len - 1; $i++) {
        for ($j = 0; $j < $len - $i - 1; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                // swap
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }

    // Step 4: Convert array back to string
    $sorted = "";
    for ($i = 0; $i < $len; $i++) {
        $sorted .= $arr[$i];
    }

    return $sorted;
}

echo sortString("981284");
