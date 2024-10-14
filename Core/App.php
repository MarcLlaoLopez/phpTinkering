<?php

//Fitxer per crear contendor de les dependencies per gestionar-les
namespace Code;

use Exception;

class App{
    //array per al contenidor de dependencies
    private static $container;

    //creem funcio enllaçada la dependencia al contenidor
    public static function bind($key, $value){
        static::$container[$key] = $value;
    }

    //creem funcip per recuperar la dependencia
    public static function get($key)
    {
        if(!array_key_exists($key, static::$container)){
            throw new Exception("No key '$key' is bound in container.");
        }
        return static::$container[$key];
    }





}