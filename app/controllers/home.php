<?php

class Home {

    public function __construct(){
        return $this->index();
    }

    public function index(){

        $data = array();
        // $data = Exchange::getExchangeLast();
        View::template(VIEW.'home.php', $data);
    }
}
