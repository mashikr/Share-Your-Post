<?php

class Posts extends Controller {
    public function __construct() {
    }

    public function index() {
        echo 'Index file';
    }

    public function about($id) {
        echo $id;
    }
}