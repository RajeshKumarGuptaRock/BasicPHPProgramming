<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function stringToNumber($str)
{
    $num = 0;
    $count = countString($str);

    for ($i = 0; $i < $count; $i++) {
        // Convert char to digit manually
        if ($str[$i] >= '0' && $str[$i] <= '9') {
            $digit = ord($str[$i]) - ord('0');
        } else {
            return "Invalid: Non-digit found";
        }

        // Add to number (manual calculation)
        $num = $num * 10 + $digit;
    }

    return $num;
}
$string = "0001234500";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$resultNo = stringToNumber($string,);
echo "convert string to number: " . $resultNo;
