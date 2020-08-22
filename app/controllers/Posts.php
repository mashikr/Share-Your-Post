<?php

class Posts extends Controller {
    public function __construct() {
        $this->postModel = $this->model('Post');
    }

    public function index() {
        echo 'Post Index file';
    }

    public function about($id) {
        echo $id;
    }
}