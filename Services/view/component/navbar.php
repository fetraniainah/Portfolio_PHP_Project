<nav class="navbar navbar-expand-lg position-sticky navbar-dark top-0 fixed-top">
    <div class="container">
        <a class="navbar-brand fs-4 fw-bold font-italic " href="/">F</a>


        <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas"
            data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>


        <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar"
            aria-labelledby="offcanvasNavbarLabel">
            <div class="offcanvas-header text-white border-bottom">
                <h5 class="offcanvas-title fs-3 fw-bold" id="offcanvasNavbarLabel">FETRA</h5>
                <button type="button" class="btn-close btn-close-white shadow-none border-0" data-bs-dismiss="offcanvas"
                    aria-label="Close"></button>
            </div>
            <div class="offcanvas-body  flex-lg-row ">
                <ul class="navbar-nav justify-content-center mx-auto fs-6 flex-grow-1 pe-3">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/">Acceuil</a>
                    </li>

                    <li class="nav-item">
                        <a class="nav-link active" href="/skills">Compétences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/experience">Expériences</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="/project">Projets</a>
                    </li>

                </ul>
                <!--------Login system------>
                <div class="d-flex justify-content-center align-items-center gap-3 " id="spx">
                    <a class="text-white text-decoration-none rounded-4 px-4 py-1  " href="/cv"
                        style="border:1px solid #f94ca4">Cv</a>
                    <a class="text-white text-decoration-none px-3 py-1 rounded-4 " href="/contact"
                        style="background-color:#f94ca4">Contact</a>
                    <a class="text-white text-decoration-none px-1 py-1 rounded-4 d-flex gap-2 " href="#"
                        style="border: 1px solid #f94ca4"><i class="fa-solid fa-language mt-1 fs-5"></i>
                        <form method="get" action="">
                            <select name="lang" onchange="this.form.submit()"
                                class="bg-transparent border-0 shadow-none"
                                style="border: 1px solid #f94ca4;outline:none;color:#f94ca4">
                                <option value="fr" <?php if($_SESSION['lang'] == 'fr') echo 'selected'; ?>>fr</option>
                                <option value="en" <?php if($_SESSION['lang'] == 'en') echo 'selected'; ?>>en</option>
                                <option value="mg" <?php if($_SESSION['lang'] == 'mg') echo 'selected'; ?>>mg</option>
                            </select>
                        </form>
                    </a>
                </div>
            </div>


        </div>
    </div>
</nav>