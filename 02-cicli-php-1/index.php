<?php

$numero1 = 2;
$numero2 = 5;

//Somma
$numero1 += $numero2;
// echo $numero1;

//moltiplicazione
$numero1 *= $numero2;
echo $numero1; //35

$stringa1 = 'ciao';
$stringa2 = 'world';

$stringa1 .= $stringa2;
echo $stringa1; //ciaoworld

//Array
$frutta = [
  'fragole',
  'pere',
  'limoni'
];

var_dump( $frutta );
echo $frutta[2];

//Array associativi
$team = [
  'nome' => 'team1',
  'cognome' => 'Esposito'
];

echo $team['cognome'];

var_dump( array_keys($frutta) );
var_dump( array_keys($team) );

//pushiamo un nuovo dato nell'array frutta array normale
$frutta[] = 'pompelmo';
var_dump( $frutta );

//pushiamo un nuovo dato nell'array team array associativo
$team['punti'] = 50;
var_dump( $team );

//in_array(value, array)
var_dump( in_array('mango', $frutta) );

//Array_merge

//Array_search
var_dump( array_search('esposito', $team) );

//numero random
$random = rand( 1, 1000 );

echo "<p> $random </p>";


//ciclo for su array di frutta
for( $i=0; $i < count( $frutta ); $i++ ){

  echo "<p>$frutta[$i]</p>";

}

$teams = [
  [
    "nome" => "Fabio",
    "lastname" => "Forghieri",
    "role" => "Co-Founder"
  ],
  [
    "nome" => "Michele",
    "lastname" => "Papagni",
    "role" => "Head of teaching"
  ]
];

// Fabio - Forghieri: Co-founder

for( $i = 0; $i < count($teams); $i++ ){
  $valore = $teams[$i]['nome'];
  echo "<p>$valore</p>";
}



?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>

  <?php for( $i = 0; $i < count($teams); $i++ ){ ?>
      <p>
        <?php echo $teams[$i]['nome']; ?>
      </p>
  <?php } ?>

</body>
</html>
