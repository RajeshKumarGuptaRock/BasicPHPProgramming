<?php
function countArray($arr)
{
    $count = 0;
    while (isset($arr[$count])) {
        $count++;
    }
    return $count;
}
function sortArray($arr)
{
    $count = countArray($arr);
    for ($i = 0; $i < $count - 1; $i++) {
        for ($j = 0; $j < $count - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}
function checkDuplicate($arr)
{
    $sortedArray = sortArray($arr);
    $count = countArray($sortedArray);
    for ($i = 0; $i < $count - 1; $i++) {
        if ($sortedArray[$i] === $sortedArray[$i + 1]) {
            return 1;
        }
    }
    return 0;
}
$data = array(3, 6, 1, 8, 2);
echo checkDuplicate($data) ? "Duplicate element" : "No Duplicate element";
