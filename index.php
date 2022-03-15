<?php
//classe
class Movie{
    public $title;
    public $genre;
    public $vote;

    //creo un costruttore che mi imposti title e genre
    public function __construct($title,$genre){
        $this->title = $title;
        $this->genre = $genre;

        //dopo avergli dato un valore, ne faccio l'echo
        echo "<p>"."Film: " .  $this->title = $title . "</p>";
        echo "<p>"."Genere: " .  $this->genre = $genre . "</p>";
    }

    //funzione per l'assegnazione di un voto da 0 a 10
    public function setVote($vote){
        if(is_numeric($vote) && $vote >= 0 && $vote <= 10){
            $this->vote = $vote;
            //nel caso sia un numero, tra 0 e 10 ne faccio l'echo
            echo "<p>"."Voto: ".$this->vote = $vote."</p>";
        }else{
            //nel caso non rispetti le condizioni do un messaggio di errore
            echo "voto non valido";
        }
    }
}

//creazione delle istanze
$KillBill = new Movie('Kill Bill: Volume 1', 'Azione');
//assegnazione del voto
$KillBill->setVote(10);

$KillBill2 = new Movie('Kill Bill: Volume 2', 'Azione');
$KillBill2->setVote(10);