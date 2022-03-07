<br>
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
                <div class="text-center p-4 fw-bold">Modifier un Poste</div>
                <div class="p-3 mb-2 bg-transparent text-dark">
                    <a href="<?php echo BASE_URL; ?>home" class="rounded-pill btn btn-dark mb-2">
                        <i class="fas fa-home"><span style="padding-left: 10px;"></span></i>Home
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
                            <input required type="file" name="photo" class="form-control" placeholder="Photo" value="<?php echo $post->photo; ?>">
                        </div>
                        <div class="form-group">
                            <label for="categorie" class="mt-5 mb-2">Categorie</label>
                            <select name="categorie" class="p-2" value="<?php echo $post->categorie; ?>">
                                <option>movie</option>
                                <option>serie</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark rounded-pill w-100 mt-5" name="submit">Update</button>
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