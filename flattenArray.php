<?php
function flattenArray($arr)
{
    $result = [];
    foreach ($arr as $item) {
        if (is_array($item)) {
            $v = flattenArray($item);
            foreach ($v as $data) {
                $result[] = $data;
            }
        } else {
            $result[] = $item;
        }
    }
    return $result;
}
// Test
$input = [1, [2, 3], [4, [5, 6]], 7];
echo "<pre>";
print_r(flattenArray($input));
