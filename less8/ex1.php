<?php
// аналог проводника. Единственное, я сделала поиск только по папкам, не по файлам
function search ($searchName)
{
        $path = realpath('/');
        $objects = new RecursiveIteratorIterator(new RecursiveDirectoryIterator($path), RecursiveIteratorIterator::SELF_FIRST);
        foreach($objects as $name){
        if ($name->getFilename() == $searchName) {
            $files[] = $name->getPathname();
        }
    }
    return $files;
}
$arr = search('Default');

foreach($arr as $ar) {
    echo  "$ar \n";
} 