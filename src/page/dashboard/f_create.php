<!doctype html>
<html class="no-js" lang="en">

    <?php
        include "head.php";
    ?>

<body>
    <?php
        include "nav.php";
    ?>

    <?php
        include "../../php/db_conn.php"

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupera l'ID, marca, modello e stato dal form
            $id = $_POST['id'];
            $new_marca = $_POST['new_marca'];
             $new_modello = $_POST['new_modello'];
              $new_stato = $_POST['new_stato'];
        
            // Esegue la query di aggiornamento
            $sql = "UPDATE users SET marca='$new_marca' WHERE id=$id";
                $sql = "UPDATE users SET modello='$new_modello' WHERE id=$id";
            $sql = "UPDATE users SET stato='$new_stato' WHERE id=$id";
        
        
            // Query di inserimento dei dati
            $sql = "INSERT INTO utenti (marca, modello, stato) VALUES ('$marca', '$modello', '$stato')";
        
            if ($conn->query($sql) === TRUE) {
                echo "Utente aggiunto con successo";
            } else {
                echo "Errore nell'aggiunta dell'utente: " . $conn->error;
            }
        
            // Chiudi la connessione al database
            $conn->close();
        } else {
            // Gestire il caso in cui il modulo non è stato inviato
            echo "Il modulo non è stato inviato correttamente.";
        }
    ?>

    <!-- Form HTML -->

    <h1>Aggiunta Utente</h1>

    <form action="processa_form.php" method="post">
        <label for="id">ID Arma:</label>
        <input type="text" name="id" required>

        <label for="new_marca">Marca:</label>
        <input type="marca" name="new_marca" required>

        <label for="new_modello">Modello:</label>
        <input type="modello" name="new_modello" required>

        <label for="new_stato">Stato:</label>
        <input type="stato" name="new_stato" required>


        <input type="submit" value="Aggiungi">
    </form>

    <?php
        include "footer.php";
        include "script_footer.php";
    ?>
</body>

</html>