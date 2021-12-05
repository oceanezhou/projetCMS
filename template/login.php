<?php 
    if(isset($data['status']) && $data['status'] == false){
        echo '<div class="panelFailed">'.$data['errorMsg'].'</div>';
    }
?>
 <div class="col-md-offset-2 col-md-8 content">
    <h2>Login</h2>
        <form method="POST" action="?controller=login">
            <div class="form-group">
                <input type="text" class="form-control" name="pseudo" placeholder="pseudo">
            </div>
            <div class="form-group">
                <input type="mdp" class="form-control" name="mdp" placeholder="mdp">
            </div>
            <button type="submit" class="btn btn-default">Submit</button>
        </form>
</div>