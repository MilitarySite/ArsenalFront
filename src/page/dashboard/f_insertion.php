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

        // Verifica della connessione
        if ($conn->connect_error) {
            die("Connessione al database fallita: " . $conn->connect_error);
        }

        // Se il modulo è stato inviato
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Recupera l'ID e la nuova email dalla form
            $id = $_POST['id'];
            $new_email = $_POST['new_email'];

            // Esegue la query di aggiornamento
            $sql = "UPDATE users SET email='$new_email' WHERE id=$id";

            if ($conn->query($sql) === TRUE) {
                echo "Record aggiornato con successo";
            } else {
                echo "Errore nell'aggiornamento del record: " . $conn->error;
            }
        }
    ?>

    <!-- Form HTML -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID Utente:</label>
        <input type="text" name="id" required>

        <label for="new_email">Nuova Email:</label>
        <input type="email" name="new_email" required>

        <input type="submit" value="Modifica">
    </form>

    <?php
        include "footer.php";
        include "script_footer.php";
    ?>
</body>

</html>