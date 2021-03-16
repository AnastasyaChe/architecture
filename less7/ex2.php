<?php
//Найти в проекте паттерн Registry и объяснить, почему он был применён.
// это класс app/framework/Registry.php, так как он доступен за счет статических свойств и методов
// в других классках(Render.php), а через методы класса Render.php реестр используется
// в классах MainController, OrderController, ProductController, UserController
// класс Request возможно тоже является реестром, потому что просиходит обращение к его статическим методам. 
