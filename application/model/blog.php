<?php

class Blog_model extends Model
{
    public function getAllPosts()
    {
        $sql = "SELECT blog.*, COUNT(comments.id) AS comments FROM blog " .
                "LEFT JOIN comments ON comments.post_id = blog.id " .
                "GROUP BY comments.post_id ORDER BY date desc";
        
        $query = $this->db->prepare($sql);        
        $query->execute();
        
        return $query->fetchAll();
    }
    
    public function getPost($id)
    {
        $sql = "SELECT * FROM blog WHERE id = :id";
        
        $query = $this->db->prepare($sql);
        $query->execute(array(':id' => $id));
        
        return $query->fetch();
    }
    
    public function addPost($data)
    {
        $sql = "INSERT INTO blog (author, text, date) VALUES (:author, :text, :date)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':author' => strip_tags(htmlspecialchars($data['author'])),
            ':text' => strip_tags(htmlspecialchars($data['text'])),
            ':date' => time()
        );
        return $query->execute($parameters);
    }

}
