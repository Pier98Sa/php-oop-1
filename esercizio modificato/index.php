<?php
//classe
class Movie{
    public $poster;
    public $title;
    public $genre;
    public $director;
    public $year;
    public $vote;

    //creo un costruttore che mi imposti title e genre
    public function __construct($poster, $title, $genre, $director, $year)
    {
        $this->poster = $poster;
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;
        $this->year = $year;
    }

    //funzione per l'assegnazione di un voto da 0 a 10
    public function setVote($vote){
        if (is_numeric($vote) && $vote >= 0 && $vote <= 10) {
            $this->vote = $vote;
        } else {
            //nel caso non rispetti le condizioni gli do 0 come valore
            $this->vote = 0;
        }
    }
}

require_once __DIR__ . "./database.php";

$array = array();

foreach ($database as $db) {
    $movie = new Movie($db['poster'], $db['title'], $db['genre'], $db['director'], $db['year']);
    $movie->setVote(10);

    $array[] = $movie;
}

//echo var_dump($array);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>È Pulp ...</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Smokum&display=swap" rel="stylesheet">
</head>

<body>
    <header class="d-flex justify-content-between align-items-center">
        <img src="./img/pngegg.png" alt="quentin tarantino">

        <h1>È Pulp ...</h1>

        <img src="./img/pngegg(1).png" alt="">
    </header>

    <main class="d-flex justify-content-between">
        <aside class="d-none d-lg-block">
            <img src="./img/pngegg(2).png" alt="">
        </aside>

        <div class="center w-100">
            <div class="container my-5">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-4">
                    <!--Stampa dei dischi-->
                    <?php
                    foreach ($array as  $film) {
                        echo '<div class="col g-4">';
                            echo '<div class="my_card d-flex flex-column align-items-center">';
                                echo '<div class="img-card p-3">';
                                    echo '<img class="img-fluid" src="' . $film -> poster . '" ' . 'alt="' . $film -> title . '">';
                                echo '</div>';

                                echo '<div class="info-card pb-2 text-center">';
                                    echo '<h2 class="p-2 fw-bold text-uppercase fs-3">' . $film -> title . '</h2>';
                                    
                                    echo '<div>';
                                        echo '<h3 class="fs-5">' .'Director: '. $film -> director . '</h3>';
                                        echo '<h3 class="fs-5">' .'Genre: '. $film -> genre . '</h3>';
                                        echo '<h3 class="fs-5">' .$film -> year . '</h3>';
                                        echo '<h3 class="fs-5">' .'Vote: '.$film -> vote . '</h3>';
                                    echo '</div>';

                                 echo '</div>';
                            echo '</div>';
                        echo '</div>';
                    }
                    ?>

                </div>
                
            </div>
        </div>

        <aside class="d-none d-lg-block">
            <img src="./img/pngegg(7).png" alt="">
        </aside>

    </main>

</body>

</html>