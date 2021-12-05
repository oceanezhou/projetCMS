<?php 

class Controller{
    private $view;
    private $model;
    private $article;

    public function __construct(){
        $this->model = new Model();
        $this->view = new View();
    }

    public function index()
    {  
        header('Location: '.BASEURL.'');   
    }
    
    public function edit($id)
    {
        $this->article = $this->model->getArticleById($id);
        return $this->view->showContent($this->article);
    }

    public function supp($id)
    {
        $this->model->suppArticle($id);
        header('Location: '.BASEURL.'');  
    }

    public function save()
    {
        if(isset($_FILES["imageUpload"]["nom"]))
        {
            $target_dir = "";
            $target_file = $target_dir . uniqid() . basename($_FILES["imageUpload"]["nom"]);
            
            if(isset($_POST["titre"])) {
                move_uploaded_file($_FILES["imageUpload"]["tmp_nom"], $target_file);
            }
        }
        else{
            $target_file = $_POST['picture'];
        }       

        $this->model->saveArticle($_POST, $target_file);
        header('Location: '.BASEURL.'');   
    }
}

?>