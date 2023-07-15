<?php 
require_once "component/header.php";
require_once "component/navbar.php";
?>

<section class="w-100">
    <div class="row mx-auto py-4">
        <div class="col-md-10 mx-auto shadow-lg rounded-4 p-5">
            <h2 class="text-white fs-5 py-3" style="text-transform: uppercase">Contact : </h2>
            <div class="col-md-10 mx-auto">
                <form action="" method="post">
                    <div class="d-flex mb-3 flex-wrap">
                        <label for="" class="text-label text-white">Entrer votre email</label>
                        <input type="text" name="email" class="form form-control shadow-none bg-transparent text-white">
                    </div>
                    <div class="d-flex mb-3 flex-wrap">
                        <label for="" class="text-label text-white">Contenu de votre message</label>
                        <textarea name="rec" class="form form-control shadow-none bg-transparent text-white"
                            style="width:100%;height:130px"></textarea>
                    </div>
                    <div class="d-flex justify-content-end p-3">
                        <button type="submit" class="btn btn-lg shadow-none border-0 btn-success px-5">Envoyer</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
























<?php require_once "component/footer.php";?>