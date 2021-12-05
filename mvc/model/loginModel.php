<?php

class Model{
    public $data;
    public $db;

    public function checkUser($pseudo, $mdp){  
        $this->db = new Database();        
		$this->db->sqlExec('SELECT * FROM User');
        while($row = mysqli_fetch_object($this->db->_results)){
			if ($row->pseudo == $pseudo && $row->mdp == $mdp){
                $this->data = array('status'=>'true','username'=>$row->pseudo);
				$_SESSION['userid'] = $row->id;
				$_SESSION['pseudo'] = $row->pseudo;
				$_SESSION['token'] = uniqid();
				$_SESSION['access'] = $row->access;
                return $_SESSION['token'];
			}
		}
        return null;

    }

	public function showForm(){
		$this->data = array('status'=>false, 'errorMsg'=>'Informations incorrects');
		return $this->data;
	}

	public function showData(){
		return $this->data;
	}	
}

?>