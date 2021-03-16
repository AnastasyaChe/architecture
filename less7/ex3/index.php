<?php 
spl_autoload_register(function($classname) 
{require_once($classname . 'php');

});

$entityManager = new EntityManager(
    new IdentityMap,
    new RepositoryProduct
);

$prodict1 = $entityManager->findById('Product', 1);
$prodict2 = $entityManager->findByIds('Product', [1, 2, 3]);
