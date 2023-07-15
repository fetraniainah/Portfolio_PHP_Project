<?php
session_start();

// Langues prises en charge
$supportedLanguages = array('fr', 'en', 'mg');

// Vérifier si la langue est définie dans l'URL
if (isset($_GET['lang'])) {
    $lang = $_GET['lang'];

    // Vérifier si la langue est prise en charge
    if (in_array($lang, $supportedLanguages)) {
        $_SESSION['lang'] = $lang;
    }
    header('Location: ' . $_SERVER['HTTP_REFERER']);
}

// Vérifier si la langue est déjà définie dans la session, sinon définir la langue par défaut (fr)
if (!isset($_SESSION['lang'])) {
    $_SESSION['lang'] = 'fr';
}

function translate($key)
{
    global $translations;
    $lang = $_SESSION['lang'];

    // Chemin du fichier de traduction correspondant à la langue actuelle
    $translationFile = 'lang/' . $lang . '.php';
        // Charger les traductions depuis le fichier
        $translations = require($translationFile);

        // Vérifier si la traduction pour la clé donnée existe dans le fichier chargé
        if (isset($translations[$key])) {
            return $translations[$key];
        }

     
}

 

?>