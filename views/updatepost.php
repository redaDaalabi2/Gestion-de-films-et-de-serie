<?php
    include "includes/header_dash.php";
    if(isset($_POST['id'])){
        $exitPost = new PostesController();
        $post = $exitPost->getOnePost();
    }else{
        Redirect::to('home');
    }
    if(isset($_POST['submit'])){
        $exitPost = new PostesController();
        $exitPost->updatePost();
    }
?>

<div class="container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="card-header text-center p-4 font-weight-bold">Modifier un Poste</div>
                <div class="p-3 mb-2 bg-transparent text-dark">
                    <a href="<?php echo BASE_URL; ?>" class="btn btn-info mb-2 mt-2 rounded-pill">
                        <i class="fas fa-home"></i>
                    </a>
                    <form method="post">
                        <div class="form-group">
                            <label for="titre" class="mt-2 mb-2">Titre</label> 
                            <input type="text" name="titre" class="form-control" placeholder="Titre" value="<?php echo $post->titre; ?>">
                            <input type="hidden" name="id" value="<?php echo $post->id; ?>">
                        </div>
                        <div class="form-group">
                            <label for="description" class="mt-2 mb-2">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description" value="<?php echo $post->description; ?>">
                        </div>
                        <div class="form-group">
                            <label for="photo" class="mt-2 mb-2">Photo</label>
                            <input type="file" name="photo" class="form-control" placeholder="Photo" value="<?php echo $post->email; ?>">
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-primary rounded-pill w-100" name="submit">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
    include "includes/footer_dash.php";
?>