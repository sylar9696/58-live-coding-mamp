<?php

//Recuperare informazioni da parametri nell'url
$min = $_GET['min'];
$max = $_GET['max'];
$items = $_GET['items'];
$parametroFiltro = $_GET['pari'];

//creare un array con tot numeri randomici non doppi in base a il numero di items

//!° creare array vuoto contenitore per i numeri
$numeri = [];

//Filtrare contenuti Api
//Pushare numeri solo pari se parametro "pari" è true



//ciclo finchè l'array non raggiunge il numero di items
while( count($numeri) < $items ){
  $randomico = rand( $min, $max );

  if( !in_array( $randomico, $numeri,  ) ){
      //Pushare il numero dentro l'array
      $numeri[] = $randomico;
  }
}

//Ricreare la struttura api di riferimento
//creando un nuovo array
$risposta = [
  'success' => true,
  'response' => $numeri
];

header( 'Content-Type: application/json' );

echo json_encode( $risposta );

?>
