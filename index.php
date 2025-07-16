<h1>Inserisci i dati</h1>
<form action="saluto.php" method="post">
    <label for="nome">Nome</label>
    <input type="text" name="nome">
    <label for="cognome">Cognome</label>
    <input type="text" name="cognome">
    <label for="data">Data di nascita</label>
    <input type="date" name="data">
    <input type="submit" value="Invia">
</form>

<h1>Inserisci la quantità che vuoi convertire</h1>
<form action="converti.php" method="post">
    <label for="quantità">Quantità in Euro</label>
    <input type="number" name="quantità">
    <input type="submit" value="Converti in Dollari">
  
    
</form>

<?php
echo 'Server Name: ' . $_SERVER['SERVER_NAME'] . '<br>';
echo 'Server Software: ' . $_SERVER['SERVER_SOFTWARE'] . '<br>';
echo 'Server Protocol: ' . $_SERVER['SERVER_PROTOCOL'] . '<br>';
echo 'Document Root: ' . $_SERVER['DOCUMENT_ROOT'] . '<br>';
?>
