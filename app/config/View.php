<?php
class View
{
    public function template($path, $data = array())
    {
        require_once TEMPLATE;
    }

    public function render($path, $data = array()){
        require $path;
    }
}