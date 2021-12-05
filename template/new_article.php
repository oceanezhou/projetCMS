<div class="col-md-offset-2 col-md-8 content">
    <div class="article">
        <h2>New Post</h2>
        <form method="POST" action="?controller=account&action=create" enctype="multipart/form-data">
            <div class="form-group">
                <label for="titre">Titre</label>
                <input type="text" class="form-control" name="titre">
            </div>
            <div class="form-group">
                <label for="image">Image</label>
                <input type="file" name="image" id="image">
            </div>
            <div class="form-group">
                <label for="pseudo">Description</label>
                <textarea class="form-control" name="content"></textarea>
            </div>
            <button type="submit" class="btn btn-default">Post</button>
        </form>
    </div>
</div>