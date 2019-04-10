<?php

class Router
{
    private $request;
    private $type;
    private $class;

    public function __construct()
    {
        $this->request = $_SERVER['REQUEST_URI'];
        $this->type = strtolower($_SERVER['REQUEST_METHOD']);
        $class = $this->getClassName();
        $method = $this->getMethodName();
        if($class !== false)
        {
            $this->class = $class;         
        }

        return self::dispatch();
    }

    public function getClassName()
    {
        $className = explode('/', $this->request);
        if(isset($className[0]) && !empty($className[0]))
        {
            return $this->checkIfClassExists(ucwords($name));
        }else{
            return $this->checkIfClassExists(ucwords('home'));
        }

    }

    public function getMethodName()
    {
        $className = explode('/', $this->request);
        if(count($className)>1){
            return end($className);
        }
    }
    
    
    
    // method_exists('Directory','read')

    public function checkIfClassExists($name){
        if (class_exists($name)) {
            return $name;
        }else{
            return false;
        }
    }

    public function checkIfMethodExists($name)
    {

    }

    public function dispatch()
    {
        $class = $this->class;
        return new $class($this->getMethodName());
    }
}