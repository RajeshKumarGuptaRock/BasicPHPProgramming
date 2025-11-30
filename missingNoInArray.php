<?php
function findMissingNumber($arr)
{
    $n = count($arr) + 1; // expected numbers count
    $expectedSum = ($n * ($n + 1)) / 2;
    $actualSum = 0;

    foreach ($arr as $num) {
        $actualSum += $num;
    }

    return $expectedSum - $actualSum;
}

// ==== TEST ====
$arr = [1, 3, 4, 5];
echo "Missing Number: " . findMissingNumber($arr);
