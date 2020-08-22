<?php

class Core {
    protected $controller = 'Pages';
    protected $method = 'index';
    protected $params = [];

    public function __construct() {
        // get query string into a array
        $url = $this->getUrl();

        // take controller part if et exists
        if($url) {
            if (file_exists('../app/controllers/' . ucfirst($url[0]) . '.php')) {
                $this->controller = ucfirst($url[0]);
                unset($url[0]);
            }
        }
        
        // add controller page
        require_once '../app/controllers/'. $this->controller . '.php';

        // create object of controller
        $this->controller = new $this->controller;

        // check method exists or not
        if($url && isset($url[1])) {
            if (method_exists($this->controller, $url[1])) {
                $this->method = $url[1];
                unset($url[1]);
            }

        }
        
        $this->params = $url ? array_values($url) : [];

        call_user_func_array([$this->controller, $this->method], $this->params);

    }

    protected function getUrl() {
        if (isset($_GET['url'])) {
            $url = rtrim($_GET['url'], '/');
            $url = filter_var($url, FILTER_SANITIZE_URL);
            $url = explode('/', $url);
            return $url;
        }
    }
}