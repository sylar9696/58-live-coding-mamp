<?php

// $teams = [
//   [
//     "nome" => "Fabio",
//     "lastname" => "Forghieri",
//     "role" => "Co-Founder"
//   ],
//   [
//     "nome" => "Michele",
//     "lastname" => "Papagni",
//     "role" => "Head of teaching"
//   ]
// ];

//Array associativo
$teams = [
    "nome" => "Fabio",
    "lastname" => "Forghieri",
    "role" => "Co-Founder"
];

//Non possiamo usarlo
// for( $i = 0; $i <br count( $teams ); $i++ ){
//   echo $teams[$i];
// }


//Possiamo stampare solo la key
foreach( $teams as $key => $value ){
  echo "<p>$key</p>";
}

//Possiamo stampare solo il valore
foreach( $teams as $key => $value ){
  echo "<p>$value</p>";
}

//Possiamo stampare entrambi
foreach( $teams as $key => $value ){
  echo "<p>$key - $value</p>";
}

//Array normali
$frutta = [
  'pere',
  'mele',
  'banane'
];

//Scrittura del foreach senza la key suy array normale
foreach( $frutta as $singoloELemento ){
  echo "<p>$singoloELemento</p>";
}

foreach( $frutta as $singoloELemento ){
  //trovare e stampare solo 'mele'
  if( $singoloELemento == 'mele' ){
    echo $singoloELemento;
  }
}

//Scrittura del foreach con la key su array normale
foreach( $frutta as $key => $value ){
  echo "<p>$key - $value</p>";
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

//fabio - forghieri - cofounder
foreach( $teams as $key => $team ){

  if( $key == 0 ){
      echo "<p>" . $team["nome"] . " - " . $team["lastname"] . " - " . $team["role"] . "</p>";
  }
  // foreach( $team as $key => $value ){
  //   echo  $value;
  // }
};


$posts = [
    '10/01/2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10/02/2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ]
    ],
    '15/05/2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => '<h6>Michele Papagni</h6>',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ]
    ],
];

/*
Creare un array di array. Ogni array figlio avrà come chiave una data in questo formato: DD-MM-YYYY es 01-01-2007 e come valore un array di post associati a quella data. Stampare ogni data con i relativi post.
*/
/*
15/05/2019:
  Post 5
  Michele Papagni
  Testo post 5


*/

foreach( $posts as $key => $post ){

  //Stampiano la key dell'array padre che corrisponde a ogni data
  echo "<h2>" . $key . "</h2>";
  // var_dump( $post );

  foreach ( $post as $key =>  $tuttiDati ){
    // var_dump($value);

    foreach( $tuttiDati as $value ){
      echo $value;
    }

    // echo "<h4>" . $singoloPost['title'] . "</h4>";
    // echo "<p>" . $singoloPost['text'] . "</p>";

  }

}

/*

$faqs = [
        [
            'question' => 'Come state implementando la recente decisione della Corte di giustizia dell\'Unione europea (CGUE) relativa al diritto all\'oblio?',
            'answer' => 'La recente decisione della Corte di giustizia dell\'Unione europea ha profonde conseguenze per i motori di ricerca in Europa. La Corte ha stabilito che alcuni utenti hanno il diritto di chiedere ai motori di ricerca come Google di rimuovere risultati relativi a chiavi di ricerca che includono il proprio nome. Per poter essere rimossi, i risultati visualizzati devono essere inadeguati, irrilevanti o non più rilevanti, o eccessivi.<br><br>Da quando questa decisione è stata pubblicata il 13 maggio 2014, abbiamo lavorato incessantemente per uniformarci a essa. Si tratta di una procedura complessa perché dobbiamo valutare ogni singola richiesta e effettuare un bilanciamento tra il diritto dell\'individuo a controllare i suoi dati personali ed il diritto di tutti di conoscere e distribuire le informazioni.<br><br>Per presentare una richiesta di rimozione, compila questo modulo web. Riceverai una risposta automatica che conferma la ricezione della tua richiesta. Dopodiché valuteremo il tuo caso (tieni presente che potrebbe occorrere un po\' di tempo perché abbiamo già ricevuto tante richieste simili). Nel valutare la richiesta, considereremo se i risultati includono informazioni obsolete relative alla tua vita privata. Considereremo inoltre se vi è un interesse pubblico a che le informazioni rimangano nei nostri risultati delle ricerche, ad esempio se riguardano frodi finanziarie, negligenza professionale, condanne penali o la tua condotta pubblica in relazione a un pubblico ufficio (eletto o non eletto). Queste valutazioni sono complesse e, in quanto organizzazione privata, potremmo non essere nella posizione giusta per prendere decisioni in merito al tuo caso. Se non sei d\'accordo con la nostra valutazione, puoi rivolgerti all\'Autorità garante per la protezione dei dati personali nel tuo paese.<br><br>Nei prossimi mesi lavoreremo a stretto contatto con le autorità per la protezione dei dati e con altre autorità per perfezionare il nostro approccio. La decisione della CGUE rappresenta un cambiamento significativo per i motori di ricerca. Siamo preoccupati per le sue conseguenze, ma riteniamo anche che sia importante rispettare la decisione della Corte e ci stiamo adoperando per predisporre una procedura conforme alla legge.<br><br>Quando cerchi un nome, potresti trovare una notifica in cui viene spiegato che i risultati potrebbero essere stati modificati nel rispetto delle leggi europee per la protezione dei dati. Mostriamo questa notifica agli utenti europei quando cercano la maggior parte dei nomi, non soltanto le pagine che sono state soggette a una rimozione.'
        ],
        [
            'question' => 'Come fa Google a proteggere la mia privacy e a tenere le mie informazioni al sicuro?',
            'answer' => 'Sappiamo che la sicurezza e la privacy sono importanti per te e lo sono anche per noi. Per noi è imperativo offrire un\'elevata sicurezza e assicurarti che le tue informazioni sono al sicuro e accessibili quando ne hai bisogno.<br><br>Siamo costantemente al lavoro per garantire un\'elevata sicurezza, proteggere la tua privacy e rendere Google ancora più efficace ed efficiente per te. Spendiamo centinaia di milioni di dollari ogni anno per la sicurezza e ci avvaliamo di esperti di fama mondiale in materia di sicurezza dei dati per mantenere le tue informazioni al sicuro. Abbiamo inoltre sviluppato strumenti per la sicurezza e la privacy di facile utilizzo come Google Dashboard, la verifica in due passaggi e Impostazioni annunci. Così, per quanto riguarda le informazioni che condividi con Google, hai il massimo controllo.<br><br>Puoi leggere ulteriori informazioni sulla sicurezza online, incluso come proteggere te e la tua famiglia online, nel Centro Google per la sicurezza online.<br><br>Scopri quali misure adottiamo per garantire protezione e sicurezza alle tue informazioni personali, lasciando a te il controllo.'
        ],
        [
            'question' => 'Come faccio a rimuovere informazioni su di me dai risultati di ricerca di Google?',
            'answer' => 'I risultati di ricerca di Google rispecchiano i contenuti pubblicamente disponibili sul Web. I motori di ricerca non possono rimuovere i contenuti direttamente dai siti web, quindi rimuovere risultati di ricerca da Google non consente di rimuovere i contenuti dal Web. Se desideri rimuovere qualcosa dal Web, devi contattare il webmaster del sito su cui sono pubblicati i contenuti e chiedergli di apportare una modifica. Inoltre, se, ai sensi delle leggi europee per la protezione dei dati, desideri richiedere la rimozione di determinate informazioni su di te visualizzate nei risultati di ricerca di Google, fai clic qui. Una volta che i contenuti saranno stati rimossi e che Google avrà rilevato l\'aggiornamento, le informazioni non verranno più visualizzate nei risultati di ricerca di Google. In caso di una richiesta di rimozione urgente, è inoltre possibile visitare la nostra pagina di assistenza per avere ulteriori informazioni.'
        ],
        [
            'question' => 'Quando faccio clic sui risultati della Ricerca Google, le mie chiavi di ricerca vengono inviate ai siti web?',
            'answer' => 'In alcuni casi sì. Quando fai clic su un risultato della Ricerca Google, il tuo browser web potrebbe reindirizzare alla pagina web di destinazione anche l\'indirizzo Internet, o URL, della pagina dei risultati di ricerca sotto forma di URL referrer. Talvolta, l\'URL della pagina dei risultati di ricerca potrebbe contenere la query di ricerca che hai inserito. Se utilizzi la ricerca SSL (la funzione di ricerca criptata di Google), nella maggior parte dei casi i termini di ricerca non vengono inviati come parte dell\'URL negli URL referrer. Questo comportamento può fare eccezione, ad esempio se utilizzi alcuni browser meno diffusi. Ulteriori informazioni sulla ricerca SSL sono disponibili qui. Le query di ricerca o le informazioni contenute nell\'URL referrer potrebbero essere disponibili mediante Google Analytics o un\'API (Application Programming Interface). Inoltre, gli inserzionisti potrebbero ricevere informazioni relative all\' esatte parole chiave che hanno determinato il clic su un annuncio.'
        ]
    ];











Invia messaggio classe58_comunicazioni











*/

?>


<?php

$colore = "nero";

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>

  <style>
    .rosso{
      background: red;
    }
  </style>
</head>
<body>
  <p class=" <?php echo ( $colore == 'rosso' ) ? $colore : 'altracosa' ?> ">
    Lorem ipsum dolor sit amet consectetur adipisicing elit. Eos ipsam recusandae, quaerat assumenda a aperiam deleniti blanditiis maiores eius quasi enim quod aut cum, ducimus minima expedita eaque illo aliquam.
  </p>
</body>
</html>
