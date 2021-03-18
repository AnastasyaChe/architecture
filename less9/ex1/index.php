<?php

// результаты: Сортировка расческой: 0.32301807403564 Сортировка слиянием: 0.73804211616516 
// Сортировка пирамидальная: 0.31901907920837 Сортировка пирамидальная SPL: 0.032001972198486
// Сортировка быстрая из методички: 0.069003820419312 Сортировка голубиная: 0.028001070022583
// отсортировать миллион элементов не получилось с помощью пузырьковой сортировки, ошибка
// говорит р том, что ожидание длится более 60сек
include 'quickSort.php';
//include 'bubble.php';
include 'randArray.php';
include 'heapSort.php';
include 'pigeonholeSort.php';
include 'mergeSort.php';
include 'heapSPLSort.php';
include 'combSort.php';

function getArr(): array
{
	return _randArray(30000);
}

$arr = getArr();
$lastIndex = count($arr) - 1;

//print_r($arr);

// $start = microtime(true);
// bubbleSort($arr);
// echo "Сортировка пузырьком: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
combSort($arr);
echo "Сортировка расческой: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
mergeSort($arr);
echo "Сортировка слиянием: ".( microtime(true) - $start).PHP_EOL;


$arr = getArr();
$start = microtime(true);
heapSort($arr);
echo "Сортировка пирамидальная: ".( microtime(true) - $start).PHP_EOL;


$arr = getArr();
$start = microtime(true);
treeSort($arr);
echo "Сортировка пирамидальная SPL: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
quickSort($arr, 0, $lastIndex);
echo "Сортировка быстрая из методички: ".( microtime(true) - $start).PHP_EOL;

$arr = getArr();
$start = microtime(true);
pigeonholeSort($arr);
echo "Сортировка голубиная: ".( microtime(true) - $start).PHP_EOL;