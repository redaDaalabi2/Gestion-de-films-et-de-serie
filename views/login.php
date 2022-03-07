<?php
    include "includes/header.php";
    if(isset($_POST['submit'])){
        $loginUilisateur = new UsersController();
        $loginUilisateur->authenticate();
    }	
?>
<br>
<div class="container mt-5">
	<div class="row my-4">
		<div class="col-md-6 mx-auto py-5">
			<?php include "./views/includes/alerts.php"; ?>
			<div class="card bg-light">
				<div class="">
					<h3 class="text-center pt-4">Login</h3>
				</div>
				<div class="card-body">
			      	<form method="post" class="mr-1">
			      		<div class="form-group py-3">
				      		<input required type="email" name="email" placeholder="E-mail" class="form-control" style="border-color: black;">
				      	</div>
				      	<div class="form-group py-3">
				      		<input required type="password" name="motdepasse" placeholder="Mot de passe" class="form-control" style="border-color: black;">
				      	</div>
			      		<button name="submit" class="btn btn-sm btn-outline-danger py-2 my-3 w-100 rounded-pill fs-5">Login</button>
			      	</form>
                    <a href="<?php echo BASE_URL;?>register" class="btn btn-link py-3 fs-5" style="color: red;">Register</a>
				</div>
			</div>
		</div>
	</div>
</div>

<?php
    include "includes/footer.php";
?>