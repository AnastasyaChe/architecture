<?php
//сколько итераций
// рассуждала так, верхний итератор сработает щт 0-99=100раз плюс каждый внутренний по 7 раз(1,2,4,8,16,32, 64)
// итого 700 итераций. O(log(n)), O(n);
$n = 100;
$array[]= [];

for ($i = 0; $i < $n; $i++) {
for ($j = 1; $j < $n; $j *= 2) {
$array[$i][$j]= true;
} }


//O(n), O(n/2) Верхняя итерация 50раз, нижняя 2550 итого 2600р
$n = 100;
$array[] = [];

for ($i = 0; $i < $n; $i += 2) {
for ($j = $i; $j < $n; $j++) {
$array[$i][$j]= true;
} }
// чтобы посчитать количество итераций я создала функцию с рекурсией. 2550
function set(int $arg){
    if($arg <= 0) {
        return $arg;
    }

    return $arg + set($arg - 2);
        
      
}
 echo set(100);