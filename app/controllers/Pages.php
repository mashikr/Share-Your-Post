<?php

class Pages extends Controller {

    public function index() {
        $data = [
            'page' => 'home',
            'title' => "Share Your Post",
            'description' => 'Simple social network built on the PHP MVC framework'
        ];
        $this->view('pages/index', $data);
    }

    public function about() {
        $data = [
            'page' => 'about',
            'title' => "About Us",
            'description' => 'Share Your Post to one another'
        ];

        $this->view('pages/about', $data);
    }
}