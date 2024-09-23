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
//                $movils = [
//                    "iPhone",
//                    "Samsung",
//                    "Xiaomi",
//                    "HTC",
//                    "Huawei"
//                ];
            $movils = [
                [
                    "name" => "iPhone",
                    "creator" => "Steve Jobs",
                    "year" => "2002"
                ],   [
                    "name" => "Samsung",
                    "creator" => "Lee Byung-chul",
                    "year" => "2000"
                ],   [

                    "name" => "Xiaomi",
                    "creator" => "Lei Jun",
                    "year" => "2008"
                ],   [
                    "name" => "HTC",
                    "creator" => "Peter Chou",
                    "year" => "2010"
                ],   [
                    "name" => "Huawei",
                    "creator" => "Ren Zhengfei",
                    "year" => "2009"
                ]
            ];
            var_dump($movils);

            function filterByCreator($movils, $creator)
            {
                $filteredCreators = [];
                foreach ($movils as $movil) {
                    if ($movil["creator"] == $creator) {
                        $filteredCreators[] = $movil;
                    }
                }
                return $filteredCreators;
                }

            function filterByYear($movils, $year)
            {
                $filteredYears = [];
                foreach ($movils as $movil) {
                    if ($movil["year"] == $year) {
                        $filteredYears[] = $movil;
                    }
                }
                return $filteredYears;
                }


            $filteredMovils = array_filter($movils, function ($movil) {
                return $film["year"] >= 2000 && $film["year"] >= 2008;
            });
            ?>

        </h1>
        <p>Llista de movils:</p>
        <ul>
            <?php foreach ($movils as $movil) : ?>
                <li><?= $movil['name'] ?> (<?= $movil['year'] ?> ) - By <?= $movil['creator'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Listat de movils de Steve Jobs</p>
        <ul>
            <?php foreach (filterByCreator($movils, "Steve Jobs") as $movil) : ?>
                <li><?= $movil['name'] ?> (<?= $movil['year'] ?>) - By <?= $movil['creator'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Listat de movils de 2008</p>
        <ul>
            <?php foreach (filterByYear($movils, "2008") as $movil) : ?>
                <li><?= $movil['name'] ?> (<?= $movil['year'] ?>) - By <?= $movil['creator'] ?></li>
            <?php endforeach; ?>
        </ul>
        <p>Listat de movils de entre 2002 i 2010 en lambda</p>
        <ul>
            <?php foreach ($filteredMovils as $movil) : ?>
                <li><?= $movil['name'] ?> (<?= $movil['year'] ?>) - By <?= $movil['creator'] ?></li>
            <?php endforeach; ?>
        </ul>
    <p> Agafem el movil 3: <?= $movils[2] ?></p>
    </body>
</html>