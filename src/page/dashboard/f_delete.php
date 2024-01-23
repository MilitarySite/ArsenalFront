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

        // Se il modulo è stato inviato
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


            if ($conn->query($sql) === TRUE) {
                echo "Modifica aggiornata con successo";
            } else {
                echo "Errore nell'aggiornamento. " . $conn->error;
            }
        }
    ?>

    <!-- Form HTML -->

    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="id">ID Arma:</label>
        <input type="text" name="id" required>
        
        <input type="submit" value="Elimina">
    </form>

    <?php
        include "footer.php";
        include "script_footer.php";
    ?>
</body>

</html>