<?php

class Book
{
  public $title;
  public $author;
  public $price;
  public $sconto;

  //Costruttore
  public function __construct($_title, $_author, $_price ){
    $this -> setTitle($_title);
    $this -> setAuthor($_author);
    $this -> setPrice($_price);
    $this -> setPrice($_price);
  }

  //setter
  public function setTitle($_title){
    //Possibile validazione dei dati
    $this -> title = $_title;
    return $this;
  }

  public function setAuthor($_author){
    //Possibile validazione dei dati
    $this -> author = $_author;
    return $this;
  }

  public function setPrice($_price){
    //Possibile validazione dei dati
    $this -> price = $_price;
    return $this;
  }

  //Getter
  public function getTitle(){
    //Possibile validazione dei dati
    return $this -> title;
  }

  public function getAuthor(){
    //Possibile validazione dei dati
    return $this -> author;
  }

  public function getPrice(){
    //Possibile validazione dei dati
    return $this -> price;
  }

  //Sconto prezzo
  protected function setSconto($_sconto){
    $this -> sconto = $_sconto * 2;
    return $this;
  }
}

//istanziamo
$anelli = new Book( 'Signore Degli Anelli', 'Tolkien', 30 );

echo "<p>" . $anelli -> getTitle() . "</p>";
echo "<p>" . $anelli -> getAuthor() . "</p>";
echo "<p>" . $anelli -> getPrice() . "</p>";

//settiamo sconto
//$anelli -> setSconto(30);

echo "<p> lo sconto è: " . $anelli -> sconto . "</p>"; //60

?>
