<?php 
require_once "component/header.php";
require_once "component/navbar.php";
?>

<section class="w-100">

    <div class="row mx-auto py-4">
        <div class="col-md-10 mx-auto shadow-lg rounded-4 p-5">
            <center>
                <img src="public/image/fetra.jpg" alt="fetra" class="rounded-circle" width="170px" height="170px">
            </center>
            <h1 class="text-center text-white fs-4 p-3">Tahirifetrasoa Jean Joseph <i
                    class="fa-light fa-badge-check"></i>
            </h1>
            <h1 class="text-center text-primary fs-5 p-2"><?php echo translate('welcome'); ?> <i
                    class="fa-solid fa-hand"></i>
            </h1>

            <div class="row mx-auto">
                <div class="col-md-4 mx-auto p-2">
                    <p class="text-light "><i class="fa-solid fa-briefcase"></i> Développeur PHP
                    </p>
                    <p class="text-light "><i class="fa-solid fa-location-dot"></i> Antananarivo Madagascar
                    </p>
                </div>
                <div class="col-md-4 mx-auto p-2">
                    <p class="text-light text-center">

                        <a href="https://github.com/fetraniainah" class="text-decoration-none">
                            <i class="fa-brands fa-github"></i> @fetraniainah
                        </a>
                        <a href="https://twitter.com/JTahirifet32509" class="text-decoration-none">
                            <i class="fa-brands fa-twitter"></i> @JTahirifet32509
                        </a>

                    </p>
                    <p class="text-light text-center">
                        <a href="https://www.facebook.com/fetra.fetra.585112" class="text-decoration-none"><i
                                class="fa-brands fa-facebook"></i> @Fe
                            Tra
                        </a>
                        <i class="fa-solid fa-envelope"></i> tahiri.fetra@gmail.com
                    </p>
                </div>

            </div>
            <p class="text-center text-light px-5 col-md-8 mx-auto">
                Développeur passionné par la technologie web avec une expertise en PHP (Symfony/Laravel) ainsi qu'une
                solide connaissance de Node.js et Vue.js (Nuxt.js)
            </p>

        </div>
    </div>
    <div class="row mx-auto py-4">
        <div class="col-md-10 mx-auto shadow-lg rounded-4 p-5">
            <h2 class="text-white fs-5 py-3" style="text-transform: uppercase">Recommandation</h2>
            <div class="col-md-10 mx-auto">
                <form action="" method="post">
                    <div class="d-flex">
                        <textarea name="rec" class="form form-control shadow-none bg-transparent text-white"
                            style="width:100%;height:130px"></textarea>
                    </div>
                    <div class="d-flex justify-content-end p-3">
                        <button type="submit" class="btn btn-lg shadow-none border-0 btn-success px-5">Ajouter</button>
                    </div>
                </form>
            </div>
            <div class="col-md-10 mx-auto">
                <p class="text-white">Aucun récommandation</p>
            </div>
        </div>
    </div>

</section>

<footer class="pt-5 my-5 text-light container border-top botom-0">
    About me &copy; 2023
</footer>

























<?php require_once "component/footer.php";?>