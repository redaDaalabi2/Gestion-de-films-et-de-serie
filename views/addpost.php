<br>
<?php
    include "includes/header_dash.php";
    if(isset($_POST['submit'])){
    $newPost = new PostesController();
    $newPost->addPost();
    }
?>
<div class="container">
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="card">
                <div class="text-center p-4 fw-bold">Ajouter un Poste</div>
                <div class="p-3 mb-2 bg-transparent text-dark">
                    <a href="<?php echo BASE_URL; ?>home" class="rounded-pill btn btn-dark mb-2">
                        <i class="fas fa-home"><span style="padding-left: 10px;"></span></i>Home
                    </a>
                    <form method="post">
                        <div class="form-group">
                            <label for="titre" class="mt-4 mb-4">Titre</label>
                            <input type="text" name="titre" class="form-control" placeholder="Titre">
                        </div>
                        <div class="form-group">
                            <label for="description" class="mt-4 mb-4">Description</label>
                            <input type="text" name="description" class="form-control" placeholder="Description">
                        </div>
                        <div class="form-group">
                            <label for="photo" class="mt-4 mb-4">Choisir un photo</label>
                            <input type="file" name="photo" accept="image/png, image/jpeg">
                        </div>
                        <div class="form-group">  
                            <label for="categorie" class="mt-4 mb-4">Categorie</label>
                            <select name="categorie" class="p-2">
                                <option value="movie">movie</option>
                                <option value="serie">serie</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <button type="submit" class="btn btn-dark rounded-pill w-100 my-4" name="submit">Valider</button>
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