<?php
class PostsController {
    protected $conn;

    function __construct($conn) {
        $this->conn = $conn;
    }

    public function getPosts() {
        $posts = [];
        $sql = 'SELECT title FROM posts ORDER BY created_at DESC';
        foreach($this->conn->query($sql) as $post) {
            array_push($posts, $post);
        }
        return $posts;
    }
}
?>
