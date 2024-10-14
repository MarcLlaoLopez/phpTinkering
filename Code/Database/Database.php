<?php

namespace Code\Database;

use PDO;

class Database
{
    protected $pdo; //guardem instancia de la classe pdo

    //creem constructor reb una instancia pdo per a realitzar les consultes
    public function __construct($pdo)
    {
        $this->pdo = $pdo;
    }

    //creem funcio per agafar els registres d'una taula de la base de dades
    
    public function selecAll($table)
    {
        $statment = $this->pdo->prepare("SELECT * FROM $table");

        $statment -> execute();

        return $statment->fetchAll(PDO::FETCH_CLASS);
    }
}