<?php

class View{
    public function showContent($article){
        ob_start();      
        include('./template/_edit_article.php'); 
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

?>