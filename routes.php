<?php
//definim les rutes

return[
    '/' => 'App/Controller/FilmController@index',
    '/index.php' => 'App/Controller/FilmController@index',
    '/index' => 'App/Controller/FilmController@index',
    '/home' => 'App/Controller/FilmController@index',
    '/create' => 'App/Controller/FilmController@create',
    '/store' => 'App/Controller/FilmController@store',
    '/edit' => 'App/Controller/FilmController@edit',
    'update' => 'App/Controller/FilmController@update',
    '/delete' => 'App/Controller/FilmController@delete',
    '/destroy' => 'App/Controller/FilmController@destroy',
];