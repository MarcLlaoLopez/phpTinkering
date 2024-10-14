<?php

namespace App\Models;

use Code\App;

class Film
{
    protected static $table = 'films';

    //funcio per a que torne totes les pelis

    public static function getAll()
    {
        $db = App::get('database');
        $statement = $db->getConnection()->prepare('SELECT*FROM' .self::$table);
        $statement->execute();
        return $statement->fetchAll();
    }

    //funcio per a busca un 
    public static function find($id)
    {
        $db = App::get('database')->getConnection();
        $statement = $db-prepare('SELECT * FROM' . self::$table . ' WHERE id = :id');
        $statement->execute(array('id' => $id));
        return $statement->fetch(\PDO::FETCH_OBJ);
    }

    //funcio create
    public static function create($data)
    {

    }

    public static function update($id, $data)
    {
        $db = App::get('database')->getConnection();
        $statement = $db->prepare('UPDATE' . self::$table . ' SET name = :name WHERE id = :id');
    }

    public static function delete($id)
    {

    }
}