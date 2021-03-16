<?php 
class EntityManager
{
    private $identityMap; // хранилище
    private $repositoryProduct; // mapper
    public function __construct(
        IdentityMap $identityMap,
        RepositoryProduct $repositoryProduct
    )
    {
        $this->identityMap = $identityMap;
        $this->repositoryProduct = $repositoryProduct;
    }

        public function findById(string $class, $id)
        { $entity = $this->identityMap->find($class, $id);
                if($entity !==null) {
                    return $entity;
                }
        $entity = $this->repositoryProduct->findById($id);
            if($entity === null){
                return null;
            }
            $this->identityMap->add($entity);
            return $entity;
        }
        
        public function findByIds(string $class, array $ids)
        {
            $productList = [];
            foreach ($ids as $id) {
               $productList[] = $this->findById($class, $id);
            }
            return $productList;
        }
        // как я понимаю, такого типа запрос бывает очень радко, потому что товаров очень много, в основном 
        // используются выборки по критерию, поэтому не использую здесь хранилище
        public function fetchAll(): array
        {
            $productList = [];
            foreach (($this->repositoryProduct->find()) as $item) {
                $productList[] = new Product($item['id'], $item['name'], $item['price']);
            }
    
            return $productList;
        }
        
}

