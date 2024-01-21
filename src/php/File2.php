<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Meta tag -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />

    <meta name="description" content="ArsenalFront" />
    <meta name="author" content="Team ArsenalFront" />

    <!-- Meta tag og -->
    <meta property="og:title" content="ArsenalFront">
    <meta property="og:type" content="Weapons">
    <meta property="og:description" content="ArsenalFront">

    <!-- Generality -->
    <title>ArsenalFront</title>

    <!-- Favicon-->
    <link rel="icon" type="image/x-icon" href="assets/img/Head_Logo.jpg" />

    <!-- Font Awesome icons -->
    <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>

    <!-- Google fonts -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700" rel="stylesheet" type="text/css" />

    <!-- Stylesheet -->
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/search.css" />
    <link rel="stylesheet" href="../css/animatedfooter.css" />
</head>
<body>
    
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
    <div class="container">
        <!-- Icon Left -->
        <a class="navbar-brand" href="#page-top">
            <h2 class="section-heading text-uppercase">ArsenalFront</h2>
        </a>
        <!-- Button Mobile - menu -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
            Menu
            <i class="fas fa-bars ms-1"></i>
        </button>
        <!-- Nav site -->
        <div class="collapse navbar-collapse" id="navbarResponsive">
            <ul class="navbar-nav text-uppercase ms-auto py-0 py-lg-0">
                <li class="nav-item">     
                    <div class="search-container">
                        <form action="php/search.php" method="get">
                            <input type="text" name="query" placeholder="Cerca...">
                            <button type="submit">Cerca</button>
                        </form>
                    </div>
                </li>
                <li class="nav-item"><a class="nav-link" href="../index.php">Home</a></li>
                <li class="nav-item"><a class="nav-link" href="WeaponPage.php">Armi</a></li>
                <li class="nav-item"><a class="nav-link" href="loginpage.php">Login</a></li>
            </ul>
        </div>
    </div>
</nav>
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
            $sql = "SELECT * FROM Hand_Guns WHERE id = $id"; 
            break;
        case '2':
            $sql = "SELECT * FROM Assault_Rifles WHERE id = $id"; 
            break;
        case '3':
            $sql = "SELECT * FROM Machine_Guns WHERE id = $id"; 
            break;  
        case '4':
            $sql = "SELECT * FROM Shotgun WHERE id = $id"; 
            break;   
        case '5':
            $sql = "SELECT * FROM Assault_SMG WHERE id = $id"; 
            break;   
        case '6':
            $sql = "SELECT * FROM White_Weapons WHERE id = $id"; 
            break;   
        case '7':
            $sql = "SELECT * FROM Granades WHERE id = $id"; 
            break;   
        case '8':
            $sql = "SELECT * FROM Sniper_Rifles WHERE id = $id"; 
            break;   
        case '9':
            $sql = "SELECT * FROM Grenade_Launcher WHERE id = $id"; 
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

   
    <h2> OIABG</h2>
    <!-- command for call img-->
    <?php echo '<img src="' . $srcImmagine . '" alt="Immagine">'; ?>

    <?php echo '<img src="' . $srcImmagine . '" alt="Immagine">'; ?>

    

</body>
</html>
