<?php 

// Définir la fonction d'autoloading
function mon_autoloader($nom_classe) {
    // Convertir les séparateurs de namespace en séparateurs de dossier
    $chemin_fichier = str_replace('\\', DIRECTORY_SEPARATOR, $nom_classe) . '.php';

    // Vérifier si le fichier existe
    if (file_exists($chemin_fichier)) {
        require_once $chemin_fichier;
    }
}

// Enregistrer la fonction d'autoloading
spl_autoload_register('mon_autoloader');

?>