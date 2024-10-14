<?php
//Fitxer per crear la connexió a la base de dades
namespace Code\Database;

use PDO; //importem classe PDO per interactuar en les bases de dades

class Connection
{
    //creem instancia de la classe PDO per establir la connexió a la base de dades
    public static function make($config)
    {
        try{
            return new PDO(
                $config['databasetype'] . ':host=' . $config['host'] .
                ';dbname=' . $config['name'], $config['user'] , $config['password']
            );
        } catch (\Exception $e){
            echo 'Error de connexió a la base de dades.';
        }
    }
}