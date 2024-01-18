<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diashow</title>
    <link rel="stylesheet" href="../css/owl.carousel.min.css">
    <link rel="stylesheet" href="../css/owl.theme.default.min.css">
	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
    <link rel="stylesheet" href="../css/style.css">
    <link rel="stylesheet" href="../css/styles.css" />
    <link rel="stylesheet" href="../css/search.css" />
    <link rel="stylesheet" href="../css/animationguns.css" />
    <style>
        body, html {
            margin: 0;
            padding: 0;
            height: 100%;
            
        }

    </style>
</head>
<body>


<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav" >
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
                <ul class="navbar-nav text-uppercase ms-auto py-4 py-lg-0">
                    <li class="nav-item">     
                        <div class="search-container">
                            <form action="search.php" method="get">
                                <input type="text" name="query" placeholder="Cerca...">
                                <button type="submit">Cerca</button>
                            </form>
                        </div>
                    </li>
                    <li class="nav-item"><a class="nav-link" href="../index.html">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="../page/WeaponPage.html">Armi</a></li>
                    <li class="nav-item"><a class="nav-link" href="loginpage.php">Login</a></li>
                </ul>
            </div>
        </div>
    </nav>
<div id="diashow-container">
   
</div>

<?php
    $imgid = isset($_GET['imgid']) ? $_GET['imgid'] : 0; 
?>

<script src="../js/diashow.js"></script>
<script>
    var imgid = <?php echo $imgid; ?>;
    var immaginiId1 = getImmaginiById(imgid);
    var diashowContainer = document.getElementById('diashow-container');
    var currentIndex = 0;

    immaginiId1.forEach(function (img, index) {
        var imgElement = document.createElement('img');
        imgElement.src = img.src;
        diashowContainer.appendChild(imgElement);
    });

    function mostraImmagine(index) {
        var immagini = diashowContainer.getElementsByTagName('img');

        // Nasconde tutte le immagini
        for (var i = 0; i < immagini.length; i++) {
            immagini[i].style.display = 'none';
        }

        // Mostra l'immagine corrente
        immagini[index].style.display = 'block';
    }

    function cambiaImmagine() {
        currentIndex = (currentIndex + 1) % immaginiId1.length;
        mostraImmagine(currentIndex);
    }

    // Mostra la prima immagine
    mostraImmagine(currentIndex);

    // Imposta un intervallo per cambiare l'immagine ogni 2 secondi
    setInterval(cambiaImmagine, 5000);
</script>

</html>