<?php

class View{
    public function showContent($data){
        ob_start();          
        include('./template/login.php');    
        $output = ob_get_contents();
        ob_end_clean();

        return $output;
    }
}

?>