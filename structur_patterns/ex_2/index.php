<?php

spl_autoload_register(function($classname) 
    {require_once($classname . 'php');

});

$circleAdapter = new CircleAdapterByDiagonal(new CircleAreaLib);
$circleAdapter->area(34);