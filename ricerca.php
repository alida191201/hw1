<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citazioni Anime</title>
    <link rel="stylesheet" type="text/css" href="ricerca.css">
</head>
<body>
<h1>Ricerca le citazioni dei tuoi anime preferiti per tenerle sempre impresse!</h1>
<?php

function searchAnimeQuotes($anime, $numQuotes) {
    $url = "https://animechan.vercel.app/api/quotes/anime?title=" . urlencode($anime);
    
    // Effettua la richiesta GET all'API
    $ch = curl_init($url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    
    // Decodifica la risposta JSON
    $result = json_decode($response, true);
    
    // Verifica se ci sono errori nella risposta
    if (isset($result['error'])) {
        echo "Si è verificato un errore: " . $result['error'];
        return;
    }
    
    // Filtra il numero di citazioni richieste
    $filteredQuotes = array_slice($result, 0, $numQuotes);
    
    // Stampa le citazioni trovate
    foreach ($filteredQuotes as $quote) {
        echo '<div class="quote-container">';
        echo "Citazione: " . $quote['quote'] . "\n";
        echo "Personaggio: " . $quote['character'] . "\n";
        echo "Anime: " . $quote['anime'] . "\n\n";
    }
}

// Gestione della richiesta di ricerca
if (isset($_GET['search'])) {
    $animeName = $_GET['search'];
    $numQuotes = 5; // Numero di citazioni richieste
    searchAnimeQuotes($animeName, $numQuotes);
}
?>

<!-- Form di ricerca -->
<form method="GET" action="">
    <input type="text" name="search" placeholder="Inserisci il nome di un anime" />
    <button type="submit">Cerca</button>
</form>

<li><a href="anime1.php">Torna alla home</a></li>
</body>
</html>
