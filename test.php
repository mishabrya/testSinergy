<?php
$array = [11, 17, 6, 1, 2, 4, 3, 5, 6, 7, 8, 10, 21, 14, 15, 17, 18, 19, 2];

function search(array $array): string
{
    $tempArray = [];
    $resultArray = [];
    $start = $array[0];
    $end = 0;

    foreach ($array as $i) {
        if ($i === $start + 1) {
            if ($end === 0) {
                $tempArray[] = $start;
                $tempArray[] = $i;
                if (!empty($resultArray)) {
                    array_pop($resultArray);
                }
            } else {
                $tempArray[] = $i;
            }
            $end++;
        } else {
            if (!empty($tempArray)) {
                $resultArray[] = "{$tempArray[0]} – {$tempArray[count($tempArray) - 1]}";;
            }
            $tempArray = [];
            $resultArray[] = $i;
            $end = 0;
        }
        $start = $i;
    }
    if (!empty($tempArray)) {
        $resultArray[] = "{$tempArray[0]}–{$tempArray[count($tempArray) - 1]}";
    }
    return implode(',', $resultArray);
}

echo search($array);

?>