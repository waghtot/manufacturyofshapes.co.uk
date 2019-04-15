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
        $this->method = $this->getMethodName(); // this is done - next step => partial views
        error_log('Method name once again: '.print_r($this->method, 1));
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

    public function checkIfMethodExists()
    {
            if(!empty($this->method) && method_exists($this->class, $this->method)!==false){
                return $this->method;
            }else{
                return '';
            }

    }

    public function dispatch()
    {
        $class = $this->class;
        return new $class($this->checkIfMethodExists());
    }
}