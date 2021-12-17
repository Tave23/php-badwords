<!-- Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall’utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito con tre asterischi (***) tutte le occorrenze della parola da censurare. -->


<?php

$paragrafo = "Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque saepe illum itaque iste dolore repellat veniam, voluptatem vitae neque incidunt unde soluta amet dolorum quas, odit adipisci doloribus. badword nihil hic aspernatur sequi labore nobis, officia ab voluptatum id adipisci aliquid molestiae blanditiis quidem in laudantium fugit ratione est? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque saepe illum itaque iste dolore repellat veniam, voluptatem vitae neque incidunt unde soluta amet dolorum quas, odit adipisci doloribus. Ex error nihil hic aspernatur sequi labore nobis, badword ab voluptatum id adipisci aliquid molestiae badword quidem in laudantium fugit ratione est? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque saepe illum itaque iste dolore repellat veniam, voluptatem vitae neque incidunt unde soluta amet dolorum quas, odit adipisci doloribus. Ex error nihil hic aspernatur sequi labore nobis, officia ab voluptatum id badword aliquid molestiae blanditiis quidem in laudantium fugit ratione est? Lorem ipsum, dolor sit amet consectetur adipisicing elit. Eaque saepe illum badword iste dolore repellat veniam, voluptatem vitae neque incidunt unde soluta amet dolorum quas, odit adipisci doloribus. Ex error nihil hic aspernatur sequi labore nobis, officia ab voluptatum id adipisci aliquid molestiae blanditiis quidem in badword fugit ratione est?";


// per stampare la variabile
// echo $paragrafo;

$repeater = 3;

$starteCharacter = 345;

?>



<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>php-badwords</title>
</head>
<body>

   <!-- così per stampare la variabile (tramite echo) -->
   <p>Il paragrafo è: <br> <?php echo $paragrafo; ?> </p>
   
   <h4>
      <!-- per conoscere il numero dei caratteri "strlen" -- string length -->
      La lunghezza di questo paragrafo è: <?php echo strlen($paragrafo) ?>
   </h4>

   <p>
      Il paragrafo senza parolacce è: <br> <?php echo str_replace('badword','***', $paragrafo); ?> 
   </p>

   <p>
      Il paragrafo ripetuto <?php echo $repeater; ?> volte è: <br> <?php echo str_repeat ($paragrafo, $repeater); ?>
   </p>

   <p>
      Il paragrafo al contrario è: <br> <?php echo strrev ($paragrafo); ?>
   </p>

   <p>
      Il paragrafo a partire dal carattere <?php echo $starteCharacter ?> è: <br> <?php echo substr($paragrafo, $starteCharacter); ?>
   </p>

</body>
</html>