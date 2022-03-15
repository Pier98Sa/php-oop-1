<?php
//classe
class Movie{
    public $title;
    public $genre;
    public $director;
    public $vote;

    //creo un costruttore che mi imposti title e genre
    public function __construct($title,$genre,$director){
        $this->title = $title;
        $this->genre = $genre;
        $this->director = $director;   
    }

    //funzione per l'assegnazione di un voto da 0 a 10
    public function setVote($vote){
        if(is_numeric($vote) && $vote >= 0 && $vote <= 10){
            $this->vote = $vote;
        }else{
            //nel caso non rispetti le condizioni gli do 0 come valore
            $this->vote = 0;
        }
    }
}


//creazione delle istanze
$KillBill = new Movie('Kill Bill: Volume 1', 'Azione','Quentin Tarantino');
//dopo avergli dato un valore, ne faccio l'echo
echo "<p>"."Film: " .  $KillBill->title . "</p>";
echo "<p>"."Genere: " .  $KillBill->genre . "</p>";
echo "<p>"."Regista: " .  $KillBill->director . "</p>";
//assegnazione del voto
$KillBill->setVote(10);
echo "<p>". "Voto: ".$KillBill->vote  ."</p>";

$KillBill2 = new Movie('Kill Bill: Volume 2', 'Azione','Quentin Tarantino');
//dopo avergli dato un valore, ne faccio l'echo
echo "<p>"."Film: " .  $KillBill2->title . "</p>";
echo "<p>"."Genere: " .  $KillBill2->genre . "</p>";
echo "<p>"."Regista: " .  $KillBill2->director . "</p>";
//assegnazione del voto
$KillBill2->setVote(10);
echo "<p>". "Voto: ".$KillBill2->vote  ."</p>";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quentin Tarantino</title>
</head>
<body>
    
</body>
</html>