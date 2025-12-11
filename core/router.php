<?php

class Router {
    protected $routers = [];
    public function get(string $url, $action) {
        $this->routers['GET'][ $url ] = $action;
    }

    public function post(string $url, $action) {
        $this->routers['POST'][$url] = $action;
    }

    public function getRoutersInstance() {
        return $this -> routers;
    }

    public function routing(string $method, string $url) {
        if(isset(($this->routers[$method][$url]))) {
            $action = $this->routers[$method][$url];
            [ $controller, $func ] = explode('@', $action);
            $object = new $controller();
            $object -> $func();
        }
    }

}