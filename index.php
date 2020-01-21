<?php
// Creare una variabile che contiene del testo
$text_original = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr>';
echo ('il testo originale è <br>' . $text_original);
//prendo il testo originale e lo converto tutto in minuscolo
$text_original_lower = strtolower($text_original);

//calcolo la lunghezza del testo
$text_lenght = mb_strlen($text_original);
echo ('La lunghezza del testo è ' . $text_lenght . ' parole.<hr>');

//Leggere dal parametro in GET una badword
$badword = $_GET['badword'];
//se non ho query_string dammi un messaggio di errore
if (!$badword) {
    echo 'Inserisci una parola da censurare';
} else {
    echo ('la parola da censurare è: ' . $badword);
    //prendo la badword e lo converto in minuscolo
    $badword_lower = strtolower($badword);
    //cercare all'interno del testo la badword e sostituirla con "***"
    $text_edited = str_replace(' '.$badword_lower.' ', ' *** ', $text_original_lower);
    //esiste anche str_ireplace --> replace insensibile

    //visualizzare a schermo il paragrafo aggiornato
}
 ?>

 <p><?php echo $text_edited ?></p>
