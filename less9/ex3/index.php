<?php

include 'randArray.php';
include 'LinearSearch.php';
include 'BinarySearch.php';
include 'InterpolationSearch.php';

const NUM = 105;

$arr = getSortRandArray();

//print_r($arr);

echo "Линейный поиск".PHP_EOL;
echo linearSearch($arr, NUM).PHP_EOL;

echo "Бинарный поиск".PHP_EOL;
echo binarySearch($arr, NUM).PHP_EOL;

echo "Интерполяционный".PHP_EOL;
echo interpolationSearch($arr, NUM);

// Линейный поиск должен пройти по всем элементам массива, но у меня он останавливает поиск на 8-9элементе
// Бинарный поиск начал с элемента с индексом: 999 
// Количество итераций: 11 
// Интерполяционный поиск Количество итераций: 2
