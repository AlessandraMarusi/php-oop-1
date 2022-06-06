<?php 
require_once __DIR__.'/classes/movie.php';
$movies = [
    [
        'title' => 'Un film',
        'genre' => 'Filmoso',
        'rate' => '5',
        'pg' => 0,
    ],
    [
        'title' => 'Un altro film',
        'genre' => 'Filmettoso',
        'rate' => '8',
        'pg' => 14,
    ],
    [
        'title' => 'Il Film',
        'genre' => 'Boh',
        'rate' => '7',
        'pg' => 18,
    ],
    [
        'title' => 'Il Film 2 - La Vendetta',
        'genre' => 'BohBoh',
        'rate' => '2',
        'pg' => 6,
    ]
];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>php-oop-1</title>
</head>
<body>
    <main>
        <div class="container">
            <?php 
            foreach($movies as $key => $value) {
                $movie = new Movie($value['title'], $value['genre'], $value['rate'], $value['pg']);
                $movie->setPg($value['pg']);
                //var_dump($movie);
                echo '<div class="card">
                    <h2>Titolo: '.$movie->getTitle().'</h2>
                    <h4>Genere: ' .$movie->getGenre().'</h4>
                    <h4>Rating: ' .$movie->getRate().'</h4>
                    <h5>'.$movie->getPg().'</h5>
                </div>';
            }
            ?>
        </div>
    </main>
</body>
</html>