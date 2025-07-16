<?php
$nome =htmlspecialchars($_POST['nome']);
$cognome = htmlspecialchars($_POST['cognome']);
$data = htmlspecialchars($_POST['data']);

echo "Ciao $nome $cognome!<br><br>";

function data_nascita($data){
    $oggi = new DateTime();
    $nascita = new DateTime($data);
    return $oggi->diff($nascita)->y;
}

echo " La tua età è " . data_nascita($data);

?>

