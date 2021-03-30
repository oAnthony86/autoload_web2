<?php
spl_autoload_register(function($class) {
    $arquivo = $_SERVER["DOCUMENT_ROOT"]
    ."/projetos/autoload_web2/lib/".$class.".class.php";
 
    if (file_exists($arquivo)) {
        require $arquivo;
    }
});