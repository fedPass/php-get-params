<?php
// Creare una variabile che contiene del testo
$text_original = 'Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.<hr>';
echo ('il testo originale è <br>' . $text_original);

//Leggere dal parametro in GET una badword
$badword = $_GET['badword'];
echo ('la parola da censurare è: ' . $badword);

//cercare all'interno del testo la badword e sostituirla con "***"
$text_edited = str_replace($badword, '***', $text_original);

//visualizzare a schermo il paragrafo aggiornato
 ?>

 <p><?php echo $text_edited ?></p>
