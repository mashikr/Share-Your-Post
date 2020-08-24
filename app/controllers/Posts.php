<?php

class Posts extends Controller {
    public function __construct() {
        if (!isloggedIn()) {
            redirect('users/login');
        }

        $this->postModel = $this->model('Post');
    }

    public function index() {
        $posts = $this->postModel->getPost();
        
        foreach($posts as $post) {
            if (strlen($post->body) > 80) {
                $post->body = $this->cutBodyContent($post->body);
            }
        }

        $data = [
            'page' => 'home',
            'posts' => $posts
        ];
        $this->view('posts/index', $data);
    }

    protected function cutBodyContent($body) {
        $bodyWord = str_word_count($body,1);
        
        $length = 80;
        $count = 0;
        $i = 0;
        $body = '';

        while($count <= $length) {
            $count += strlen($bodyWord[$i]);
            $body .= $bodyWord[$i] . " ";

            $i++;
        }

        return $body . "...";
    }

    public function add() {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'title_err' => '',
                'body_err' => '',
                'user_id' => $_SESSION['user_id']
            ];

            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }

            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body';
            }
            
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->addPost($data)) {
                    flash('post_message', 'Your post added');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('posts/add', $data);
            }
        } else {
            $data = [
                'title' => '',
                'body' => ''
            ];
            $this->view('posts/add', $data);
        }
        
    }

    public function details($id) {
        $post = $this->postModel->getSinglePost($id);
        $data = [
            'id' => $id,
            'post' => $post
        ];

        $this->view('posts/details', $data);
    }

    public function edit($id) {
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $data = [
                'id' => $id,
                'title' => trim($_POST['title']),
                'body' => trim($_POST['body']),
                'title_err' => '',
                'body_err' => '',
                'user_id' => $_SESSION['user_id']
            ];

            if (empty($data['title'])) {
                $data['title_err'] = 'Please enter title';
            }

            if (empty($data['body'])) {
                $data['body_err'] = 'Please enter body';
            }
            
            if (empty($data['title_err']) && empty($data['body_err'])) {
                if ($this->postModel->editPost($data)) {
                    flash('edit_message', 'Your post updated!');
                    redirect('posts');
                } else {
                    die('Something went wrong');
                }
            } else {
                $this->view('posts/edit', $data);
            }
        } else {
            $post = $this->postModel->getSinglePost($id);
            $data = [
                'id' => $id,
                'title' => $post->title,
                'body' => $post->body
            ];
            $this->view('posts/edit', $data);
        }
        
    }

    public function delete($id) {
        if ($this->postModel->deletePost($id)) {
            flash('delete_message', 'Your post deleted!', 'alert alert-danger');
            redirect('posts');
        } else {
            die('Something went wrong');
        }
    }
}