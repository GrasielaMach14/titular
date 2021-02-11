<?php

spl_autoload_register(function(string $classeName){
    $classeName = str_replace('pooPhp\\phpOo', '/home/grasiela/projetos/pooPhp/phpOo/src', $classeName);
    $classeName = str_replace('\\', DIRECTORY_SEPARATOR, $classeName);
    $classeName .= '.php';

    if(file_exists($classeName)){
        require_once $classeName;
    }
});
