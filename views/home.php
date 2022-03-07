<?php
    include "includes/header_dash.php";
    $comments = new CommentaireController();
    $post = new PostesController();
    if (isset($_POST['find'])) {
        $poste = $post->findPost();
    } else {
        $poste = $post->getAllPoste();
    }
    if (isset($_POST['submit'])) {
        $comments->addCommentaire();
    }
?>
<style>
    @media (max-width: 768px){
        .med{
            padding: 0px;
            font-size: 12px;
        }
    }
</style>
<br>
<br>
<br>
<br>
<div class="container">
    <div cl ass="row my-5">
        <div class="col-md-10 mx-auto">
            <?php include ('./views/includes/alerts.php'); ?>
            <div class="card">
                <div class="p-3 mb-2 bg-transparent text-dark">
                    <div class="d-flex flex-nowrap">
                        <a href="<?php echo BASE_URL; ?>addpost" class="rounded-pill btn btn-dark me-2 mb-2 med">
                            <i class="fas fa-plus"><span style="padding-left: 10px;"></span></i>Ajouter un Post
                        </a>
                        <a href="<?php echo BASE_URL; ?>home" class="rounded-pill btn btn-dark mb-2 med">
                            <i class="fas fa-home"><span style="padding-left: 10px;"></span></i>Home
                        </a>
                        <div class="ms-auto">
                            <form method="post" class="float-right mb-2 d-flex flex-row">
                                <input class="form-control" required type="text" name="search" placeholder="Rechercher">
                                <button class="btn btn-dark ms-2" name="find" type="submit" title="Chercher"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div>
                    <?php foreach($poste as $post): ?>
                    <div class="leftcolumn my-5 mx-3">
                            <a title="Connecter" class="rounded-pill btn btn-link mb-2 me-auto" style="color: black; text-decoration: none;">
                                <i class="fas fa-user"></i>
                                    <span style="padding-left: 10px;"><?php echo $post['email']; ?></span>
                            </a>
                        <div class="card">
                            <?php if($_SESSION['Id_user'] == $post['userId']):?>
                                <div class="dropdown ms-auto m-3">
                                <button class="btn btn-dark dropdown-toggle" type="button" id="dropdownMenu2" data-bs-toggle="dropdown" aria-expanded="false">
                                    Action
                                </button>
                                <ul class="dropdown-menu text-center p-0 m-0" aria-labelledby="dropdownMenuButton1">
                                    <li>
                                        <form method="post" action="updatepost">
                                            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                            <button class="btn btn-secondary rounded-pill dropdown-item p-0 py-2"><i class="fa fa-edit"></i>  Update</button>
                                        </form>
                                    </li>
                                    <li>
                                        <form method="post" action="deletepost">
                                            <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                            <button class="btn btn-danger rounded-pill dropdown-item p-0 py-2"><i class="fa fa-trash"></i>  Delete</button>
                                        </form>
                                    </li>
                                </ul>
                                </div>
                                <!-- <div class="d-flex ms-auto">
                                    <form method="post" action="updatepost" class="me-2 my-4">
                                        <input type="hidden" name="id" value="<?php //echo $post//['id']; ?>">
                                        <button class="btn btn-secondary rounded-pill" title="Update"><i class="fa fa-edit"></i></button>
                                    </form>
                                    <form method="post" action="deletepost" class="me-2 my-4">
                                        <input type="hidden" name="id" value="<?php //echo $post//['id']; ?>">
                                        <button class="btn btn-danger rounded-pill" title="Delete"><i class="fa fa-trash"></i></button>
                                    </form>
                                </div> -->
                            <?php endif; ?>
                            <div class="img-fluid"><img style="width: 96%;
                                                               margin-left: 15px;
                                                               margin-top: 25px;
                                                               border-radius: 15px;" 
                                                        src="<?php echo BASE_URL .'views/layout/img/'.$post['photo'] ?>" alt=""></div>
                            <h1 class="p-3 fw-bold"><?php echo $post['titre'] ?></h1>
                            <h4 class="p-3 fw-bold"><?php echo $post['categorie'] ?></h4>
                            <p class="p-3"><?php echo $post['description'] ?></p>
                            <h5 class="px-3 py-3 fw-bold">Les commentaire</h5>
                            <?php 
                                $commentaireListe = $comments->getAllByPostId($post["id"]);
                                foreach ($commentaireListe as $commentaire) : ?>
                                <span class="px-3 py-2">
                                    <ul>
                                        <li><?php echo $commentaire['commentaire']; ?>.</li><br/>
                                    </ul>
                                </span>
                            <?php endforeach; ?>
                            <form method="post" class="d-flex flex-row my-4">
                                <input required type="text" name="contenue" class="form-control m-3" placeholder="Commenter">
                                <input type="hidden" name="id" value="<?php echo $post['id']; ?>">
                                <!-- <button class="border-0 bg-white me-4" type="submit" name="submit"><i class="fa-solid fa-paper-plane"></i></button> -->
                                <button type="submit" aria-label="Soumettre ce message" name="submit" class="kltvjl-0 bsCnGQ" style="border: none; height: 38px; margin-top: 17px; background-color: black; border-radius: 50%; margin-right: 15px;"><svg size="48" class="sc-15iua2v-0 jaSQos ye9e3z-0 bhhnXa" width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg" aria-hidden="true" focusable="false"><path d="M21 2.91992L10 14.3599" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="colorwhite"></path><path d="M21 2.91992L14 23.7199L10 14.3599L1 10.1999L21 2.91992Z" stroke="white" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="colorwhite"></path></svg></button>
                            </form>
                        </div>
                    </div> 
                    <?php endforeach; ?>
            </div>
        </div>
    </div>
</div>
</div>
<br>
<?php
    include "includes/footer_dash.php";
?>