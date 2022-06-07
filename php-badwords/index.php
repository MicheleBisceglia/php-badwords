<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>php-badwords</title>
</head>
<body>
 
<!-- Creo una variabile con il paragrado-->
<?php
$text = "Lorem ipsum dolor sit amet consectetur adipisicing elit. Vitae consectetur beatae repellendus rem ut ea magni sed aliquam debitis, corporis dolores ab veritatis incidunt necessitatibus iure doloribus sit deserunt. Nisi! "
?>

<!-- Stampo il paragrafo nella pagina -->
  <h1>Questo è il paragrafo</h1>
  <p>
    <?php echo $text;
    ?>
  </p>

<!-- Stampo la lunghezza paragrafo nella pagina -->
  <h3>Lunghezza paragrafo</h3>
  <p>
    <?php 
    $text_lenght = strlen($text);
    echo "Il paragrafo è lungo $text_lenght caratteri"
    ?>
  </p>

  <!-- ricevo una parola dall'utente tramite get-->
  <?php
    $censored = $_GET['censored'];
  ?>
  
<!-- Sostituisco la parola inviata dall'utente con *** -->
  <h4>Scrivere ?censored=(parola da censurare) nel link della pagina e premere invio per censurare la parola selezionata</h4>
    <p>
        <?php
        $new_text = str_replace("$censored", "***", $text);
        echo $new_text;
        ?>
    </p>

<!-- Stampo la lunghezza del nuovo paragrafo -->
  <p>
    <?php 
    $new_text_lenght = strlen($new_text);
    echo "Il nuovo paragrafo è lungo $new_text_lenght caratteri"
    ?>
  </p>

</body>
</html>