<?php
class Movie
{
  public $title;
  public $genre;
  // public $duration = 90;
  public $releaseDate;

  //Passo le proprità che voglio siano obbligatorie
  function __construct($_title, $_genre, $_releaseDate)
  {
    $this->title = $_title;
    $this->genre = $_genre;
    // $this->duration = $_duration;
    $this->releaseDate = $_releaseDate;
  }

  public function getFullInfo()
  {
    return ' title : ' . $this->title . ' Genere ' . $this->genre . ' Data di uscita : ' . $this->releaseDate . ' Anno ';
  }
}
