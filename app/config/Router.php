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
        $method = $this->getMethodName(); // this is done - next step => partial views 

        if($class !== false)
        {
            $this->class = $class;         
        }

        return $this->dispatch();
    }

    public function getClassName()
    {
        $className = $this->chopString($this->request)[0];

        if(isset($className[0]) && !empty($className[0]))
        {
            return $this->checkIfClassExists(ucwords($name));
        }else{
            return $this->checkIfClassExists(ucwords('home'));
        }

    }

    public function getMethodName()
    {
        $method = array();
        $method = $this->chopString($this->request);
        if(!empty($method)){
            // error_log('method name: '.print_r(end($method), 1));
            return end($method);
        }
    }

    public function chopString($string){
        $stringtoarray = explode('/', $string);
        if(!empty($stringtoarray)){
            return $stringtoarray;
        }

    }

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