<?php
$arr = [1, 3, 5, 7, 7, 8, 9, 8, 10, 5, 6, 7, 10, 1, 6, 13];
// сначала сортирруем его используя голубиную сортировку, так как она лучше всего подходит для масивов с 
// повторяющимися значениями
function __addDictionary(int $n, array &$dictionary): void
{
    if (isset($dictionary[$n])) {
        $dictionary[$n]++;
        return;
    }
    $dictionary[$n] = 1;
}


function pigeonholeSort(array $list): array
{
    if (empty($list)) {
        return [];
    }
    $min = $list[0];
    $max = $list[0];
    $dictionary = [];
    foreach ($list as $n) {
        if ($min > $n) {
            $min = $n;
        } elseif ($max < $n) {
            $max = $n;
        }
        __addDictionary($n, $dictionary);
    }
    $list = [];
    for ($i = $min; $i <= $max; $i++) {
        if (!isset($dictionary[$i])) {
            continue;
        }
        for ($j = 0; $j < $dictionary[$i]; $j++) {
            $list[] = $i;
        }
    }
    return $list;
}

$arrSorted = pigeonholeSort($arr);

// получили массив 1 1 3 5 5 6 6 7 7 7 8 8 9 10 10 13
// теперь удаление
$remove = 5;

foreach (array_keys($arrSorted, $remove) as $key) {
    unset($arrSorted[$key]);
}
foreach($arrSorted as $el) {
    echo $el . PHP_EOL;
}
// получили массив 1 1 3 6 6 7 7 7 8 8 9 10 10 13