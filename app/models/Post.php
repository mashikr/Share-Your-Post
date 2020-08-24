<?php

class Post {
    private $db;

    public function __construct() {
        $this->db = new Database();
    }

    public function getPost() {
        $this->db->query('SELECT posts.id,name,title,body,posts.create_at FROM `posts` INNER JOIN `users` ON posts.user_id = users.id ORDER BY posts.create_at DESC');
        return $this->db->resultSet();
    }

    public function addPost($data) {
        $this->db->query('INSERT INTO `posts`(`user_id`, `title`, `body`) VALUES (:user_id, :title, :body)');
        $this->db->bind(':user_id', $data['user_id']);
        $this->db->bind(':title', $data['title']);
        $this->db->bind(':body', $data['body']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function getSinglePost($id) {
        $this->db->query('SELECT users.id,name,title,body,posts.create_at FROM `posts` INNER JOIN `users` ON posts.user_id = users.id WHERE posts.id = :id');
        $this->db->bind(':id', $id);
        
        return $this->db->single();
    }

    public function editPost($post) {
        $this->db->query('UPDATE `posts` SET `title`= :title,`body`= :body WHERE `id` = :id');
        $this->db->bind(':title', $post['title']);
        $this->db->bind(':body', $post['body']);
        $this->db->bind(':id', $post['id']);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }

    public function deletePost($id) {
        $this->db->query('DELETE FROM `posts` WHERE `id` = :id');
        $this->db->bind(':id', $id);

        if ($this->db->execute()) {
            return true;
        } else {
            return false;
        }
    }
}