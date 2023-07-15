<?php 
namespace Services;
class Render{
    public function view(string $viewName, $data=null) {
        // Inclure le fichier de la vue
        if ($data !== null) {
            extract($data);
        }
        require 'view/'.$viewName.'.php';
    }

    public function redirect(string $url,$data=null){
        if ($data !== null) {
            extract($data);
        }
        header('location:/'.$url);
        exit;
    }
}