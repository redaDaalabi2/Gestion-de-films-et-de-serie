<?php
    include "includes/header_dash.php";
    if(isset($_POST['id'])){
        $exitPost = new PostesController();
        $exitPost->deletePost();
    }
    include "includes/footer_dash.php";
?>