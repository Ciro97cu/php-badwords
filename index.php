<!-- Descrizione:
Creare una variabile con un paragrafo di testo a vostra scelta.
Stampare a schermo il paragrafo e la sua lunghezza.
Una parola da censurare viene passata dall'utente tramite parametro GET.
Stampare di nuovo il paragrafo e la sua lunghezza, dopo aver sostituito 
con tre asterischi (***) tutte le occorrenze della parola da censurare. -->
<?php
$name = $_GET["subject"];
$text = "Ciao questo è il mio primo esercizio in " . $name;
$altText = str_replace("PHP", "***", $text);
?>

<h1> <?php echo ($text) ?> </h1>
<p>La stringa sopra ha lunghezza <?php echo (strlen($text)) ?></p>

<hr />

<h1> <?php echo ($altText) ?> </h1>
<p>La stringa sopra ha lunghezza <?php echo (strlen($altText)) ?></p>