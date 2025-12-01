<?php
function bubbleSort($arr)
{
    $n = count($arr);
    for ($i = 0; $i < $n - 1; $i++) {
        for ($j = 0; $j < $n - 1 - $i; $j++) {
            if ($arr[$j] > $arr[$j + 1]) {
                $temp = $arr[$j];
                $arr[$j] = $arr[$j + 1];
                $arr[$j + 1] = $temp;
            }
        }
    }
    return $arr;
}


function findPairsTwoPointer($arr, $target)
{
    $arr = bubbleSort($arr);  // custom sort
    $left = 0;
    $right = count($arr) - 1;

    while ($left < $right) {
        $sum = $arr[$left] + $arr[$right];

        if ($sum == $target) {
            echo "(" . $arr[$left] . ", " . $arr[$right] . ")\n";
            $left++;
            $right--;
        } elseif ($sum < $target) {
            $left++;
        } else {
            $right--;
        }
    }
}

$arr = [2, 4, 3, 5, 6, -1, 8];
$target = 7;

findPairsTwoPointer($arr, $target);
