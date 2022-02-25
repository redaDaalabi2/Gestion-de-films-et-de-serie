<?php
    include 'includes/header.php';
?>
    
<!-- start content -->

<div id="carouselExampleCaptions" class="carousel slide mt-5" data-bs-ride="carousel">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
        <img src="./views/layout/img/vikings.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block text-white">
            <h5 class="nom-serie">Vikings</h5>
            <p class="des-serie"> Ragnar Lothbrok et son frère Rollo participent 
                à une bataille contre les peuples baltes. Après le massacre, 
                Ragnar a des visions du Dieu Odin et ses Valkyries. ... Restée à 
                la ferme familiale, la femme de Ragnar, Lagertha, met en fuite 
                deux vagabonds qui tentent de la violer.</p>
        </div>
        </div>
        <div class="carousel-item" data-bs-interval="2000">
        <img src="./views/layout/img/my-name.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block text-white">
            <h5 class="nom-serie">My name</h5>
            <p class="des-serie">raconte l'histoire de Yoon Ji-woo (Han So-hee), 
                une jeune étudiante qui, une nuit, est témoin du meurtre brutal 
                de son père. Elle décide de rejoindre un groupe criminel, dirigé 
                par Choi Moo-Jin (Park Hee-Soon) et lié au réseau de drogue 
                Dongcheon Pa. Han So-Hee est le personnage principal de My Name.</p>
        </div>
        </div>
        <div class="carousel-item">
        <img src="./views/layout/img/la-casa-de-papel.jpg" class="d-block w-100" alt="">
        <div class="carousel-caption d-none d-md-block text-white">
            <h5 class="nom-serie">La casa de papel</h5>
            <p class="des-serie">Un homme mystérieux, surnommé le Professeur (El Profesor), 
                planifie le meilleur braquage jamais organisé. Pour exécuter son plan, 
                il recrute les meilleurs malfaiteurs du pays qui n'ont rien à perdre : 
                Tokyo, Nairobi, Río, Moscou, Berlin, Denver, Helsinki et Oslo.</p>
        </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>

<section class="bg-light text-dark text-center text-sm-start py-5">
    <div class="container">
        <div class="d-sm-flex align-items-center justify-content-center"> 
            <div class="py-3"> 
                <h1>Discover The Last <span class="text-danger">Films</span> And <span class="text-danger">Series</span></h1>
                <p class="py-3 lead">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti 
                    impedit reiciendis consequuntur consectetur debitis, facilis, sequi 
                    deserunt dolorem accusantium nemo enim facere soluta tenetur architecto 
                    animi id, laboriosam excepturi quae?</p>
                <a href="#">
                    <button class="btn btn-outline-danger rounded-pill">Let's Watch</button> 
                </a>
            </div>
                <img class="d-none d-sm-block img-fluid w-50" src="./views/layout/img/undraw_netflix.svg" alt="">
        </div>
    </div>
</section>

<section class="bg-light text-dark text-sm-start py-5">
    <center class="fs-1">
        About Us
    </center>
    <div class="container">
            <div>
                <p class="pt-5 lead text-center">
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Vel doloremque laudantium odio enim eligendi, omnis exercitationem itaque laboriosam, sunt, accusantium magni pariatur nemo quo quod quam nulla eos. Soluta, expedita?
                    Alias ipsum quisquam vitae fugit, placeat doloremque ut veritatis nostrum temporibus perferendis quaerat fugiat illo! Cum quo recusandae mollitia impedit natus, sed sint, corporis dolore sapiente ratione, similique atque beatae.
                    Sed ut ab laudantium ullam ulla, amet totam natus alias soluta nam tenetur aliquid. Incidunt corrupti quisquam magnam optio obcaecati, alias a porro nemo quaerat ab.
                </p>
                <span class="input-group-btn d-flex justify-content-center">
                    <button href="#" type="submit" class="btn btn-outline-danger py-3 ps-5 pe-5 btn-form mt-5">READ MORE</button>
                </span>
            </div>
    </div>
</section>    

<section class="bg-light text-dark text-center text-sm-start py-5">
    <center class="fs-1">
        Contact Us
    </center>
    <div class="container"> 
        <form class="mbr-form">
            <div class="row row-sm-offset">
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label py-4">Name</label>
                        <input type="text" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label py-4">Email</label>
                        <input type="email" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label class="form-control-label py-4">Phone</label>
                        <input type="tel" class="form-control">
                    </div>
                </div>
            </div>
            <div class="form-group">
                <label class="form-control-label py-4">Message</label>
                <textarea type="text" class="form-control"></textarea>
            </div>
            <span class="input-group-btn d-flex justify-content-center">
                <button href="#" type="submit" class="btn btn-outline-danger py-3 ps-5 pe-5 btn-form mt-5">SEND FORM</button>
            </span>
        </form>
</div>
</section> 

<!-- end content -->

<?php
    include 'includes/footer.php';
?>