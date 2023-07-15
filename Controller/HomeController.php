<?php

namespace Controller;
use Services\Render;


class HomeController extends Render{

    public function index(){
        $this->view("acceuil");
    }

    public function about(){
        $this->view("propos");
    }

    public function project(){
        $this->view("projet");
      }
    
      public function skills(){
        $this->view("competences");
      }
      public function experiences(){
        $this->view("experience");
      }

      public function cv(){
        $this->view("cv");
      }
      public function contact(){
        $this->view("contact");
      }

      public function notfound(){
        $this->view("notfound");
      }
}