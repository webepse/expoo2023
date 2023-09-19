<?php 
class Autoloader{
    public static function register()
    {
        // la fonction veut en paramètre un tableau avec le nom de la classe à charger et le nom de la fonction qui va s'occuper d'aller récup le fichier
        spl_autoload_register([__CLASS__,'autoload']);
        // constante magique __CLASS__ permet de récup dynamiquement le nom de la classe que l'on utilise
    }

    public static function autoload($class_name)
    {
        require "class/".$class_name.".php";
    }
}

