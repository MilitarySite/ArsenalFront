<?php
// Connessione al database (se necessario)
// ...

// Verifica se il parametro di ricerca è presente
if (isset($_GET['query'])) {
    $search_query = $_GET['query'];

    // Esegui la tua logica di ricerca qui
    // ...

    // Esempio di ricerca su un array di parole chiave
    $keywords = array("Lorem", "ipsum", "dolor", "sit", "amet");
    $results = array();

    foreach ($keywords as $keyword) {
        if (stripos($keyword, $search_query) !== false) {
            $results[] = $keyword;
        }
    }

    // Mostra i risultati della ricerca
    echo "<h2>Risultati della ricerca:</h2>";
    if (empty($results)) {
        echo "Nessun risultato trovato.";
    } else {
        echo "<ul>";
        foreach ($results as $result) {
            echo "<li>$result</li>";
        }
        echo "</ul>";
    }
} else {
    echo "Nessun termine di ricerca specificato.";
}
?>
