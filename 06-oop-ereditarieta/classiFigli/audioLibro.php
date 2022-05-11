<?php

include __DIR__ . '/../index.php';
//Questa classe erediterà le informazioni del padre Book

class AudioBook extends Book {
  //proprietà esclusive di audiobook
  public $lunghezzaAudio;
  public $narratore;

  public function __construct(  $_title,  $_author,  $_price,  $_lunghezzaAudio,  $_narratore ){
    //Setter del padre
    // $this -> setTitle($_title);
    // $this -> setAuthor($_author);
    // $this -> setPrice($_price);
    parent::__construct( $_title, $_author, $_price );
    //setter del figlio: AudioBook
    $this -> setLunghezzaAudio($_lunghezzaAudio);
    $this -> setNarratore($_narratore);
  }

  //Setter $lunghezzaAudio
  public function setLunghezzaAudio($_lunghezzaAudio){
    //Possibile validazione dei dati
    $this -> lunghezzaAudio = $_lunghezzaAudio;
    return $this;
  }

  //Setter $narratore
  public function setNarratore($_narratore){
    //Possibile validazione dei dati
    $this -> narratore = $_narratore;
    return $this;
  }

  //Getter $lunghezzaAudio
  public function getLunghezzaAudio(){
    //Possibile validazione dei dati
    return $this -> lunghezzaAudio;
  }

  //Getter $narratore
  public function getNarratore(){
    //Possibile validazione dei dati
    return $this -> narratore;
  }



  public function setScontoPubblico($_sconto){
    return parent::setSconto($_sconto);
  }



  //------------ Polimorfismo------------------------
  // public function setSconto($_sconto){
  //   $this -> sconto = $_sconto * 4;
  //   return $this;
  // }

  // public function getLunghezza(){
  //   return ......
  // }

}


//Istanziamo un audioLibbro

$anelliAudioLibro = new AudioBook('Signore Degli Anelli - audio', 'Tolkien', 15, 300, 'Lino Banfi' );

// var_dump($anelliAudioLibro);

echo "<p>" . $anelliAudioLibro -> getTitle() . "</p>";
echo "<p>" . $anelliAudioLibro -> getAuthor() . "</p>";
echo "<p>" . $anelliAudioLibro -> getPrice() . "</p>";
echo "<p>" . $anelliAudioLibro -> getLunghezzaAudio() . "</p>";
echo "<p>" . $anelliAudioLibro -> getNarratore() . "</p>";

var_dump($anelliAudioLibro);

//settiamo sconto del figlio
$anelliAudioLibro -> setScontoPubblico(80);

var_dump($anelliAudioLibro);

echo "<p>Lo sconto di un audio libro è:" . $anelliAudioLibro -> sconto . "</p>";


//------------------ Visibilità ---------------------------

echo "<p>Stampa del parametro pubblico Lunghezza Audio: " . $anelliAudioLibro -> lunghezzaAudio . "</p>";





/*
nome repo: php-oop-2

Oggi pomeriggio provate ad immaginare quali sono le classi necessarie per creare uno shop online con le seguenti caratteristiche.

L'e-commerce vende prodotti per gli animali.
I prodotti saranno oltre al cibo, anche giochi, cucce, etc.

L'utente potrà sia comprare i prodotti senza registrarsi, oppure iscriversi e ricevere il 20% di sconto su tutti i prodotti.
Il pagamento avviene con la carta di credito, che non deve essere scaduta.

BONUS:
Alcuni prodotti (es. antipulci) avranno la caratteristica che saranno disponibili solo in un periodo particolare (es. da maggio ad agosto).
*/



?>
