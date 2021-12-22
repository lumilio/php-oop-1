
<!-- è definita una classe ‘Movie’
  => all'interno della classe sono dichiarate delle variabili d'istanza
  => all'interno della classe è definito un costruttore
  => all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà -->

<?php


class Movie
{
    public $title;
    public $genre;
    public $author;
    public $vote;


    function __construct(String $title, String $genre, String $author, Float $vote)
    {
        $this->title = $title;
        $this->genre = $genre;
        $this->author = $author;
        $this->vote = $vote;
    }


    public function getTitle()
    {
        return $this->title;
    }
    public function getVote()
    {
        return $this->vote;
    }

}

$film1 = new Movie('Il castello errante di Howl', 'Animazione', 'Hayao Miyazaki', 4.7);
$film2 = new Movie('Principessa Mononoke', 'Animazione', 'Hayao Miyazaki', 4.9);

 var_dump($film1, $film2);
 echo '</br>'.'</br>';
 var_dump($film1->getTitle());
 var_dump($film2->getVote());
 echo '</br>'.'</br>';
 var_dump($film1->getTitle());
 var_dump($film2->getVote());




?>