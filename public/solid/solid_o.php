<?php
interface ISomeO{
    public function getObjectName();
    public function getHandler();
}
class Object1 implements ISomeO{
    public function getObjectName(){
        return 'object_1';
    }
    public function getHandler(){
        return 'handle_object_1';
    }
}
class Object2 implements ISomeO{
    public function getObjectName(){
        return 'object_2';
    }
    public function getHandler(){
        return 'handle_object_2';
    }
}
class SomeObject {
    protected $someObject;
    

    public function __construct(ISomeO $someObject) { 
        $this->someObject=$someObject; 
    }

    public function getObjectName() {
        return $this->someObject->getObjectName;
    }
    public function getHandler()
    {
        return $this->someObject->getHandler;
    }
}

class SomeObjectsHandler {
    public function __construct() {

    }

    public function handleObjects(array $objects): array {
        $handlers = [];
        foreach ($objects as $object) {
           $handlers[]=$object->getHandler();
        }

        return $handlers;
    }
}

$objects = [
    new SomeObject(Object1::class),
    new SomeObject(Object2::class)
];

$soh = new SomeObjectsHandler();
$soh->handleObjects($objects);