<?php

ob_start();

//Położenie strony w serwisie...
$AbsoluteURL = (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') ? 'https://' : 'http://';
$dirCat = dirname($_SERVER['PHP_SELF']);
$AbsoluteURL .= $_SERVER['HTTP_HOST'];
$AbsoluteURL .= $dirCat != '\\' ? $dirCat : "";
$slash = substr($AbsoluteURL, -1);

$newURL = $slash != '/' ? $AbsoluteURL.'/' : $AbsoluteURL;

//Stałe dla bazy danych
define('DB_SERVER', 'localhost');
define('DB_USERNAME', 'userek');
define('DB_PW', 'zaq1@WSX');
define('DB_DB', 'supercms');

//Stała dla adresu i lokalizacji aplikacji
define('SERVER_ADDRESS', $newURL);

//Stała dla lokalizacji plików i katalogów
define('DS', '/', true);
define('ClassFolder', 'CLASS.'.DS, true);
define('ManagerFolder', 'CLASS'.DS.'Managers', true);
define('LogFolder', 'LOG'.DS, true);

//Funkcja automatycznie ładująca klasy

function __autoload($className){
    @include_once(ClassFolder.$className.".class.php");
    @include_once(ManagerFolder.$className.".class.php");
}

?>