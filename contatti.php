<!DOCTYPE html>
<html>
<head>
    <title>Contatti</title>
    <link rel="stylesheet" type="text/css" href="contatti.css">
</head>
<body>
    <header>
        <h1>Citazioni Anime</h1>
        <p>Scopri le migliori citazioni dai tuoi anime preferiti</p>
    </header>

    <nav>
        <ul>
            <li><a href="anime1.php">Home</a></li>
            
           
        </ul>
    </nav>

    <main>
        <section>
            <h2>Contattaci</h2>
            <?php
            // Verifica se è stato inviato un messaggio
            if (isset($_POST['submit'])) {
                // Recupera i dati del modulo
                $name = $_POST['name'];
                $email = $_POST['email'];
                $message = $_POST['message'];

                // Esempio di elaborazione del messaggio
                // In questo esempio, verrà solo stampato il messaggio inviato
                echo "<p>Grazie, $name, per averci contattato!</p>";
                echo "<p>Riceverai una risposta all'indirizzo email $email il prima possibile.</p>";
                echo "<p>Il tuo messaggio: $message</p>";
            } else {
                // Mostra il modulo di contatto
                ?>
                <form method="POST" action="risposta.php">
                    <label for="name">Nome:</label>
                    <input type="text" id="name" name="name" required><br>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required><br>

                    <label for="message">Messaggio:</label>
                    <textarea id="message" name="message" required></textarea><br>

                    <input type="submit" name="submit" value="Invia">
                </form>
            
                <?php
            }
            ?>
        </section>
    </main>

    <footer>
        <p>&copy; 2023 Citazioni Anime. Tutti i diritti riservati.</p>
    </footer>
</body>
</html>
