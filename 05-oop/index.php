pppp<?php
class User {
  //2 proprietà della classe
  public $name;
  public $cognome;

  //Imposto un costruttore
}

//istanziamo Giorgio
$giorgio = new User();
//Settiamo il valore della proprietà $nome
$giorgio -> name = "Giorgio";
//Stampiamo il valore del nome dell'istanza Giorgio
echo $giorgio->name;


//------------------------------ oop con construttore ---------------------------------------//

class User2 {
  //4 proprietà della classe
  public $name;
  public $cognome;
  public $eta;
  public $email;
  public $sconto; //40

  //Imposto un costruttore
  public function __construct($_name, $_cognome, $_eta, $_email){
    $this -> name = $_name;
    $this -> cognome = $_cognome;
    $this -> eta = $_eta;
    $this -> email = $_email;
  }

  //funzione sconto
  public function setSconto( $eta ){
    if($eta > 30) {
      $this->sconto = 40;
    }
  }

  //Funzione di stampa dello sconto
  public function getSconto( ){
    return $this -> sconto;
  }
}

//istanziamo Paolo
$paolo = new User2("Paolo", "Rossi", 34, "paolo@email.it");

echo "<p>". $paolo -> name ."</p>";
echo "<p>". $paolo -> cognome ."</p>";
echo "<p>". $paolo -> eta ."</p>";
echo "<p>". $paolo -> email ."</p>";

//Usare una funzione di una classe
echo $paolo -> setSconto( $paolo -> eta );

//echo "<p>" . $paolo -> sconto . "</p>";

//Stampare chiamando la funzione
echo "<p>" . $paolo -> getSconto() . "</p>";



// nome repo: php-oop-1

// Oggi pomeriggio ripassate i primi concetti di classe e di variabili e
// metodi d'istanza che abbiamo visto stamattina e create un file index.php in cui:
// - è definita una classe ‘Movie’
//    => all'interno della classe sono dichiarate delle variabili d'istanza
//    => all'interno della classe è definito un costruttore
//    => all'interno della classe è definito almeno un metodo
// - vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
