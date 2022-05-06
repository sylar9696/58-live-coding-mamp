<?php

//Variabili php
$nome = 'Michele';
$nome2 = 'marco';

//Array
$array = ['banana', 'pera'];
//echo $nome;
var_dump( $array );

$parametroUri = ( isset( $_GET['nome'] ) ) ? $_GET['nome'] : '';

$parametro2 = $_GET['parametro2'];

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Intro php</title>
</head>
<body>

<h1>Ciao <?php echo $nome; ?> </h1>
<h2>Ciao <?php echo $nome2; ?> </h2>

<!-- Concatenazione -->
<p>
  Ciao <?php echo $nome . ' ' . $nome2; ?>
</p>

<p>
  Ciao <?php echo 'Hello World'; ?>
</p>

<span>
  <?php echo $parametroUri; ?>
</span>

<form method="GET">
  <input type="text" name="parametro2">
  <input type="text" name="parametro3">
  <button type="submit">Invia</button>
</form>

<?php echo $parametro2; ?>

<!-- Explode -->
<?php
  var_dump( explode( '-', 'alex-96' ) );
  var_dump( 'prova' );
?>

<!-- trim -->
<?php
$paragrafo = '                  lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum a perspiciatis sit, rerum optio quasi deleniti eligendi officia neque nam nisi esse qui ipsum necessitatibus porro dolores libero, consequuntur pariatur?                ';
$paragrafoDopoTrim = trim($paragrafo);
//Strlen

?>

<p>La lunghezza del paragrafo prima di trim è: <?php echo strlen( $paragrafo ) ?></p>
<p>La lunghezza del paragrafo prima di trim è: <?php echo strlen( $paragrafoDopoTrim ) ?></p>

<p>
  <?php echo str_replace('amet', '###', $paragrafo)  ?>
</p>

<p>
  <?php echo str_ireplace('Amet', '###', $paragrafo)  ?>
</p>

<p>
  La posizione della parola inizia da:
  <?php echo strpos($paragrafo, 'sit')  ?>
</p>

<p>
  <?php echo ucfirst($paragrafoDopoTrim);  ?>
</p>

<p>
  <?php echo ucwords($paragrafoDopoTrim);  ?>
</p>



</body>
</html>
