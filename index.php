<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Demo PHP</title>
</head>
<body>
<h1>
    <?php
    $greeting = "Hello";
    echo $greeting . " World!<br>";
    $a = 3;
    $b = 2;
    echo "Resultat: " . $a + $b . "<br>";
    //                $films = [
    //                        "Dune",
    //                        "Star Wars",
    //                        "Blade Runner 2049",
    //                        "Mad Max: Fury road",
    //                        "Avatar",
    //                        "2001: a space odyssey"
    //                ];
    $films = [
        [
            "name" => "Dune",
            "director" => "Denis Villeneuve",
            "year" => "2020",
        ],   [
            "name" => "Star Wars",
            "director" => "George Lucas",
            "year" => "1977",
        ], [
            "name" => "Blade Runner 2049",
            "director" => "Denis Villeneuve",
            "year" => "2017",
        ], [
            "name" => "Mad Max: Fury road",
            "director" => "George Miller",
            "year" => "2015",
        ], [
            "name" => "Avatar",
            "director" => "James Cameron",
            "year" => "2009",
        ], [
            "name" => "2001: a space odyssey",
            "director" => "Stanley Kubrick",
            "year" => "1968",
        ]
    ];
    var_dump($films);

    function filterByDirector($films, $director) {
        $filteredDirectors = [];
        foreach ($films as $film) {
            if ($film["director"] === $director) {
                $filteredDirectors[] = $film;
            }
        }
        return $filteredDirectors;
    }
    //buscar les pelis a partir del 2000
    function filterByYear($films) {
        $filteredDirectors = [];
        foreach ($films as $film) {
            if ($film["year"] >= 2000) {
                $filteredDirectors[] = $film;
            }
        }
        return $filteredDirectors;
    }

    $filteredFilms = array_filter($films, function ($film) {
        return $film["year"] >= 2010 && $film["year"] <= 2020;
    });

    ?>

</h1>
<p>Llista de pelis:</p>
<ul>
    <?php foreach ($films as $film) : ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?>) - By <?= $film['director'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de pelis de Denis Villeneuve en filtro:</p>
<ul>
    <?php foreach ($films as $film) : ?>
        <?php if ($film["director"] === "Denis Villeneuve") : ?>
            <li><?= $film['name'] ?> (<?= $film['year'] ?>) - By <?= $film['director'] ?></li>
        <?php endif; ?>
    <?php endforeach; ?>
</ul>
<p>Llista de pelis de Denis Villeneuve en funcions:</p>
<ul>
    <?php foreach (filterByDirector($films, "Denis Villeneuve") as $film) : ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?>) - By <?= $film['director'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de pelis a partir del 2000:</p>
<ul>
    <?php foreach (filterByYear($films) as $film) : ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?>) - By <?= $film['director'] ?></li>
    <?php endforeach; ?>
</ul>
<p>Llista de pelis entre 2010 i 2020 en lambda:</p>
<ul>
    <?php foreach ($filteredFilms as $film) : ?>
        <li><?= $film['name'] ?> (<?= $film['year'] ?>) - By <?= $film['director'] ?></li>
    <?php endforeach; ?>
</ul>
<p> Agafem la peli 3: <?= $films[2]['name'] ?></p>
</body>
</html>