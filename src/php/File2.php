<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>File2</title>
</head>
<body>
    <h1>File2</h1>

    <?php


    $tabelid = isset($_GET['tabelid']) ? $_GET['tabelid'] : 0;
    $id = isset($_GET['id']) ? $_GET['id'] : 0; 
    echo "value id" . $id;

    $immagini = [
        ['id' => 1, 'model' => 1, 'src' => '../assets/img/Diashow/P-1.jpg'],
        ['id' => 1, 'model' => 2, 'src' => '../assets/img/Diashow/P-2.jpg'],
        ['id' => 1, 'model' => 3, 'src' => '../assets/img/Diashow/P-3.jpg'],
        ['id' => 1, 'model' => 4, 'src' => '../assets/img/Diashow/P-4.jpg'],
        ['id' => 1, 'model' => 5, 'src' => '../assets/img/Diashow/P-5.jpg'],
        ['id' => 2, 'model' => 1, 'src' => '../assets/img/Diashow/Ar-1.jpg'],
        ['id' => 2, 'model' => 2, 'src' => '../assets/img/Diashow/Ar-2.jpg'],
        ['id' => 2, 'model' => 3, 'src' => '../assets/img/Diashow/Ar-3.jpg'],
        ['id' => 2, 'model' => 4, 'src' => '../assets/img/Diashow/Ar-4.jpg'],
        ['id' => 2, 'model' => 5, 'src' => '../assets/img/Diashow/Ar-5.jpg'],
        ['id' => 3, 'model' => 1, 'src' => '../assets/img/Diashow/Lmg-1.jpg'],
        ['id' => 3, 'model' => 2, 'src' => '../assets/img/Diashow/Lmg-2.jpg'],
        ['id' => 3, 'model' => 3, 'src' => '../assets/img/Diashow/Lmg-3.jpg'],
        ['id' => 3, 'model' => 4, 'src' => '../assets/img/Diashow/Lmg-4.jpg'],
        ['id' => 3, 'model' => 5, 'src' => '../assets/img/Diashow/Lmg-5.jpg'],
        ['id' => 4, 'model' => 1, 'src' => '../assets/img/Diashow/Fp-1.jpg'],
        ['id' => 4, 'model' => 2, 'src' => '../assets/img/Diashow/Fp-2.jpg'],
        ['id' => 4, 'model' => 3, 'src' => '../assets/img/Diashow/Fp-3.jpg'],
        ['id' => 4, 'model' => 4, 'src' => '../assets/img/Diashow/Fp-4.jpg'],
        ['id' => 4, 'model' => 5, 'src' => '../assets/img/Diashow/Fp-5.jpg'],
        ['id' => 5, 'model' => 1, 'src' => '../assets/img/Diashow/Smg-1.jpg'],
        ['id' => 5, 'model' => 2, 'src' => '../assets/img/Diashow/Smg-2.jpg'],
        ['id' => 5, 'model' => 3, 'src' => '../assets/img/Diashow/Smg-3.jpg'],
        ['id' => 5, 'model' => 4, 'src' => '../assets/img/Diashow/Smg-4.jpg'],
        ['id' => 5, 'model' => 5, 'src' => '../assets/img/Diashow/Smg-5.jpg'],
        ['id' => 6, 'model' => 1, 'src' => '../assets/img/Diashow/C-1.jpg'],
        ['id' => 6, 'model' => 2, 'src' => '../assets/img/Diashow/C-2.jpg'],
        ['id' => 6, 'model' => 3, 'src' => '../assets/img/Diashow/C-3.jpg'],
        ['id' => 6, 'model' => 4, 'src' => '../assets/img/Diashow/C-4.jpg'],
        ['id' => 6, 'model' => 5, 'src' => '../assets/img/Diashow/C-5.jpg'],
        ['id' => 7, 'model' => 1, 'src' => '../assets/img/Diashow/G-1.jpg'],
        ['id' => 7, 'model' => 2, 'src' => '../assets/img/Diashow/G-2.jpg'],
        ['id' => 7, 'model' => 3, 'src' => '../assets/img/Diashow/G-3.jpg'],
        ['id' => 7, 'model' => 4, 'src' => '../assets/img/Diashow/G-4.jpg'],
        ['id' => 7, 'model' => 5, 'src' => '../assets/img/Diashow/G-5.jpg'],
        ['id' => 8, 'model' => 1, 'src' => '../assets/img/Diashow/S-1.jpg'],
        ['id' => 8, 'model' => 2, 'src' => '../assets/img/Diashow/S-2.jpg'],
        ['id' => 8, 'model' => 3, 'src' => '../assets/img/Diashow/S-3.jpg'],
        ['id' => 8, 'model' => 4, 'src' => '../assets/img/Diashow/S-4.jpg'],
        ['id' => 8, 'model' => 5, 'src' => '../assets/img/Diashow/S-5.jpg'],
        ['id' => 9, 'model' => 1, 'src' => '../assets/img/Diashow/Lg-1.jpg'],
        ['id' => 9, 'model' => 2, 'src' => '../assets/img/Diashow/Lg-2.jpg'],
        ['id' => 9, 'model' => 3, 'src' => '../assets/img/Diashow/Lg-3.jpg'],
        ['id' => 9, 'model' => 4, 'src' => '../assets/img/Diashow/Lg-4.jpg'],
        ['id' => 9, 'model' => 5, 'src' => '../assets/img/Diashow/Lg-5.jpg'],
    ];
    
    function getImmagineSrc($id, $tabelid) {
        global $immagini;
    
        foreach ($immagini as $immagine) {
            if ($immagine['id'] == $tabelid && $immagine['model'] == $id) {
                return $immagine['src'];
            }
        }
    
        return ''; // Restituisci una stringa vuota se non trovi l'immagine corrispondente
    }

    $srcImmagine = getImmagineSrc($id, $tabelid);

    
    switch ($tabelid) {
        case '1':
            $sql = "SELECT * FROM hand_guns WHERE id = $id"; 
            break;
        case '2':
            $sql = "SELECT * FROM assault_rifles WHERE id = $id"; 
            break;
        case '3':
            $sql = "SELECT * FROM machine_guns WHERE id = $id"; 
            break;  
        case '4':
            $sql = "SELECT * FROM shotgun WHERE id = $id"; 
            break;   
        case '5':
            $sql = "SELECT * FROM assault_smg WHERE id = $id"; 
            break;   
        case '6':
            $sql = "SELECT * FROM white_weapons WHERE id = $id"; 
            break;   
        case '7':
            $sql = "SELECT * FROM granades WHERE id = $id"; 
            break;   
        case '8':
            $sql = "SELECT * FROM sniper_rifles WHERE id = $id"; 
            break;   
        case '9':
            $sql = "SELECT * FROM grenade_launcher WHERE id = $id"; 
            break;   
        default:
            break;
    }
    
    include "db_conn.php";

    if (!$conn) {
	    echo "Connection failed!";
    }

    // Execute SQL query with the submitted ID 
    //$sql = "SELECT * FROM pages WHERE id = $id";
    $result = $conn->query($sql);

    // Verify that the query was successful
    if ($result->num_rows > 0) {
    // Retrieve and and store in variables to use throughout the code
        while ($row = $result->fetch_assoc()) {
            $title = $row["marca"];
            $maincontent = $row["modello"];
            $secondarytext = $row["stato"];
            //$secondarycontent = $row["secondarycontent"];
    }
    } else {
    echo "No data found.";
    }
   
    // Close connection
    $conn->close();
    ?>

    
     <!-- HTML-Struktur mit den abgerufenen Daten -->
     <h2><?php echo $title; ?></h2>

    <div id="main-content">
        <p>Main Content: <?php echo $maincontent; ?></p>
    </div>
    <div id="main-content">
        <p>Main Content: <?php echo $secondarytext; ?></p>
    </div>

   
    <h2> OIABG</h2>
    <!-- command for call img-->
    <?php echo '<img src="' . $srcImmagine . '" alt="Immagine">'; ?>

    <?php echo '<img src="' . $srcImmagine . '" alt="Immagine">'; ?>

    

</body>
</html>
