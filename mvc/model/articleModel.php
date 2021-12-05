<?php

class Model{
    public $article;
    public $db;

    public function getArticleById($id)
    {
        $this->db = new Database();
        $sqlstr = "SELECT * FROM Article WHERE id = ".$id;

        echo $sqlstr;

        $this->db->sqlExec($sqlstr);
        $this->article = $this->db->_results;

        while($row = mysqli_fetch_object($this->article)){
            $articleArr[] = array(
                'id' => $row->id,
                'titre' => $row->titre,
                'description' => $row->content,
                'image' => $row->picture,
                'date' => $row->date,
                'userId' => $row->userId
            );
        }

        $this->article = $articleArr;
        $this->db = NULL;
        
        return $this->article;
    }

    public function saveArticle($data, $picture){        
        $this->db = new Database();
        $sqlstr = "UPDATE Article SET titre='".$data['titre']."', description='".$data['description']."',image='".$image."',date='".$data['date']."',userId='".$data['userId']."' WHERE id='".$data['id']."';";
        $this->db->sqlExec($sqlstr);

    }

    public function suppArticle($id){
        $this->db = new Database();
        $sqlstr = 'DELETE FROM Article WHERE id = '.$id.'';
        $this->db->sqlExec($sqlstr);
    }
    
}

?>