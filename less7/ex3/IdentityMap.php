<?php
// хранилище

class IdentityMap
{
    private $identityMap = [];
 
    public function add(IDomainObject $obj)
    {
        $key = $this->getGlobalKey(get_class($obj), $obj->getId());
 
        $this->identityMap[$key] = $obj;
    }
 
    public function find(string $classname, $id)
    {
        $key = $this->getGlobalKey($classname, $id);
 
            if (isset($this->identityMap[$key])) {
                return $this->identityMap[$key];
            }
     
        return null;
        
       
    }
 
    private function getGlobalKey(string $classname, int $id)
    {
        return sprintf('%s.%d', $classname, $id);
    }
}