<?php
//require "app/index.php";
//require "resources/views/index.old.blade.php";

use Code\App;

// phpinfo();

//carreguem el fitxer autoload que carrega les dependencies definides al composer.
// i les classes que trobem als espais de noms del projecte
require '../vendor/autoload.php'; //incloem fitxer autoload

//carreguem bootsrap que realitza la configuració inicial del framework
require '../Code/bootstrap.php';

//gestionem les rutes del projecte i l'enrutador busca la ruta a config i rederigeixla solicitud al controlador
App::get('router')->redirect($_SERVER['REQUEST_URI']);
