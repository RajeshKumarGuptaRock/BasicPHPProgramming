<?php
function rotateRight($arr, $times)
{
    $n = count($arr);
    $times = $times % $n; // avoid overflow

    for ($t = 0; $t < $times; $t++) {

        // store last element
        $last = $arr[$n - 1];

        // shift all elements to the right
        for ($i = $n - 1; $i > 0; $i--) {
            $arr[$i] = $arr[$i - 1];
        }

        // move last element to first position
        $arr[0] = $last;
    }

    return $arr;
}

$arr = [1, 2, 3, 4, 5];
print_r(rotateRight($arr, 2));
