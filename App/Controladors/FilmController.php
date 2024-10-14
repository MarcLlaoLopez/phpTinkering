<?php

namespace App\Controladors;

use App\Models\Film;

class FilmController
{
  //funcio index
    public function index()
    {
        //obtenim totes les pelis
        $films = Film::getAll();

        //pasem les pelis a la vista
        return view('index', ['films' => $films]);
    }

    //funcio per anar a la vista create
    public function create()
    {
        return view('create');
    }

    //funcio per guardar les dades i tornar a la vista principal
    public function store($data)
    {
        //cridem funcio create del model
        Film::create($data);
        //retornar a la vista principal
         header('Location: /');
         exit;
    }
}