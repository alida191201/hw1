<!DOCTYPE html>
<html lang="en">
<head>
    <title>Citazioni Anime</title>
    <link rel="stylesheet" type="text/css" href="style2.css">
</head>

<body>
    <section>
<?php
// URL dell'API di AnimeChan per ottenere più citazioni
$url = 'https://animechan.vercel.app/api/quotes';

// Numero di citazioni da ottenere
$numQuotes = 6;

// Effettua la chiamata GET all'API
$response = file_get_contents($url . "?num=$numQuotes");

// Decodifica la risposta JSON in un array associativo
$data = json_decode($response, true);

// Stampa le citazioni
echo "<h2>Citazioni:</h2>";
foreach ($data as $quote) {
    $quoteText = $quote['quote'];
    $character = $quote['character'];
    $anime = $quote['anime'];

    echo "<p>$quoteText</p>";
    echo "<p>- $character ($anime)</p>";
    echo "<br>";
}
?>
<li><a href="homework1.php">Torna indietro</a></li>
</section>
</body>
</html>