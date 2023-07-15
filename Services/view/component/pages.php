<nav class="navbar navbar-expand-lg position-sticky navbar-dark top-0 fixed-top">
  <div class="container">
      <a class="navbar-brand fs-4 fw-bold  " href="/">MGBOT</a>


    <button class="navbar-toggler shadow-none border-0" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar" aria-controls="offcanvasNavbar" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    
    <div class=" sidebar offcanvas offcanvas-start" tabindex="-1" id="offcanvasNavbar" aria-labelledby="offcanvasNavbarLabel">
      <div class="offcanvas-header text-white border-bottom">
        <h5 class="offcanvas-title fs-3 fw-bold" id="offcanvasNavbarLabel">MGBOT</h5>
        <button type="button" class="btn-close btn-close-white shadow-none border-0" data-bs-dismiss="offcanvas" aria-label="Close"></button>
      </div>
      <div class="offcanvas-body  flex-lg-row ">
        <ul class="navbar-nav justify-content-center ms-auto fs-6 flex-grow-1 pe-3">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="#">Menu</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active" href="#">Demmande</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Position</a>
          </li>

          <li class="nav-item">
            <a class="nav-link active" href="#">Paramètres</a>
          </li>

        </ul>
        <!--------Login system------>
        <div class="d-flex justify-content-center align-items-center gap-4 " id="spx">
          <?php 
          use Services\Session;
          if(Session::getSession('userId')){
            ?>
            <a class="text-white text-decoration-none px-3 py-1 rounded-4 bg-danger" href="/logout">Déconnexion</a>
          <?php

          }else{
            ?>
            <a class="text-white text-decoration-none rounded-4 px-4 py-1  " href="/register" style="border:1px solid #f94ca4">S'inscrire</a>
            <a class="text-white text-decoration-none px-3 py-1 rounded-4 " href="/login" style="background-color:#f94ca4">Se connecter</a>
          <?php
          }
          
          ?>
        </div>
      </div>
      

    </div>
  </div>
</nav>