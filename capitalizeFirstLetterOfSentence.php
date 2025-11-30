<?php
function countString($str)
{
    $count = 0;
    while (isset($str[$count])) {
        $count++;
    }
    return $count;
}

function capitalizedString($str)
{
    $updatedStr = "";
    $count = countString($str);
    for ($i = 0; $i <=  $count - 1; $i++) {
        $char = $str[$i];
        if ($i == 0 ||  $str[$i - 1] == " ") {
            if ($char >= 'a' && $char <= 'z') {
                $updatedStr .= chr(ord($char) - 32);
            }
        } else {
            $updatedStr .= $str[$i];
        }
    }
    return $updatedStr;
}
$string = "rajesh is a boy";
echo "======= Output =======</br>";
echo "Input String:" . $string . "</br>";
$capString = capitalizedString($string,);
echo "Output strings: " . $capString;
