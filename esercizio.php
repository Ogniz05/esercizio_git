<?php

echo 'ciao, oggi è' .date('d/m/Y') .'e sono le' .date('H:i:s');
?>

<?php

$nome = 'Nicolò Persia';

echo 'Lunghezza del nome:' . strlen($nome) . "<br>";
echo 'Nome in maiuscolo:' . strtoupper($nome) . "<br>";

$nomeSenzaSpazi= trim($nome);
echo 'Nome senza spazi:' . ($nomeSenzaSpazi) . "<br>";
?>

<?php

$frase = 'PHP è divertente e potente';

$fraseModificata = str_replace('divertente', 'semplice', $frase);
echo $fraseModificata;
?>

<?php

$testo = 'I pinguini stanno soffrendo a casusa del riscaldamento globale';
$parole=explode(' ', $testo);

foreach($parole as $parola) {
    echo $parola . "\n";
}
?>

<?php

$Nomi = ['Nicolò', 'Mario', 'Luigi', 'Giovanni', 'Francesco'];
sort($Nomi);
foreach($Nomi as $Nome){
    echo $Nome . "\n";
}
?>

<?php
$studenti = [
    'Nicolò' => 20,
    'Mario' => 21,
    'Luigi' => 16,
    'Giovanni' => 3,
    'Francesco' => 12,
];

foreach($studenti as $nome => $voto){
    if($voto >= 18){
        echo 'esame superato' . " $nome: $voto\n";
    }
}

?>

<?php
$parole = ["albero", "casa", "computer", "libro", "programmazione"]; 
$conteggio = 0;

foreach ($parole as $parola) {
    if (strlen($parola) > 5) {
        $conteggio++;
    }
}

echo "Parole con più di 5 caratteri: $conteggio";
?>

<?php
echo 'Mi mancano alcuni esercizi perchè non li so fare :(';
?>



