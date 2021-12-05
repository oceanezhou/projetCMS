<?php 

class Controller{
    private $view;
    private $model;
    private $data;

    public function __construct() {
		$this->model = new Model();
		$this->view	= new View();

		if(@$_GET['action']=='logout') {
			$this->logout();
		}
	}
	
	public function logout() {
		unset($_SESSION);
		session_destroy();		
        header('Location: '.BASEURL.'');
	}

    function indexPublic()
    {
        if($_POST){
            $this->login($_POST);
            
			if(isset($_SESSION['token'])){  
                header('Location: '.BASEURL.'');                
			} else {
				echo $this->view->showContent($this->model->showForm());
            }
		} else {
			echo $this->view->showContent($this->model->showData());
		}
    }
    
    function index()
    {
        header('Location: '.BASEURL.'');
    }
    
    function login()
    {     
        $pseudo = $_POST["pseudo"];
        $mdp = $_POST["mdp"];

        return json_encode($this->model->checkUser($_POST["pseudo"], $_POST["mdp"]));
    }
}

?>