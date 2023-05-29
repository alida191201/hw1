<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citazioni Anime</title>
    <link rel="stylesheet" type="text/css" href="style3.css">
</head>
<body>
<?php

// Effettua una richiesta GET all'API di AnimeChan
$response = file_get_contents('https://animechan.vercel.app/api/random');

// Decodifica la risposta JSON
$data = json_decode($response, true);

// Controlla se ci sono errori durante la richiesta
if (!$data) {
    echo 'Errore durante la richiesta.';
    exit;
}

// Ottieni la citazione casuale
$quote = $data['quote'];
$character = $data['character'];
$anime = $data['anime'];

// Stampa la citazione
echo "Citazione: {$quote}\n";
echo "Personaggio: {$character}\n";
echo "Anime: {$anime}\n";


?>
<li><a href="homework1.php">Torna indietro</a></li>
</body>
</html>