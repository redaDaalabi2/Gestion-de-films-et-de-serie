<?php
    include "includes/header_dash.php";
    
?>
<br>
<br>
<br>
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
                    <div class="d-flex justify-content-between">
                        <div>
                            <a href="<?php echo BASE_URL; ?>addpost" class="rounded-pill btn btn-dark me-2 mb-2">
                                <i class="fas fa-plus"><span style="padding-left: 10px;"></span></i>Ajouter un Post
                            </a>
                            <a href="<?php echo BASE_URL; ?>home" class="rounded-pill btn btn-dark mb-2">
                                <i class="fas fa-home"><span style="padding-left: 10px;"></span></i>Home
                            </a>
                        </div>
                        <div>
                            <form method="post" class="float-right mb-2 d-flex flex-row">
                                <input class="form-control" type="text" name="search" placeholder="Rechercher">
                                <button class="btn btn-dark ms-2" name="find" type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                    </div> 
                </div>
            </div>
        </div>
    </div>
</div>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<?php
    include "includes/footer_dash.php";
?>