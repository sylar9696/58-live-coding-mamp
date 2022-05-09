<?php

function getSommaNUmeriCasuali( $min, $max ){

  $num1 = rand( $min, $max );
  $num2 = rand( $min, $max );

  //controllare chi è più grande e stampare una frase di risultato
  if( $num1 > $num2 ){
    return 'Numero 1 è più grande di numero 2';
  } elseif( $num1 < $num2 ){
    return 'Numero 2 è più grande di numero 1';
  } else {
    return 'Numero 1 è uguale a numero 2';
  }
}
?>
