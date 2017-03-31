<?php

class Comments_model extends Model
{
    public function getComments($id)
    {
        $sql = "SELECT * FROM comments WHERE post_id = :post_id ORDER BY date desc";
        
        $query = $this->db->prepare($sql);        
        $query->execute(array(':post_id' => $id));
        
        return $query->fetchAll();
    }
    
    public function addComment($data)
    {
        $sql = "INSERT INTO comments (post_id, author, text, date) VALUES (:post_id, :author, :text, :date)";
        $query = $this->db->prepare($sql);
        $parameters = array(
            ':post_id' => strip_tags(htmlspecialchars($data['post_id'])),
            ':author' => strip_tags(htmlspecialchars($data['author'])),
            ':text' => strip_tags(htmlspecialchars($data['text'])),
            ':date' => time()
        );
        return $query->execute($parameters);
    }

}
