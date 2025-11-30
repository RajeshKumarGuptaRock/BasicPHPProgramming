<?php
function bubbleSort($data)
{
    $count = count($data);
    for ($i = 0; $i < $count; $i++) {
        for ($j = 0; $j < $count - 1 - $i; $j++) {
            if ($data[$j] > $data[$j + 1]) {
                $temp = $data[$j];
                $data[$j] = $data[$j + 1];
                $data[$j + 1] = $temp;
            }
        }
    }
    return $data;
}
$data = array(5, 3, 1, 4, 7, 8);
$sortedArr = bubbleSort($data);
echo "<pre>";
print_r($sortedArr);
